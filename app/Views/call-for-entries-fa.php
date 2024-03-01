<?= $this->extend('templates/fa') ?>
<?= $this->section('content') ?>

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-5">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>فراخوان</h2>
                        <ul>
                            <li><a href="<?= base_url('/'); ?>">خانه</a></li>
                            <li>فراخوان</li>
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
                        <h3>فراخوان</h3>

                        <p>در هر دوره کمیته علمی جایزه از روسای دانشگاه‌ها، مراکز علمی، فرهنگستان‌های علوم، پارک‌های علم و فناوری، انجمن‌های علمی و فناوری و دانشمندان برجسته سراسر جهان میخواهد که نامزدهای خود را با در نظر داشتن برجسته بودن اثر از نظر اولویت اثر، تاثیر اثر و صاحب اثر تا تاریخ مشخص به دبیرخانه اعلام کنند. برگزیدگان علاوه بر دریافت لوح و مدال جایزه‌، هدیه‌ای ویژه را به صورت نقدی، در مراسمی باشکوه و با حضور شخصیت های بین المللی دریافت می کند.</p>

                        <div class="project-details-info">
                            <div class="single-info-box">
                                <h4>نویسنده</h4>
                                <span>امین سپهری</span>
                            </div>

                            <div class="single-info-box">
                                <h4>دسته</h4>
                                <span>نامزدی</span>
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