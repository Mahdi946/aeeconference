@extends('templates.fa')
@section('content')
    <div class="container form-group">
        <!-- Start Login Area -->
        <div class="login-section ptb-100">
            {{-- <div class="signup-section ptb-50" id="WritersArea">
                <div class="container">
                    <div class="signup-form" style="max-width: 800px;">
                        <h3>کنگره</h3>

                    </div>
                </div>
            </div> --}}
            <!-- Start Signup Area -->
            <div class="signup-section ptb-50">
                <div class="container">
                    <div class="signup-form" style="max-width: 800px;">
                        <h3>ایجاد کنگره جدید</h3>

                        <div class="container mt-5">
                            <form action="{{ route('Congress.store') }}" method="POST">
                                @csrf
                                 <div class="row">

                                    <div class="col-md-6 mb-3">
                                        <label for="Name" class="form-label">{{ __('نام کنگره') }}</label>
                                        <input name="Name" type="text" class="form-control" id="Name" required>
                                    </div>

                                    <!-- Input fields -->
                                    <div class="col-md-12 mb-3">
                                        <label for="Description" class="form-label">{{ __('توضیحات') }}</label>
                                        <textarea name="Description" class="form-control" id="Description" rows="5" required>{{ old('Description') }}</textarea>
                                        @error('Description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>





                                    <div class="col-md-6 mb-3">
                                        <label for="StartDate" class="form-label">{{ __('تاریخ شروع کنگره') }}</label>
                                        <input name="StartDate" type="date" class="form-control" id="StartDate" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="EndDate" class="form-label">{{ __('تاریخ پایان کنگره') }}</label>
                                        <input name="EndDate" type="date" class="form-control" id="EndDate" required>
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
