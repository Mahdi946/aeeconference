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
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
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
