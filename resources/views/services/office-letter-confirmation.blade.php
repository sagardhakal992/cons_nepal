@extends("layout")
@section("content")

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="{{route('home')}}"><img src="/assets/images/logo-2.png" alt="" title=""></a></div>
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
                        <li><a href="{{route('home')}}"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="{{route('home')}}"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="{{route('home')}}"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="{{route('home')}}"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="{{route('home')}}"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- Page Title -->
        <section class="page-title p_relative" style="background-image: url(assets/images/background/page-title.jpg);">
            <div class="auto-container">
                <div class="content-box p_relative pt_170 pb_170">
                    <h1 class="d_block fs_40 lh_50 color_white fw_exbold color-white">Offer Letter Confirmation</h1>
                    <ul class="bread-crumb p_absolute r_0 b_0 d_iblock pl_30 pr_30 bg-white clearfix pt_4 pb_4">
                        <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold pr_13 mr_5"><a href="{{route('home')}}" class="color_white hov-color">Home</a></li>
                        <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold">Services</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- service-details -->
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
                                    <h2>Offer Letter Confirmation</h2>
                                </div>
                                <div class="text">
                                    {{-- <h3>Sponsoring and managing work visas parts now becoming results in the experience with future guranteed.</h3> --}}
                                    <p>
                                        Arctic Educational Consultancy provides offer letter confirmation services to Nepalese students who have received acceptance letters from Canadian universities. We understand that offer letter confirmation is an important step in the application process, and we aim to provide personalized guidance and support to ensure that our clients have a smooth and stress-free experience.
                                    </p>
                                    <p>
                                        Our offer letter confirmation service is designed to help students navigate the acceptance process and ensure that they are on track to start their studies in Canada. We provide personalized support and guidance to each of our clients, ensuring that they have a stress-free and successful experience.
                                    </p>
                                </div>
                            </div>
                            <div class="two-column">
                                <div class="row align-items-center clearfix">
                                    {{-- <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <figure class="image-box"><img src="{{asset('assets/images/service/service-15.jpg')}}" alt=""></figure>
                                    </div> --}}
                                    <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                                        <div class="content-box">
                                            <h3>Our Visa Benefits</h3>
                                            <ul class="list clearfix">
                                                <li><b>Review of offer letter:</b> We review the acceptance letter from the university to ensure that all the details are accurate and the terms and conditions are favorable.</li>
                                                <li><b>Communication with the university:</b> We communicate with the university to confirm the acceptance and ensure that all the necessary documentation has been submitted.</li>
                                                <li><b>Assistance with deposit payment:</b> We assist students in paying the required deposit to secure their place at the university.</li>
                                                <li><b>Follow-up with the university:</b> We follow up with the university to ensure that all the necessary steps have been taken to secure the student's place.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="accordion-content">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- service-details end -->

@endsection
