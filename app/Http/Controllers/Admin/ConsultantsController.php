<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyConsultantRequest;
use App\Http\Requests\StoreConsultantRequest;
use App\Http\Requests\UpdateConsultantRequest;
use App\Models\Consultant;
use App\Models\User;
use Gate;
use Alert;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ConsultantsController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('consultant_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Consultant::with(['user'])->select(sprintf('%s.*', (new Consultant)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'consultant_show';
                $editGate      = 'consultant_edit';
                $deleteGate    = 'consultant_delete';
                $crudRoutePart = 'consultants';

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
            $table->editColumn('photo', function ($row) {
                if ($photo = $row->photo) {
                    return sprintf(
                        '<a href="%s" target="_blank"><img src="%s" width="50px" height="50px"></a>',
                        $photo->url,
                        $photo->thumbnail
                    );
                }

                return '';
            });
            $table->editColumn('short_description', function ($row) {
                return $row->short_description ? $row->short_description : '';
            });
            $table->addColumn('user_name', function ($row) {
                return $row->user ? $row->user->name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'photo', 'user']);

            return $table->make(true);
        }

        return view('admin.consultants.index');
    }

    public function create()
    {
        abort_if(Gate::denies('consultant_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.consultants.create', compact('users'));
    }

    public function store(StoreConsultantRequest $request)
    {
        $consultant = Consultant::create($request->all());

        if ($request->input('photo', false)) {
            $consultant->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $consultant->id]);
        }
        Alert::success(trans('flash.store.success_title'),trans('flash.store.success_body'));
        return redirect()->route('admin.consultants.index');
    }

    public function edit(Consultant $consultant)
    {
        abort_if(Gate::denies('consultant_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $consultant->load('user');

        return view('admin.consultants.edit', compact('consultant', 'users'));
    }

    public function update(UpdateConsultantRequest $request, Consultant $consultant)
    {
        $consultant->update($request->all());

        if ($request->input('photo', false)) {
            if (! $consultant->photo || $request->input('photo') !== $consultant->photo->file_name) {
                if ($consultant->photo) {
                    $consultant->photo->delete();
                }
                $consultant->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
            }
        } elseif ($consultant->photo) {
            $consultant->photo->delete();
        }
        Alert::success(trans('flash.update.success_title'),trans('flash.update.success_body'));
        return redirect()->route('admin.consultants.index');
    }

    public function show(Consultant $consultant)
    {
        abort_if(Gate::denies('consultant_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $consultant->load('user');

        return view('admin.consultants.show', compact('consultant'));
    }

    public function destroy(Consultant $consultant)
    {
        abort_if(Gate::denies('consultant_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $consultant->delete();
        Alert::success(trans('flash.destroy.success_title'),trans('flash.destroy.success_body'));
        return back();
    }

    public function massDestroy(MassDestroyConsultantRequest $request)
    {
        $consultants = Consultant::find(request('ids'));

        foreach ($consultants as $consultant) {
            $consultant->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('consultant_create') && Gate::denies('consultant_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Consultant();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
