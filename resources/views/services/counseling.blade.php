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
                    <h1 class="d_block fs_40 lh_50 color_white fw_exbold color-white">Counselling</h1>
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
                                <figure class="image-box"><img src="https://www.arcticimmigration.com/wp-content/uploads/2022/03/Working-in-Canada-03-960x604.jpeg" alt=""></figure>
                                <div class="group-title">
                                    <h2>Counselling</h2>
                                </div>
                                <div class="text">
                                    {{-- <h3>Sponsoring and managing work visas parts now becoming results in the experience with future guranteed.</h3> --}}
                                    <p>
                                        Arctic Educational Consultancy provides counseling services to Nepalese students who are considering studying in Canada. We understand that choosing the right university and program can be a challenging process, which is why we offer personalized guidance and support to help students make informed decisions.
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
                                                <li><b>Program selection: </b>We help students explore their interests and career goals, and identify programs that align with their aspirations.</li>
                                                <li><b>University selection:</b> We provide information on different universities and their strengths, and help students select the right university based on their preferences and academic profile.</</li>
                                                <li><b>Admission requirements:</b> We assist students in understanding the admission requirements for different programs and universities, and provide guidance on how to meet these requirements.</li>
                                                <li><b>Financial planning: </b>We help students understand the costs associated with studying in Canada and provide guidance on funding options, including scholarships and financial aid.</li>
                                                <li><b>Pre-departure orientation:</b> We provide information and guidance on everything from visa requirements to accommodation options, to ensure that students are well-prepared for their studies in Canada.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            @include("services.element.faq")
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- service-details end -->

@endsection
