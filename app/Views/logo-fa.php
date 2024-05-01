<?= $this->extend('templates/fa') ?>
<?= $this->section('content') ?>

<!-- Start Page Title Area -->
<div class="page-title-area item-bg-5">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>دانلود لوگو</h2>
                    <ul>
                        <li><a href="<?= base_url('/'); ?>">خانه</a></li>
                        <li>دانلود لوگو</li>
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
        <div class="row ">
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="icon bg-deb0fe">
                        <i class="flaticon-tick"></i>
                    </div>
                    <h3>144*144</h3>
                    <a download="144.png" href="<?= base_url('assets/img/logo.png') ?>" class="read-btn"> دانلود </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="icon bg-deb0fe">
                        <i class="flaticon-tick"></i>
                    </div>
                    <h3>192*192</h3>
                    <a download="192.png" href="<?= base_url('assets/img/logo.png') ?>" class="read-btn"> دانلود </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="icon bg-deb0fe">
                        <i class="flaticon-tick"></i>
                    </div>
                    <h3> 512*512</h3>
                    <a download="512.png" href="<?= base_url('assets/img/logo.png') ?>" class="read-btn"> دانلود</a>
                </div>
            </div>
        </div>


    </div>
</section>
<!-- End Project Details Area -->


<?= $this->endSection() ?>