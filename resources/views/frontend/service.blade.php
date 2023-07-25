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
                        <img src="{{ asset('frontend/images/about.jpg') }}" alt="">
                    </div>
                </div>

                <div class="col-9">
                    <div class="text_about">
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
                        <a class="reg_accept" href="#"> طلب خدمة</a>
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
                <div class="col-4">
                    <div class="serv">
                        <img src="{{ asset('frontend/images/icon.png') }}" alt="">
                        <h3>التصميم والهندسة المعمارية </h3>
                        <p>لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص</p>

                        <div class="hover_serv">
                            <div>
                                <p>لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="serv">
                        <img src="{{ asset('frontend/images/icon1.png') }}" alt="">
                        <h3>التصميم الداخلي والديكور </h3>
                        <p>لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص</p>

                        <div class="hover_serv">
                            <div>
                                <p>لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="serv">
                        <img src="{{ asset('frontend/images/icon2.png') }}" alt="">
                        <h3>الإشراف على التنفيذ </h3>
                        <p>لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص</p>

                        <div class="hover_serv">
                            <div>
                                <p>لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
