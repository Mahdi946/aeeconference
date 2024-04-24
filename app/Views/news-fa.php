<?= $this->extend('templates/fa') ?>
<?= $this->section('content') ?>


<div class="page-title-area item-bg-1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>  اخبار </h2>
                    <ul>
                        <li><a href="<?= base_url('/') ?>">خانه</a></li>
                        <li> اخبار  </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="conditions-section ptb-100">
    <div class="container">
   
    <div class="section-title">
            <h2>اخبار</h2>
            <p></p>
            <div class="bar"></div>
        </div>

        <div class="row">
            <?php foreach ($allNews as $news) { ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="image">
                            <a href="<?=base_url("/news/".$news->id)?>">
                                <img src="<?=$news->image?>" alt="<?=$news->title?>">
                            </a>
                        </div>

                        <div class="content">
                            <span><?=$news->date?></span>
                            <h3>
                                <a href="<?=base_url("/news/".$news->id)?>">
                                    <?=$news->title?>
                                </a>
                            </h3>
                            <p>
                                <?=substr($news->content,0,50) ?>

                            </p>
                            <a href="<?=base_url("/news/".$news->id)?>" class="read-more">  مشاهده </a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>



        </div>


        <div class="default-shape">
            <div class="shape-1">
                <img src="<?= base_url('assets/img/shape/4.png') ?>" alt="image">
            </div>

            <div class="shape-2 rotateme">
                <img src="<?= base_url('assets/img/shape/5.svg') ?>" alt="image">
            </div>

            <div class="shape-3">
                <img src="<?= base_url('assets/img/shape/6.svg') ?>" alt="image">
            </div>

            <div class="shape-4">
                <img src="<?= base_url('assets/img/shape/7.png') ?>" alt="image">
            </div>

            <div class="shape-5">
                <img src="<?= base_url('assets/img/shape/8.png') ?>" alt="image">
            </div>
        </div>
</section>

<?= $this->endSection() ?>