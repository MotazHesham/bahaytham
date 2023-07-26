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
                        <h1> طلب خدمة</h1>
                    </div>
                </div> <!-- End swiper -->

            </div>
        </div>
    </div><!-- End slider -->
    <section class="single">
        <div class="container">
            <div class="row">
                <div class="form_contact form_order">
                    <form action="         " method="POST">
                        @csrf
                        <label for="name">الاسم الاول
                            <input type="text" name='name' placeholder="الاسم الاول">
                        </label>

                        <label for="email"> البريد الالكتروني
                            <input type="email" name='email' placeholder=" البريد الالكتروني">
                        </label>

                        <label for="password">    كلمة المرور
                            <input type="password" name='password' placeholder=" كلمة المرور">
                        </label>

                         <label for="phone"> الهاتف
                            <input type="text" name='' placeholder="الهاتف">
                        </label>

                        <label for=""> نوع الخدمة
                            <select name="" id="">
                                <option value="">نوع الخدمة</option>
                                <option value="">نوع الخدمة</option>
                                <option value="">نوع الخدمة</option>
                                <option value="">نوع الخدمة</option>
                            </select>
                        </label>


                        <button type="submit">طلب الان</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
