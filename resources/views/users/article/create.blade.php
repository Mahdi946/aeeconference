@extends('templates.fa')
@section('content')
    <div class="container form-group">
        <!-- Start Login Area -->
        <div class="login-section ptb-100">

            <!-- Start Signup Area -->
            <div class="signup-section ptb-100">
                <div class="container">
                    <div class="signup-form" style="max-width: 800px;">
                        <h3>ایجاد مقاله</h3>

                        <div class="container mt-5">
                            <form action="{{ route('Articles.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <!-- Select options -->
                                    <div class="col-md-12 mb-3">
                                        <label for="select1" class="form-label">نوع مقاله</label>
                                        <select name="TypeID" class="form-select" id="TypeID">
                                            <option disabled selected> لطفا نوع مقاله را انتخاب کنید </option>
                                            <option value="1">مقاله پژوهشی</option>
                                            <option value="2">مقاله علمی پژوهشی</option>

                                        </select>
                                        @error('TypeID')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="ShortTitle_fa" class="form-label">{{ __('عنوان کوتاه') }}</label>
                                        <textarea name="ShortTitle_fa" class="form-control" id="ShortTitle_fa" rows="2">{{ old('ShortTitle_fa') }}</textarea>
                                        @error('ShortTitle_fa')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 mb-3" style="direction: ltr;">
                                        <label for="ShortTitle" class="form-label">{{ __('Abstract') }}</label>
                                        <textarea name="ShortTitle" class="form-control" id="ShortTitle" rows="2">{{ old('ShortTitle') }}</textarea>
                                        @error('ShortTitle')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="FullTitle_fa" class="form-label">{{ __('عنوان کامل') }}</label>
                                        <textarea name="FullTitle_fa" class="form-control" id="FullTitle_fa" rows="2">{{ old('FullTitle_fa') }}</textarea>
                                        @error('FullTitle_fa')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-3" style="direction: ltr;">
                                        <label for="FullTitle" class="form-label">{{ __('Subject') }}</label>
                                        <textarea name="FullTitle" class="form-control" id="FullTitle" rows="2">{{ old('FullTitle') }}</textarea>
                                        @error('FullTitle')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="col-md-12 mb-3">
                                        <label for="Tags" class="form-label">{{ __('کلیدواژه') }}</label>
                                        <textarea name="Tags_fa" class="form-control" id="Tags_fa" rows="5">{{ old('Tags_fa') }}</textarea>
                                        @error('Tags_fa')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 mb-3" style="direction: ltr;">
                                        <label for="Tags" class="form-label">{{ __('Keywords') }}</label>
                                            <textarea name="Tags" class="form-control" id="Tags" rows="5">{{ old('Tags') }}</textarea>
                                        @error('Tags')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="Tags" class="form-label">{{ __(' موضوعات') }}</label>
                                        <select class="form-select" multiple aria-label="multiple select" name="Categories[]" data-multi-select>
                                            @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->Name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <input type="hidden" id="CongressID" name="CongressID" value="{{$Congresses->id}}">
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
<link href="/assets/css/multiSelect.css" rel="stylesheet" type="text/css">
<script src="/assets/js/multiSelect.js"></script>

@endSection
