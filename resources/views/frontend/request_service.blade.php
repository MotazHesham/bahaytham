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
                    <form>
                        <label for="">الاسم الاول
                            <input type="text" placeholder="الاسم الاول">
                        </label>

                        <label for=""> البريد الالكتروني
                            <input type="email" placeholder=" البريد الالكتروني">
                        </label>
                        <label for="">    كلمة المرور
                            <input type="password" placeholder=" كلمة المرور">
                        </label>

                        <label for=""> الهاتف
                            <input type="text" placeholder="  الهاتف">
                        </label>

                        <label for=""> نوع الخدمة
                            <select name="" id="">
                                <option value="">نوع الخدمة</option>
                                <option value="">نوع الخدمة</option>
                                <option value="">نوع الخدمة</option>
                                <option value="">نوع الخدمة</option>
                            </select>
                        </label>


                        <button>طلب الان</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
