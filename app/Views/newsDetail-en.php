<?= $this->extend('templates/en') ?>
<?= $this->section('content') ?>

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-5">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2><?=$news['title']?></h2>
                        <ul>
                            <li><a href="<?=base_url('/')?>">Home</a></li>
                            <li><a href="<?=base_url('/news')?>">News</a></li>
                            <li><?=$news['title']?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Project Details Area -->
    <section class="project-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="project-details-image">
                    <?php if ($news['image']) { ?>
                        <img class="  " src="<?= base_url() . 'news/img/' . $news['id'] ?>" alt="<?= $news['title'] ?>">
                    <?php } ?>
                    </div>
                </div>

              

                <div class="col-lg-12 col-md-12">
                    <div class="projects-details-desc">
                        <h3><?=$news['title']?></h3>


                        <div class="features-text">
                            <p>
                                <?=$news['content']?>
                            </p>
               
                        </div>
               


                     
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Project Details Area -->


<?= $this->endSection() ?>