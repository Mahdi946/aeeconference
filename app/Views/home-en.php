<?= $this->extend('templates/en') ?>
<?= $this->section('content') ?>


<!-- Start Banner Area -->
<div class="main-banner-area">
    <section class="clients-section ptb-100">
        <div class="container">

            <div class="clients-slider owl-carousel owl-theme">
                <div class="clients-item">
                    <img class="img-slider" src="assets/img/slider.jpg" alt="">
                </div>
                <div class="clients-item">
                    <img class="img-slider" src="assets/img/slider2.jpg" alt="">
                </div>


            </div>
        </div>
    </section>


</div>
<!-- End Banner Area -->





<!-- Start Blog Area -->
<section class="blog-section pt-100 pb-70">
    <div class="container bg-gray r-5 p-4">
        <!-- <div class="section-title">
            <h2>آخرین <span>اخبار</span> ما</h2>
            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
            <div class="bar"></div>
        </div> -->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="b-r">
                        <a href="single-blog.html">
                            <img src="assets/img/blog/1.jpg" alt="image" class="b-r">
                        </a>
                    </div>

                    <div class="content no-shadow">
                        <span>20 april 2024</span>
                        <h3>
                            <a href="#">
                                IEEE Blended Learning Program

                            </a>
                        </h3>
                        <p> An India-based offering, these courses are industry-reviewed and designed to impart skills to help you become an in-demand professional. </p>
                        <a href="single-blog-2.html" class="read-more"> more...</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="b-r">
                        <a href="single-blog.html">
                            <img src="assets/img/blog/2.jpg" alt="image" class="b-r">
                        </a>
                    </div>

                    <div class="content no-shadow ">
                        <span>20 april 2024</span>
                        <h3>
                            <a href="#">
                                Virtual IEEE educational events
                            </a>
                        </h3>
                        <p>
                            IEEE offers educational virtual events for practicing professionals, faculty,
                            and students on a variety of engineering topics. Many of these events are offered free of charge and are available for live broadcast or on-demand afterward.
                        </p>
                        <a href="single-blog-2.html" class="read-more"> more...</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="single-blog">
                    <div class="b-r">
                        <a href="single-blog.html">
                            <img src="assets/img/blog/3.jpg" alt="image" class="b-r">
                        </a>
                    </div>

                    <div class="content no-shadow">
                        <span>20 april 2024</span>
                        <h3>
                            <a href="#">
                                IEEE continuing education courses
                            </a>
                        </h3>
                        <p> Find courses in the latest technologies and career development skills to help you advance in your career by visiting the IEEE Learning Network (ILN). </p>
                        <a href="single-blog-2.html" class="read-more"> more...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->


<!-- Start Features Area -->
<section class="features-section pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2> </h2>
            <p> </p>
            <!-- <div class="bar"></div> -->
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="features-content">
                    <div class="icon">
                        <i class="flaticon-blueprint"></i>
                    </div>
                    <h3>Continuing professional education</h3>
                    <p>EEE offers courses on core and emerging technologies, as well as career development from across the institute on the IEEE Learning Network. IEEE member discounts are available. To learn more and begin taking courses, visit ILN today</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="features-content">
                    <div class="icon">
                        <i class="flaticon-update"></i>
                    </div>
                    <h3> Educational resources from IEEE Societies </h3>
                    <p>
                        Many IEEE Resource Centers offer educational and other resources related to specific fields of interest.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="features-content">
                    <div class="icon left-icon">
                        <i class="flaticon-security"></i>
                    </div>
                    <h3> University education resources</h3>
                    <p>
                    University programs from IEEE are designed to enhance the quality of university-level engineering programs by ensuring that students have the resources needed to succeed academically, and faculty members have opportunities for pedagogical and career development.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="features-content">
                    <div class="icon">
                        <i class="flaticon-clock"></i>
                    </div>
                    <h3> Career and job resources </h3>
                    <p>
                    Find employment. See what you are worth. Develop in your current job. Build your professional identity and plan your career.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Features Area -->





<?= $this->endSection() ?>