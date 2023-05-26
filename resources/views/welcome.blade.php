@extends("layout")

@section("content")
        <!-- banner-section -->
        <section class="banner-section centred p_relative">
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
                <div class="slide-item p_relative pt_190 pb_220">
                    <div class="image-layer p_absolute" style="background-image:url(assets/images/background/alberta.jpeg)"></div>
                    <div class="auto-container">
                        <div class="content-box p_relative d_block z_5">
                            <h3 class="p_relative d_iblock fw_normal fs_24 lh_30 color-white pb_3 mb_25">Easy & Fast Visa Process</h3>
                            <h1 class="color-white d_block fs_85 lh_90 mb_45 fw_exbold">Study & Work <br />In Canada</h1>
                            <div class="btn-box clearfix">
                                <a href="{{route('about')}}" class="theme-btn btn-one">discover more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item p_relative pt_190 pb_220">
                    <div class="image-layer p_absolute" style="background-image:url({{asset('assets/images/toronto-city-1024x683.jpeg')}})"></div>
                    <div class="auto-container">
                        <div class="content-box p_relative d_block z_5">
                            <h3 class="p_relative d_iblock fw_normal fs_24 lh_30 color-white pb_3 mb_25">Easy & Fast Visa Process</h3>
                            <h1 class="color-white d_block fs_85 lh_90 mb_45 fw_exbold">Meet Experts For  <br /> Appropriate Guideline</h1>
                            <div class="btn-box clearfix">
                                <a href="{{route('about')}}" class="theme-btn btn-one">discover more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item p_relative pt_190 pb_220">
                    <div class="image-layer p_absolute" style="background-image:url(assets/images/background/nova-scotia-960x604.jpeg)"></div>
                    <div class="auto-container">
                        <div class="content-box p_relative d_block z_5">
                            <h3 class="p_relative d_iblock fw_normal fs_24 lh_30 color-white pb_3 mb_25">Easy & Fast Visa Process</h3>
                            <h1 class="color-white d_block fs_85 lh_90 mb_45 fw_exbold">Choose Best College , Course & Intake </h1>
                            <div class="btn-box clearfix">
                                <a href="{{route('about')}}" class="theme-btn btn-one">discover more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->


        <!-- feature-section -->
        <section class="feature-section p_relative pt_120">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block b_radius_10 pl_150 pt_35 pr_30 pb_30">
                                <div class="icon-box p_absolute centred fs_65 color-white"><i class="flaticon-passport"></i></div>
                                <h4 class="p_relative d_block fs_20 lh_30 mb_18"><a href="{{route('study')}}#apply" class="d_iblock black-color hov-color">How to Apply for a Canada Student Visa?</a></h4>
                                <p class="mb_8 lh_30">Prepare for the exam: You can start preparing for the English proficiency test you are attempting.</p>
                                <div class="link"><a href="{{route('study')}}#apply" class="p_relative d_iblock fs_14 fw_sbold black-color hov-color pl_12"><i class="fa fa-angle-right"></i>Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block b_radius_10 pl_150 pt_35 pr_30 pb_30">
                                <div class="icon-box p_absolute centred fs_65 color-white"><i class="flaticon-passport-1"></i></div>
                                <h4 class="p_relative d_block fs_20 lh_30 mb_18"><a href="{{route('study')}}#stay-back" class="d_iblock black-color hov-color">Stay Back in Canada and Post-Graduation Work Permit </a></h4>
                                <p class="mb_8 lh_30">If you pursue a two-year program, you can stay back for up to three years after your..</p>
                                <div class="link"><a href="{{route('study')}}#stay-back" class="p_relative d_iblock fs_14 fw_sbold black-color hov-color pl_12"><i class="fa fa-angle-right"></i>Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block b_radius_10 pl_150 pt_35 pr_30 pb_30">
                                <div class="icon-box p_absolute centred fs_65 color-white"><i class="flaticon-file"></i></div>
                                <h4 class="p_relative d_block fs_20 lh_30 mb_18"><a href="{{route('study')}}#document-required" class="d_iblock black-color hov-color">Documents Required for Canada</a></h4>
                                <p class="mb_8 lh_30">Acceptance letter from a recognised DLI: An acceptance letter from a recognised DLI is one of the most ..</p>
                                <div class="link"><a href="{{route('study')}}#document-required" class="p_relative d_iblock fs_14 fw_sbold black-color hov-color pl_12"><i class="fa fa-angle-right"></i>Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-section end -->


        <!-- about-section -->
        <section class="about-section p_relative pt_110">
            <div class="pattern-layer p_absolute l_0" style="background-image: url(assets/images/shape/shape-1.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_1">
                            <div class="content-box p_relative d_block mr_70 pb_90">
                                <div class="sec-title p_relative d_block mb_40">
                                    <span class="p_relative d_block fs_14 lh_20 fw_sbold theme-color mb_7">Get to know us</span>
                                    <h2 class="p_relative d_block lh_55 fw_exbold">Immigration Service From Expert Consultant</h2>
                                </div>
                                <div class="text p_relative d_block mb_30">
                                    <h5 class="fs_18 fw_medium theme-color mb_35">Arctic Educational Consultancy is dedicated to providing Nepalese students with the best opportunities to study in Canada. </h5>
                                    <p>Arctic Educational Consultancy, Kathmandu is a branch of Arctic Immigration Inc, Canada, with its head office located in Brampton, Ontario, Canada. The company is authorized by both the Canadian and Nepalese governments and run by a regulated Canadian immigration consultant (RCIC).</p>
                                </div>
                                <ul class="list-style-one clearfix p_relative d_block">
                                    <li class="p_relative d_iblock fs_16 lh_25 fw_sbold black-color mb_15 pull-left">Student Screening</li>
                                    <li class="p_relative d_iblock fs_16 lh_25 fw_sbold black-color mb_15 pull-left">Free consultation</li>
                                    <li class="p_relative d_iblock fs_16 lh_25 fw_sbold black-color mb_15 pull-left">Easy & fast process</li>
                                    <li class="p_relative d_iblock fs_16 lh_25 fw_sbold black-color mb_15 pull-left">Documentation Guidance</li>
                                    <li class="p_relative d_iblock fs_16 lh_25 fw_sbold black-color mb_15 pull-left">Affordable fees</li>
                                    <li class="p_relative d_iblock fs_16 lh_25 fw_sbold black-color mb_15 pull-left">Counseling</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_1">
                            <div class="image-box p_relative d_block pl_70">
                                <figure class="image p_relative d_block image-1 b_radius_10 tran_5"><img src="{{asset('assets/images/team/ram.png')}}" alt=""></figure>
                                {{-- <figure class="image image-2 p_absolute r_120 b_radius_10 wow slideInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{asset('assets/images/team/ram.png')}}" alt=""></figure> --}}
                                <div class="text p_absolute t_160 b_radius_10 b_shadow_7 bg-white pt_35 pr_40 pb_35 pl_110">
                                    <div class="icon-box p_absolute l_30 t_30 fs_65 theme-color"><i class="flaticon-customer-service"></i></div>
                                    <h5 class="d_block fs_18">Meet Our Expert Consultants</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->


        <!-- service-section -->
        <section class="service-section p_relative pt_175 pb_110">
            <div class="pattern-layer p_absolute l_170" style="background-image: url(assets/images/shape/shape-2.png);"></div>
            <div class="bg-layer p_absolute l_0 t_0"></div>
            <div class="auto-container">
                <div class="inner-container p_relative pb_60 mb_50">
                    <div class="sec-title p_relative d_block mb_40 centred">
                        <span class="p_relative d_block fs_14 lh_20 fw_sbold theme-color mb_7">What we’re offering</span>
                        <h2 class="p_relative d_block lh_55 fw_exbold">Providing Value for <br />Visa Categories</h2>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                            <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box p_relative d_block b_radius_10">
                                    <figure class="image-box p_relative d_block"><img src="assets/images/resource/service-1.jpg" alt=""></figure>
                                    <div class="lower-content p_relative d_block pt_25 pr_30 pb_30 pl_40">
                                        <div class="icon-box p_absolute r_20 w_100 h_100 lh_110 centred fs_65 bg-white theme-color b_radius_10 tran_5 z_2"><i class="flaticon-family"></i></div>
                                        <h3 class="d_block fs_24 lh_30 mb_25"><a href="service-details-4.html" class="d_iblock black-color hov-color">Student Visa</a></h3>
                                        <p class="mb_15">Sed quia magni dolores eos qui ratione voluptatem sequi nesciunt eque porro.</p>
                                        <div class="link"><a href="service-details-4.html" class="p_relative d_iblock fs_14 fw_sbold black-color hov-color pl_12"><i class="fa fa-angle-right"></i>Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                            <div class="service-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="inner-box p_relative d_block b_radius_10">
                                    <figure class="image-box p_relative d_block"><img src="assets/images/resource/service-2.jpg" alt=""></figure>
                                    <div class="lower-content p_relative d_block pt_25 pr_30 pb_30 pl_40">
                                        <div class="icon-box p_absolute r_20 w_100 h_100 lh_110 centred fs_65 bg-white theme-color b_radius_10 tran_5 z_2"><i class="flaticon-work-from-home"></i></div>
                                        <h3 class="d_block fs_24 lh_30 mb_25"><a href="service-details-3.html" class="d_iblock black-color hov-color">Work Visa</a></h3>
                                        <p class="mb_15">Sed quia magni dolores eos qui ratione voluptatem sequi nesciunt eque porro.</p>
                                        <div class="link"><a href="service-details-3.html" class="p_relative d_iblock fs_14 fw_sbold black-color hov-color pl_12"><i class="fa fa-angle-right"></i>Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                            <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box p_relative d_block b_radius_10">
                                    <figure class="image-box p_relative d_block"><img src="assets/images/resource/service-3.jpg" alt=""></figure>
                                    <div class="lower-content p_relative d_block pt_25 pr_30 pb_30 pl_40">
                                        <div class="icon-box p_absolute r_20 w_100 h_100 lh_110 centred fs_65 bg-white theme-color b_radius_10 tran_5 z_2"><i class="flaticon-travel"></i></div>
                                        <h3 class="d_block fs_24 lh_30 mb_25"><a href="service-details-5.html" class="d_iblock black-color hov-color">Student Visa</a></h3>
                                        <p class="mb_15">Sed quia magni dolores eos qui ratione voluptatem sequi nesciunt eque porro.</p>
                                        <div class="link"><a href="service-details-5.html" class="p_relative d_iblock fs_14 fw_sbold black-color hov-color pl_12"><i class="fa fa-angle-right"></i>Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more-text centred">Visa & immigration services built specifically for you. <a href="{{route('services.index')}}" class="d_iblock fw_sbold theme-color">Find Your Solution</a></div>
            </div>
        </section>
        <!-- service-section end -->


        <!-- country-section -->
        <section class="country-section bg-color-1 pt_120 pb_120">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-12 col-sm-12 title-column">
                        <div class="sec-title p_relative d_block mb_40 light mr_60">
                            {{-- <span class="p_relative d_block fs_14 lh_20 fw_sbold theme-color mb_7">choose country</span> --}}
                            <h2 class="p_relative d_block lh_55 fw_exbold color-white">Apply for a Quick Immigration for a Canada</h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 inner-column">
                        <div class="inner-content centred">
                            <div class="four-item-carousel owl-carousel owl-theme owl-nav-none">
                                {{-- can be looped if multiple country is available --}}
                                <div class="single-item p_relative d_block">
                                    <figure class="image-box p_relative d_block b_radius_10"><img src="{{asset('assets/images/img1.jpg')}}" alt=""></figure>
                                    <div class="flag p_absolute t_40"><img src="{{asset('assets/images/canada.png')}}" alt=""></div>
                                    <div class="text p_absolute pb_30 l_0 b_0 r_0 z_1">
                                        <h3 class="d_block fs_24 lh_30"><a href="{{route('canada')}}" class="color-white hov-color">Canada</a></h3>
                                    </div>
                                </div>
                                <div class="single-item p_relative d_block">
                                    <figure class="image-box p_relative d_block b_radius_10"><img src="{{asset('assets/images/tonoto.jpg')}}" alt=""></figure>
                                    <div class="flag p_absolute t_40"><img src="{{asset('assets/images/canada.png')}}" alt=""></div>
                                    <div class="text p_absolute pb_30 l_0 b_0 r_0 z_1">
                                        <h3 class="d_block fs_24 lh_30"><a href="{{route('canada')}}" class="color-white hov-color"> Tornoto City</a></h3>
                                    </div>
                                </div>
                                <div class="single-item p_relative d_block">
                                    <figure class="image-box p_relative d_block b_radius_10"><img src="{{asset('assets/images/vancouver.jpg')}}" alt=""></figure>
                                    <div class="flag p_absolute t_40"><img src="{{asset('assets/images/canada.png')}}" alt=""></div>
                                    <div class="text p_absolute pb_30 l_0 b_0 r_0 z_1">
                                        <h3 class="d_block fs_24 lh_30"><a href="{{route('canada')}}" class="color-white hov-color"> Vancouver</a></h3>
                                    </div>
                                </div>
                                <div class="single-item p_relative d_block">
                                    <figure class="image-box p_relative d_block b_radius_10"><img src="{{asset('assets/images/quebec.jpg')}}" alt=""></figure>
                                    <div class="flag p_absolute t_40"><img src="{{asset('assets/images/canada.png')}}" alt=""></div>
                                    <div class="text p_absolute pb_30 l_0 b_0 r_0 z_1">
                                        <h3 class="d_block fs_24 lh_30"><a href="{{route('canada')}}" class="color-white hov-color">Quebec</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- country-section end -->


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


        <!-- coaching-section -->
        {{-- <section class="coaching-section p_relative sec-pad">
            <div class="outer-container p_relative">
                <div class="sec-title p_relative d_block mb_50 centred">
                    <span class="p_relative d_block fs_14 lh_20 fw_sbold theme-color mb_7">how we can help</span>
                    <h2 class="p_relative d_block lh_55 fw_exbold">Immigration Training</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 coaching-block">
                        <div class="coaching-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <figure class="image-box p_relative d_block b_radius_10"><img src="assets/images/resource/coaching-1.jpg" alt=""></figure>
                                <div class="text p_absolute pl_50 b_45 z_1 tran_5">
                                    <h3 class="p_relative d_iblock fs_24 lh_30"><a href="coaching-details.html" class="p_relative pt_16 d_iblock color-white hov-color">Citizenship Test</a></h3>
                                </div>
                                <div class="overlay-content p_absolute pl_50 pr_40 z_1 tran_5">
                                    <h3 class="p_relative d_iblock fs_24 lh_30 mb_2"><a href="coaching-details.html" class="p_relative pt_16 d_iblock color-white hov-color">Citizenship Test</a></h3>
                                    <p class="fs_16 lh_30 color-white mb_8">Nullam volutpat iaculis lacus, id auctor ex hendrerit id</p>
                                    <div class="link"><a href="coaching-details.html" class="p_relative d_iblock fs_14 fw_sbold theme-color pl_12"><i class="fa fa-angle-right"></i>Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 coaching-block">
                        <div class="coaching-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <figure class="image-box p_relative d_block b_radius_10"><img src="assets/images/resource/coaching-2.jpg" alt=""></figure>
                                <div class="text p_absolute pl_50 b_45 z_1 tran_5">
                                    <h3 class="p_relative d_iblock fs_24 lh_30"><a href="coaching-details-2.html" class="p_relative pt_16 d_iblock color-white hov-color">Toefl</a></h3>
                                </div>
                                <div class="overlay-content p_absolute pl_50 pr_40 z_1 tran_5">
                                    <h3 class="p_relative d_iblock fs_24 lh_30 mb_2"><a href="coaching-details-2.html" class="p_relative pt_16 d_iblock color-white hov-color">Toefl</a></h3>
                                    <p class="fs_16 lh_30 color-white mb_8">Nullam volutpat iaculis lacus, id auctor ex hendrerit id</p>
                                    <div class="link"><a href="coaching-details-2.html" class="p_relative d_iblock fs_14 fw_sbold theme-color pl_12"><i class="fa fa-angle-right"></i>Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 coaching-block">
                        <div class="coaching-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <figure class="image-box p_relative d_block b_radius_10"><img src="assets/images/resource/coaching-3.jpg" alt=""></figure>
                                <div class="text p_absolute pl_50 b_45 z_1 tran_5">
                                    <h3 class="p_relative d_iblock fs_24 lh_30"><a href="coaching-details-3.html" class="p_relative pt_16 d_iblock color-white hov-color">Take Ielts</a></h3>
                                </div>
                                <div class="overlay-content p_absolute pl_50 pr_40 z_1 tran_5">
                                    <h3 class="p_relative d_iblock fs_24 lh_30 mb_2"><a href="coaching-details-3.html" class="p_relative pt_16 d_iblock color-white hov-color">Take Ielts</a></h3>
                                    <p class="fs_16 lh_30 color-white mb_8">Nullam volutpat iaculis lacus, id auctor ex hendrerit id</p>
                                    <div class="link"><a href="coaching-details-3.html" class="p_relative d_iblock fs_14 fw_sbold theme-color pl_12"><i class="fa fa-angle-right"></i>Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 coaching-block">
                        <div class="coaching-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <figure class="image-box p_relative d_block b_radius_10"><img src="assets/images/resource/coaching-4.jpg" alt=""></figure>
                                <div class="text p_absolute pl_50 b_45 z_1 tran_5">
                                    <h3 class="p_relative d_iblock fs_24 lh_30"><a href="coaching-details-4.html" class="p_relative pt_16 d_iblock color-white hov-color">PTE Coaching</a></h3>
                                </div>
                                <div class="overlay-content p_absolute pl_50 pr_40 z_1 tran_5">
                                    <h3 class="p_relative d_iblock fs_24 lh_30 mb_2"><a href="coaching-details-4.html" class="p_relative pt_16 d_iblock color-white hov-color">PTE Coaching</a></h3>
                                    <p class="fs_16 lh_30 color-white mb_8">Nullam volutpat iaculis lacus, id auctor ex hendrerit id</p>
                                    <div class="link"><a href="coaching-details-4.html" class="p_relative d_iblock fs_14 fw_sbold theme-color pl_12"><i class="fa fa-angle-right"></i>Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- coaching-section end -->


        <!-- cta-section -->
        <section class="cta-section p_relative">
            <div class="bg-layer bg-color-2 p_absolute l_0 b_0"></div>
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


        <!-- news-section -->
        <section class="news-section p_relative sec-pad">
            <div class="bg-layer p_absolute l_0 t_0 bg-color-2"></div>
            <div class="auto-container">
                <div class="sec-title p_relative d_block mb_50 centred">
                    <span class="p_relative d_block fs_14 lh_20 fw_sbold theme-color mb_7">News & Updates</span>
                    <h2 class="p_relative d_block lh_55 fw_exbold">Recent Blog Posts</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block b_radius_10 tran_5">
                                <div class="image-box p_relative d_block">
                                    <figure class="image p_relative d_block">
                                        <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                        <img src="assets/images/news/news-1.jpg" alt="">
                                    </figure>
                                    <span class="post-date p_absolute r_30 b_0 w_120 fs_12 color-white fw_sbold z_1">20 Sep, 2021</span>
                                </div>
                                <div class="lower-content p_relative d_block pt_25 pr_30 pb_30 pl_30">
                                    <h3 class="d_block fs_22 lh_30 mb_5"><a href="blog-details.html" class="d_iblock black-color hov-color">Top reasons for australian working visa rejection</a></h3>
                                    <ul class="post-info clearfix p_relative d_block tran_5">
                                        <li class="p_relative d_iblock float_left fs_14 fw_medium mr_25"><a href="blog-details.html" class="d_iblock hov-color">By Admin</a></li>
                                        <li class="p_relative d_iblock float_left fs_14 fw_medium"><a href="blog-details.html" class="d_iblock hov-color">2 Comments</a></li>
                                    </ul>
                                    <div class="link p_absolute l_30 b_30"><a href="blog-details.html" class="p_relative d_iblock fs_14 fw_medium theme-color">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block b_radius_10 tran_5">
                                <div class="image-box p_relative d_block">
                                    <figure class="image p_relative d_block">
                                        <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                        <img src="assets/images/news/news-2.jpg" alt="">
                                    </figure>
                                    <span class="post-date p_absolute r_30 b_0 w_120 fs_12 color-white fw_sbold z_1">20 Sep, 2021</span>
                                </div>
                                <div class="lower-content p_relative d_block pt_25 pr_30 pb_30 pl_30">
                                    <h3 class="d_block fs_22 lh_30 mb_5"><a href="blog-details.html" class="d_iblock black-color hov-color">Canada federal skilled worker program</a></h3>
                                    <ul class="post-info clearfix p_relative d_block tran_5">
                                        <li class="p_relative d_iblock float_left fs_14 fw_medium mr_25"><a href="blog-details.html" class="d_iblock hov-color">By Admin</a></li>
                                        <li class="p_relative d_iblock float_left fs_14 fw_medium"><a href="blog-details.html" class="d_iblock hov-color">5 Comments</a></li>
                                    </ul>
                                    <div class="link p_absolute l_30 b_30"><a href="blog-details.html" class="p_relative d_iblock fs_14 fw_medium theme-color">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block b_radius_10 tran_5">
                                <div class="image-box p_relative d_block">
                                    <figure class="image p_relative d_block">
                                        <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                        <img src="assets/images/news/news-3.jpg" alt="">
                                    </figure>
                                    <span class="post-date p_absolute r_30 b_0 w_120 fs_12 color-white fw_sbold z_1">20 Sep, 2021</span>
                                </div>
                                <div class="lower-content p_relative d_block pt_25 pr_30 pb_30 pl_30">
                                    <h3 class="d_block fs_22 lh_30 mb_5"><a href="blog-details.html" class="d_iblock black-color hov-color">Aliqum mullam blandit tempor sapien gravida</a></h3>
                                    <ul class="post-info clearfix p_relative d_block tran_5">
                                        <li class="p_relative d_iblock float_left fs_14 fw_medium mr_25"><a href="blog-details.html" class="d_iblock hov-color">By Admin</a></li>
                                        <li class="p_relative d_iblock float_left fs_14 fw_medium"><a href="blog-details.html" class="d_iblock hov-color">3 Comments</a></li>
                                    </ul>
                                    <div class="link p_absolute l_30 b_30"><a href="blog-details.html" class="p_relative d_iblock fs_14 fw_medium theme-color">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->


        <!-- clients-section -->
        <section class="clients-section p_relative pt_120 pb_120 border-top">
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
        </section>
        <!-- clients-section end -->
@endsection
