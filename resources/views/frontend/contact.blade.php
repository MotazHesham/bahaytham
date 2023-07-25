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
                        <h1> تواصل معنا</h1>
                    </div>
                </div> <!-- End swiper -->

            </div>
        </div>
    </div><!-- End slider -->
    <section class="single">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="info_contactt">
                        <li>
                            <i class="fa-solid fa-mobile"></i>
                            <p>+966555339575 +966551724152</p>
                        </li>

                        <li>
                            <i class="fa-solid fa-envelope"></i>
                            <p>jeddah.fs@bahytham.com</p>
                        </li>

                        <li>
                            <i class="fa-solid fa-location-dot"></i>
                            <p>No.303 البغدادية الغربية‎ جدة 22234‎ Saudi Arabia</p>
                        </li>
                    </div>
                </div>

                <div class="col-7">
                    <div class="form_contact">
                        <form>
                            <label for="">الاسم الاول
                                <input type="text" placeholder="الاسم الاول">
                            </label>

                            <label for=""> البريد الالكتروني
                                <input type="text" placeholder=" البريد الالكتروني">
                            </label>

                            <label for=""> الرسالة
                                <textarea placeholder="الرسالة"></textarea>
                            </label>

                            <button>ارسال الان</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
