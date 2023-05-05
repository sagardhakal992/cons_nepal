@extends("layout")

@section("content")





        <!-- Page Title -->
        <section class="page-title p_relative" style="background-image: url(assets/images/background/page-title.jpg);">
            <div class="auto-container">
                <div class="content-box p_relative pt_170 pb_170">
                    <h1 class="d_block fs_40 lh_50 color_white fw_exbold color-white">About Us</h1>
                    <ul class="bread-crumb p_absolute r_0 b_0 d_iblock pl_30 pr_30 bg-white clearfix pt_4 pb_4">
                        <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold pr_13 mr_5"><a href="index.html" class="color_white hov-color">Home</a></li>
                        <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold">Pages</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- about-style-three -->
        <section class="about-style-three p_relative sec-pad">
            <div class="pattern-layer p_absolute l_0" style="background-image: url(assets/images/shape/shape-1.png);"></div>
            <div class="auto-container">

                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_1">
                            <div class="image-box p_relative d_block pb_30">
                                <figure class="image p_relative d_block image-1 b_radius_10 tran_5"><img src="assets/images/resource/about-5.jpg" alt=""></figure>
                                <div class="text p_absolute t_160 b_radius_10 b_shadow_7 bg-white pt_35 pr_40 pb_35 pl_110">
                                    <div class="icon-box p_absolute l_30 t_30 fs_65 theme-color"><i class="flaticon-customer-service"></i></div>
                                    <h5 class="d_block fs_18">Meet Our Expert Agents</h5>
                                </div>
                                <div class="text-two centred p_absolute l_30 b_0 theme-color-bg b_radius_10 pt_30 pr_15 pb_30 pl_15">
                                    <h4 class="fs_20 lh_30 color-white">We have 30+ years of experiences</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_3">
                            <div class="content-box p_relative d_block ml_50">
                                <div class="sec-title p_relative d_block mb_40">
                                    <span class="p_relative d_block fs_14 lh_20 fw_sbold mb_7 theme-color">Get to know us</span>
                                    <h2 class="p_relative d_block lh_50 fw_exbold">Who Are We ?</h2>
                                </div>
                                {{-- <div class="inner p_relative d_block mb_40">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item p_relative d_block">
                                                <div class="icon-box p_relative d_block fs_16 theme-color mb_2"><i class="fas fa-check-circle"></i></div>
                                                <h5 class="d_block fs_18 lh_30 fw_sbold mb_3">We’re Professional</h5>
                                                <p>Lorem ipsum is simply free dolor sit amet.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item p_relative d_block">
                                                <div class="icon-box p_relative d_block fs_16 theme-color mb_2"><i class="fas fa-check-circle"></i></div>
                                                <h5 class="d_block fs_18 lh_30 fw_sbold mb_3">We’re Professional</h5>
                                                <p>Lorem ipsum is simply free dolor sit amet.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="text p_relative d_block mb_50">
                                    <p>
                                        Arctic Educational Consultancy, Kathmandu is a branch of Arctic Immigration Inc, Canada, with its head office located in Brampton, Ontario, Canada. The company is authorized by both the Canadian and Nepalese governments and run by a regulated Canadian immigration consultant (RCIC).
                                        It is a pioneering company in the study abroad industry, specializing in Canada study. The company was established in 2022 AD.
                                        Arctic Educational Consultancy has a reputation for being a very reliable company that has helped many students achieve their dreams of studying in Canada. The company provides a range of services to help students navigate the complex process of studying abroad; including advising on the selection of universities, assisting with the application process, and helping students obtain the necessary visas and permits.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include("services.element.country-details")
                @include("element.intakes")
            </div>
        </section>
        <!-- about-style-three end -->


        <!-- testimonial-section -->
        <section class="testimonial-section p_relative pt_110 pb_100 bg-color-2">
            <div class="pattern-layer p_absolute l_0 t_0" style="background-image: url(assets/images/shape/shape-3.png);"></div>
            <div class="auto-container">
                <div class="sec-title p_relative d_block mb_50 centred">
                    <span class="p_relative d_block fs_14 lh_20 fw_sbold theme-color mb_7">how we can help</span>
                    <h2 class="p_relative d_block lh_55 fw_exbold">What They’re Saying</h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-nav-none">
                    <div class="testimonial-block-one">
                        <div class="inner-box p_relative d_block bg-white pt_50 pr_40 pb_50 pl_50 b_radius_10">
                            <div class="quote"><span>“</span></div>
                            <ul class="rating clearfix p_relative d_block mb_15">
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                            </ul>
                            <div class="text p_relative d_block mb_20">
                                <p>Lorem ipsum is simply free text dolor sit amet, consecte notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore aliqua.</p>
                            </div>
                            <div class="author-box p_relative d_block pl_100 pt_13 pb_14">
                                <figure class="author-thumb p_absolute l_0 t_0 b_radius_50"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                                <h5 class="d_block fs_18 lh_30 theme-color">Kevin Martin</h5>
                                <span class="designation d_block fs_14 lh_20 fw_medium">Student</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box p_relative d_block bg-white pt_50 pr_40 pb_50 pl_50 b_radius_10">
                            <div class="quote"><span>“</span></div>
                            <ul class="rating clearfix p_relative d_block mb_15">
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                            </ul>
                            <div class="text p_relative d_block mb_20">
                                <p>Lorem ipsum is simply free text dolor sit amet, consecte notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore aliqua.</p>
                            </div>
                            <div class="author-box p_relative d_block pl_100 pt_13 pb_14">
                                <figure class="author-thumb p_absolute l_0 t_0 b_radius_50"><img src="assets/images/resource/testimonial-2.jpg" alt=""></figure>
                                <h5 class="d_block fs_18 lh_30 theme-color">Sarah Albert</h5>
                                <span class="designation d_block fs_14 lh_20 fw_medium">Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box p_relative d_block bg-white pt_50 pr_40 pb_50 pl_50 b_radius_10">
                            <div class="quote"><span>“</span></div>
                            <ul class="rating clearfix p_relative d_block mb_15">
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                            </ul>
                            <div class="text p_relative d_block mb_20">
                                <p>Lorem ipsum is simply free text dolor sit amet, consecte notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore aliqua.</p>
                            </div>
                            <div class="author-box p_relative d_block pl_100 pt_13 pb_14">
                                <figure class="author-thumb p_absolute l_0 t_0 b_radius_50"><img src="assets/images/resource/testimonial-3.jpg" alt=""></figure>
                                <h5 class="d_block fs_18 lh_30 theme-color">Mike Hardson</h5>
                                <span class="designation d_block fs_14 lh_20 fw_medium">Founder</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box p_relative d_block bg-white pt_50 pr_40 pb_50 pl_50 b_radius_10">
                            <div class="quote"><span>“</span></div>
                            <ul class="rating clearfix p_relative d_block mb_15">
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                            </ul>
                            <div class="text p_relative d_block mb_20">
                                <p>Lorem ipsum is simply free text dolor sit amet, consecte notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore aliqua.</p>
                            </div>
                            <div class="author-box p_relative d_block pl_100 pt_13 pb_14">
                                <figure class="author-thumb p_absolute l_0 t_0 b_radius_50"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                                <h5 class="d_block fs_18 lh_30 theme-color">Kevin Martin</h5>
                                <span class="designation d_block fs_14 lh_20 fw_medium">Student</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box p_relative d_block bg-white pt_50 pr_40 pb_50 pl_50 b_radius_10">
                            <div class="quote"><span>“</span></div>
                            <ul class="rating clearfix p_relative d_block mb_15">
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                            </ul>
                            <div class="text p_relative d_block mb_20">
                                <p>Lorem ipsum is simply free text dolor sit amet, consecte notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore aliqua.</p>
                            </div>
                            <div class="author-box p_relative d_block pl_100 pt_13 pb_14">
                                <figure class="author-thumb p_absolute l_0 t_0 b_radius_50"><img src="assets/images/resource/testimonial-2.jpg" alt=""></figure>
                                <h5 class="d_block fs_18 lh_30 theme-color">Sarah Albert</h5>
                                <span class="designation d_block fs_14 lh_20 fw_medium">Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box p_relative d_block bg-white pt_50 pr_40 pb_50 pl_50 b_radius_10">
                            <div class="quote"><span>“</span></div>
                            <ul class="rating clearfix p_relative d_block mb_15">
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                            </ul>
                            <div class="text p_relative d_block mb_20">
                                <p>Lorem ipsum is simply free text dolor sit amet, consecte notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore aliqua.</p>
                            </div>
                            <div class="author-box p_relative d_block pl_100 pt_13 pb_14">
                                <figure class="author-thumb p_absolute l_0 t_0 b_radius_50"><img src="assets/images/resource/testimonial-3.jpg" alt=""></figure>
                                <h5 class="d_block fs_18 lh_30 theme-color">Mike Hardson</h5>
                                <span class="designation d_block fs_14 lh_20 fw_medium">Founder</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box p_relative d_block bg-white pt_50 pr_40 pb_50 pl_50 b_radius_10">
                            <div class="quote"><span>“</span></div>
                            <ul class="rating clearfix p_relative d_block mb_15">
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                            </ul>
                            <div class="text p_relative d_block mb_20">
                                <p>Lorem ipsum is simply free text dolor sit amet, consecte notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore aliqua.</p>
                            </div>
                            <div class="author-box p_relative d_block pl_100 pt_13 pb_14">
                                <figure class="author-thumb p_absolute l_0 t_0 b_radius_50"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                                <h5 class="d_block fs_18 lh_30 theme-color">Kevin Martin</h5>
                                <span class="designation d_block fs_14 lh_20 fw_medium">Student</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box p_relative d_block bg-white pt_50 pr_40 pb_50 pl_50 b_radius_10">
                            <div class="quote"><span>“</span></div>
                            <ul class="rating clearfix p_relative d_block mb_15">
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                            </ul>
                            <div class="text p_relative d_block mb_20">
                                <p>Lorem ipsum is simply free text dolor sit amet, consecte notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore aliqua.</p>
                            </div>
                            <div class="author-box p_relative d_block pl_100 pt_13 pb_14">
                                <figure class="author-thumb p_absolute l_0 t_0 b_radius_50"><img src="assets/images/resource/testimonial-2.jpg" alt=""></figure>
                                <h5 class="d_block fs_18 lh_30 theme-color">Sarah Albert</h5>
                                <span class="designation d_block fs_14 lh_20 fw_medium">Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box p_relative d_block bg-white pt_50 pr_40 pb_50 pl_50 b_radius_10">
                            <div class="quote"><span>“</span></div>
                            <ul class="rating clearfix p_relative d_block mb_15">
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                                <li class="p_relative d_iblock pull-left fs_13 lh_20 mr_3"><i class="fa fa-star"></i></li>
                            </ul>
                            <div class="text p_relative d_block mb_20">
                                <p>Lorem ipsum is simply free text dolor sit amet, consecte notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore aliqua.</p>
                            </div>
                            <div class="author-box p_relative d_block pl_100 pt_13 pb_14">
                                <figure class="author-thumb p_absolute l_0 t_0 b_radius_50"><img src="assets/images/resource/testimonial-3.jpg" alt=""></figure>
                                <h5 class="d_block fs_18 lh_30 theme-color">Mike Hardson</h5>
                                <span class="designation d_block fs_14 lh_20 fw_medium">Founder</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section end -->


        <!-- team-section -->
        <section class="team-section p_relative sec-pad">
            <div class="auto-container">
                <div class="upper-box p_relative mb_50">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                            <div class="sec-title p_relative d_block mt_6">
                                <span class="p_relative d_block fs_14 lh_20 fw_sbold mb_7 theme-color">Exerienced Agents</span>
                                <h2 class="p_relative d_block lh_55 fw_exbold">Meet Our Agents</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                            <div class="text p_relative d_block pr_200">
                                <p>
                                    We have a team of enthusiastic and dedicated human resources who are committed to meeting the requirements of students seeking to study in Canada.
                                    {{-- This team is composed of experienced education consultants, administrators, and support staff who work collaboratively to provide excellent services to Nepalese students. --}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inner-content p_relative">
                    <div class="four-item-carousel owl-carousel owl-theme owl-nav-none">
                        <div class="team-block-one">
                            <div class="inner-box p_relative d_block centred">
                                <figure class="image-box p_relative d_block"><img src="assets/images/team/team-1.jpg" alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Mike Hardson</a></h3>
                                    <span class="designation d_block fs_16 fw_medium">Agent</span>
                                </div>
                                <div class="overlay-content bg-white b_shadow_6 z_1 pt_25 pb_30 pl_15 pr_15 tran_5">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Mike Hardson</a></h3>
                                    <span class="designation d_block fs_16 fw_medium mb_18">Agent</span>
                                    <ul class="social-links clearfix">
                                        <li><a href="team-details.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-block-one">
                            <div class="inner-box p_relative d_block centred">
                                <figure class="image-box p_relative d_block"><img src="assets/images/team/team-2.jpg" alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Jessica Brown</a></h3>
                                    <span class="designation d_block fs_16 fw_medium">Agent</span>
                                </div>
                                <div class="overlay-content bg-white b_shadow_6 z_1 pt_25 pb_30 pl_15 pr_15 tran_5">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Jessica Brown</a></h3>
                                    <span class="designation d_block fs_16 fw_medium mb_18">Agent</span>
                                    <ul class="social-links clearfix">
                                        <li><a href="team-details.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-block-one">
                            <div class="inner-box p_relative d_block centred">
                                <figure class="image-box p_relative d_block"><img src="assets/images/team/team-3.jpg" alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Kevin Martin</a></h3>
                                    <span class="designation d_block fs_16 fw_medium">Agent</span>
                                </div>
                                <div class="overlay-content bg-white b_shadow_6 z_1 pt_25 pb_30 pl_15 pr_15 tran_5">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Kevin Martin</a></h3>
                                    <span class="designation d_block fs_16 fw_medium mb_18">Agent</span>
                                    <ul class="social-links clearfix">
                                        <li><a href="team-details.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-block-one">
                            <div class="inner-box p_relative d_block centred">
                                <figure class="image-box p_relative d_block"><img src="assets/images/team/team-4.jpg" alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Sarah Albert</a></h3>
                                    <span class="designation d_block fs_16 fw_medium">Agent</span>
                                </div>
                                <div class="overlay-content bg-white b_shadow_6 z_1 pt_25 pb_30 pl_15 pr_15 tran_5">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Sarah Albert</a></h3>
                                    <span class="designation d_block fs_16 fw_medium mb_18">Agent</span>
                                    <ul class="social-links clearfix">
                                        <li><a href="team-details.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-block-one">
                            <div class="inner-box p_relative d_block centred">
                                <figure class="image-box p_relative d_block"><img src="assets/images/team/team-1.jpg" alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Mike Hardson</a></h3>
                                    <span class="designation d_block fs_16 fw_medium">Agent</span>
                                </div>
                                <div class="overlay-content bg-white b_shadow_6 z_1 pt_25 pb_30 pl_15 pr_15 tran_5">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Mike Hardson</a></h3>
                                    <span class="designation d_block fs_16 fw_medium mb_18">Agent</span>
                                    <ul class="social-links clearfix">
                                        <li><a href="team-details.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-block-one">
                            <div class="inner-box p_relative d_block centred">
                                <figure class="image-box p_relative d_block"><img src="assets/images/team/team-2.jpg" alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Jessica Brown</a></h3>
                                    <span class="designation d_block fs_16 fw_medium">Agent</span>
                                </div>
                                <div class="overlay-content bg-white b_shadow_6 z_1 pt_25 pb_30 pl_15 pr_15 tran_5">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Jessica Brown</a></h3>
                                    <span class="designation d_block fs_16 fw_medium mb_18">Agent</span>
                                    <ul class="social-links clearfix">
                                        <li><a href="team-details.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-block-one">
                            <div class="inner-box p_relative d_block centred">
                                <figure class="image-box p_relative d_block"><img src="assets/images/team/team-3.jpg" alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Kevin Martin</a></h3>
                                    <span class="designation d_block fs_16 fw_medium">Agent</span>
                                </div>
                                <div class="overlay-content bg-white b_shadow_6 z_1 pt_25 pb_30 pl_15 pr_15 tran_5">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Kevin Martin</a></h3>
                                    <span class="designation d_block fs_16 fw_medium mb_18">Agent</span>
                                    <ul class="social-links clearfix">
                                        <li><a href="team-details.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-block-one">
                            <div class="inner-box p_relative d_block centred">
                                <figure class="image-box p_relative d_block"><img src="assets/images/team/team-4.jpg" alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Sarah Albert</a></h3>
                                    <span class="designation d_block fs_16 fw_medium">Agent</span>
                                </div>
                                <div class="overlay-content bg-white b_shadow_6 z_1 pt_25 pb_30 pl_15 pr_15 tran_5">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Sarah Albert</a></h3>
                                    <span class="designation d_block fs_16 fw_medium mb_18">Agent</span>
                                    <ul class="social-links clearfix">
                                        <li><a href="team-details.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-block-one">
                            <div class="inner-box p_relative d_block centred">
                                <figure class="image-box p_relative d_block"><img src="assets/images/team/team-1.jpg" alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Mike Hardson</a></h3>
                                    <span class="designation d_block fs_16 fw_medium">Agent</span>
                                </div>
                                <div class="overlay-content bg-white b_shadow_6 z_1 pt_25 pb_30 pl_15 pr_15 tran_5">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Mike Hardson</a></h3>
                                    <span class="designation d_block fs_16 fw_medium mb_18">Agent</span>
                                    <ul class="social-links clearfix">
                                        <li><a href="team-details.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-block-one">
                            <div class="inner-box p_relative d_block centred">
                                <figure class="image-box p_relative d_block"><img src="assets/images/team/team-2.jpg" alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Jessica Brown</a></h3>
                                    <span class="designation d_block fs_16 fw_medium">Agent</span>
                                </div>
                                <div class="overlay-content bg-white b_shadow_6 z_1 pt_25 pb_30 pl_15 pr_15 tran_5">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Jessica Brown</a></h3>
                                    <span class="designation d_block fs_16 fw_medium mb_18">Agent</span>
                                    <ul class="social-links clearfix">
                                        <li><a href="team-details.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-block-one">
                            <div class="inner-box p_relative d_block centred">
                                <figure class="image-box p_relative d_block"><img src="assets/images/team/team-3.jpg" alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Kevin Martin</a></h3>
                                    <span class="designation d_block fs_16 fw_medium">Agent</span>
                                </div>
                                <div class="overlay-content bg-white b_shadow_6 z_1 pt_25 pb_30 pl_15 pr_15 tran_5">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Kevin Martin</a></h3>
                                    <span class="designation d_block fs_16 fw_medium mb_18">Agent</span>
                                    <ul class="social-links clearfix">
                                        <li><a href="team-details.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-block-one">
                            <div class="inner-box p_relative d_block centred">
                                <figure class="image-box p_relative d_block"><img src="assets/images/team/team-4.jpg" alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Sarah Albert</a></h3>
                                    <span class="designation d_block fs_16 fw_medium">Agent</span>
                                </div>
                                <div class="overlay-content bg-white b_shadow_6 z_1 pt_25 pb_30 pl_15 pr_15 tran_5">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Sarah Albert</a></h3>
                                    <span class="designation d_block fs_16 fw_medium mb_18">Agent</span>
                                    <ul class="social-links clearfix">
                                        <li><a href="team-details.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="team-details.html"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-section end -->


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


        <!-- clients-section -->
        {{-- <section class="clients-section p_relative pt_120 pb_120 border-top">
            <div class="auto-container">
                <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                    <div class="clients-logo-box">
                        <a href="index.html"><img src="assets/images/clients/clients-logo-1.png" alt=""></a>
                    </div>
                    <div class="clients-logo-box">
                        <a href="index.html"><img src="assets/images/clients/clients-logo-2.png" alt=""></a>
                    </div>
                    <div class="clients-logo-box">
                        <a href="index.html"><img src="assets/images/clients/clients-logo-3.png" alt=""></a>
                    </div>
                    <div class="clients-logo-box">
                        <a href="index.html"><img src="assets/images/clients/clients-logo-4.png" alt=""></a>
                    </div>
                    <div class="clients-logo-box">
                        <a href="index.html"><img src="assets/images/clients/clients-logo-5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- clients-section end -->

@endsection
