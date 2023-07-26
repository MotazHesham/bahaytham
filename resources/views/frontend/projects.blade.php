@extends('layouts.frontend')

@section('content')
    <div class="slider_header">
        <!-- Swiper -->
        <div class="">
            <div class="">
                <div class="text-center">
                    <div class="img_bg2">
                        <img src="{{ asset('frontend/images/slider.jpg') }}" alt="">
                    </div>

                    <div class="details_slider">
                        <h1>المشاريع </h1>
                    </div>
                </div> <!-- End swiper -->

            </div>
        </div>
    </div><!-- End slider -->
    <section class="projects_single">
        <div class="container">
            <div class="row">
                @foreach ($projects as $project)
                <div class="col-4">
                    <div class="serv_sin">
                        <img src="{{ $project->main_image ? $project->main_image->getUrl() : '' }}" alt="">
                        <h3>{{ $project->name }}</h3>
                        <h3>{{ $project->owner }}</h3>
                        <p>{{ $project->address ?? '' }}</p>
                        <a href="{{ route('frontend.project') }}">التفاصيل</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
