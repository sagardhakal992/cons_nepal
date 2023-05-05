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
            <h1 class="d_block fs_40 lh_50 color_white fw_exbold color-white">Canada</h1>
            <ul class="bread-crumb p_absolute r_0 b_0 d_iblock pl_30 pr_30 bg-white clearfix pt_4 pb_4">
                <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold pr_13 mr_5"><a href="index.html" class="color_white hov-color">Home</a></li>
                <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold">Country</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->


<!-- country-details -->
<div class="service-details country-details">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                @include("services.element.sidebar")
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="service-details-content">
                    <div class="content-style-one">
                        <figure class="image-box"><img src="https://www.arcticimmigration.com/wp-content/uploads/2022/03/toronto-city-1024x683.jpeg" alt=""></figure>
                        <div class="group-title">
                            <h2>Study, Work, Live in Canada</h2>
                        </div>
                        <div class="text">
                            <p>
                                Canada is a great destination for Nepali students who want to study, work, and live abroad. The country has world-renowned universities that offer quality education and numerous opportunities to grow professionally. With a strong economy and low unemployment rate, Canada offers excellent job opportunities in various fields. Nepali students can work part-time while studying and full-time during breaks, gaining valuable work experience and earning extra income. Canada's high standard of living, healthcare, safety, and social services make it an ideal place to live. The country's natural beauty and diverse population create an exciting and welcoming environment for Nepali students. Overall, Canada offers an excellent opportunity for Nepali students to expand their horizons and achieve their goals.
                            </p>
                        </div>
                    </div>
                    <div class="content-style-two">
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
                        <h3>Why Canada is the best destination for Nepali student?  </h3>
                        <div class="text">
                            <p>Canada is an excellent choice for students for many reasons. Firstly, Canadian universities are world-renowned for their high-quality education, research opportunities, and excellent facilities. Canada is also a safe and welcoming country, with a diverse population and a high standard of living.</p><br />
                            <p>Additionally, Canada offers many opportunities for international students to gain valuable work experience while studying, through programs such as co-op and internship placements. This can help students gain practical skills and valuable work experience, which can enhance their career prospects.</p> <br />
                            <p>Canada also has a strong commitment to multiculturalism and provides a welcoming environment for students from diverse backgrounds. There are many support services available to help international students adjust to life in Canada, including language classes, cultural activities, and counseling services.</p> <br />
                            <p>Finally, Canada has a strong economy with many opportunities for graduates to find employment and build successful careers. Many Canadian provinces have programs that encourage international graduates to stay and work in Canada after completing their studies, making it a great choice for students who want to pursue long-term career goals in Canada.</p>
                            <p>Overall, Canada offers a great combination of high-quality education, a welcoming environment, and excellent career opportunities, making it an excellent choice for students looking to study abroad.</p>
                        </div>
                        <h3>Letter of acceptance</h3>
                        <div class="text">
                            <p>Arctic Educational Consultancy is an exclusive agency for many prestigious colleges and universities in Canada. This means that we can provide students with immediate access to offer letters from our partner institutions.</p><br />
                            <p>Getting an offer letter from a Canadian college or university is an important milestone for international students who want to study in Canada. It represents an official acceptance into the program of their choice, and is an essential document required to apply for a study permit and other necessary documentation.</p> <br />
                            <p>As an authorized representative of our partner institutions, we have direct access to their admissions processes, and we can provide students with an offer letter as soon as possible. Our team of experts will work with you to ensure that all necessary documentation is in order, and that you are prepared to begin your studies in Canada.</p> <br />
                            <p>We understand the importance of this process for our students, and we are committed to providing efficient and reliable service to ensure that you have the best possible chance of success. At Arctic Educational Consultancy, we take pride in our ability to provide high-quality support to students seeking to study in Canada, and we are dedicated to helping you achieve your academic and career goals.</p>
                        </div>
                    </div>
                    @include("element.visa-launc")
                    @include("services.element.faq")
                </div>
            </div>
        </div>
    </div>
</div>
<!-- country-details end -->



@endsection
