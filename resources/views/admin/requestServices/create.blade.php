@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.requestService.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.request-services.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>{{ trans('cruds.requestService.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\RequestService::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', 'pending') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.requestService.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="cost_1_file">{{ trans('cruds.requestService.fields.cost_1_file') }}</label>
                <div class="needsclick dropzone {{ $errors->has('cost_1_file') ? 'is-invalid' : '' }}" id="cost_1_file-dropzone">
                </div>
                @if($errors->has('cost_1_file'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cost_1_file') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.requestService.fields.cost_1_file_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="finished_files">{{ trans('cruds.requestService.fields.finished_files') }}</label>
                <div class="needsclick dropzone {{ $errors->has('finished_files') ? 'is-invalid' : '' }}" id="finished_files-dropzone">
                </div>
                @if($errors->has('finished_files'))
                    <div class="invalid-feedback">
                        {{ $errors->first('finished_files') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.requestService.fields.finished_files_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="finished_files_from_admin">{{ trans('cruds.requestService.fields.finished_files_from_admin') }}</label>
                <div class="needsclick dropzone {{ $errors->has('finished_files_from_admin') ? 'is-invalid' : '' }}" id="finished_files_from_admin-dropzone">
                </div>
                @if($errors->has('finished_files_from_admin'))
                    <div class="invalid-feedback">
                        {{ $errors->first('finished_files_from_admin') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.requestService.fields.finished_files_from_admin_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="certificates">{{ trans('cruds.requestService.fields.certificates') }}</label>
                <div class="needsclick dropzone {{ $errors->has('certificates') ? 'is-invalid' : '' }}" id="certificates-dropzone">
                </div>
                @if($errors->has('certificates'))
                    <div class="invalid-feedback">
                        {{ $errors->first('certificates') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.requestService.fields.certificates_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.requestService.fields.stages') }}</label>
                <select class="form-control {{ $errors->has('stages') ? 'is-invalid' : '' }}" name="stages" id="stages">
                    <option value disabled {{ old('stages', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\RequestService::STAGES_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('stages', 'contract') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('stages'))
                    <div class="invalid-feedback">
                        {{ $errors->first('stages') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.requestService.fields.stages_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="start_date">{{ trans('cruds.requestService.fields.start_date') }}</label>
                <input class="form-control date {{ $errors->has('start_date') ? 'is-invalid' : '' }}" type="text" name="start_date" id="start_date" value="{{ old('start_date') }}">
                @if($errors->has('start_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('start_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.requestService.fields.start_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="end_date">{{ trans('cruds.requestService.fields.end_date') }}</label>
                <input class="form-control date {{ $errors->has('end_date') ? 'is-invalid' : '' }}" type="text" name="end_date" id="end_date" value="{{ old('end_date') }}">
                @if($errors->has('end_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('end_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.requestService.fields.end_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="done_time">{{ trans('cruds.requestService.fields.done_time') }}</label>
                <input class="form-control datetime {{ $errors->has('done_time') ? 'is-invalid' : '' }}" type="text" name="done_time" id="done_time" value="{{ old('done_time') }}">
                @if($errors->has('done_time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('done_time') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.requestService.fields.done_time_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="duration_to_edit">{{ trans('cruds.requestService.fields.duration_to_edit') }}</label>
                <input class="form-control {{ $errors->has('duration_to_edit') ? 'is-invalid' : '' }}" type="text" name="duration_to_edit" id="duration_to_edit" value="{{ old('duration_to_edit', '') }}">
                @if($errors->has('duration_to_edit'))
                    <div class="invalid-feedback">
                        {{ $errors->first('duration_to_edit') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.requestService.fields.duration_to_edit_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="user_id">{{ trans('cruds.requestService.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id" required>
                    @foreach($users as $id => $entry)
                        <option value="{{ $id }}" {{ old('user_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.requestService.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="service_id">{{ trans('cruds.requestService.fields.service') }}</label>
                <select class="form-control select2 {{ $errors->has('service') ? 'is-invalid' : '' }}" name="service_id" id="service_id" required>
                    @foreach($services as $id => $entry)
                        <option value="{{ $id }}" {{ old('service_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('service'))
                    <div class="invalid-feedback">
                        {{ $errors->first('service') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.requestService.fields.service_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="consultant_id">{{ trans('cruds.requestService.fields.consultant') }}</label>
                <select class="form-control select2 {{ $errors->has('consultant') ? 'is-invalid' : '' }}" name="consultant_id" id="consultant_id" required>
                    @foreach($consultants as $id => $entry)
                        <option value="{{ $id }}" {{ old('consultant_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('consultant'))
                    <div class="invalid-feedback">
                        {{ $errors->first('consultant') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.requestService.fields.consultant_helper') }}</span>
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

@section('scripts')
<script>
    Dropzone.options.cost1FileDropzone = {
    url: '{{ route('admin.request-services.storeMedia') }}',
    maxFilesize: 2, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2
    },
    success: function (file, response) {
      $('form').find('input[name="cost_1_file"]').remove()
      $('form').append('<input type="hidden" name="cost_1_file" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="cost_1_file"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($requestService) && $requestService->cost_1_file)
      var file = {!! json_encode($requestService->cost_1_file) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="cost_1_file" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
<script>
    var uploadedFinishedFilesMap = {}
Dropzone.options.finishedFilesDropzone = {
    url: '{{ route('admin.request-services.storeMedia') }}',
    maxFilesize: 2, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="finished_files[]" value="' + response.name + '">')
      uploadedFinishedFilesMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedFinishedFilesMap[file.name]
      }
      $('form').find('input[name="finished_files[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($requestService) && $requestService->finished_files)
          var files =
            {!! json_encode($requestService->finished_files) !!}
              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="finished_files[]" value="' + file.file_name + '">')
            }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
<script>
    var uploadedFinishedFilesFromAdminMap = {}
Dropzone.options.finishedFilesFromAdminDropzone = {
    url: '{{ route('admin.request-services.storeMedia') }}',
    maxFilesize: 2, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="finished_files_from_admin[]" value="' + response.name + '">')
      uploadedFinishedFilesFromAdminMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedFinishedFilesFromAdminMap[file.name]
      }
      $('form').find('input[name="finished_files_from_admin[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($requestService) && $requestService->finished_files_from_admin)
          var files =
            {!! json_encode($requestService->finished_files_from_admin) !!}
              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="finished_files_from_admin[]" value="' + file.file_name + '">')
            }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
<script>
    var uploadedCertificatesMap = {}
Dropzone.options.certificatesDropzone = {
    url: '{{ route('admin.request-services.storeMedia') }}',
    maxFilesize: 2, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="certificates[]" value="' + response.name + '">')
      uploadedCertificatesMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedCertificatesMap[file.name]
      }
      $('form').find('input[name="certificates[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($requestService) && $requestService->certificates)
          var files =
            {!! json_encode($requestService->certificates) !!}
              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="certificates[]" value="' + file.file_name + '">')
            }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection