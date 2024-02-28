<?= $this->extend('templates/en') ?>
<?= $this->section('content') ?>
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-5">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Contact</h2>
                        <ul>
                            <li><a href="<?= base_url('/'); ?>">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Contact Box Area -->
    <section class="contact-box pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-box h-100">
                        <i class="flaticon-pin"></i>
                        <div class="content-title">
                            <h3>Address</h3>
                            <p>Iran Secretariat of the UNESCO Prize, Science and Technology Park of the University of Tehran, Farshi Moghadam, North Kargar, Tehran, Iran</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-box h-100">
                        <i class="flaticon-envelope"></i>
                        <div class="content-title">
                            <h3>Email</h3>
                            <a href="mailto:info@inotech-unescoprize.org">info@Inotech-UnescoPrize.org</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-contact-box h-100">
                        <i class="flaticon-phone-call"></i>
                        <div class="content-title">
                            <h3>Phone</h3>
                            <a href="tel:+982188220700;180">+98 (21) 88220700</a>
                            <a href="tel:02188220700;180">(Extension 180)</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Box Area -->

    <!-- Start Contact Area -->
    <section class="contact-section pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-text">
                        <h3>Have Any Questions About Us?</h3>
                        <p>If you have any suggestion or criticism, you can contact us using the above methods.</p>
                    </div>


                </div>

                <div class="col-lg-6">
                    <div class="contact-image">
                        <img src="<?=base_url('assets/img/contact.png')?>" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

<?= $this->endSection() ?>