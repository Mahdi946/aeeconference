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
                        @foreach ($userRoles as $userRole)

                            <tr>
                                <th scope="row">{{ $userRole->id }}</th>
                                <td>{{ $userRole->user->Name_fa }} {{ $userRole->user->Family_fa }}</td>
                                <td>{{ $userRole->role->Name }}</td>
                                <td>
                                    <a href="{{ route('UserRole.edit', $userRole->id) }}" id="userRoleBtn" type="button"
                                        class="btn btn-success"><b> ویرایش</b></a>
                                    {{-- <a href="{{ route('userRole.edit', $userRole->id) }}" id="userRoleBtn" type="button"
                                        class="btn btn-info"><b> دبیر </b></a> --}}
                                        <form action="{{route('UserRole.destroy',$userRole->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">حذف</button>

                                        </form>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>


                </table>


            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('UserRole.create') }}" id="actionBtn" type="button" class="btn btn-success">
                <b>افزودن</b>
            </a>
        </div>

    </div>
@endSection

@section('scripts')
@endSection
