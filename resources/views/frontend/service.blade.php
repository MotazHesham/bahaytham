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
                        <h1> تفاصيل الخدمة</h1>
                    </div>
                </div> <!-- End swiper -->

            </div>
        </div>
    </div><!-- End slider -->
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="img_about">
                        <img src="{{ $service->image ? $service->image->getUrl() : '' }}" alt="">
                    </div>
                </div>

                <div class="col-9">
                    <div class="text_about">
                        <h3>{{ $service->name }}</h3>
                        <p>
                            <?php echo nl2br($service->description); ?>
                        </p>
                        <a class="reg_accept" href="{{ route('frontend.request_service') }}"> طلب خدمة</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="visi_misi">
        <div class="container">
            <div class="title_sec text-center">
                <h1>خدمات اخرى</h1>
            </div>

            <div class="row">
                @foreach($services as $service)
                    <div class="col-4">
                        <div class="serv">
                            <img src="{{ $service->image ? $service->image->getUrl() : '' }}" alt="">
                            <h3>{{ $service->name }}</h3>
                            <p>{{ $service->short_description }}</p>

                            <div class="hover_serv">
                                <div>
                                    <a href="{{ route('frontend.service',$service->id) }}">التفاصيل</a>
                                </div>
                            </div>
                        </div>
                    </div>  
                @endforeach
            </div>
        </div>
    </section>
@endsection
