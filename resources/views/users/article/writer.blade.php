@extends('templates.fa')
@section('content')
    <div class="container form-group">
        <!-- Start Login Area -->
        <div class="login-section ptb-100">

            <!-- Start Signup Area -->
            <div class="signup-section ptb-100">
                <div class="container">
                    <div class="signup-form" style="max-width: 800px;">
                        <h3>تعریف نویسندگان</h3>


                        <div class="container mt-5">
                            <form action="" method="POST">
                                @csrf
                                <input type="hidden" name="ArticleID" value="{{ $article->id }}" />
                                <div class="row">
                                    <!-- Input fields -->

                                    <div class="col-md-12 mb-3">
                                        <label for="email" class="form-label">{{ __('ایمیل') }}</label>
                                        <input name="email" type="text" class="form-control" id="writerEmail">
                                        <a href="javascript:writerCheck()" id="checkEmail" class="btn btn-primary">بررسی</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <span id="result"></span>
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
    <script>
    function writerCheck(){
        writerEmail = $('#writerEmail').val();
        $.ajax({url: "/Writers/getEmailWriter/" + writerEmail, success: function(result){
            $("#result").html(result);
        }});
    }
    </script>
@endSection
