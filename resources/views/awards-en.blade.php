@extends('templates.en')
@section('content')

<!-- Start Page Title Area -->
<div class="page-title-area item-bg-5">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Prize</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Prize</li>
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
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-3 ">
                <div class="single-counter">
                    <div class="icon">
                        <i class="flaticon-trophy"></i>
                    </div>

                    <h3>
                       <span>$</span> <span style="direction: ltr;" class=" counters" data-countValue="3000">0</span>
                    </h3>
                    <p> dollar </p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- <div class="col-lg-6 col-md-6">
                <div class="project-details-image">
                    <img src="{{ asset('assets/img/services-details/1.jpg') }}" alt="projects">
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="project-details-image">
                    <img src="{{ asset('assets/img/services-details/2.jpg') }}" alt="projects">
                </div>
            </div> -->

            <div class="col-lg-12 col-md-12">
                <div class="projects-details-desc">
                    <h3>Prize</h3>

                    <p>The prize will be awarded in one of the following two categories and includes a certificate of appreciation, the UNESCO Technology and Innovation Prize trophy, and special gifts.</p>

                    <div class="features-text">
                        <h4><i class="flaticon-tick"></i> Grand Winners </h4>
                        <p>Those who have the highest scores in the relevant technology and innovation field and have also achieved the required score from the scientific and evaluation committee.</p>
                    </div>

                    <div class="features-text">
                        <h4><i class="flaticon-tick"></i> Special Honors </h4>
                        <p>Those who did not meet the required score for the top winners but, with the recommendation of the scientific committee and evaluation and the approval of the policy council, will be awarded.</p>
                    </div>

                    <div class="features-text">
                        <h4> ** </h4>
                        <p>« The amount and type of special gifts in each round will be determined and announced by the Policy Advisory Council »</p>
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

@endSection