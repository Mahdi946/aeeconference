@extends('templates.fa')
@section('content')
    <div class="flex flex-col gap-4 p-2 my-4 ">
        <div class="signup-section ptb-100">
            <div class="container">
                <div class="signup-form" style="max-width: 800px;">

                    <table class="table">


                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">عنوان فارسی مقاله</th>
                                <th scope="col">عنوان انگلیسی مقاله</th>
                                <th scope="col">عملیات</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($articles as $article)
                            <tr>
                                <th scope="row">{{$article->id}}</th>
                                <td>{{$article->ShortTitle_fa}}</td>
                                <td>{{$article->ShortTitle}}</td>
                                <td>
                                    <a href="#" id="actionBtn" type="button" class="btn btn-primary">
                                    <b>ویرایش</b>
                                    </a>
                                </td>
                                <td>
                                    <a href="/Writers/writerSave/{{$article->id}}/show" id="actionBtn" type="button" class="btn btn-info">
                                    <b>ایجاد نویسنده</b>
                                    </a>
                                </td>
                                <td>
                                    <a href="/ArticleFiles/getArticleFileByID/{{$article->id}}"  type="button" class="btn btn-info">
                                    <b> دیدن فایل </b>
                                    </a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>


                    </table>

                </div>
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
    <script src="{{ asset('scripts/NewsAdd.js?v=1') }}" type="module"></script>
@endSection
