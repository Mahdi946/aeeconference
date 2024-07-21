{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@extends('templates.fa')

@section('content')
    <div class="container">
        <!-- Start Login Area -->
        <div class="login-section ptb-100">
            <div class="container">
                <div class="login-form">
                    <div class="login-title">

                    </div>
                   
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('نشانی ایمیل') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('پسورد') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('تکرار پسورد') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ریست کردن پسورد') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

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
    <!-- End Login Area -->
    </div>
    </div>

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
<!-- End Login Area -->
@section('scripts')
    <script src="{{ asset('scripts/NewsAdd.js?v=1') }}" type="module"></script>

    <script src="{{ asset('assets-rtl/jquery.min.js') }}"></script>

    <script src="{{ asset('assets-rtl/popper.min.js') }}"></script>

    <script src="{{ asset('assets-rtl/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets-rtl/jquery.meanmenu.js') }}"></script>

    <script src="{{ asset('assets-rtl/owl.carousel.js') }}"></script>

    <script src="{{ asset('assets-rtl/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{ asset('assets-rtl/jquery.appear.min.js') }}"></script>

    <script src="{{ asset('assets-rtl/odometer.min.js') }}"></script>

    <script src="{{ asset('assets-rtl/jquery.ajaxchimp.min.js') }}"></script>

    <script src="{{ asset('assets-rtl/form-validator.min.js') }}"></script>

    <script src="{{ asset('assets-rtl/contact-form-script.js') }}"></script>

    <script src="{{ asset('assets-rtl/wow.min.js') }}"></script>

    <script src="{{ asset('assets-rtl/main.js') }}"></script>
@endSection
