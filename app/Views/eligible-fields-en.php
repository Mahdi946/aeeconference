<?= $this->extend('templates/en') ?>
<?= $this->section('content') ?>

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-5">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Eligible Fields</h2>
                        <ul>
                            <li><a href="<?=base_url('/')?>">Home</a></li>
                            <li>Eligible Fields</li>
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
                <div class="col-lg-6 col-md-6">
                    <div class="project-details-image">
                        <img src="<?=base_url('assets/img/services-details/1.jpg')?>" alt="projects">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="project-details-image">
                        <img src="<?=base_url('assets/img/services-details/2.jpg')?>" alt="projects">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="projects-details-desc">
                        <h3>Eligible Fields</h3>

                        <p>Every two years the Policy Council selects the fields of focus, the first period of awarding the UNESCO Technology and Innovation Award will be held in two fields: "Health" and "Energy and Water".</p>


                        <div class="features-text">
                            <h4> Health Subjects: </h4>
                            <p>
                                <i class="flaticon-tick"></i>
                                Health technologies and medical interventions.
                            </p>
                            <p>
                                <i class="flaticon-tick"></i>
                                Non-invasive and screening technologies.
                            </p>
                            <p>
                                <i class="flaticon-tick"></i>
                                Recombinant drug technologies.
                            </p>
                            <p>
                                <i class="flaticon-tick"></i>
                                Diagnostic and screening technologies.
                            </p>
                            <p>
                                <i class="flaticon-tick"></i>
                                Artificial intelligence technologies in health
                            </p>
                        </div>
                        <div class="features-text">
                            <h4> Energy and Water Subjects: </h4>
                            <p>
                                <i class="flaticon-tick"></i>
                                Sustainable water resources.
                            </p>
                            <p>
                                <i class="flaticon-tick"></i>
                                Data-centric technologies.
                            </p>
                            <p>
                                <i class="flaticon-tick"></i>
                                Clean and renewable energy technologies.
                            </p>
                            <p>
                                <i class="flaticon-tick"></i>
                                Technologies for Energy Conversion and Transmission.
                            </p>
                            <p>
                                <i class="flaticon-tick"></i>
                                Technologies related to energy resource management.
                            </p>
                            <p>
                                <i class="flaticon-tick"></i>
                                Energy conservation technologies, maintenance, and efficient energy resource utilization.
                            </p>
                        </div>



                        <div class="project-details-info d-none">
                            <div class="single-info-box">
                                <h4>author</h4>
                                <span>James Anderson</span>
                            </div>

                            <div class="single-info-box">
                                <h4>Category</h4>
                                <span>Prize</span>
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