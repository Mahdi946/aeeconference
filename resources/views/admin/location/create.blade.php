@extends('templates.fa')
@section('content')
    <div class="container form-group">
        <!-- Start Login Area -->
        <div class="login-section ptb-100">
            <div class="signup-section ptb-50" id="WritersArea">
                <div class="container">
                    <div class="signup-form" style="max-width: 800px;">
                        <h3>موقعیت مکانی</h3>

                    </div>
                </div>
            </div>
            <!-- Start Signup Area -->
            <div class="signup-section ptb-50">
                <div class="container">
                    <div class="signup-form" style="max-width: 800px;">
                        <h3>ایجاد موقعیت مکانی</h3>

                        <div class="container mt-5">
                            <form action="{{ route('Location.store') }}" method="POST">
                                @csrf
                                 <div class="row">
                                    <input type="hidden" name="CongressID" value="{{ $congress->id }}" id="CongressID" />

                                    <!-- Input fields -->
                                    <div class="col-md-12 mb-3">
                                        <label for="Location" class="form-label">{{ __('آدرس') }}</label>
                                        <textarea name="Location" class="form-control" id="Location" rows="5" required>{{ old('Location') }}</textarea>
                                        @error('Location')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>



                                    <div class="col-md-6 mb-3">
                                        <label for="Phone" class="form-label">{{ __('شماره تلفن') }}</label>
                                        <input name="Phone" type="text" class="form-control" id="Phone">
                                    </div>

                                    <button type="submit" class="btn btn-primary">ثبت</button>

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

@endSection
