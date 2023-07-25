@extends('layouts.frontend')

@section('content')
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="img_about img_about2">
                        <img src="{{ asset('frontend/images/industry-realestate.jpg') }}" alt="">
                    </div>
                </div>

                <div class="col-12">
                    <div class="text_about">
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                            حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                            التطبيق.هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف
                            التى يولدها التطبيق.
                        </p>

                        <div class="col-6">
                            <div class="goald">
                                <img src="{{ asset('frontend/images/goal.png') }}" alt="">
                                <h3>الاهداف</h3>
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                                    العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد
                                    الحروف التى ي</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="vission">
                                <img src="{{ asset('frontend/images/vision.png') }}" alt="">
                                <h3>الرؤية</h3>
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                                    العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد
                                    الحروف التى ي</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
