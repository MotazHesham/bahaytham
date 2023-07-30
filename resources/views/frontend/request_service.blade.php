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
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <label for="name">الاسم الاول 
                            <input type="text" name="name" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus placeholder="الاسم الاول" value="{{ old('name', null) }}">
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </label>

                        <label for="email"> البريد الالكتروني 
                            <input type="email" name="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" required placeholder="البريد الالكتروني" value="{{ old('email', null) }}">
                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </label>

                        <label for="password"> كلمة المرور 
                            <input type="password" name="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="كلمة المرور">
                            @if($errors->has('password'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif

                        </label>
                        <label for="password"> تأكيد كلمة المرور 
                            <input type="password" name="password_confirmation" required placeholder="تأكيد كلمة المرور">

                        </label>

                        <label for="phone"> الهاتف 
                            <input type="text" name="phone_number" class="{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" required autofocus placeholder="الهاتف" value="{{ old('phone_number', null) }}">
                            @if($errors->has('phone_number'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('phone_number') }}
                                </div>
                            @endif

                        </label>

                        <label for=""> نوع الخدمة 
                            <select class="{{ $errors->has('service') ? 'is-invalid' : '' }}" name="service_id" id="service_id" required>
                                @foreach(\App\Models\Service::pluck('name', 'id')->prepend('اختر الخدمة', '') as $id => $entry) 
                                    <option value="{{ $id }}" {{ old('service_id') == $id ? 'selected' : '' }}>{{ $entry }}</option> 
                                @endforeach
                            </select>
                            @if($errors->has('service_id'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('service_id') }}
                                </div>
                            @endif
                        </label> 
                        <button type="submit">طلب الان</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
