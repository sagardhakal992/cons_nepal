@extends("layout")
@section("content")
<!-- Page Title -->
<section class="page-title p_relative" style="background-image: url(assets/images/shape/shape-1.png);">
    <div class="auto-container">
        <div class="content-box p_relative pt_170 pb_170">
            <h1 class="d_block fs_40 lh_50 color_white fw_exbold color-white">Agents Details</h1>
            <ul class="bread-crumb p_absolute r_0 b_0 d_iblock pl_30 pr_30 bg-white clearfix pt_4 pb_4">
                <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold pr_13 mr_5"><a href="index.html" class="color_white hov-color">Home</a></li>
                <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold">Pages</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->


<!-- team-details -->
<section class="team-details p_relative pt_120 pb_120">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                <div class="image-box p_relative d_block mr_20">
                    <div class="image p_relative d_block b_radius_10 mb_25"><img src="assets/images/team/team-6.jpg" alt=""></div>
                    <ul class="info clearfix">
                        <li class="p_relative d_block mb_2 fs_18 lh_30"><span class="fw_medium">Tel:</span> <a href="tel:12345615523" class="hov_color">+123-4561-5523</a></li>
                        <li class="p_relative d_block mb_2 fs_18 lh_30"><span class="fw_medium">Email:</span> <a href="mailto:example@margotrobbie.com" class="hov_color">info@example.com</a></li>
                        <li class="p_relative d_block fs_18 lh_30"><span class="fw_medium">Add:</span> Flat 20, Reynolds Neck, FV77 8WS</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                <div class="content-box p_relative d_block ml_20">
                    <div class="text p_relative d_block mb_60">
                        <h2 class="d_block fs_30 lh_40 fw_bold mb_3">Christine Eve</h2>
                        <span class="designation p_relative d_block fs_15 lh_26 mb_25">Agent</span>
                        <p class="d_block fs_15 lh_26 mb_25">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua.enim minim veniam, quis nostrud exer citation ullamco laboris nisi aliquip com modo consequat. Duis aute irure dolor in reprenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p class="d_block fs_15 lh_26">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit volup tatem acusantium dolor emque laud antium.</p>
                    </div>
                    <div class="social-box p_relative d_block mb_65">
                        <h3 class="fs_22 lh_30 fw_medium mb_12">Follow Me On:</h3>
                        <ul class="social-links clearfix">
                            <li class="p_relative d_iblock float_left mr_10"><a href="team-details.html" class="d_block fs_14 b_radius_50 centred"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="p_relative d_iblock float_left mr_10"><a href="team-details.html" class="d_block fs_14 b_radius_50 centred"><i class="fab fa-twitter"></i></a></li>
                            <li class="p_relative d_iblock float_left mr_10"><a href="team-details.html" class="d_block fs_14 b_radius_50 centred"><i class="fab fa-vimeo-v"></i></a></li>
                            <li class="p_relative d_iblock float_left"><a href="team-details.html" class="d_block fs_14 b_radius_50 centred"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="skills-box p_relative d_block mb_65">
                        <h3 class="fs_22 lh_30 fw_bold mb_6">Skills:</h3>
                        <div class="progress-inner p_relative d_block mb_40">
                            <div class="progress-box p_relative d_block mb_20">
                                <h5 class="d_block fs_18 lh_30 fw_bold blue-color mb_5">Analysis</h5>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="93%"></div>
                                    <div class="count-text p_absolute r_0 b_10 fs_14 fw_medium">93%</div>
                                </div>
                            </div>
                            <div class="progress-box p_relative d_block mb_20">
                                <h5 class="d_block fs_18 lh_30 fw_bold blue-color mb_5">SEO Audit</h5>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="69%"></div>
                                    <div class="count-text p_absolute r_0 b_10 fs_14 fw_medium">69%</div>
                                </div>
                            </div>
                            <div class="progress-box p_relative d_block">
                                <h5 class="d_block fs_18 lh_30 fw_bold blue-color mb_5">Optimization</h5>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="90%"></div>
                                    <div class="count-text p_absolute r_0 b_10 fs_14 fw_medium">90%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-inner">
                        <h3 class="fs_22 lh_30 fw_bold mb_35">Contact Me</h3>
                        <form action="team-details.html" method="post" class="default-form">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="form-group p_relative d_block mb_30">
                                        <input type="text" name="name" placeholder="Your name" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="form-group p_relative d_block mb_30">
                                        <input type="email" name="email" placeholder="Your Email" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group p_relative d_block mb_30">
                                        <textarea name="message" placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group message-btn p_relative d_block mb-0">
                                        <button type="submit" class="theme-btn btn-two"><span>Send Message</span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team-details end -->

@endsection
