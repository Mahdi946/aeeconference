<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-rtl/css/style.css') }}">

    <script src="{{ asset('ck/ckeditor.js') }}"></script>
    <script src="{{ asset('ck/AddCkToPage.js') }}"></script>

</head>

<body dir="rtl" class="bg-gray-200">
    <div class="flex flex-row h-svh	">
        <aside class="w-[250px] ">
            <div class="flex flex-col gap-2 bg-[#1f2937] text-white h-full">
                <div class="p-4  ">
                    <b> </b>
                </div>
                <a href="{{ url('/') }}">
                    <div class="p-2 border-b border-slate-200 cursor-pointer">
                        <b>خانه</b>
                    </div>
                </a>
                
                <a href="{{ url('/admin/category') }}">
                    <div class="p-2 border-b border-slate-200 cursor-pointer">
                        <b>دسته بندی</b>
                    </div>
                </a>

              
                    <a href="{{ url('/admin/news') }}">
                    <div class="p-2 border-b border-slate-200 cursor-pointer">
                        <b>اخبار</b>
                    </div>
                </a>

                

                <a href="{{ url('/admin/logout') }}">
                    <div class="p-2  border-slate-200 cursor-pointer text-red-300">
                        <b>خروج</b>
                    </div>
                </a>
            </div>

        </aside>
        <main class="w-full h-full">
            <header class="h-10 w-full bg-slate-50 ">

            </header>
            <div class="md:w-[80%] md:mx-auto max-h-[90%] overflow-y-auto min-w-[330px]">
                @yield('content')
            </div>
        </main>
    </div>

</body>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>

<script src="{{ asset('scripts/common.js') }}" type="module"></script>

@yield('scripts')


</html>
