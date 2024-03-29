@extends("layout")

@section("content")
        <!-- Page Title -->
        <section class="page-title p_relative" style="background-image: url(assets/images/shape/shape-1.png);">
            <div class="auto-container">
                <div class="content-box p_relative pt_170 pb_170">
                    <h1 class="d_block fs_40 lh_50 color_white fw_exbold color-white">Our Teams</h1>
                    <ul class="bread-crumb p_absolute r_0 b_0 d_iblock pl_30 pr_30 bg-white clearfix pt_4 pb_4">
                        <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold pr_13 mr_5"><a href="index.html" class="color_white hov-color">Home</a></li>
                        <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold">Pages</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- team-page-section -->
        <section class="team-page-section p_relative pt_120 pb_120">
            <div class="auto-container">
                <h1>Board members</h1>
                <div class="row clearfix">

                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one">
                            <div class="inner-box p_relative d_block centred">
                                <figure class="image-box p_relative d_block"><img src="{{asset("assets/images/team/guru-sharma.jpg")}}" style="height: 360px" alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Guru Sharma</a></h3>
                                    <span class="designation d_block fs_16 fw_medium">Chair Person</span>
                                </div>
                                <div class="overlay-content bg-white b_shadow_6 z_1 pt_25 pb_30 pl_15 pr_15 tran_5">
                                    <h3 class="d_block fs_22 lh_30"><p  class="d_iblock black-color hov-color">Guru Sharma</p></h3>
                                    <span class="designation d_block fs_16 fw_medium mb_18">Chair Person</span>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one">
                            <div class="inner-box p_relative d_block centred">
                                <figure class="image-box p_relative d_block"><img src="{{asset("assets/images/team/binod.jpg")}}" style="height: 360px" alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Binod Parajuli</a></h3>
                                    <span class="designation d_block fs_16 fw_medium">Board of director</span>
                                </div>
                                <div class="overlay-content bg-white b_shadow_6 z_1 pt_25 pb_30 pl_15 pr_15 tran_5">
                                    <h3 class="d_block fs_22 lh_30"><p  class="d_iblock black-color hov-color">Binod Parajuli</p></h3>
                                    <span class="designation d_block fs_16 fw_medium mb_18">Board of director</span>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one">
                            <div class="inner-box p_relative d_block centred">
                                <figure class="image-box p_relative d_block"><img style="height: 360px" src="{{asset('assets/images/raju.jpg')}}" alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Raju Poudel</a></h3>
                                    <span class="designation d_block fs_16 fw_medium"> Managing Director</span>
                                </div>
                                <div class="overlay-content bg-white b_shadow_6 z_1 pt_25 pb_30 pl_15 pr_15 tran_5">
                                    <h3 class="d_block fs_22 lh_30"><p  class="d_iblock black-color hov-color">Raju Poudel</p></h3>
                                    <span class="designation d_block fs_16 fw_medium mb_18">Managing Director</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one">
                            <div class="inner-box p_relative d_block centred">
                                <figure class="image-box p_relative d_block"><img src="{{asset('assets/images/team/ram.png')}}" alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Ram Kumar Adhikari</a></h3>
                                    <span class="designation d_block fs_16 fw_medium">RCIC consultant (Canada)</span>
                                </div>
                                <div class="overlay-content bg-white b_shadow_6 z_1 pt_25 pb_30 pl_15 pr_15 tran_5">
                                    <h3 class="d_block fs_22 lh_30"><p  class="d_iblock black-color hov-color">Ram Kumar Adhikari</p></h3>
                                    <span class="designation d_block fs_16 fw_medium mb_18">RCIC consultant (Canada)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one">
                            <div class="inner-box p_relative d_block centred">
                                <figure class="image-box p_relative d_block"><img src="{{asset('assets/images/team/nirmal.jpg')}}" alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25">
                                    <h3 class="d_block fs_22 lh_30"><a href="team-details.html" class="d_iblock black-color hov-color">Nirmal Adhikari</a></h3>
                                    <span class="designation d_block fs_16 fw_medium">Chief Consultant</span>
                                </div>
                                <div class="overlay-content bg-white b_shadow_6 z_1 pt_25 pb_30 pl_15 pr_15 tran_5">
                                    <h3 class="d_block fs_22 lh_30"><p  class="d_iblock black-color hov-color">Nirmal Adhikari</p></h3>
                                    <span class="designation d_block fs_16 fw_medium mb_18">Chief Consultant</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                
            </div>
</section>


        <!-- team-page-section end -->


@endsection
