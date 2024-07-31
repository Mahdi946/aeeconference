@extends('templates.fa')
@section('content')
    <div class="container form-group">
        <!-- Start Login Area -->
        <div class="login-section ptb-100">

            <!-- Start Signup Area -->
            <div class="signup-section ptb-50">
                <div class="container">
                    <div class="signup-form">
                        <h3>‌فایل‌ها</h3>

                        <div class="container mt-5">
                            <table class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                    <th scope="col">نوع</th>
                                    <th scope="col">توضیحات</th>
                                    <th scope="col">بازبینی</th>
                                </thead>
                                <tbody>
                                    @foreach ($articlefiles as $articlefile)
                                        <tr>
                                            <td>
                                                @switch($articlefile->FileType)
                                                    @case(1)
                                                        <span>مشخصات نویسندگان </span>
                                                    @break
                                                    @case(2)
                                                        <span>فایل اصل مقاله بدون نام نویسندگان </span>
                                                    @break
                                                    @case(3)
                                                        <span> نامه به سردبیر (تعهدنامه)  </span>
                                                    @break
                                                    @case(4)
                                                        <span> تصویر  </span>
                                                    @break
                                                    @case(5)
                                                        <span> جدول  </span>
                                                    @break
                                                    @case(6)
                                                        <span>تازه‌های تحقیق  </span>
                                                    @break
                                                    @case(7)
                                                        <span> چکیده تصویری  </span>
                                                    @break
                                                    @case(8)
                                                        <span>فرم تعارض منافع  </span>
                                                    @break
                                                    @case(9)
                                                        <span> فایل‌های تکمیلی، اضافی  </span>
                                                    @break

                                                    @default
                                                        <span>#</span>
                                                @endswitch
                                            </td>
                                            <td>{{ $articlefile->Description }}</td>
                                            <td><a href="{{ Storage::url($articlefile->Location) }}">دانلود</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <br>
                            <h3>ارسال فایل</h3>
                            <form action="{{ route('ArticleFiles.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="ArticleID" value="{{ $article->id }}" id="ArticleID" />

                                <div class="row">
                                    <!-- Input fields -->

                                    <div class="col-md-12 mb-3">
                                        <label for="FileType" class="form-label">{{ __('نوع') }}</label>
                                        <select class="form-select" name="FileType" aria-label="Default select">
                                            <option value="1">مشخصات نویسندگان (اجباری)</option>
                                            <option value="2">فایل اصل مقاله بدون نام نویسندگان (اجباری)</option>
                                            <option value="3">نامه به سردبیر (تعهدنامه) (اجباری)</option>
                                            <option value="4">تصویر</option>
                                            <option value="5">جدول</option>
                                            <option value="6">تازه‌های تحقیق</option>
                                            <option value="7">چکیده تصویری</option>
                                            <option value="8">فرم تعارض منافع</option>
                                            <option value="9">فایل‌های تکمیلی، اضافی</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="Description" class="form-label">{{ __('توضیحات') }}</label>
                                        <input name="Description" type="text" class="form-control" id="Description">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="Name" class="form-label">{{ __('Name') }}</label>
                                        <input type="file" name="File" class="form-control">
                                    </div>
                                    <a href="{{ url('Articles') }}" class="btn btn-danger">بازگشت</a>
                                    <?php if($article->Status->value == 0){ ?>
                                    <button type="submit" id="Submit" class="btn btn-primary my-2">ثبت</button>

                                    <?php }  ?>


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





{{-- in baraye delete articlefiles hast --}}
{{-- <form action="{{ route('ArticleFiles.destroy', $file->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this file?');">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
    </form> --}}
