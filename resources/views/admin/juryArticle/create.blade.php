@extends('templates.fa')
@section('content')
    <div class="container form-group">
        <!-- Start Login Area -->
        <div class="login-section ptb-100">
            <div class="signup-section ptb-50">
                <div class="container">
                    <?php if(count($juryArticles) < 1){ ?>

                    <div class="signup-form" style="max-width: 800px;">
                        <h3>ایجاد داوران</h3>

                        <div class="container mt-5">
                            <form action="{{ route('Admin.JuryArticle.store') }}" method="POST">
                                @csrf
                                <div class="row">

                                    <input type="hidden" name="ArticleID" value="{{ $article->id }}" id="ArticleID" />



                                    <div class="col-md-12 mb-3">
                                        <label for="users" class="form-label">{{ __('انتخاب داور') }}</label>
                                        <select class="form-select" multiple aria-label="multiple select" id="users"
                                            name="users[]" required>
                                            @foreach ($jures as $jury)
                                                <option value="{{ $jury->UserID }}">{{ $jury->user->Name_fa }}
                                                    {{ $jury->user->Family_fa }} </option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <button type="submit" class="btn btn-primary">ثبت</button>

                                </div>

                            </form>
                        </div>



                    </div>



                    <?php }else{ ?>
                    <div class="signup-form " style="max-width: 800px;">
                        <h3>ویرایش داوران</h3>
                        <div class="d-flex justify-content-center">
                            <a href="/Admin/JuryArticle/edit/{{ $article->id }}" class="btn btn-success">ویرایش</a>
                        </div>


                    </div>
                    <?php   } ?>
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
