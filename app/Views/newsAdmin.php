<?= $this->extend('templates/admin') ?>
<?= $this->section('content') ?>

<div class="flex flex-col gap-4 p-2 my-4">

    <div class="flex flex-row">
        <div class="w-[150px]">
            <a class="cursor-pointer p-2 bg-green-500 rounded-[10px] text-white" href="<?= base_url('/admin/addNews'); ?>">
                افزودن خبر جدید
            </a>
        </div>
    </div>

    <div class="flex flex-row gap-2 flex-warp p-2 ">

        <?php foreach ($allNews as $news) { ?>
            <div class="w-[300px] rounded-md shadow-md bg-slate-50 ">
                <div class="">
                    <div class="w-full h-[200px] ">
                  
                        <?php if ($news['image']) { ?>
                            <img class="object-cover h-full w-full rounded-tl-md rounded-tr-md " src="<?= base_url().'news/img/'.$news['id'] ?>" alt="<?= $news['title'] ?>">
                        <?php } ?>
                    </div>  
                    <div class="p-4 flex flex-col gap-4">
                        <b><?= $news['title'] ?></b>
                        <p>
                            <?= substr($news['content'], 0, 50) ?>
    
                        </p>
    
                        <hr>

                        <div class="flex flex-row justify-between px-4 ">
                            <div class="cursor-pointer"> <a href="<?= base_url('/admin/editNews/'.$news['id']); ?>" ><small> ویرایش </small></a> </div>
                            <div><small class="text-red-300 cursor-pointer removeItem" data-id="<?=$news['id']?>" data-title="<?=$news['title']?>" > حذف </small></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>




    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section("scripts") ?>


 <script src="<?= base_url('scripts/NewsList.js?v=1') ?>" type="module"></script> 


<?= $this->endSection("scripts") ?>