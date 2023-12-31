@extends('layouts.admin')
@section('content')
    @can('aboutu_create')
        {{-- <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.aboutus.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.aboutu.title_singular') }}
                </a>
            </div>
        </div> --}}
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.aboutu.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-Aboutu">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.aboutu.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.aboutu.fields.site_name') }}
                            </th>
                            <th>
                                {{ trans('cruds.aboutu.fields.logo') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($aboutus as $key => $aboutu)
                            <tr data-entry-id="{{ $aboutu->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $aboutu->id ?? '' }}
                                </td>
                                <td>
                                    {{ $aboutu->site_name ?? '' }}
                                </td>
                                <td>
                                    @if ($aboutu->logo)
                                        <a href="{{ $aboutu->logo->getUrl() }}" target="_blank"
                                            style="display: inline-block">
                                            <img src="{{ $aboutu->logo->getUrl('thumb') }}">
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    @can('aboutu_show')
                                        <a class="btn btn-xs btn-primary"
                                            href="{{ route('admin.aboutus.show', $aboutu->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan

                                    @can('aboutu_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.aboutus.edit', $aboutu->id) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan 

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons) 
            $.extend(true, $.fn.dataTable.defaults, {
                orderCellsTop: true,
                order: [
                    [1, 'desc']
                ],
                pageLength: 100,
            });
            let table = $('.datatable-Aboutu:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        })
    </script>
@endsection
