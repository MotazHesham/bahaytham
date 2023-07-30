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
                        <h1> تفاصيل المشروع </h1>
                    </div>
                </div> <!-- End swiper -->

            </div>
        </div>
    </div><!-- End slider -->
    <section class="single">
        <div class="container">
            <h3 class="name_proj">{{ $project->name }}</h3>
            <p><?php echo nl2br($project->description);  ?> </p>

            <div class="slider_project">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                    <div class="swiper-wrapper"> 
                        @foreach($project->images as $key => $media) 
                            <div class="swiper-slide">
                                <img src="{{ $media->getUrl() }}" />
                            </div> 
                        @endforeach
                    </div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach($project->images as $key => $media) 
                            <div class="swiper-slide">
                                <img src="{{ $media->getUrl() }}" />
                            </div> 
                        @endforeach 
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-3">
                    <div class="img_about">
                        <img src="{{ $project->main_image ? $project->main_image->getUrl() : '' }} " alt="">
                    </div>
                </div>

                <div class="col-9">
                    <div class="text_about">
                        <ul class="list_proj">
                            <li>المالك: {{ $project->owner }}</li>
                            <li> العميل: {{ $project->client }}</li>
                            <li>الموقع: {{ $project->address }}</li>
                            <li> مدة التنفيذ : {{ $project->duration }}</li>
                            <li>نطاق العمل: {{ $project->working_area }}</li>
                        </ul>
                        <p>
                            <?php echo nl2br($project->description);  ?>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
