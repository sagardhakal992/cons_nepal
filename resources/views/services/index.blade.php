@extends("layout")
@section("content")
<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->


<!-- Page Title -->
<section class="page-title p_relative" style="background-image: url(assets/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="content-box p_relative pt_170 pb_170">
            <h1 class="d_block fs_40 lh_50 color_white fw_exbold color-white">Our Services</h1>
            <ul class="bread-crumb p_absolute r_0 b_0 d_iblock pl_30 pr_30 bg-white clearfix pt_4 pb_4">
                <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold pr_13 mr_5"><a href="index.html" class="color_white hov-color">Home</a></li>
                <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold">Services</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->

<div class="service-details">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                @include("services.element.sidebar")
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="service-details-content">
                    <div class="content-style-one">
                        <figure class="image-box"><img src="https://www.arcticimmigration.com/wp-content/uploads/2021/05/young-real-estate-agent-with-touchpad-explaining-h-ZWE8CAT-700x466.jpg" alt=""></figure>
                        <div class="group-title">
                            <h2>Our Services</h2>
                        </div>
                        <div class="text">
                            {{-- <h3>Sponsoring and managing work visas parts now becoming results in the experience with future guranteed.</h3> --}}
                            <p>
                                We provide a range of services to help students achieve their dreams of studying in Canada. Our team of experts is dedicated to providing personalized attention to each student, and we offer a range of services to ensure that our clients have a smooth and successful experience.
                            </p>
                            <p>
                                Our services include proper counseling by experienced professionals to help students make informed decisions about their education and career. We assist students in selecting the best course and university to meet their needs and goals, taking into account factors such as academic background, career aspirations, and budget.
                            </p>
                            <p>
                                We also provide support with the documentation and processing required for admission to universities in Canada, helping students navigate the complex application process with ease. Our team provides assistance with visa applications, ensuring that our clients have the necessary documentation and information to obtain their student visa and any accompanying spouse work permit.
                            </p>
                            <p>
                                We understand that life as a student in a new country can be challenging, which is why we offer post-landing services to our clients. Our team provides support with finding accommodation, opening bank accounts, and getting a mobile phone, among other things. We also provide guidance on obtaining a post-graduation work permit, allowing our clients to stay in Canada and gain valuable work experience after completing their studies. Basically we will provide the following service
                            </p>
                        </div>
                    </div>

                     {{-- <div class="accordion-content">
                        <h3>Frequently asked Questions</h3>
                        <ul class="accordion-box">
                            <li class="accordion block active-block">
                                <div class="acc-btn active">
                                    <div class="icon-outer"></div>
                                    <h5>How long does it take for a Student Visa to process?</h5>
                                </div>
                                <div class="acc-content current">
                                    <p>Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"></div>
                                    <h5>What is the fee structure for visa submission?</h5>
                                </div>
                                <div class="acc-content">
                                    <p>Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                                </div>
                            </li>
                            <li class="accordion block">
                                 <div class="acc-btn">
                                    <div class="icon-outer"></div>
                                    <h5>What are the important things to know as a Student Visa applicant?</h5>
                                </div>
                                <div class="acc-content">
                                    <p>Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                                </div>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- service-section -->
<section class="service-section p_relative pt_120 pb_120">
    <div class="auto-container">

        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block b_radius_10 mb_30">
                        <figure class="image-box p_relative d_block"><img src="assets/images/resource/service-1.jpg" alt=""></figure>
                        <div class="lower-content p_relative d_block pt_25 pr_30 pb_30 pl_40">
                            <div class="icon-box p_absolute r_20 w_100 h_100 lh_110 centred fs_65 bg-white theme-color b_radius_10 tran_5 z_2"><i class="flaticon-family"></i></div>
                            <h3 class="d_block fs_24 lh_30 mb_25"><a href="{{route('services.student-screening')}}" class="d_iblock black-color hov-color">Student Screening</a></h3>
                            <p class="mb_15">Arctic Educational Consultancy's student screening service is designed to provide universities, colleges, and education providers with a safe, secure, and customized screening procedure for Nepalese students seeking enrollment.Our experienced "student assistance team".. </p>
                            <div class="link"><a href="{{route('services.student-screening')}}" class="p_relative d_iblock fs_14 fw_sbold black-color hov-color pl_12"><i class="fa fa-angle-right"></i>Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block b_radius_10 mb_30">
                        <figure class="image-box p_relative d_block"><img src="assets/images/resource/service-2.jpg" alt=""></figure>
                        <div class="lower-content p_relative d_block pt_25 pr_30 pb_30 pl_40">
                            <div class="icon-box p_absolute r_20 w_100 h_100 lh_110 centred fs_65 bg-white theme-color b_radius_10 tran_5 z_2"><i class="flaticon-work-from-home"></i></div>
                            <h3 class="d_block fs_24 lh_30 mb_25"><a href="{{route('services.university-application-assistance')}}" class="d_iblock black-color hov-color">University Application Assistance</a></h3>
                            <p class="mb_15">Arctic Educational Consultancy offers university application assistance to Nepalese students seeking to study in Canada. Our team of experienced education consultants provides personalized guidance and support throughout the application process. </p>
                            <div class="link"><a href="{{route('services.university-application-assistance')}}" class="p_relative d_iblock fs_14 fw_sbold black-color hov-color pl_12"><i class="fa fa-angle-right"></i>Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block b_radius_10 mb_30">
                        <figure class="image-box p_relative d_block"><img src="assets/images/resource/service-3.jpg" alt=""></figure>
                        <div class="lower-content p_relative d_block pt_25 pr_30 pb_30 pl_40">
                            <div class="icon-box p_absolute r_20 w_100 h_100 lh_110 centred fs_65 bg-white theme-color b_radius_10 tran_5 z_2"><i class="flaticon-travel"></i></div>
                            <h3 class="d_block fs_24 lh_30 mb_25"><a href="{{route('services.documentation-guidance')}}" class="d_iblock black-color hov-color">Documentation Guidance</a></h3>
                            <p class="mb_15">Arctic Educational Consultancy provides documentation guidance to Nepalese students who are seeking to study in Canada. We understand that the documentation process can be complex and overwhelming, which is why we offer personalized ..</p>
                            <div class="link"><a href="{{route('services.documentation-guidance')}}" class="p_relative d_iblock fs_14 fw_sbold black-color hov-color pl_12"><i class="fa fa-angle-right"></i>Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block b_radius_10">
                        <figure class="image-box p_relative d_block"><img src="assets/images/resource/service-4.jpg" alt=""></figure>
                        <div class="lower-content p_relative d_block pt_25 pr_30 pb_30 pl_40">
                            <div class="icon-box p_absolute r_20 w_100 h_100 lh_110 centred fs_65 bg-white theme-color b_radius_10 tran_5 z_2"><i class="flaticon-travel-1"></i></div>
                            <h3 class="d_block fs_24 lh_30 mb_25"><a href="{{route('services.documentation-guidance')}}" class="d_iblock black-color hov-color">Offer Letter Confirmation</a></h3>
                            <p class="mb_15">Arctic Educational Consultancy provides offer letter confirmation services to Nepalese students who have received acceptance letters from Canadian universities. We understand that offer letter confirmation is an important step in the ...</p>
                            <div class="link"><a href="{{route('services.documentation-guidance')}}" class="p_relative d_iblock fs_14 fw_sbold black-color hov-color pl_12"><i class="fa fa-angle-right"></i>Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block b_radius_10">
                        <figure class="image-box p_relative d_block"><img src="assets/images/resource/service-5.jpg" alt=""></figure>
                        <div class="lower-content p_relative d_block pt_25 pr_30 pb_30 pl_40">
                            <div class="icon-box p_absolute r_20 w_100 h_100 lh_110 centred fs_65 bg-white theme-color b_radius_10 tran_5 z_2"><i class="flaticon-reading"></i></div>
                            <h3 class="d_block fs_24 lh_30 mb_25"><a href="index.html" class="d_iblock black-color hov-color">Counseling</a></h3>
                            <p class="mb_15">Arctic Educational Consultancy provides counseling services to Nepalese students who are considering studying in Canada. We understand that choosing the right university and program can be a challenging process, which is why we offer personalized guidance and support ...</p>
                            <div class="link"><a href="index.html" class="p_relative d_iblock fs_14 fw_sbold black-color hov-color pl_12"><i class="fa fa-angle-right"></i>Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- service-section end -->


<!-- cta-section -->
<section class="cta-section p_relative pb_120">
    <div class="auto-container">
        <div class="inner-container p_relative d_block theme-color-bg b_radius_10 pt_85 pb_75 pl_60 clearfix">
            <div class="pattern-layer p_absolute l_0 t_0" style="background-image: url(assets/images/shape/shape-4.png);"></div>
            <figure class="image-box p_absolute t_0 r_0"><img src="assets/images/resource/cta-1.jpg" alt=""></figure>
            <div class="text pull-left">
                <h2 class="d_block fw_exbold color-white">Are you Looking for Visa <br />Consultation?</h2>
            </div>
            <div class="btn-box pull-right mt_5">
                <a href="index.html" class="theme-btn">book appointment</a>
            </div>
        </div>
    </div>
</section>
<!-- cta-section end -->


@endsection
