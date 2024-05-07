<?= $this->extend('templates/admin') ?>
<?= $this->section('content') ?>

<div class="flex flex-col gap-4 p-2 my-4 ">


    <form id="newsForm">
        <div class="flex flex-col gap-6 p-4 bg-slate-50 justify-center rounded-[10px]">
            <div class="flex flex-col gap-2">
                <label for="">عنوان </label>
                <input require id="title" name="title" type="text" class="p-2 rounded-[10px] bg-gray-100   outline-[#0284c7] " placeholder="عنوان">
            </div>
            <div class="flex flex-col gap-2">
                <label for=""> عنوان انگلیسی </label>
                <input require id="title_en" name="title_en" type="text" class="p-2 rounded-[10px] bg-gray-100   outline-[#0284c7] " placeholder="عنوان">
            </div>
            <div class="flex flex-col gap-2">
                <label for=""> دسته بندی </label>
                <select require id="category" name="category" type="text" class="p-2 rounded-[10px] bg-gray-100   outline-[#0284c7] ">
                    <?php
                    foreach ($categories as $category) { ?>
                        <option value="<?= $category['id'] ?>"><?= $category['title'] ?></option>
                    <?php } ?>
                    ?>
                </select>

            </div>
            <div class="flex flex-col gap-2">
                <label for=""> متن </label>
                <textarea require id="content" name="content" type="text" class="p-2 rounded-[10px] bg-gray-100   outline-[#0284c7] "></textarea>

            </div>

            <div class="flex flex-col gap-2">
                <label for=""> متن انگلیسی </label>
                <textarea require id="content_en" name="content_en" type="text" class="p-2 rounded-[10px] bg-gray-100   outline-[#0284c7] "></textarea>

            </div>

            <div class="flex flex-col gap-2">
                <label for=""> تصویر </label>
                <input id="img" name="img" type="file" accept="image/*" class="p-2 rounded-[10px] bg-gray-100   outline-[#0284c7] ">
            </div>
            <div class="text-center">
                <button id="actionBtn" type="button" class="p-2 bg-green-500 rounded-[10px] text-white ">
                    <b>اعمال</b>
                </button>
            </div>
        </div>

    </form>
</div>

<?= $this->endSection() ?>

<?= $this->section("scripts") ?>


 <script src="<?= base_url('scripts/NewsAdd.js?v=1') ?>" type="module"></script>


<?= $this->endSection("scripts") ?>