<?= $this->extend('templates/fa') ?>
<?= $this->section('content') ?>
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-5">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>تماس با ما</h2>
                        <ul>
                            <li><a href="<?= base_url('/'); ?>">خانه</a></li>
                            <li>تماس با ما</li>
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
                            <h3>موقعیت</h3>
                            <p>ایران ، تهران، خیابان ۱۶ شهید فرشی مقدم، پارک علم وفناوری دانشگاه تهران، ساختمان شماره یک، دبیرخانه جایزه یونسکو.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-box h-100">
                        <i class="flaticon-envelope"></i>
                        <div class="content-title">
                            <h3>ایمیل</h3>
                            <a href="mailto:info@inotech-unescoprize.org">info@Inotech-UnescoPrize.org</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-contact-box h-100">
                        <i class="flaticon-phone-call"></i>
                        <div class="content-title">
                            <h3>تلفن</h3>
                            <a href="tel:02188220700;180">021-88220700</a>
                            <a href="tel:02188220700;180">(داخلی 180)</a>
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
                        <h3>پیشنهادی برای ما دارید؟</h3>
                        <p>در صورت داشتن هر گونه پیشنهاد و انتقادی می توانید از روش های بالا با ما در تماس باشید. </p>
                    </div>

                    <div class="contact-form d-none">
                        <form id="contactForm">
                            <div class="form-group">
                                <label>نام کاربری</label>
                                <input type="text" name="name" id="name" class="form-control" required data-error="لطفا نام خود را وارد کنید" placeholder="نام شما">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <label>ایمیل</label>
                                <input type="email" name="email" id="email" class="form-control" required data-error="لطفا ایمیل خود را وارد کنید" placeholder="ایمیل شما">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <label>موضوع</label>
                                <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="لطفا موضوع خود را وارد کنید" placeholder="موضوع">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <label>پیام</label>
                                <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="پیام خود را بنویسید" placeholder="پیام شما"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="send-btn">
                                <button type="submit" class="default-btn">
                                    ارسال پیام
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-image">
                        <img src="<?=base_url('assets-rtl/img/contact.png')?>" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

<?= $this->endSection() ?>