@extends('templates.fa')
@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="mr-5 btn btn-danger">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                  خروج
              </a>  
            </div>
            <div class="card">
                <div class="card-body">
                    
                    <h5 class="card-title text-center">ثبت ایمیل</h5>
                    <form method="POST" action="">
                        @csrf
                        <div class="form-group">
                            <label for="email">ایمیل</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <input type="hidden" name="hidden_email" id="hidden_email">
                        <button type="submit" class="btn btn-primary btn-block">ثبت</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
