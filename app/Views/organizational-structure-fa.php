<?= $this->extend('templates/fa') ?>
<?= $this->section('content') ?>

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-5">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>ساختار سازمانی</h2>
                        <ul>
                            <li><a href="<?= base_url('/'); ?>">خانه</a></li>
                            <li>ساختار سازمانی</li>
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
                <div class="col-lg-12 col-md-12 ">
                    <div class="project-details-image translateXOrganizational" >
                        <img src="<?=base_url('assets-rtl/uploads/Picture1.png')?>" alt="projects">
                    </div>
                </div>


                <div class="col-lg-12 col-md-12">
                    <div class="projects-details-desc">
                        <h3>ساختار سازمانی</h3>

                        <div class="project-details-info d-none">
                            <div class="single-info-box">
                                <h4>نویسنده</h4>
                                <span>امین سپهری</span>
                            </div>

                            <div class="single-info-box">
                                <h4>دسته</h4>
                                <span>جایزه</span>
                            </div>

                            <div class="single-info-box">
                                <h4>تاریخ</h4>
                                <span>28 فردردین, 1403</span>
                            </div>

                            <div class="single-info-box">
                                <h4>Share</h4>
                                <ul class="social">
                                    <li><a href="#" target="_blank"><i class="flaticon-facebook"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-pinterest"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-instagram"></i></a></li>
                                </ul>
                            </div>

                            <div class="single-info-box d-none">
                                <a href="#" class="default-btn">Live Preview</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Project Details Area -->


<?= $this->endSection() ?>