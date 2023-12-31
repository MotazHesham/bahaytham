@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('cruds.saidAboutUs.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.said-about-uss.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="user">{{ trans('cruds.saidAboutUs.fields.user') }}</label>
                    <input class="form-control {{ $errors->has('user') ? 'is-invalid' : '' }}" type="text" name="user"
                        id="user" value="{{ old('user', '') }}" required>
                    @if ($errors->has('user'))
                        <div class="invalid-feedback">
                            {{ $errors->first('user') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.saidAboutUs.fields.user_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="text">{{ trans('cruds.saidAboutUs.fields.text') }}</label>
                    <textarea class="form-control {{ $errors->has('text') ? 'is-invalid' : '' }}" name="text" id="text" required>{{ old('text') }}</textarea>
                    @if ($errors->has('text'))
                        <div class="invalid-feedback">
                            {{ $errors->first('text') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.saidAboutUs.fields.text_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="photo">{{ trans('cruds.saidAboutUs.fields.photo') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('photo') ? 'is-invalid' : '' }}" id="photo-dropzone">
                    </div>
                    @if ($errors->has('photo'))
                        <div class="invalid-feedback">
                            {{ $errors->first('photo') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.saidAboutUs.fields.photo_helper') }}</span>
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
        Dropzone.options.photoDropzone = {
            url: '{{ route('admin.said-about-uss.storeMedia') }}',
            maxFilesize: 2, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 2,
                width: 4096,
                height: 4096
            },
            success: function(file, response) {
                $('form').find('input[name="photo"]').remove()
                $('form').append('<input type="hidden" name="photo" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="photo"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($saidAboutUs) && $saidAboutUs->photo)
                    var file = {!! json_encode($saidAboutUs->photo) !!}
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="photo" value="' + file.file_name + '">')
                    this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function(file, response) {
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
