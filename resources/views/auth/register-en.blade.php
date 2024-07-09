@extends('templates.fa')

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
                                <h2>register</h2>
                                <ul>
                                    <li><a href="index.html">home</a></li>
                                    <li>register</li>
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
                        <h3>Create an account</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('email') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-end">{{ __('password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="password-confirm"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Confirm password') }}</label>

                                    <div class="col-md-6">
                                        <input name="password_confirmation" id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                               


                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('register') }}
                                        </button>

                                        <a href="{{ url('login') }}">Already registered?</a>
                                        
                                <div class="col-lg-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkme">
                                        <label class="form-check-label" for="checkme">remember me</label>
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
