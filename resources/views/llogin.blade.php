@extends('templates.fa')

@section('content')

    <div class="container">
        <!-- Start Login Area -->
        <div class="login-section ptb-100">
            <div class="container">
                <div class="login-form">
                    <div class="login-title">
                        <h3>خوش آمدید!</h3>
                        <p>لطفا وارد حساب کاربری خود شوید</p>
                    </div>

                    <form method="POST" action="{{ url('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="ایمیل">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="رمز عبور">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkme">
                                    <label class="form-check-label" for="checkme">مرا به خاطر بسپار</label>
                                </div>
                            </div>

                            <div class="col-lg-12 text-right">
                                <p class="forgot-password"><a href="index.html">فراموشی رمز عبور؟</a></p>
                            </div>

                            <div class="col-lg-12">
                                <div class="send-btn">

                                    <button type="submit" class="default-btn">
                                        {{ __('Login') }}
                                    </button>



                                </div>
                                <br>
                                <span>حساب کاربری ندارید؟ <a href="{{ url('register') }}">ثبت نام!</a></span>
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
