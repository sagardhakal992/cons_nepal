@extends("layout")
@section("content")

@include("element.mobile-view")


<!-- Page Title -->
<section class="page-title p_relative" style="background-image: url(assets/images/shape/shape-1.png);">
    <div class="auto-container">
        <div class="content-box p_relative pt_170 pb_170">
            <h1 class="d_block fs_40 lh_50 color_white fw_exbold color-white">Intakes available in Canada</h1>
            <ul class="bread-crumb p_absolute r_0 b_0 d_iblock pl_30 pr_30 bg-white clearfix pt_4 pb_4">
                <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold pr_13 mr_5"><a href="index.html" class="color_white hov-color">Home</a></li>
                <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold">Intake</li>
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
            <div class="col-lg-8 col-md-8 col-sm-12 content-side">
                <div class="service-details-content">
                    <div class="content-style-one">
                        <figure class="image-box"><img src="https://www.arcticimmigration.com/wp-content/uploads/2022/03/newfoundland-960x604.jpeg" alt=""></figure>
                        <div class="group-title">
                            <h2>Introduction about geography and climate of Canada</h2>
                        </div>
                        <div class="text">
                            <p>
                                Canada is the second-largest country in the world and has a diverse geography and climate. Its borders stretch from the Atlantic Ocean in the east to the Pacific Ocean in the west and the Arctic Ocean in the north.
                            </p>
                            <p>
                                The geography of Canada is characterized by vast forests, plains, mountains, and bodies of water. The Canadian Shield is a vast rocky plateau covering much of northeastern Canada, and the Rocky Mountains span from British Columbia to Alberta. The country is also home to numerous lakes, including the Great Lakes in the east and the Great Slave Lake in the north
                            </p>
                            <p>
                                Canada's climate varies widely, depending on the region. The country experiences four distinct seasons, with winter temperatures ranging from -10°C to -40°C and summer temperatures ranging from 10°C to 30°C. The northern regions of Canada have a polar climate, with extremely cold temperatures and long, dark winters. The southern regions have a more temperate climate, with warm summers and mild winters.
                            </p>
                            <p>
                                The east coast of Canada, including cities such as Halifax and St. John's, experiences cool summers and mild winters, with high levels of precipitation throughout the year. The west coast of Canada, including Vancouver and Victoria, has a more moderate climate, with mild winters and cool summers.
                            </p>
                            <p>
                                Overall, Canada's diverse geography and climate contribute to the country's natural beauty and offer many opportunities for outdoor activities such as skiing, hiking, and water sports.
                            </p>
                        </div>
                    </div>
                    <div class="two-column">
                        <div class="row align-items-center clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                                <div class="content-box">
                                    <h3>Living expense for international student in Canada </h3>
                                    <p>The living expenses for international students in Canada can vary depending on the location, lifestyle, and personal preferences of the individual student. However, as a general guideline, the following are the estimated average living expenses for international students in Canada per year:</p>
                                    <ul class="list clearfix">
                                       <li>
                                        Accommodation (rent and utilities): CAD 7,500 to CAD 12,000
                                       </li>
                                       <li>Food and groceries: CAD 3,000 to CAD 5,000</li>
                                       <li>Transportation: CAD 1,000 to CAD 1,500</li>
                                       <li>Miscellaneous expenses (clothing, entertainment, personal care, etc.): CAD 2,000 to CAD 3,000</li>
                                    </ul>
                                    <p>
                                        The total estimated living expenses for international students in Canada typically range from CAD 13,500 to CAD 22,500 per year. It's important to note that these estimates are for one individual student and do not include tuition fees or other educational expenses.
                                    </p>
                                    <p>
                                        It's also important to research the living expenses and cost of living in the specific city or region of Canada that you plan to study in as living expenses can vary significantly depending on the location.
                                    </p>
                                </div>
                                <div class="content-box" class="pt-4">
                                    <h3>Job Opportunities For Students </h3>
                                    <p>International students in Canada have various options for finding employment while studying. Here are some of the most common job opportunities for international students in Canada:</p>
                                    <ul class="list clearfix">
                                       <li>
                                        <b>On-Campus Jobs:</b> International students are allowed to work on-campus without a work permit, and many universities and colleges offer various positions such as library assistants, lab assistants, research assistants, etc.
                                       </li>
                                       <li><b>Off-Campus Jobs:</b> International students can work off-campus for up to 20 hours per week during regular academic sessions and full-time during scheduled breaks, such as summer or winter holidays. Students must have a valid study permit and obtain a work permit.</li>
                                       <li><b>Co-op/Internship Programs:</b> Many universities and colleges in Canada offer co-op or internship programs that provide students with valuable work experience related to their field of study.</li>
                                       <li><b>Post-Graduation Work Permit Program: </b>After completing their studies, international students in Canada can apply for a post-graduation work permit which allows them to work in Canada for up to three years.</li>
                                       <li><b>Entrepreneurship:</b> International students can also start their own businesses in Canada through various programs such as the Start-Up Visa Program or the Self-Employed Persons Program.</li>
                                    </ul>
                                    <p>
                                        It's important to note that job opportunities for international students in Canada may vary depending on the region and the demand for particular skills or professions. It's advisable for students to research the job market in their field of study and location before pursuing job opportunities.
                                    </p>
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
<!-- country-details end -->



@endsection
