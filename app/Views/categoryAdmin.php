<?= $this->extend('templates/admin') ?>
<?= $this->section('content') ?>

<div class="flex flex-col gap-4 p-2">
    <div class="flex flex-row gap-2   flex-wrap">
        <div class="bg-slate-50 rounded-md  flex flex-col gap-4 p-8 justify-center w-[80%] mx-auto flex-1 ">
            <div class="flex flex-col gap-2 md:w-[60%]">
                <label for="">عنوان را وارد نمایید</label>
                <input id="titleCategory" type="text" class="p-2 rounded-[10px] bg-gray-200   outline-[#0284c7] " placeholder="عنوان">
            </div>
            <div class="flex flex-row flex-wrap gap-2 justify-center">
                <button id="actionBtn" class="p-2 bg-green-500 rounded-[10px] text-white order-1 ">
                    <small> اعمال تغییرات </small>
                </button>
                <button style="display: none;" id="cancelBtn" class="p-2 bg-gray-300 rounded-[10px]  ">
                    <small>انصراف</small>
                </button>
            </div>
        </div>
    </div>


    <div class="flex flex-row gap-4  flex-wrap p-2 justify-center  md:justify-start " id="result">

    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section("scripts")?>


<script src="<?= base_url('scripts/category.js?v=1') ?>" type="module"></script>


<?=$this->endSection("scripts")?>

