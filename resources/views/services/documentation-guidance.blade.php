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
        <section class="page-title p_relative" style="background-image: url(assets/images/shape/shape-1.png);">
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
                                <figure class="image-box"><img src="https://www.arcticimmigration.com/wp-content/uploads/2021/06/elevated-view-of-staff-working-in-a-busy-open-plan-LC9RF4N-960x604.jpg" alt=""></figure>
                                <div class="group-title">
                                    <h2>Document Guidance</h2>
                                </div>
                                <div class="text">
                                    {{-- <h3>Sponsoring and managing work visas parts now becoming results in the experience with future guranteed.</h3> --}}
                                    <p>
                                        Arctic Educational Consultancy provides documentation guidance to Nepalese students who are seeking to study in Canada. We understand that the documentation process can be complex and overwhelming, which is why we offer personalized guidance and support to ensure that our clients are prepared and informed throughout the process.
                                    </p>
                                    <p>
                                        Our documentation guidance service is designed to simplify the documentation process and ensure that our clients have all the necessary documents for a successful application to Canadian universities. We aim to provide personalized support and guidance to each of our clients, helping them navigate the documentation process with confidence and ease.
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
                            </div> --}}
                            <div class="two-column">
                                <div class="row align-items-center clearfix">
                                    {{-- <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <figure class="image-box"><img src="/assets/images/service/service-15.jpg" alt=""></figure>
                                    </div> --}}
                                    <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                                        <div class="content-box">
                                            <h3>Our offer letter confirmation service includes:</h3>
                                            <ul class="list clearfix">
                                                <li><b>Document checklist:</b> We provide students with a comprehensive checklist of all the documents required for their application, including transcripts, test scores, financial documents, and letters of recommendation.</li>
                                                <li><b>Document preparation:</b> We assist students in preparing all the necessary documents, including translations, certifications, and notarizations.</li>
                                                <li><b>Document submission:</b> We guide students in submitting their documents to the relevant authorities, including universities, visa offices, and other organizations.</li>
                                                <li><b>Document tracking:</b> We help students track the status of their documents and ensure that all deadlines are met.</li>
                                                <li><b>Document storage:</b> We provide secure storage for all of our clients' important documents, ensuring that they are easily accessible and organized.</li>
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
