<?= $this->extend('templates/en') ?>
<?= $this->section('content') ?>

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-5">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Organizational Structure</h2>
                        <ul>
                            <li><a href="<?=base_url('/')?>">Home</a></li>
                            <li>Organizational Structure</li>
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
                        <img src="<?=base_url('assets/uploads/Picture1.png')?>" alt="projects">
                    </div>
                </div>


                <div class="col-lg-12 col-md-12">
                    <div class="projects-details-desc">
                        <h3>Organizational Structure</h3>


                        <div class="project-details-info">
                            <div class="single-info-box">
                                <h4>author</h4>
                                <span>James Anderson</span>
                            </div>

                            <div class="single-info-box">
                                <h4>Category</h4>
                                <span>Nomination</span>
                            </div>

                            <div class="single-info-box">
                                <h4>Date</h4>
                                <span>February 28, 2024</span>
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