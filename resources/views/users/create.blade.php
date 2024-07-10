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


                        <div class="container mt-5">
                            <div class="mr-5 btn btn-danger">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                  خروج
                              </a>  
                            </div>
                            <form>
                                @csrf
                                <div class="row">
                                    <!-- Input fields -->
                                    <div class="col-md-6 mb-3">
                                        <label for="input1" class="form-label">{{ __('عنوان(کامل)') }}</label>
                                        <input name="FullTitle" type="text" class="form-control"
                                            value="{{ old('FullTitle') }}" id="FullTitle">
                                        @error('FullTitle')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="ShortTitle" class="form-label">{{ __('عنوان(خلاصه)') }}</label>
                                        <input name="ShortTitle" type="text" class="form-control"
                                            value="{{ old('ShortTitle') }}" id="ShortTitle">
                                        @error('ShortTitle')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="FullTitle_fa" class="form-label">{{ __('عنوان کامل(فارسی)') }}</label>
                                        <input name="FullTitle_fa" type="text" class="form-control"
                                            value="{{ old('FullTitle_fa') }}" id="FullTitle_fa">
                                        @error('FullTitle_fa')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="ShortTitle_fa"
                                            class="form-label">{{ __('عنوان (خلاصه-فارسی)') }}</label>
                                        <input name="ShortTitle_fa" type="text" class="form-control"
                                            value="{{ old('ShortTitle_fa') }}" id="ShortTitle_fa">
                                        @error('ShortTitle_fa')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Tags" class="form-label">{{ __('تگ ها') }}</label>
                                        <input name="Tags" type="text" class="form-control" id="Tags"
                                            value="{{ old('Tags') }}">
                                        @error('Tags')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Select options -->
                                    <div class="col-md-6 mb-3">
                                        <label for="select1" class="form-label">CongressID</label>
                                        <select name="CongressID" class="form-select" id="CongressID">
                                            <option selected>Select an option</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                        @error('CongressID')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="TypeID" class="form-label">نوع مقاله</label>
                                        <select class="form-select" id="TypeID">
                                            <option selected>انتخاب کنید</option>
                                            <option value="1">مقاله علمی پژوهشی</option>
                                            <option value="2">مقاله پژوهشی</option>

                                        </select>
                                        @error('TypeID')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Category Select with Add Option -->
                                    <div class="col-md-12 mb-3">
                                        <label for="CategoriesID" class="form-label">CategoriesID</label>
                                        <div class="input-group">
                                            <select class="form-select" id="select3">
                                                <option selected> دسته بندی</option>
                                                <option value="1">CategoriesID 1</option>
                                                <option value="2">CategoriesID2</option>
                                                <option value="3">CategoriesID 3</option>
                                            </select>
                                            <input type="text" class="form-control" id="newCategory"
                                                placeholder="Add new category">
                                            <button type="button" class="btn btn-outline-secondary"
                                                id="addCategoryButton">افزودن</button>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">ایجاد</button>
                            </form>
                        </div>
                    </div>
                </div>






            </div>




        </div>
    </div>

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