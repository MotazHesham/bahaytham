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
            <h3 class="name_proj">اسم المشروع</h3>
            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد </p>

            <div class="slider_project">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/images/real-estate1.jpg') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/images/real-estate1.jpg') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/images/real-estate1.jpg') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/images/real-estate1.jpg') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/images/real-estate1.jpg') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/images/real-estate1.jpg') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/images/real-estate1.jpg') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/images/real-estate1.jpg') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/images/real-estate1.jpg') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/images/real-estate1.jpg') }}" />
                        </div>
                    </div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/images/real-estate1.jpg') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/images/real-estate1.jpg') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/images/real-estate1.jpg') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/images/real-estate1.jpg') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/images/real-estate1.jpg') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/images/real-estate1.jpg') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/images/real-estate1.jpg') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/images/real-estate1.jpg') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/images/real-estate1.jpg') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/images/real-estate1.jpg') }}" />
                        </div>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-3">
                    <div class="img_about">
                        <img src="{{ asset('frontend/images/about.jpg') }}" alt="">
                    </div>
                </div>

                <div class="col-9">
                    <div class="text_about">
                        <ul class="list_proj">
                            <li>المالك: شركة جنوب الوادي للأسمنت </li>
                            <li> العميل : اسم العميل</li>
                            <li>الموقع: المملكة العربية السعودية</li>
                            <li> مدة التنفيذ : 3 شهور</li>
                            <li>نطاق العمل: الأعمال المدنية</li>
                        </ul>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                            حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                            التطبيق.
                            إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص
                            لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث
                            يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.لمصممي المواقع على وجه
                            الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                            على صورة حقيقية لتصميم الموقع.لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان
                            أن يطلع على صورة حقيقية لتصميم الموقع.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
