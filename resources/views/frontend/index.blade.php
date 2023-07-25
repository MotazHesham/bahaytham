@extends('layouts.frontend')
@section('content')

    <div class="slider_header">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper"> 
                @foreach($sliders as $slider)
                    <div class="swiper-slide text-center">
                        <div class="img_bg">
                            <img src="{{ $slider->image ? $slider->image->getUrl() : '' }}" alt="">
                        </div> 
                        

                        <div class="details_slider">
                            <h1>{{ $slider->name ?? '' }}</h1>

                            <p>{{ $slider->details ?? '' }}</p>
                            <div class="alink_top">
                                <a href="{{ $slider->link ?? '' }}">المزيد</a>
                                <a href="{{ route('frontend.aboutus') }}">من نحن</a>
                            </div>

                        </div>
                    </div> <!-- End swiper --> 
                @endforeach
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div><!-- End slider -->

    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="img_about">
                        <img src="{{ $about_us->president_image ? $about_us->president_image->getUrl() : '' }}" alt="">
                    </div>
                </div>

                <div class="col-9">
                    <div class="text_about">
                        <h2> كلمة رئيس مجلس الإدارة</h2>
                        <p>
                            <?php echo nl2br($about_us->president_description);  ?> 
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="visi_misi">
        <div class="container">
            <div class="title_sec text-center">
                <h1>خدماتنا</h1>
            </div>

            <div class="row">
                @foreach($services as $service)
                <div class="col-4">
                    <div class="serv"> 
                        <img src="{{ $service->image ? $service->image->getUrl() : '' }}" alt="">
                        <h3>{{ $service->name }}</h3>
                        <?php echo nl2br($service->short_description);  ?> 

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

    <section class="projects">
        <div class="container">
            <div class="po_re">
                <h1 class="title_proj">مشاريعنا</h1>

                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($projects as $project)
                            <div class="swiper-slide">
                                <div class="col-4">
                                    <img class="img_proj" src="{{ $project->main_image ? $project->main_image->getUrl('preview2') : '' }}" alt="">
                                </div>

                                <div class="col-8">
                                    <div class="details_pro">
                                        <h2>{{ $project->name }}</h2>
                                        <?php echo nl2br($project->description);  ?> 
                                    </div>
                                </div>
                            </div> 
                        @endforeach
                    </div>

                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                </div>
            </div>
        </div>
    </section>

    <section class="said_about">
        <div class="container">
            <div class="title_said_ab">
                <h1>قالوا عنا</h1> 
            </div>


            <div class="swiper-container2">
                <div class="swiper-wrapper">
                    @foreach($said_about_us as $raw)
                    <div class="swiper-slide">
                        <div class="sa_abou">
                            <img src="{{ $raw->photo ? $raw->photo->getUrl() : '' }}" alt="">
                            <p><?php echo nl2br($raw->text);  ?> </p>
                        </div>
                    </div> 
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>

    <section class="partiner">
        <div class="container">
            <div class="title_sec text-center">
                <h1>شركاؤنا في النجاح </h1>
            </div>

            <div class="swiper-container3">
                <div class="swiper-wrapper">
                    @foreach($partners as $partner)
                        <div class="swiper-slide">
                            <div class="img_partiner">
                                <img src="{{ $partner->image ? $partner->image->getUrl() : '' }}" alt="">
                            </div>
                        </div> 
                    @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
@endsection
