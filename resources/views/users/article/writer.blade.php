@extends('templates.fa')
@section('content')
    <div class="container form-group">
        <!-- Start Login Area -->
        <div class="login-section ptb-100">

            <!-- Start Signup Area -->
            <div class="signup-section ptb-100">
                <div class="container">
                    <div class="signup-form" style="max-width: 800px;">
                        <h3>تعریف نویسندگان</h3>


                        <div class="container mt-5">
                            <form action="" method="POST">
                                @csrf
                                <input type="hidden" name="ArticleID" value="{{ $article->id }}" />
                                <div class="row">
                                    <!-- Input fields -->

                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">{{ __('ایمیل') }}</label>
                                        <div class="input-group">
                                            <input name="email" type="text" class="form-control" id="writerEmail">
                                            <a href="javascript:writerCheck()" id="checkEmail" class="btn btn-primary">بررسی</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Name_fa" class="form-label">{{ __('نام') }}</label>
                                        <input name="Name_fa" type="text" class="form-control" id="writerName_fa">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Family_fa" class="form-label">{{ __('نام خانوادگی') }}</label>
                                        <input name="Family_fa" type="text" class="form-control" id="writerFamily_fa">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Name" class="form-label">{{ __('Name') }}</label>
                                        <input name="Name" type="text" class="form-control" id="writerName">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Family" class="form-label">{{ __('Last Name') }}</label>
                                        <input name="Family" type="text" class="form-control" id="writerFamily">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="MobileNumber" class="form-label">{{ __('موبایل') }}</label>
                                        <input name="MobileNumber" type="text" class="form-control" id="writerMobileNumber">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="PhoneNumber" class="form-label">{{ __('تلفن') }}</label>
                                        <input name="PhoneNumber" type="text" class="form-control" id="writerPhoneNumber">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Country" class="form-label">{{ __('کشور') }}</label>
                                        <input name="Country" type="text" class="form-control" id="writerCountry">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="City_fa" class="form-label">{{ __('شهر') }}</label>
                                        <input name="City_fa" type="text" class="form-control" id="writerCity_fa">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="City" class="form-label">{{ __('City') }}</label>
                                        <input name="City" type="text" class="form-control" id="writerCity">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Edu" class="form-label">{{ __('مقطع تحصیلی') }}</label>
                                        <input name="Edu" type="text" class="form-control" id="writerEdu">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Rank" class="form-label">{{ __('رتبه علمی') }}</label>
                                        <input name="Rank" type="text" class="form-control" id="writerRank">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Org" class="form-label">{{ __('وابستگی سازمانی') }}</label>
                                        <input name="Org" type="text" class="form-control" id="writerOrg">
                                    </div>
                                </div>
                                <div class="row">
                                    <span id="result"></span>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    </div>
    </div>


    </div>
    <!-- End Signup Area -->

    <div class="default-shape">
        <div class="shape-1">
            <img src="/assets-rtl/img/shape/4.png" alt="image">
        </div>

        <div class="shape-2 rotateme">
            <img src="/assets-rtl/img/shape/5.svg" alt="image">
        </div>

        <div class="shape-3">
            <img src="/assets-rtl/img/shape/6.svg" alt="image">
        </div>

        <div class="shape-4">
            <img src="/assets-rtl/img/shape/7.png" alt="image">
        </div>

        <div class="shape-5">
            <img src="/assets-rtl/img/shape/8.png" alt="image">
        </div>
    </div>
    </div>
    </div>
@endsection
@section('scripts')
    <script>
    function writerCheck(){
        writerEmail = $('#writerEmail').val();
        $.ajax({url: "/Writers/getEmailWriter/" + writerEmail, success: function(result){
            console.log(result);
            //$("#result").val(result);
        }});
    }
    </script>
@endSection
