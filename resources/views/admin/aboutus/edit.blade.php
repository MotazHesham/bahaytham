@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.aboutu.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.aboutus.update", [$aboutu->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="form-group col-md-3">
                    <label class="required" for="site_name">{{ trans('cruds.aboutu.fields.site_name') }}</label>
                    <input class="form-control {{ $errors->has('site_name') ? 'is-invalid' : '' }}" type="text" name="site_name" id="site_name" value="{{ old('site_name', $aboutu->site_name) }}" required>
                    @if($errors->has('site_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('site_name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutu.fields.site_name_helper') }}</span>
                </div>
                <div class="form-group col-md-3">
                    <label for="phone_number">{{ trans('cruds.aboutu.fields.phone_number') }}</label>
                    <input class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}" type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', $aboutu->phone_number) }}">
                    @if($errors->has('phone_number'))
                        <div class="invalid-feedback">
                            {{ $errors->first('phone_number') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutu.fields.phone_number_helper') }}</span>
                </div>
                <div class="form-group col-md-3">
                    <label for="email">{{ trans('cruds.aboutu.fields.email') }}</label>
                    <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $aboutu->email) }}">
                    @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutu.fields.email_helper') }}</span>
                </div>
                <div class="form-group col-md-3">
                    <label for="address">{{ trans('cruds.aboutu.fields.address') }}</label>
                    <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address', $aboutu->address) }}">
                    @if($errors->has('address'))
                        <div class="invalid-feedback">
                            {{ $errors->first('address') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutu.fields.address_helper') }}</span>
                </div>
                <div class="form-group col-md-4">
                    <label for="description">{{ trans('cruds.aboutu.fields.description') }}</label>
                    <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description', $aboutu->description) }}</textarea>
                    @if($errors->has('description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('description') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutu.fields.description_helper') }}</span>
                </div>
                <div class="form-group col-md-4">
                    <label for="mission">{{ trans('cruds.aboutu.fields.mission') }}</label> 
                    <textarea class="form-control {{ $errors->has('mission') ? 'is-invalid' : '' }}" name="mission" id="mission">{{ old('mission', $aboutu->mission) }}</textarea>

                    @if($errors->has('mission'))
                        <div class="invalid-feedback">
                            {{ $errors->first('mission') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutu.fields.mission_helper') }}</span>
                </div>
                <div class="form-group col-md-4">
                    <label for="vision">{{ trans('cruds.aboutu.fields.vision') }}</label>
                    <textarea class="form-control {{ $errors->has('vision') ? 'is-invalid' : '' }}" name="vision" id="vision">{{ old('vision', $aboutu->vision) }}</textarea> 
                    @if($errors->has('vision'))
                        <div class="invalid-feedback">
                            {{ $errors->first('vision') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutu.fields.vision_helper') }}</span>
                </div>
                <div class="form-group col-md-3">
                    <label class="required" for="logo">{{ trans('cruds.aboutu.fields.logo') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('logo') ? 'is-invalid' : '' }}" id="logo-dropzone">
                    </div>
                    @if($errors->has('logo'))
                        <div class="invalid-feedback">
                            {{ $errors->first('logo') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutu.fields.logo_helper') }}</span>
                </div>
                <div class="form-group col-md-3">
                    <label for="aboutus_image">{{ trans('cruds.aboutu.fields.aboutus_image') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('aboutus_image') ? 'is-invalid' : '' }}" id="aboutus_image-dropzone">
                    </div>
                    @if($errors->has('aboutus_image'))
                        <div class="invalid-feedback">
                            {{ $errors->first('aboutus_image') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutu.fields.aboutus_image_helper') }}</span>
                </div>
                <div class="form-group col-md-3">
                    <label for="president_image">{{ trans('cruds.aboutu.fields.president_image') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('president_image') ? 'is-invalid' : '' }}" id="president_image-dropzone">
                    </div>
                    @if($errors->has('president_image'))
                        <div class="invalid-feedback">
                            {{ $errors->first('president_image') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutu.fields.president_image_helper') }}</span>
                </div>
                <div class="form-group col-md-3">
                    <label for="president_description">{{ trans('cruds.aboutu.fields.president_description') }}</label>
                    <textarea class="form-control {{ $errors->has('president_description') ? 'is-invalid' : '' }}" name="president_description" id="president_description">{{ old('president_description', $aboutu->president_description) }}</textarea>
                    @if($errors->has('president_description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('president_description') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutu.fields.president_description_helper') }}</span>
                </div>
                <div class="form-group col-md-3">
                    <label for="author_seo">{{ trans('cruds.aboutu.fields.author_seo') }}</label>
                    <input class="form-control {{ $errors->has('author_seo') ? 'is-invalid' : '' }}" type="text" name="author_seo" id="author_seo" value="{{ old('author_seo', $aboutu->author_seo) }}">
                    @if($errors->has('author_seo'))
                        <div class="invalid-feedback">
                            {{ $errors->first('author_seo') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutu.fields.author_seo_helper') }}</span>
                </div>
                <div class="form-group col-md-3">
                    <label for="sitemap_link_seo">{{ trans('cruds.aboutu.fields.sitemap_link_seo') }}</label>
                    <input class="form-control {{ $errors->has('sitemap_link_seo') ? 'is-invalid' : '' }}" type="text" name="sitemap_link_seo" id="sitemap_link_seo" value="{{ old('sitemap_link_seo', $aboutu->sitemap_link_seo) }}">
                    @if($errors->has('sitemap_link_seo'))
                        <div class="invalid-feedback">
                            {{ $errors->first('sitemap_link_seo') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutu.fields.sitemap_link_seo_helper') }}</span>
                </div> 
                <div class="form-group col-md-3">
                    <label for="keywords_seo">{{ trans('cruds.aboutu.fields.keywords_seo') }}</label>
                    <input class="form-control {{ $errors->has('keywords_seo') ? 'is-invalid' : '' }}" type="text" name="keywords_seo[]" id="keywords_seo" value="{{ $aboutu->keywords_seo }}"  placeholder="add tags ..." data-role="tagsinput" required> 
                    @if($errors->has('keywords_seo'))
                        <div class="invalid-feedback">
                            {{ $errors->first('keywords_seo') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutu.fields.keywords_seo_helper') }}</span>
                </div>
                <div class="form-group col-md-3">
                    <label for="description_seo">{{ trans('cruds.aboutu.fields.description_seo') }}</label>
                    <textarea class="form-control {{ $errors->has('description_seo') ? 'is-invalid' : '' }}" name="description_seo" id="description_seo">{{ old('description_seo', $aboutu->description_seo) }}</textarea>
                    @if($errors->has('description_seo'))
                        <div class="invalid-feedback">
                            {{ $errors->first('description_seo') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.aboutu.fields.description_seo_helper') }}</span>
                </div> 
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
    Dropzone.options.logoDropzone = {
    url: '{{ route('admin.aboutus.storeMedia') }}',
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
    success: function (file, response) {
      $('form').find('input[name="logo"]').remove()
      $('form').append('<input type="hidden" name="logo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="logo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($aboutu) && $aboutu->logo)
      var file = {!! json_encode($aboutu->logo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="logo" value="' + file.file_name + '">')
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
    Dropzone.options.aboutusImageDropzone = {
    url: '{{ route('admin.aboutus.storeMedia') }}',
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
    success: function (file, response) {
      $('form').find('input[name="aboutus_image"]').remove()
      $('form').append('<input type="hidden" name="aboutus_image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="aboutus_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($aboutu) && $aboutu->aboutus_image)
      var file = {!! json_encode($aboutu->aboutus_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="aboutus_image" value="' + file.file_name + '">')
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
    Dropzone.options.presidentImageDropzone = {
    url: '{{ route('admin.aboutus.storeMedia') }}',
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
    success: function (file, response) {
      $('form').find('input[name="president_image"]').remove()
      $('form').append('<input type="hidden" name="president_image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="president_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($aboutu) && $aboutu->president_image)
      var file = {!! json_encode($aboutu->president_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="president_image" value="' + file.file_name + '">')
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
@endsection