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
                            <p>{{ $about_us->phone_number }}</p>
                        </li>

                        <li>
                            <i class="fa-solid fa-envelope"></i>
                            <p>{{ $about_us->email }}</p>
                        </li>

                        <li>
                            <i class="fa-solid fa-location-dot"></i>
                            <p>{{ $about_us->address }}</p>
                        </li>
                    </div>
                </div>

                <div class="col-7">
                    <div class="form_contact">
                        <form action="{{ route('frontend.contact.store') }}" method="POST">
                            @csrf
                            <label for="name">الاسم الاول
                                <input type="text" id="name" name="name" placeholder="الاسم الاول">
                            </label>

                            <label for="email"> البريد الالكتروني
                                <input type="email" id="email" name="email" placeholder=" البريد الالكتروني">
                            </label>

                            <label for="message"> الرسالة
                                <textarea name="message" id="message" name="message" placeholder="الرسالة"></textarea>
                            </label>

                            <button type="submit">ارسال الان</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
