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
        <section class="page-title p_relative" style="background-image: url(assets/images/shape/shape-1.png);">
            <div class="auto-container">
                <div class="content-box p_relative pt_170 pb_170">
                    <h1 class="d_block fs_40 lh_50 color_white fw_exbold color-white">University Application Assistance</h1>
                    <ul class="bread-crumb p_absolute r_0 b_0 d_iblock pl_30 pr_30 bg-white clearfix pt_4 pb_4">
                        <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold pr_13 mr_5"><a href="index.html" class="color_white hov-color">Home</a></li>
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
                                <figure class="image-box"><img src="https://www.arcticimmigration.com/wp-content/uploads/2021/06/business-deal-VQBSL3E-960x604.jpg" alt=""></figure>
                                <div class="group-title">
                                    <h2>University Application Assistance</h2>
                                </div>
                                <div class="text">
                                    {{-- <h3>Sponsoring and managing work visas parts now becoming results in the experience with future guranteed.</h3> --}}
                                    <p>
                                        Arctic Educational Consultancy offers university application assistance to Nepalese students seeking to study in Canada. Our team of experienced education consultants provides personalized guidance and support throughout the application process. We work closely with students to help them identify the right universities and programs based on their academic background, career goals, and personal preferences. Our application assistance service includes:
                                    </p>
                                </div>
                            </div>
                            <div class="content-style-two">
                                <div class="inner-box">
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                            <div class="single-item">
                                                <div class="icon-box"><i class="flaticon-document"></i></div>
                                                <h4>Fill in the Required Form</h4>
                                                <p>Fill in the necessary forms as per the requirements for studying in Canada.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                            <div class="single-item">
                                                <div class="icon-box"><i class="flaticon-file"></i></div>
                                                <h4>Submit Your Original Documents</h4>
                                                <p>Submit your original documents for the Canada study visa application process.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                            <div class="single-item">
                                                <div class="icon-box"><i class="flaticon-travel-1"></i></div>
                                                <h4>Get the Visa Resource Material</h4>
                                                <p>Obtain the visa resource material for the Canada study visa process.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3>Where and How to Apply for a Students Visa?</h3>
                                <div class="text">
                                    <p>
                                        If you are a Nepali student planning to study in Canada, you will need to apply for a Canadian study permit. The application process involves submitting various documents, such as proof of acceptance at a Canadian educational institution, proof of financial support, and a valid passport. As a consultancy service, we can help guide you through the process and ensure that all necessary documents are prepared and submitted correctly. We will also provide you with resources to help you prepare for your move to Canada, including visa requirements and settling in tips. Contact us today to learn more about how we can assist you in pursuing your education in Canada.
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
                                                <li><b>Program and university selection:</b> We help students select the right programs and universities based on their academic qualifications, career aspirations, and personal preferences.</li>
                                                <li><b>Application document preparation:</b> We provide guidance and support to students in preparing all the necessary application documents, including transcripts, test scores, essays, and letters of recommendation.</li>
                                                <li><b>Application submission:</b> We assist students in submitting their applications to the universities of their choice, ensuring that all deadlines are met and all requirements are fulfilled.</li>
                                                <li><b>Visa application:</b> We guide students through the visa application process, providing assistance with filling out forms, gathering supporting documents, and preparing for interviews.</li>
                                                <li><b>Pre-departure orientation:</b> We offer pre-departure orientation sessions to help students prepare for their journey to Canada and adjust to the new environment.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="text">
                                    <h3>How To Do Test Preparation</h3>
                                   <p>
                                    Preparing for your studies in Canada can be an exciting and challenging task, but our consultancy service is here to help you every step of the way. To ensure that you are fully prepared for your studies, we offer a range of resources and guidance to help you achieve your best results.
                                   </p>
                                   <p>
                                    At our consultancy service, we understand that studying abroad can be overwhelming, which is why we are dedicated to supporting you throughout the process. Contact us today to learn more about how we can assist you in pursuing your educational goals in Canada.
                                   </p>
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
