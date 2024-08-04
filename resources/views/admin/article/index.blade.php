@extends('templates.fa')
@section('content')
    <div class="flex flex-col gap-4 p-2 my-4 ">
        <div class="signup-section ptb-100">
            <div class="container  w-100">


                <table class="table">


                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">عنوان فارسی مقاله</th>
                            <th scope="col">عنوان انگلیسی مقاله</th>
                            <th scope="col">وضعیت مقاله</th>
                            <th scope="col">عملیات</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <th scope="row">{{ $article->id }}</th>
                                <td>{{ $article->ShortTitle_fa }}</td>
                                <td>{{ $article->ShortTitle }}</td>
                                <td>
                                    <?php if($article->Status == 0){ ?>
                                    <a href="/Articles/ArticleStatus/{{ $article->id }}" id="" type="button"
                                        class="btn btn-success"><b>ثبت نهایی مقاله</b></a>
                                    <?php }else{ echo "ثبت نهایی شده است";} ?>

                                </td>

                                <td>


                                    <a href="/Admin/JuryArticle/create/{{ $article->id }}" id="actionBtn"
                                        type="button" class="btn btn-info"><b>ایجاد داوران</b></a>
                                  

                                    <a href="{{ route('Articles.edit', $article->id) }}"
                                        class="my-2 btn btn-primary">ویرایش</a>


                                </td>
                            </tr>
                        @endforeach

                    </tbody>


                </table>


            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('Articles.create') }}" id="actionBtn" type="button" class="btn btn-success">
                <b>افزودن</b>
            </a>
        </div>

    </div>
@endSection

@section('scripts')
@endSection
