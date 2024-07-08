@extends('templates.admin')
@section('content')
    <div class="flex flex-col gap-4 p-2 my-4 ">


        <form id="newsForm">
            <div class="flex flex-col gap-6 p-4 bg-slate-50 justify-center rounded-[10px]">
                {{ $edit = false }}
                @include('NewsItem')



                <div class="text-center">
                    <button id="actionBtn" type="button" class="p-2 bg-green-500 rounded-[10px] text-white ">
                        <b>اعمال</b>
                    </button>
                </div>
            </div>

        </form>
    </div>
@endSection

@section('scripts')
    <script src="{{ asset('scripts/NewsAdd.js?v=1') }}" type="module"></script>
@endSection
