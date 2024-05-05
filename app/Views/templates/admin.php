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

</head>

<body dir="rtl" class="bg-gray-200">
    <div class="flex flex-row h-svh	">
        <aside class="w-[250px] ">
            <div class="flex flex-col gap-2 bg-[#1f2937] text-white h-full">
                <div class="p-4  ">
                    <b> </b>
                </div>
                <div class="p-2 border-b border-slate-200 cursor-pointer">
                    <a href="<?= base_url('/admin/category') ?>"><b>دسته بندی</b></a>
                </div>
                <div class="p-2 border-b border-slate-200 cursor-pointer">
                    <a href="<?= base_url('/admin/news') ?>"><b>اخبار</b></a>
                </div>
            </div>
        </aside>
        <main class="w-full h-full">
            <header class="h-10 w-full bg-slate-50 ">

            </header>
            <div class="md:w-[80%] md:mx-auto">
            <?= $this->renderSection('content') ?>
            </div>
        </main>
    </div>

</body>
<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>

<script src="<?= base_url('scripts/common.js') ?>" type="module"></script>

<?= $this->renderSection('scripts') ?>


</html>