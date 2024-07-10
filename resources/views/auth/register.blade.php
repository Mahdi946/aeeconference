@extends('templates.fa')

@section('head-tag')
    <link rel="stylesheet" href="/assets-rtl/js/persian-datepicker/persianDatepicker-default.css" />

@section('content')
    <div class="container">
        <!-- Start Login Area -->
        <div class="login-section ptb-100">
            <!-- Start Page Title Area -->
            <div class="page-title-area item-bg-5">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="page-title-content">
                                <h2>عضویت</h2>
                                <ul>
                                    <li><a href="index.html">خانه</a></li>
                                    <li>عضویت</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page Title Area -->

            <!-- Start Signup Area -->
            <div class="signup-section ptb-100">
                <div class="container">
                    <div class="signup-form">
                        @include('auth._message')
                        <h3>ایجاد حساب کاربری</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="row mb-3">
                                    <label for="Name"
                                        class="col-md-4 col-form-label text-md-end">{{ __('نام') }}</label>

                                    <div class="col-md-6">

                                        <input id="Name" type="text"
                                            class="form-control @error('Name') is-invalid @enderror" name="Name"
                                            value="{{ old('Name') }}" required autocomplete="Name" autofocus>


                                        @error('Name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="mail"
                                        class="col-md-4 col-form-label text-md-end">{{ __('نام خانوادگی(en)') }}</label>

                                    <div class="col-md-6">
                                        <input id="Family" type="text"
                                            class="form-control @error('Family') is-invalid @enderror" name="Family"
                                            value="{{ old('Family') }}" required autocomplete="name" autofocus>

                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('نام (فارسی)') }}</label>

                                    <div class="col-md-6">
                                        <input id="Name_fa" type="text"
                                            class="form-control @error('Name_fa') is-invalid @enderror" name="Name_fa"
                                            value="{{ old('Name_fa') }}" required autocomplete="Name_fa" autofocus>

                                        @error('Name_fa')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('نام خانوادگی') }}</label>

                                    <div class="col-md-6">
                                        <input id="Family_fa" type="text"
                                            class="form-control @error('Family_fa') is-invalid @enderror" name="Family_fa"
                                            value="{{ old('Family_fa') }}" required autocomplete="Family_fa" autofocus>

                                        @error('Family_fa')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('نام پدر') }}</label>

                                    <div class="col-md-6">
                                        <input id="FatherName" type="text"
                                            class="form-control @error('FatherName') is-invalid @enderror" name="FatherName"
                                            value="{{ old('FatherName') }}" required autocomplete="name" autofocus>

                                        @error('FatherName')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('شماره شناسنامه') }}</label>

                                    <div class="col-md-6">
                                        <input id="BirthCert" type="number"
                                            class="form-control @error('BirthCert') is-invalid @enderror" name="BirthCert"
                                            value="{{ old('BirthCert') }}" required autocomplete="name" autofocus>

                                        @error('BirthCert')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('تاریخ تولد') }}</label>

                                    <div class="col-md-6">
                                        <input id="BirthDay" type="text"
                                            class="form-control @error('BirthDay') is-invalid @enderror" name="BirthDay"
                                            value="{{ old('BirthDay') }}" required  autofocus data-jdp>
                                        <input type="hidden" id="BirthDayView" name="BirthDayView" class="form-control form-control-sm">
                                        @error('BirthDay')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('شماره ثابت') }}</label>

                                    <div class="col-md-6">
                                        <input id="phoneNumber" type="number"
                                            class="form-control @error('PhoneNumber') is-invalid @enderror"
                                            name="PhoneNumber" value="{{ old('PhoneNumber') }}" required
                                            autocomplete="name" autofocus>

                                        @error('PhoneNumber')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('شماره موبایل') }}</label>

                                    <div class="col-md-6">
                                        <input id="MobileNumber" type="number"
                                            class="form-control @error('PhoneNumber') is-invalid @enderror"
                                            name="MobileNumber" value="{{ old('PhoneNumber') }}" required
                                            autocomplete="name" autofocus>

                                        @error('PhoneNumber')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('رشته') }}</label>

                                    <div class="col-md-6">
                                        <input id="Field" type="text"
                                            class="form-control @error('Field') is-invalid @enderror" name="Field"
                                            value="{{ old('Field') }}" required autocomplete="name" autofocus>

                                        @error('Field')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Edu"
                                        class="col-md-4 col-form-label text-md-end">{{ __('تحصیلات') }}</label>

                                    <div class="col-md-6">
                                        <input id="Edu" type="text"
                                            class="form-control @error('Edu') is-invalid @enderror" name="Edu"
                                            value="{{ old('Edu') }}" required autocomplete="رشته" autofocus>

                                        @error('Field')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Edu"
                                        class="col-md-4 col-form-label text-md-end">{{ __('شغل') }}</label>

                                    <div class="col-md-6">
                                        <input id="Job" type="text"
                                            class="form-control @error('Job') is-invalid @enderror" name="Job"
                                            value="{{ old('Job') }}" autocomplete="شغل" autofocus>

                                        @error('Field')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Edu"
                                        class="col-md-4 col-form-label text-md-end">{{ __('آدرس') }}</label>

                                    <div class="col-md-6">
                                        <input id="Address" type="text"
                                            class="form-control @error('Job') is-invalid @enderror" name="Address"
                                            value="{{ old('Address') }}" autocomplete="Address" autofocus>

                                        @error('Address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="Edu"
                                        class="col-md-4 col-form-label text-md-end">{{ __('(En)شهر') }}</label>

                                    <div class="col-md-6">
                                        <input id="City" type="text"
                                            class="form-control @error('City') is-invalid @enderror" name="City"
                                            value="{{ old('City') }}" required autocomplete="City" autofocus>

                                        @error('City')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Edu"
                                        class="col-md-4 col-form-label text-md-end">{{ __('(فارسی)شهر') }}</label>

                                    <div class="col-md-6">
                                        <input id="City_fa" type="text"
                                            class="form-control @error('City_fa') is-invalid @enderror" name="City_fa"
                                            value="{{ old('City_fa') }}" required autocomplete="City_fa" autofocus>

                                        @error('City_fa')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Edu"
                                        class="col-md-4 col-form-label text-md-end">{{ __('کشور') }}</label>

                                    <div class="col-md-6">
                                        <input id="Country" type="text"
                                            class="form-control @error('Country') is-invalid @enderror" name="Country"
                                            value="{{ old('Country') }}" required autocomplete="Country" autofocus>

                                        @error('Country')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Edu"
                                        class="col-md-4 col-form-label text-md-end">{{ __('رتبه') }}</label>

                                    <div class="col-md-6">
                                        <input id="Rank" type="text"
                                            class="form-control @error('Rank') is-invalid @enderror" name="Rank"
                                            value="{{ old('Rank') }}" required autocomplete="Rank" autofocus>

                                        @error('Rank')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Edu"
                                        class="col-md-4 col-form-label text-md-end">{{ __('سازمان(En)') }}</label>

                                    <div class="col-md-6">
                                        <input id="Org" type="text"
                                            class="form-control @error('Rank') is-invalid @enderror" name="Org"
                                            value="{{ old('Org') }}" required autocomplete="سازمان" autofocus>

                                        @error('Org')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Edu"
                                        class="col-md-4 col-form-label text-md-end">{{ __('سازمان(فارسی)') }}</label>

                                    <div class="col-md-6">
                                        <input id="Org_fa" type="text"
                                            class="form-control @error('Rank') is-invalid @enderror" name="Org_fa"
                                            value="{{ old('Org_fa') }}" required autocomplete="سازمان" autofocus>

                                        @error('Org')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('ایمیل') }}</label>

                                    <div class="col-md-6">
                                        <input id="Email" type="email"
                                            class="form-control @error('Email') is-invalid @enderror" name="Email"
                                            value="{{ old('Email') }}" required autocomplete="Email" autofocus>

                                        @error('Email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('کد ملی') }}</label>

                                    <div class="col-md-6">
                                        <input id="NationalCode" type="number"
                                            class="form-control @error('NationalCode') is-invalid @enderror"
                                            name="NationalCode" value="{{ old('NationalCode') }}" required
                                            autocomplete="name" autofocus>

                                        @error('NationalCode')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="Password"
                                        class="col-md-4 col-form-label text-md-end">{{ __('پسورد') }}</label>

                                    <div class="col-md-6">
                                        <input id="Password" type="password"
                                            class="form-control @error('Password') is-invalid @enderror" name="Password"
                                            required autocomplete="current-Password">

                                        @error('Password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="Password-confirm"
                                        class="col-md-4 col-form-label text-md-end">{{ __('تایید پسورد') }}</label>

                                    <div class="col-md-6">
                                        <input name="Password_confirmation" id="Password_confirmation" type="password"
                                            class="form-control @error('Password') is-invalid @enderror" name="Password"
                                            required autocomplete="current-Password">

                                        @error('Password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('ثبت نام') }}
                                        </button>

                                        <a href="{{ url('login') }}">قبلا ثبت نام کردید؟</a>

                                        <div class="col-lg-12">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="checkme">
                                                <label class="form-check-label" for="checkme">مرا به خاطر بسپار</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="default-shape">
                    <div class="shape-1">
                        <img src="assets/img/shape/4.png" alt="image">
                    </div>

                    <div class="shape-2 rotateme">
                        <img src="assets/img/shape/5.svg" alt="image">
                    </div>

                    <div class="shape-3">
                        <img src="assets/img/shape/6.svg" alt="image">
                    </div>

                    <div class="shape-4">
                        <img src="assets/img/shape/7.png" alt="image">
                    </div>

                    <div class="shape-5">
                        <img src="assets/img/shape/8.png" alt="image">
                    </div>
                </div>
            </div>
            <!-- End Signup Area -->

            <div class="default-shape">
                <div class="shape-1">
                    <img src="{{ asset('assets-rtl/img/shape/4.png') }}" alt="image">
                </div>

                <div class="shape-2 rotateme">
                    <img src="{{ asset('assets-rtl/img/shape/5.svg') }}" alt="image">
                </div>

                <div class="shape-3">
                    <img src="{{ asset('assets-rtl/img/shape/6.svg') }}" alt="image">
                </div>

                <div class="shape-4">
                    <img src="{{ asset('assets-rtl/img/shape/7.png') }}" alt="image">
                </div>

                <div class="shape-5">
                    <img src="{{ asset('assets-rtl/img/shape/8.png') }}" alt="image">
                </div>
            </div>
        </div>
    </div>
    @endsection
@section('scripts')

    <script src="/assets-rtl/js/persian-datepicker/persian-datepicker.js"></script>

    <script>
        $(document).ready(function() {

            $('#BirthDay').persianDatepicker({
                format: 'YYYY/MM/DD',
                altField: '#BirthDayView'
            })

        });
    </script>
@endsection
