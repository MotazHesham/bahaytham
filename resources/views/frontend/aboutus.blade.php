@extends('layouts.frontend')

@php
    $about_us = \App\Models\Aboutu::first();
@endphp

@section('content')
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="img_about img_about2">
                        <img src="{{ $about_us->aboutus_image ? $about_us->aboutus_image->getUrl() : '' }}" alt="">
                    </div>
                </div>

                <div class="col-12">
                    <div class="text_about">
                        <p>{{ $about_us->president_description }}</p>

                        <div class="col-6">
                            <div class="goald">
                                <img src="{{ asset('frontend/images/goal.png') }}" alt="">
                                <h3>الاهداف</h3>
                                <p>
                                    <?php echo nl2br($about_us->mission);  ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="vission">
                                <img src="{{ asset('frontend/images/vision.png') }}" alt="">
                                <h3>الرؤية</h3>
                                <p>
                                    <?php echo nl2br($about_us->vision);  ?>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
