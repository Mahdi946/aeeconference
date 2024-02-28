<?= $this->extend('templates/fa') ?>
<?= $this->section('content') ?>

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-5">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>جوایز</h2>
                        <ul>
                            <li><a href="<?= base_url('/'); ?>">خانه</a></li>
                            <li>جوایز</li>
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
                        <img src="<?=base_url('assets-rtl/img/services-details/1.jpg')?>" alt="projects">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="project-details-image">
                        <img src="<?=base_url('assets-rtl/img/services-details/2.jpg')?>" alt="projects">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="projects-details-desc">
                        <h3>جوایز</h3>

                        <p>جايزه در يكي از دوحالت زير به برگزيدگان اعطا میگردد كه شامل مزاياي مادي و معنوي از جمله تقدیرنامه، نشان جایزه فناوری و نوآوری و هدیه ویژه است. </p>

                        <div class="features-text">
                            <h4><i class="flaticon-tick"></i> برگزيدگان برتر: </h4>
                            <p>آن دسته از برگزيدگان خواهند بود كه داراي بالاترين امتياز در حوزه فناوري و نوآوري ذيربط بوده و حد نصاب امتياز كميته علمي و ارزيابي را نيز كسب نموده باشند.</p>
                        </div>

                        <div class="features-text">
                            <h4><i class="flaticon-tick"></i> برگزيدگان شايسته تقدير: </h4>
                            <p>آن دسته از برگزيدگان خواهند بود كه حد نصاب امتياز لازم جهت برگزيدگان برتر را كسب ننموده اند، ولي با پيشنهاد كميته علمي و ارزيابي و تائيد شوراي سياستگذاري، جايزه به آنان اعطا مي شود.</p>
                        </div>


                        <div class="features-text">
                            <h4> ** </h4>
                            <p>« میزان و نوع هدیه ویژه در هر دوره توسط شورای سیاست گذاری تعیین و اعلام می شود. »</p>
                        </div>

                        <div class="project-details-info">
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