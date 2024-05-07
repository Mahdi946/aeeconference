<?= $this->extend('templates/admin') ?>
<?= $this->section('content') ?>

<div class="flex flex-col gap-4 p-2 my-4 ">


    <form id="newsForm">
        <div class="flex flex-col gap-6 p-4 bg-slate-50 justify-center rounded-[10px]">
            <?php
    
            $edit = false;
            include_once 'NewsItem.php';
            ?>

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