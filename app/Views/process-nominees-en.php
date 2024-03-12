<?= $this->extend('templates/en') ?>
<?= $this->section('content') ?>

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-5">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Selection Process</h2>
                        <ul>
                            <li><a href="<?=base_url('/')?>">Home</a></li>
                            <li>Selection Process</li>
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
                        <h3>Selection Process</h3>

                        <p>The entries submitted to the UNESCO Prize undergo two stages:</p>

                        <div class="features-text">
                            <h4><i class="flaticon-tick"></i> Evaluation committees </h4>
                            <p>review the documents and qualifications of the works in terms of general characteristics. According to the regulations, works that have previously won at least one valid international scientific prize are excluded from proceeding to the next stage. Additionally, works submitted personally and outside the proper nomination process by the nominating entities are not accepted at this stage.</p>
                        </div>

                        <div class="features-text">
                            <h4><i class="flaticon-tick"></i> In the final stage </h4>
                            <p>in each category of the prize, a science committee conducts a rigorous evaluation of the candidate’s academic achievements and chooses the nominees.</p>
                        </div>

                        <div class="features-text">
                            <h4><i class="flaticon-tick"></i> Deadline for Submission of Entries: </h4>
                            <p>The deadline for individuals and legal entities in the field of science and technology to introduce and submit nominated works for this round of the UNESCO Prize is Saturday, June 22, 2024. </p>
                        </div>

                        <div class="project-details-info d-none">
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