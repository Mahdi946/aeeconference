@extends('templates.fa')
@section('content')
    <div class="container form-group">
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
                        <h3>ایجاد مقاله</h3>
                        <form method="POST" action="">
                            @csrf
                            <div class="row">



                                <div class="row mb-3">
                                    <label for="ShortTitle"
                                        class="col-md-4 col-form-label text-md-end">{{ __('عنوان(کامل)') }}</label>

                                    <div class="col-md-6">
                                        <input id="FullTitle" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="FullTitle"
                                            value="{{ old('FullTitle') }}" required autocomplete="name" autofocus>

                                        @error('FullTitle')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="ShortTitle"
                                        class="col-md-4 col-form-label text-md-end">{{ __('عنوان(خلاصه)') }}</label>

                                    <div class="col-md-6">
                                        <input id="FullTitle" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="ShortTitle"
                                            value="{{ old('ShortTitle') }}" required autocomplete="ShortTitle" autofocus>

                                        @error('ShortTitle')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('عنوان کامل(فارسی)') }}</label>

                                    <div class="col-md-6">
                                        <input id="FullTitle_fa" type="text"
                                            class="form-control @error('FullTitle_fa') is-invalid @enderror"
                                            name="FullTitle_fa" value="{{ old('FullTitle_fa') }}" required
                                            autocomplete="name" autofocus>

                                        @error('FullTitle_fa')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="ShortTitle_fa"
                                        class="col-md-4 col-form-label text-md-end">{{ __('عنوان (خلاصه-فارسی)') }}</label>

                                    <div class="col-md-6">
                                        <input id="ShortTitle_fa" type="text"
                                            class="form-control @error('ShortTitle_fa') is-invalid @enderror"
                                            name="ShortTitle_fa" value="{{ old('ShortTitle_fa') }}" required
                                            autocomplete="ShortTitle_fa" autofocus>

                                        @error('ShortTitle_fa')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Tags"
                                        class="col-md-4 col-form-label text-md-end">{{ __('تگ ها') }}</label>

                                    <div class="col-md-6">
                                        <input id="FatherName" type="text"
                                            class="form-control @error('Tags') is-invalid @enderror" name="Tags"
                                            value="{{ old('Tags') }}" required autocomplete="Tags" autofocus>

                                        @error('Tags')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-inline-flex p-2">


                                    <select class="form-select" name="CongressID" id="CongressID">
                                        <option value="1"> CongressID</option>
                                        <option value="2"> CongressID</option>
                                    </select>


                                </div>

                                <div class="form-group">


                                    <select class="form-select" name="TypeID" id="TypeID">
                                        <option value="1">مقاله علمی پژوهشی</option>
                                        <option value="2">مقاله پژوهشی</option>
                                    </select>


                                </div>


                                <div class="form-group">

                                    <select class="form-select" name="CategoriesID" id="CategoriesID">
                                        <option value="1"> دسته بندی</option>
                                        <option value="1"> CategoriesID</option>
                                        <option value="2"> CategoriesID</option>
                                    </select>

                                    <div class="mb-3 border border-primary">
                                        <label for="exampleFormControlTextarea1" class="form-label"></label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{ __('در صورنی که دسته بندی مدنظر موجود نیست آن را ایجاد کنید') }}</textarea>
                                    </div>


                                    <div class="row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('ایجاد') }}
                                            </button>


                                        </div>
                                    </div>
                                </div>
                            </div>
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
