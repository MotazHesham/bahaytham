@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.aboutu.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.aboutus.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutu.fields.id') }}
                        </th>
                        <td>
                            {{ $aboutu->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutu.fields.site_name') }}
                        </th>
                        <td>
                            {{ $aboutu->site_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutu.fields.logo') }}
                        </th>
                        <td>
                            @if($aboutu->logo)
                                <a href="{{ $aboutu->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $aboutu->logo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutu.fields.description') }}
                        </th>
                        <td>
                            {{ $aboutu->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutu.fields.mission') }}
                        </th>
                        <td>
                            {{ $aboutu->mission }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutu.fields.vision') }}
                        </th>
                        <td>
                            {{ $aboutu->vision }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutu.fields.aboutus_image') }}
                        </th>
                        <td>
                            @if($aboutu->aboutus_image)
                                <a href="{{ $aboutu->aboutus_image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $aboutu->aboutus_image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutu.fields.president_image') }}
                        </th>
                        <td>
                            @if($aboutu->president_image)
                                <a href="{{ $aboutu->president_image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $aboutu->president_image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutu.fields.president_description') }}
                        </th>
                        <td>
                            {{ $aboutu->president_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutu.fields.address') }}
                        </th>
                        <td>
                            {{ $aboutu->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutu.fields.phone_number') }}
                        </th>
                        <td>
                            {{ $aboutu->phone_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutu.fields.email') }}
                        </th>
                        <td>
                            {{ $aboutu->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutu.fields.author_seo') }}
                        </th>
                        <td>
                            {{ $aboutu->author_seo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutu.fields.sitemap_link_seo') }}
                        </th>
                        <td>
                            {{ $aboutu->sitemap_link_seo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutu.fields.keywords_seo') }}
                        </th>
                        <td>
                            {{ $aboutu->keywords_seo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutu.fields.description_seo') }}
                        </th>
                        <td>
                            {{ $aboutu->description_seo }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.aboutus.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection