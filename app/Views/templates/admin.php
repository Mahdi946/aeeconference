<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets-rtl/css/style.css') ?>">
    <script src="<?= base_url('ck/ckeditor.js') ?>"></script>
    <script src="<?= base_url('ck/AddCkToPage.js') ?>"></script>

</head>

<body dir="rtl" class="bg-gray-200">
    <div class="flex flex-row h-svh	">
        <aside class="w-[250px] ">
            <div class="flex flex-col gap-2 bg-[#1f2937] text-white h-full">
                <div class="p-4  ">
                    <b> </b>
                </div>
                <a href="<?= base_url('/') ?>">
                    <div class="p-2 border-b border-slate-200 cursor-pointer">
                        <b>خانه</b>
                    </div>
                </a>
                <a href="<?= base_url('/admin/category') ?>">
                    <div class="p-2 border-b border-slate-200 cursor-pointer">
                        <b>دسته بندی</b>
                    </div>
                </a>
                <a href="<?= base_url('/admin/news') ?>">
                    <div class="p-2 border-b border-slate-200 cursor-pointer">
                        <b>اخبار</b>
                    </div>
                </a>
                <a href="<?= base_url('/admin/logout') ?>">
                    <div class="p-2 border-b border-slate-200 cursor-pointer text-red-300">
                        <b>خروج</b>
                    </div>
                </a>
            </div>
      
        </aside>
        <main class="w-full h-full">
            <header class="h-10 w-full bg-slate-50 ">

            </header>
            <div class="md:w-[80%] md:mx-auto max-h-[90%] overflow-y-auto min-w-[330px]">
                <?= $this->renderSection('content') ?>
            </div>
        </main>
    </div>

</body>
<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>

<script src="<?= base_url('scripts/common.js') ?>" type="module"></script>

<?= $this->renderSection('scripts') ?>


</html>