@extends("layout")
@section("content")

<!-- Page Title -->
<section class="page-title p_relative" style="background-image: url(assets/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="content-box p_relative pt_170 pb_170">
            <h1 class="d_block fs_40 lh_50 color_white fw_exbold color-white">404</h1>
            <ul class="bread-crumb p_absolute r_0 b_0 d_iblock pl_30 pr_30 bg-white clearfix pt_4 pb_4">
                <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold pr_13 mr_5"><a href="index.html" class="color_white hov-color">Home</a></li>
                <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold">Pages</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->


<!-- error-section -->
<section class="error-section centred p_relative pt_100 pb_120">
    <div class="auto-container">
        <div class="inner-box">
            <h1 class="d_block fs_200 lh_200 fw_bold theme-color">404</h1>
            <h2 class="d_block fs_44 lh_50 fw_bold mb_10">Page not found</h2>
            <p class="d_block fw_medium mb_30">The page you are looking for was moved, removed or never existed.</p>
            <a href="index.html" class="theme-btn btn-two"><span>Go Home</span></a>
        </div>
    </div>
</section>
<!-- error-section end -->

@endsection
