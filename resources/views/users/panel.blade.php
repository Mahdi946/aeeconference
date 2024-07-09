@extends('templates.user-dashboard')
@section('content')
    <div class="flex flex-col gap-4 p-2 my-4 ">


        <form id="newsForm">
            <div class="flex flex-col gap-6 p-4 bg-slate-50 justify-center rounded-[10px]">
                {{ $edit = false }}
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
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

                <div class="text-center">
                    <button id="actionBtn" type="button" class="p-2 bg-green-500 rounded-[10px] text-white ">
                        <b>اقزودن</b>
                    </button>
                </div>
            </div>

        </form>
    </div>
@endSection

@section('scripts')
    <script src="{{ asset('scripts/NewsAdd.js?v=1') }}" type="module"></script>
@endSection
