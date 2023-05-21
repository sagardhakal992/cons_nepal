@extends("layout")
@section("content")


        <!-- Page Title -->
        <section class="page-title p_relative" style="background-image: url(assets/images/background/page-title.jpg);">
            <div class="auto-container">
                <div class="content-box p_relative pt_170 pb_170">
                    <h1 class="d_block fs_40 lh_50 color_white fw_exbold color-white">Contact</h1>
                    <ul class="bread-crumb p_absolute r_0 b_0 d_iblock pl_30 pr_30 bg-white clearfix pt_4 pb_4">
                        <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold pr_13 mr_5"><a href="index.html" class="color_white hov-color">Home</a></li>
                        <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold">Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- contact-section -->
        <section class="contact-section p_relative pt_120 pb_120">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title p_relative d_block mb_40">
                                <span class="p_relative d_block fs_14 lh_20 fw_sbold theme-color mb_7">how we can help</span>
                                <h2 class="p_relative d_block lh_55 fw_exbold">Write a Message</h2>
                            </div>
                            <div class="form-inner">
                                <form method="post" action="{{route('contact-post')}}" id="contact-form" class="default-form">
                                    @csrf
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group mb_20">
                                            <input type="text" name="name" placeholder="Your Name" required="">
                                            @error('name')
                                            {{$message}}
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group mb_20">
                                            <input type="email" name="email" placeholder="Email Address" required="">
                                            @error('email')
                                            {{$message}}
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb_20">
                                            <textarea name="description" placeholder="Leave A Comment"></textarea>
                                            @error('description')
                                            {{$message}}
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0">
                                            <button class="theme-btn btn-one" type="submit" name="submit-form"><span>Send A Message</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 info-column">
                        <div class="info-inner p_relative d_block b_radius_10">
                            <div class="support-box p_relative d_block theme-color-bg pl_100 pt_40 pr_30 pb_40">
                                <div class="icon-box p_absolute l_50 t_50 fs_35 color-white"><i class="flaticon-phone-call"></i></div>
                                <span class="d_block fs_14 lh_20 fw_medium color-white">Call now</span>
                                <h5 class="d_block fs_18 lh_30 fw_medium color-white"><a href="tel:12463330079" class="d_iblock color-white">+1- (246) 333-0079</a></h5>
                            </div>
                            <div class="inner p_relative d_block pt_45 pr_30 pb_50 pl_50">
                                <ul class="info-list clearfix p_relative d_block mb_30">
                                    <li><a href="mailto:needhelp@company.com">needhelp@company.com</a></li>
                                    <li>60 Broklyn Golden Street, 88 New York, United States of America</li>
                                </ul>
                                <ul class="social-links clearfix">
                                    <li><a href="contact.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="contact.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="contact.html"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="contact.html"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->


        <!-- google-map-section -->
        <section class="google-map-section p_relative">
            <div class="map-inner">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.367946715871!2d85.33991327541331!3d27.7059235761834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19bf3369cc23%3A0xc2ee9887c7091a4b!2sArctic%20Educational%20Consultancy!5e0!3m2!1sen!2snp!4v1683284863308!5m2!1sen!2snp" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <!-- google-map-section -->


@endsection


