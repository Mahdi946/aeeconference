@extends('templates.fa')
@section('content')
    <div class="flex flex-col gap-4 p-2 my-4 ">
        <div class="signup-section ptb-100">
            <div class="container  w-100">


                <table class="table">


                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">نام داور</th>
                            <th scope="col">نام کنگره</th>
                            <th scope="col"> عملیات </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($juries as $jury)

                            <tr>
                                <th scope="row">{{ $jury->id }}</th>
                                <td>{{ $jury->user->Name_fa }} {{ $jury->user->Family_fa }}</td>
                                <td>{{ $jury->congress->Name }}</td>
                                <td>
                                    <a href="{{ route('Jury.edit', $jury->id) }}" id="JuryBtn" type="button"
                                        class="btn btn-success"><b> ویرایش</b></a>
                                    <a href="{{ route('Jury.edit', $jury->id) }}" id="JuryBtn" type="button"
                                        class="btn btn-info"><b> دبیر </b></a>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>


                </table>


            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('Jury.create') }}" id="actionBtn" type="button" class="btn btn-success">
                <b>افزودن</b>
            </a>
        </div>

    </div>
@endSection

@section('scripts')
@endSection
