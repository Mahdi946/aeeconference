@extends('templates.admin') 
@section('content')

<div class="flex flex-col gap-4 p-2 my-4 max-h-screen ">



    <form id="newsForm">
        <div class="flex flex-col gap-6 p-4 bg-slate-50 justify-center rounded-[10px]">
            {{ $edit = true }}

            
            @include_once('NewsItem')
          
         






        
            <div class="text-center">
                <button id="actionBtn" type="button" class="p-2 bg-green-500 rounded-[10px] text-white ">
                    <b>اعمال</b>
                </button>
            </div>
        </div>

    </form>
</div>

@endsection

@section("scripts")


<script src="<?= base_url('scripts/NewsUpdate.js?v=1') ?>" type="module"></script>


@endSection