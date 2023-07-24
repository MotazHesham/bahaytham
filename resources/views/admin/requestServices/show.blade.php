@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.requestService.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.request-services.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.requestService.fields.id') }}
                        </th>
                        <td>
                            {{ $requestService->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestService.fields.contract') }}
                        </th>
                        <td>
                            @if($requestService->contract)
                                <a href="{{ $requestService->contract->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestService.fields.contract_accept') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $requestService->contract_accept ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestService.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\RequestService::STATUS_SELECT[$requestService->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestService.fields.cost_1_file') }}
                        </th>
                        <td>
                            @if($requestService->cost_1_file)
                                <a href="{{ $requestService->cost_1_file->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestService.fields.finished_files') }}
                        </th>
                        <td>
                            @foreach($requestService->finished_files as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestService.fields.finished_files_from_admin') }}
                        </th>
                        <td>
                            @foreach($requestService->finished_files_from_admin as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestService.fields.certificates') }}
                        </th>
                        <td>
                            @foreach($requestService->certificates as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestService.fields.stages') }}
                        </th>
                        <td>
                            {{ App\Models\RequestService::STAGES_SELECT[$requestService->stages] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestService.fields.start_date') }}
                        </th>
                        <td>
                            {{ $requestService->start_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestService.fields.end_date') }}
                        </th>
                        <td>
                            {{ $requestService->end_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestService.fields.done_time') }}
                        </th>
                        <td>
                            {{ $requestService->done_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestService.fields.duration_to_edit') }}
                        </th>
                        <td>
                            {{ $requestService->duration_to_edit }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestService.fields.user') }}
                        </th>
                        <td>
                            {{ $requestService->user->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestService.fields.service') }}
                        </th>
                        <td>
                            {{ $requestService->service->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestService.fields.consultant') }}
                        </th>
                        <td>
                            {{ $requestService->consultant->description ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.request-services.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection