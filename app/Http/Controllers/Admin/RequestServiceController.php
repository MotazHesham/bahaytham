<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyRequestServiceRequest;
use App\Http\Requests\StoreRequestServiceRequest;
use App\Http\Requests\UpdateRequestServiceRequest;
use App\Models\Consultant;
use App\Models\RequestService;
use App\Models\Service;
use App\Models\User;
use Gate;
use Alert;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class RequestServiceController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('request_service_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = RequestService::with(['user', 'service', 'consultant'])->select(sprintf('%s.*', (new RequestService)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'request_service_show';
                $editGate      = 'request_service_edit';
                $deleteGate    = 'request_service_delete';
                $crudRoutePart = 'request-services';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('contract', function ($row) {
                return $row->contract ? '<a href="' . $row->contract->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
            });
            $table->editColumn('stages', function ($row) {
                return $row->stages ? RequestService::STAGES_SELECT[$row->stages] : '';
            });
            $table->addColumn('user_name', function ($row) {
                return $row->user ? $row->user->name : '';
            });

            $table->addColumn('service_name', function ($row) {
                return $row->service ? $row->service->name : '';
            });

            $table->addColumn('consultant_description', function ($row) {
                return $row->consultant ? $row->consultant->description : '';
            });

            $table->editColumn('consultant.description', function ($row) {
                return $row->consultant ? (is_string($row->consultant) ? $row->consultant : $row->consultant->description) : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'contract', 'user', 'service', 'consultant']);

            return $table->make(true);
        }

        return view('admin.requestServices.index');
    }

    public function create()
    {
        abort_if(Gate::denies('request_service_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $services = Service::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $consultants = Consultant::pluck('description', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.requestServices.create', compact('consultants', 'services', 'users'));
    }

    public function store(StoreRequestServiceRequest $request)
    {
        $requestService = RequestService::create($request->all());

        if ($request->input('contract', false)) {
            $requestService->addMedia(storage_path('tmp/uploads/' . basename($request->input('contract'))))->toMediaCollection('contract');
        }

        if ($request->input('cost_1_file', false)) {
            $requestService->addMedia(storage_path('tmp/uploads/' . basename($request->input('cost_1_file'))))->toMediaCollection('cost_1_file');
        }

        foreach ($request->input('finished_files', []) as $file) {
            $requestService->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('finished_files');
        }

        foreach ($request->input('finished_files_from_admin', []) as $file) {
            $requestService->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('finished_files_from_admin');
        }

        foreach ($request->input('certificates', []) as $file) {
            $requestService->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('certificates');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $requestService->id]);
        }
        Alert::success(trans('flash.store.success_title'),trans('flash.store.success_body'));
        return redirect()->route('admin.request-services.index');
    }

    public function edit(RequestService $requestService)
    {
        abort_if(Gate::denies('request_service_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $services = Service::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $consultants = Consultant::pluck('description', 'id')->prepend(trans('global.pleaseSelect'), '');

        $requestService->load('user', 'service', 'consultant');

        return view('admin.requestServices.edit', compact('consultants', 'requestService', 'services', 'users'));
    }

    public function update(UpdateRequestServiceRequest $request, RequestService $requestService)
    {
        $requestService->update($request->all());

        if ($request->input('contract', false)) {
            if (! $requestService->contract || $request->input('contract') !== $requestService->contract->file_name) {
                if ($requestService->contract) {
                    $requestService->contract->delete();
                }
                $requestService->addMedia(storage_path('tmp/uploads/' . basename($request->input('contract'))))->toMediaCollection('contract');
            }
        } elseif ($requestService->contract) {
            $requestService->contract->delete();
        }

        if ($request->input('cost_1_file', false)) {
            if (! $requestService->cost_1_file || $request->input('cost_1_file') !== $requestService->cost_1_file->file_name) {
                if ($requestService->cost_1_file) {
                    $requestService->cost_1_file->delete();
                }
                $requestService->addMedia(storage_path('tmp/uploads/' . basename($request->input('cost_1_file'))))->toMediaCollection('cost_1_file');
            }
        } elseif ($requestService->cost_1_file) {
            $requestService->cost_1_file->delete();
        }

        if (count($requestService->finished_files) > 0) {
            foreach ($requestService->finished_files as $media) {
                if (! in_array($media->file_name, $request->input('finished_files', []))) {
                    $media->delete();
                }
            }
        }
        $media = $requestService->finished_files->pluck('file_name')->toArray();
        foreach ($request->input('finished_files', []) as $file) {
            if (count($media) === 0 || ! in_array($file, $media)) {
                $requestService->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('finished_files');
            }
        }

        if (count($requestService->finished_files_from_admin) > 0) {
            foreach ($requestService->finished_files_from_admin as $media) {
                if (! in_array($media->file_name, $request->input('finished_files_from_admin', []))) {
                    $media->delete();
                }
            }
        }
        $media = $requestService->finished_files_from_admin->pluck('file_name')->toArray();
        foreach ($request->input('finished_files_from_admin', []) as $file) {
            if (count($media) === 0 || ! in_array($file, $media)) {
                $requestService->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('finished_files_from_admin');
            }
        }

        if (count($requestService->certificates) > 0) {
            foreach ($requestService->certificates as $media) {
                if (! in_array($media->file_name, $request->input('certificates', []))) {
                    $media->delete();
                }
            }
        }
        $media = $requestService->certificates->pluck('file_name')->toArray();
        foreach ($request->input('certificates', []) as $file) {
            if (count($media) === 0 || ! in_array($file, $media)) {
                $requestService->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('certificates');
            }
        }
        Alert::success(trans('flash.update.success_title'),trans('flash.stupdateore.success_body'));
        return redirect()->route('admin.request-services.index');
    }

    public function show(RequestService $requestService)
    {
        abort_if(Gate::denies('request_service_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $requestService->load('user', 'service', 'consultant');

        return view('admin.requestServices.show', compact('requestService'));
    }

    public function destroy(RequestService $requestService)
    {
        abort_if(Gate::denies('request_service_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $requestService->delete();
        Alert::success(trans('flash.destroy.success_title'),trans('flash.destroy.success_body'));
        return back();
    }

    public function massDestroy(MassDestroyRequestServiceRequest $request)
    {
        $requestServices = RequestService::find(request('ids'));

        foreach ($requestServices as $requestService) {
            $requestService->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('request_service_create') && Gate::denies('request_service_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new RequestService();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
