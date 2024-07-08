@extends('templates.admin')
@section('content')
    <div class="flex flex-col gap-4 p-2 my-4">

        <div class="flex flex-row">
            <div class="w-[150px]">
                <a class="cursor-pointer p-2 bg-green-500 rounded-[10px] text-white hover:text-white"
                    href="{{ url('/admin/addNews') }}">
                    افزودن خبر فارسی
                </a>
            </div>

            <div class="w-[150px]">
                <a class="cursor-pointer p-2 bg-yellow-500 rounded-[10px] text-white hover:text-white"
                    href="{{ url('/admin/addNewsEn') }}">
                    افزودن خبر انگلیسی
                </a>
            </div>
        </div>

        <div class="flex flex-row gap-4 flex-wrap p-2 ">

            @foreach ($allNews as $news)
                <div class="w-[300px] rounded-md shadow-md bg-slate-50 ">
                    <div class="">
                        <div class="w-full h-[200px] ">

                            @if ($news['image'])
                                <img class="object-cover h-full w-full rounded-tl-md rounded-tr-md "
                                    src="{{ url() . 'news/img/' . $news['id'] }}" alt="{{ $news['title'] }}">
                            @endif
                        </div>
                        <div class="p-4 flex flex-col gap-4">
                            <b>{{ $news['title'] }}</b>
                            <p>
                                {{ substr($news['content'], 0, 50) }}

                            </p>

                            <hr>

                            <div class="flex flex-row justify-between px-4 ">
                                <div class="cursor-pointer"> <a
                                        href="{{ url('' . $news['lang'] === 'fa' ? '/admin/editNews' . '/' . $news['id'] : '/admin/editNewsEn' . '/' . $news['id']) }}"><small>
                                            ویرایش </small></a> </div>
                                <div><small class="text-red-300 cursor-pointer removeItem" data-id="{{ $news['id'] }}"
                                        data-title="{{ $news['title'] }}"> حذف </small></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach





        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ url('scripts/NewsList.js?v=1') }}" type="module"></script>
@endSection
