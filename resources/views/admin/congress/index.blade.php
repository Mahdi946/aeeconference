@extends('templates.fa')
@section('content')
    <div class="flex flex-col gap-4 p-2 my-4 ">
        <div class="signup-section ptb-100">
            <div class="container  w-100">


                <table class="table">


                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">نام کنگره</th>
                            <th scope="col">توضیحات کنگره</th>
                            <th scope="col">نام دبیر</th>
                            <th scope="col">شروع کنگره</th>
                            <th scope="col">پایان کنگره</th>
                            <th scope="col"> عملیات </th>


                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($Congresses as $Congress)

                            <tr>
                                <th scope="row">{{ $Congress->id }}</th>
                                <td>{{ $Congress->Name }}</td>
                                <td>{{ $Congress->Description }}</td>
                                <td>{{ $Congress->secretary->Name }}</td>
                                <td>{{ $Congress->StartDate }}</td>
                                <td>{{ $Congress->EndDate }}</td>
                                <td>
                                    <a href="/Admin/Location/getLocationByID/{{ $Congress->id }}" id="actionBtn"
                                        type="button" class="btn btn-info"><b>ایجاد موقعیت مکانی</b></a>
                                    <a href="{{ route('Congress.edit', $Congress->id) }}" id="locationBtn" type="button"
                                        class="btn btn-success mx-2"><b> ویرایش</b></a>
                                    <a href="{{ route('Admin.Congress.createSecretary', $Congress->id) }}" id="Secretary" type="button"
                                        class="btn btn-warning mx-2"><b> دبیر</b></a>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>


                </table>


            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('Congress.create') }}" id="actionBtn" type="button" class="btn btn-success">
                <b>افزودن</b>
            </a>
        </div>

    </div>
@endSection

@section('scripts')
@endSection
