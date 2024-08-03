@extends('templates.fa')
@section('content')
    <div class="container form-group">
        <!-- Start Login Area -->
        <div class="login-section ptb-100">
            <!-- Start Signup Area -->
            <div class="signup-section ptb-50">
                <div class="container">
                    <div class="signup-form" style="max-width: 800px;">
                        <h3> داوری</h3>

                        <div class="container mt-5">
                            <form action="" method="POST">
                                @csrf
                                 <div class="row">

                                    <!-- Input fields -->

                                    <div class="col-md-12 mb-3">
                                        <label for="congress" class="form-label"></label>


                                        <label><input type="radio" name="q4" value="1"> زیاد</label>
                                        <label><input type="radio" name="q4" value="2"> متوسط</label>
                                        <label><input type="radio" name="q4" value="3"> کم</label>
                                        <label><input type="radio" name="q4" value="4"> خیلی کم</label>
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
