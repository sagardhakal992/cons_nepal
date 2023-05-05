@extends("layout")
@section("content")



        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="{{route('home')}}"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
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
                    <h1 class="d_block fs_40 lh_50 color_white fw_exbold color-white">Work Visa</h1>
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
                                <figure class="image-box"><img src="https://www.arcticimmigration.com/wp-content/uploads/2022/03/students-in-canada-01-960x604.jpeg" alt=""></figure>
                                <div class="group-title">
                                    <h2>Student Screening</h2>
                                </div>
                                <div class="text">
                                    {{-- <h3>Sponsoring and managing work visas parts now becoming results in the experience with future guranteed.</h3> --}}
                                    <p>
                                        Arctic Educational Consultancy's student screening service is designed to provide universities, colleges, and education providers with a safe, secure, and customized screening procedure for Nepalese students seeking enrollment. Our experienced "student assistance team" is equipped with the knowledge and tools necessary to perform thorough background checks and ensure that students meet the eligibility requirements for enrollment.
                                    </p>
                                    <p>
                                        We use a unique screening procedure that is tailored to the needs of the Nepalese student market, taking into account factors such as educational background, language proficiency, and financial status. Our screening process is designed to be safe and secure, protecting the privacy and personal information of the students we screen. We aim to provide reliable and accurate information to our clients, enabling them to make informed decisions about which students to enroll in their institutions. Overall, our student screening service is a valuable tool for universities, colleges, and education providers who are seeking to recruit qualified Nepalese students.
                                    </p>
                                </div>
                            </div>
                            {{-- <div class="content-style-two">
                                <div class="inner-box">
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                            <div class="single-item">
                                                <div class="icon-box"><i class="flaticon-document"></i></div>
                                                <h4>Fill In The <br />Required Form</h4>
                                                <p>Nunc quam arc pretium quis lobortis sem consequat conse tetur diam nunc bibend.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                            <div class="single-item">
                                                <div class="icon-box"><i class="flaticon-file"></i></div>
                                                <h4>Submit Your <br />Original Documents</h4>
                                                <p>Nunc quam arc pretium quis lobortis sem consequat conse tetur diam nunc bibend.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                            <div class="single-item">
                                                <div class="icon-box"><i class="flaticon-travel-1"></i></div>
                                                <h4>Get The Visa <br />Resource Material</h4>
                                                <p>Nunc quam arc pretium quis lobortis sem consequat conse tetur diam nunc bibend.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3>Where and How to Apply for a Work Visa?</h3>
                                <div class="text">
                                    <p>Velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                </div>
                            </div>
                            <div class="two-column">
                                <div class="row align-items-center clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <figure class="image-box"><img src="assets/images/service/service-15.jpg" alt=""></figure>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                                        <div class="content-box">
                                            <h3>Our Visa Benefits</h3>
                                            <ul class="list clearfix">
                                                <li>Labore et dolore ipsum magna aliqua</li>
                                                <li>Ut enim veniam, quis nostrud minim exerc</li>
                                                <li>Itation ullamco laboris nisiut aliquip irure</li>
                                                <li>Dolor in reprehenderit voluptate velit esse</li>
                                                <li>Cillum dolore fugiat nulla excepteur</li>
                                                <li>Sint occaecat cupidatat non proident</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="text">
                                    <h3>How To Do Test Preparation</h3>
                                    <p>Nunc quam arcu, pretium quis quam sed, laoreet efficitur leo. Aliquam era volutpat lobortis sem consequat consequat imperdiet. In nulla sed viverraut loremut dapib estetur diam nunc bibendum imperdiets. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                             --}}
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
