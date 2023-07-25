@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.saidAboutUs.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.said-about-uss.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.saidAboutUs.fields.id') }}
                        </th>
                        <td>
                            {{ $saidAboutUss->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.saidAboutUs.fields.user') }}
                        </th>
                        <td>
                            {{ $saidAboutUss->user }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.saidAboutUs.fields.text') }}
                        </th>
                        <td>
                            {{ $saidAboutUss->text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.saidAboutUs.fields.photo') }}
                        </th>
                        <td>
                            @if($saidAboutUss->photo)
                                <a href="{{ $saidAboutUss->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $saidAboutUss->photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.said-about-uss.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection