

<a class="btn btn-xs btn-primary" href="{{ route('consultant.' . $crudRoutePart . '.show', $row->id) }}">
    {{ trans('global.view') }}
</a>
    
@if(!$row->contract_accept) 
    <form action="{{ route('consultant.' . $crudRoutePart . '.destroy', $row->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
    </form> 
@endif