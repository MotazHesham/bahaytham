<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyAboutuRequest;
use App\Http\Requests\StoreAboutuRequest;
use App\Http\Requests\UpdateAboutuRequest;
use App\Models\Aboutu;
use Gate;
use Alert;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class AboutusController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('aboutu_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $aboutus = Aboutu::with(['media'])->get();

        return view('admin.aboutus.index', compact('aboutus'));
    }

    public function create()
    {
        abort_if(Gate::denies('aboutu_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // return view('admin.aboutus.create');
    }

    public function store(StoreAboutuRequest $request)
    {
        $aboutu = Aboutu::create($request->all());

        if ($request->input('logo', false)) {
            $aboutu->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
        }

        if ($request->input('aboutus_image', false)) {
            $aboutu->addMedia(storage_path('tmp/uploads/' . basename($request->input('aboutus_image'))))->toMediaCollection('aboutus_image');
        }

        if ($request->input('president_image', false)) {
            $aboutu->addMedia(storage_path('tmp/uploads/' . basename($request->input('president_image'))))->toMediaCollection('president_image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $aboutu->id]);
        }
        Alert::success(trans('flash.store.success_title'),trans('flash.store.success_body'));
        return redirect()->route('admin.aboutus.index');
    }

    public function edit(Aboutu $aboutu)
    {
        abort_if(Gate::denies('aboutu_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.aboutus.edit', compact('aboutu'));
    }

    public function update(UpdateAboutuRequest $request, Aboutu $aboutu)
    {
        $validated_request = $request->all();

        $validated_request['keywords_seo'] = implode('|',$request->keywords_seo);   
        $aboutu->update($validated_request);

        if ($request->input('logo', false)) {
            if (! $aboutu->logo || $request->input('logo') !== $aboutu->logo->file_name) {
                if ($aboutu->logo) {
                    $aboutu->logo->delete();
                }
                $aboutu->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
            }
        } elseif ($aboutu->logo) {
            $aboutu->logo->delete();
        }

        if ($request->input('aboutus_image', false)) {
            if (! $aboutu->aboutus_image || $request->input('aboutus_image') !== $aboutu->aboutus_image->file_name) {
                if ($aboutu->aboutus_image) {
                    $aboutu->aboutus_image->delete();
                }
                $aboutu->addMedia(storage_path('tmp/uploads/' . basename($request->input('aboutus_image'))))->toMediaCollection('aboutus_image');
            }
        } elseif ($aboutu->aboutus_image) {
            $aboutu->aboutus_image->delete();
        }

        if ($request->input('president_image', false)) {
            if (! $aboutu->president_image || $request->input('president_image') !== $aboutu->president_image->file_name) {
                if ($aboutu->president_image) {
                    $aboutu->president_image->delete();
                }
                $aboutu->addMedia(storage_path('tmp/uploads/' . basename($request->input('president_image'))))->toMediaCollection('president_image');
            }
        } elseif ($aboutu->president_image) {
            $aboutu->president_image->delete();
        }
        Alert::success(trans('flash.update.success_title'),trans('flash.update.success_body'));
        return redirect()->route('admin.aboutus.index');
    }

    public function show(Aboutu $aboutu)
    {
        abort_if(Gate::denies('aboutu_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.aboutus.show', compact('aboutu'));
    }

    public function destroy(Aboutu $aboutu)
    {
        abort_if(Gate::denies('aboutu_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $aboutu->delete();
        Alert::success(trans('flash.destroy.success_title'),trans('flash.destroy.success_body'));
        return back();
    }

    public function massDestroy(MassDestroyAboutuRequest $request)
    {
        $aboutus = Aboutu::find(request('ids'));

        foreach ($aboutus as $aboutu) {
            $aboutu->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('aboutu_create') && Gate::denies('aboutu_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Aboutu();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
