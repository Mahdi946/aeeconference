<?= $this->extend('templates/en') ?>
<?= $this->section('content') ?>

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-5">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Call for Entries</h2>
                        <ul>
                            <li><a href="<?=base_url('/')?>">Home</a></li>
                            <li>Call for Entries</li>
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
                        <h3>Call for Entries</h3>

                        <p>The scientific committee of the award each year asks the deans of universities, science centers, science academies, science and technology parks, science and technology associations, and prominent scientists from all over the world to nominate their candidates according to the prominence of the work. The secretariat must be informed by a certain date about the priority, impact, and owner of the work. The winners will be awarded a certificate, a trophy, and a special cash gift in a grand ceremony attended by international personalities.</p>


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