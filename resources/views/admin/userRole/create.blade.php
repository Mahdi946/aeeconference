@extends('templates.fa')
@section('content')
    <div class="container form-group">
        <!-- Start Login Area -->
        <div class="login-section ptb-100">
         
            <div class="signup-section ptb-50">
                <div class="container">
                    <div class="signup-form" style="max-width: 800px;">
                        <h3>ایجاد  داوران</h3>

                        <div class="container mt-5">
                            <form action="{{ route('UserRole.store') }}" method="POST">
                                @csrf
                                 <div class="row">

                                    <!-- Input fields -->

                                    <div class="col-md-12 mb-3">
                                        <label for="congress" class="form-label">{{ __('انتخاب نقش') }}</label>
                                        <select class="form-select"  id="role" name="RoleID">
                                            @foreach ($roles as $role)
                                            <option value="{{$role->id}}">{{$role->Name}}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="col-md-12 mb-3">
                                        <label for="users" class="form-label">{{ __('انتخاب کاربر') }}</label>
                                        <select class="form-select"  id="user" name="UserID">
                                            @foreach ($users as $user)
                                            <option value="{{$user->id}}">{{$user->Name_fa }} {{ $user->Family_fa}} </option>
                                            @endforeach
                                        </select>
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
