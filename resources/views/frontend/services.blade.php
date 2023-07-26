@extends('layouts.frontend')

@section('content')



    <div class="slider_header">
        <!-- Swiper -->
        <div class="">
            <div class="">
                <div class="text-center">
                    <div class="img_bg2">
                         <img src="{{ asset('frontend/images/slider.jpg') }}"  alt="">
                    </div>

                    <div class="details_slider">
                        <h1>خدماتنا </h1>
                    </div>
                </div> <!-- End swiper -->

            </div>
        </div>
    </div><!-- End slider -->
    <section class="visi_misi">
        <div class="container">

            <div class="row">
                @foreach ($services as $service)
                <div class="col-4">
                    <div class="serv">
                        <img src="{{ $service->image ? $service->image->getUrl() : '' }}" alt="">
                        <h3>{{ $service->name }}</h3>
                        <p>{{ $service->short_description }}</p>

                        <div class="hover_serv">
                            <div>
                                <?php echo nl2br($service->description);  ?>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
