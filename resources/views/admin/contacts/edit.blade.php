@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.contact.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.contacts.update", [$contact->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.contact.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $contact->name) }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.contact.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $contact->email) }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="message">{{ trans('cruds.contact.fields.message') }}</label>
                <input class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" type="text" name="message" id="message" value="{{ old('message', $contact->message) }}">
                @if($errors->has('message'))
                    <div class="invalid-feedback">
                        {{ $errors->first('message') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.message_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection