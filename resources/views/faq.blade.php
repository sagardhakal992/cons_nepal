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
        <section class="page-title p_relative" style="background-image: url(assets/images/shape/shape-1.png);">
            <div class="auto-container">
                <div class="content-box p_relative pt_170 pb_170">
                    <h1 class="d_block fs_40 lh_50 color_white fw_exbold color-white">Frequently Asked Questions</h1>
                    <ul class="bread-crumb p_absolute r_0 b_0 d_iblock pl_30 pr_30 bg-white clearfix pt_4 pb_4">
                        <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold pr_13 mr_5"><a href="{{route('home')}}" class="color_white hov-color">Home</a></li>
                        <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold">faq</li>
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

                            <div class="accordion-content">
                                <ul class="accordion-box">
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active">
                                            <div class="icon-outer"></div>
                                            <h5>
                                                FAQ 1 How much GPA is required to study in Canada from Nepal?
                                            </h5>
                                        </div>
                                        <div class="acc-content current">
                                            <p>The required GPA to study in Canada as an international student, generally, most universities in Canada require a minimum GPA of 3.0 or 65% (equivalent to a C grade) for admission to undergraduate programs.</p>
                                            <p>For graduate programs, in general, a minimum GPA of 3.0 on a 4.0 scale is considered competitive for admission to graduate programs in Canada.</p>
                                            <p>However, it is important to note that GPA is not the only factor considered in the admission process. Universities also consider other factors such as English language proficiency (such as IELTS, PTE, and TOFEL), letters of recommendation, and personal statements etc. </p>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-outer"></div>
                                            <h5>FAQ2.How much English Language proficiency is required to study in Canada from Nepal?</h5>
                                        </div>
                                        <div class="acc-content">
                                            <p>Generally, a minimum IELTS score of 6.0 or a minimum TOEFL score of 80 and PTE 55 is considered a good benchmark for admission to most universities and colleges in Canada. However, some institutions may have higher requirements, particularly for more competitive programs.</p>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                         <div class="acc-btn">
                                            <div class="icon-outer"></div>
                                            <h5>FAQ 3.What should be the minimums qualification to apply for undergraduate program in Canada? </h5>
                                        </div>
                                        <div class="acc-content">
                                            <p>To apply for an undergraduate program in Canada, student basically needs to have completed secondary education or its equivalent in your home country. In most cases, this means having a high school diploma or certificate.  In addition to this, you will need to meet the specific admission requirements of the institution and program you are interested in.</p>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                         <div class="acc-btn">
                                            <div class="icon-outer"></div>
                                            <h5> FAQ 4.What should be the minimums qualification to apply for graduate program in Canada? </h5>
                                        </div>
                                        <div class="acc-content">
                                            <p>
                                                To apply for a graduate program in Canada, student typically needs to have completed a bachelor's degree or equivalent from an accredited institution. This means that students must have completed a four-year undergraduate degree or a three-year degree with a postgraduate diploma.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                         <div class="acc-btn">
                                            <div class="icon-outer"></div>
                                            <h5> FAQ 5.What should be the minimums qualification to apply for post graduate program in Canada? </h5>
                                        </div>
                                        <div class="acc-content">
                                            <p>
                                                To apply for a postgraduate program in Canada, you typically need to have completed a bachelor's degree or equivalent from an accredited institution. In addition to this, you will also need to have completed a relevant graduate or postgraduate program, such as a master's degree, in your field of study.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                         <div class="acc-btn">
                                            <div class="icon-outer"></div>
                                            <h5> FAQ 6.The length of study permit will be issue in Canada is? </h5>
                                        </div>
                                        <div class="acc-content">
                                            <p>
                                                The length of a study permit is issued in Canada depends on the length of your program of study.
                                                If your program is less than six months in duration, you may be eligible to study in Canada without a study permit, but you will still need to meet certain requirements, such as having a valid passport and meeting the requirements of the program you wish to attend.
                                            </p>
                                            <p>
                                                If your program is longer than six months, you will need to apply for a study permit. Study permits are basically issued for the duration of your program of study, plus an additional 90 days. This 90-day period allows you to prepare to leave Canada or apply to extend your stay.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                         <div class="acc-btn">
                                            <div class="icon-outer"></div>
                                            <h5> FAQ 7.Does the spouse can travel Canada with principal applicant? (Study permit)</h5>
                                        </div>
                                        <div class="acc-content">
                                            <p>
                                                Yes, the spouse of a principal applicant who has a valid study permit may be eligible to accompany them to Canada.
                                            </p>
                                            <p>
                                                To do so, the spouse will need to apply for a visitor visa or a work permit, depending on their eligibility. If the spouse intends to work in Canada, they will need to apply for a work permit. If they do not intend to work, they can apply for a visitor visa.
                                            </p>
                                            <p>
                                                It's important to note that the spouse will need to meet the eligibility requirements for the visa or work permit they are applying for and may need to provide supporting documentation, such as a marriage certificate or evidence of financial support etc.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                         <div class="acc-btn">
                                            <div class="icon-outer"></div>
                                            <h5> FAQ 8.What is the cost of studying in Canada? </h5>
                                        </div>
                                        <div class="acc-content">
                                            <p>
                                                The cost of studying in Canada can vary depending on a number of factors, including the program and institution you choose, the length of your program, and where you choose to live. Here are some of the main costs you can expect to incur:
                                            </p>
                                            <p>
                                                <b>Tuition fees:</b> For international students, tuition fees can range from around CAD 15,000 to CAD 35,000 per year, depending on the program and institution.
                                            </p>
                                            <p>
                                                <b>Accommodation:</b> The cost of accommodation can vary depending on where you choose to live, such as on-campus or off-campus housing, and whether you choose to live alone or with roommates. On-campus housing can cost around CAD 8,000 to CAD 15,000 per year, while off-campus housing can range from around CAD 500 to CAD 1,500 per month.
                                            </p>
                                            <p>
                                               <b> Food and other living expenses:</b> You will also need to budget for food, transportation, and other living expenses. This can vary depending on your lifestyle, but you can expect to spend around CAD 800 to CAD 1,200 per month on these expenses.
                                            </p>
                                            <p>
                                               <b> Health insurance:</b> International students are required to have health insurance while studying in Canada and the cost can vary depending on the province and institution. You can expect to spend around CAD 600 to CAD 1,200 per year on health insurance.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                         <div class="acc-btn">
                                            <div class="icon-outer"></div>
                                            <h5> FAQ 8.What is the cost of studying in Canada? </h5>
                                        </div>
                                        <div class="acc-content">
                                            <p>
                                                The cost of studying in Canada can vary depending on a number of factors, including the program and institution you choose, the length of your program, and where you choose to live. Here are some of the main costs you can expect to incur:
                                            </p>
                                            <p>
                                                <b>Tuition fees:</b> For international students, tuition fees can range from around CAD 15,000 to CAD 35,000 per year, depending on the program and institution.
                                            </p>
                                            <p>
                                                <b>Accommodation:</b> The cost of accommodation can vary depending on where you choose to live, such as on-campus or off-campus housing, and whether you choose to live alone or with roommates. On-campus housing can cost around CAD 8,000 to CAD 15,000 per year, while off-campus housing can range from around CAD 500 to CAD 1,500 per month.
                                            </p>
                                            <p>
                                               <b> Food and other living expenses:</b> You will also need to budget for food, transportation, and other living expenses. This can vary depending on your lifestyle, but you can expect to spend around CAD 800 to CAD 1,200 per month on these expenses.
                                            </p>
                                            <p>
                                               <b> Health insurance:</b> International students are required to have health insurance while studying in Canada and the cost can vary depending on the province and institution. You can expect to spend around CAD 600 to CAD 1,200 per year on health insurance.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                         <div class="acc-btn">
                                            <div class="icon-outer"></div>
                                            <h5> FAQ 9.Can student work while studying in Canada? </h5>
                                        </div>
                                        <div class="acc-content">
                                            <p>
                                                Yes, students can work while studying in Canada, but there are some restrictions on the number of hours they can work. Here are the main details you should know:
                                            </p>
                                            <p>
                                                <b>Eligibility:</b> To work while studying in Canada, international students must have a valid study permit and be enrolled in a full-time program at a designated learning institution (DLI).
                                            </p>
                                            <p>
                                                <b>Number of hours:</b> During regular academic sessions, students can work for up to 20 hours per week. During scheduled breaks, such as winter and summer holidays, students can work full-time (up to 40 hours per week).
                                            </p>
                                            <p>
                                                <b>Types of work:</b> Students can work in most types of jobs, but there are some restrictions. For example, they cannot work in jobs where the primary duties involve the sale or consumption of alcohol or tobacco, or in jobs that involve adult entertainment.
                                            </p>
                                            <p>
                                                <b>Work permit:</b> In some cases, students may need to obtain a work permit in addition to their study permit to work in Canada. This depends on the type of work they will be doing and the length of their program.
                                            </p>
                                            <p>
                                                <b>Income tax:</b> Students who work in Canada will be subject to income tax, and may also be required to contribute to the Canada Pension Plan (CPP) and Employment Insurance (EI).
                                            </p>
                                            <p>
                                                It's important for students to carefully manage their time and prioritize their studies, as their academic progress should remain their primary focus while studying in Canada. Additionally, it's important to ensure that any work they do is legal and does not violate the conditions of their study permit.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                           <div class="icon-outer"></div>
                                           <h5> FAQ 10.Can student stay in Canada after study? </h5>
                                       </div>
                                       <div class="acc-content">
                                           <p>
                                            Yes, international students can stay in Canada after their studies are completed, but they must apply for the appropriate status to do so. Here are some options for students who want to stay in Canada after their studies:
                                           </p>
                                           <p>
                                            <b>Post-Graduation Work Permit:</b> If you have completed a program of study that is at least 8 months long and have a valid study permit at the time of application, you may be eligible for a Post-Graduation Work Permit (PGWP). This work permit allows you to work in Canada for up to three years, depending on the length of your program.
                                           </p>
                                           <p>
                                           <b> Express Entry:</b> If you are interested in becoming a permanent resident of Canada, you can apply through the Express Entry system. This system ranks applicants based on factors such as age, education, language proficiency, and work experience. If you are selected, you will be invited to apply for permanent residency.
                                           </p>
                                           <p>
                                            <b>Provincial Nominee Programs:</b> Some provinces in Canada have programs that allow international students to apply for permanent residency after they have completed their studies. These programs are designed to retain skilled workers in the province and can vary in their eligibility requirements.
                                           </p>
                                           <p>
                                            <b>Work Permit:</b> If you have a job offer from a Canadian employer, you may be eligible to apply for a work permit. This work permit will allow you to work in Canada for the duration of the permit.
                                           </p>
                                       </div>
                                   </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                           <div class="icon-outer"></div>
                                           <h5>
                                            FAQ11. Is it easy to find a job in Canada after studying?
                                            </h5>
                                       </div>
                                       <div class="acc-content">
                                           <p>
                                            Finding a job in Canada after studying can be challenging, but it is possible with the right skills and qualifications. Some factors that can affect your job prospects include your level of education, your work experience, your language proficiency, and the demand for your particular skills in the Canadian job market.
                                           </p>
                                           <p>
                                            One advantage for international students is that they may be eligible for the Post-Graduation Work Permit, which allows them to work in Canada for up to three years after graduation. This can provide valuable work experience and allow them to make connections in their field.
                                           </p>
                                           <p>
                                            To improve your chances of finding a job in Canada after studying, it's recommended that you:
                                           </p>
                                           <p>
                                            <b>Network:</b> Connect with people in your industry and attend job fairs and networking events.
                                           </p>
                                           <p>
                                            <b>Gain work experience: </b>Consider internships, co-op programs, or part-time jobs to gain experience in your field.
                                           </p>
                                           <p>
                                            <b>Improve your language skills:</b> If English or French is not your first language, consider taking language classes to improve your proficiency.
                                           </p>
                                           <p>
                                            <b>Research the job market:</b> Research the job market in your field and location of choice to determine the demand for your skills.
                                           </p>
                                           <p>
                                            <b>Tailor your resume and cover letter:</b> Customize your resume and cover letter to highlight your skills and experiences that are most relevant to the job you're applying for.
                                           </p>
                                       </div>
                                   </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                           <div class="icon-outer"></div>
                                           <h5>
                                            FAQ 12. List of documents need to apply for student Visa
                                            </h5>
                                       </div>
                                       <div class="acc-content">
                                           <p>
                                            The exact list of documents required for a student visa application to Canada may vary depending on the specific circumstances of the applicant and the program they are applying for. However, here is a general list of documents that are commonly required:
                                           </p>
                                           <p>
                                            <b>Valid passport:</b> A valid passport is a mandatory requirement for a student visa application.
                                           </p>
                                           <p>
                                            <b>Letter of Acceptance:</b> A letter of acceptance from a designated learning institution (DLI) in Canada is required to apply for a student visa.
                                           </p>
                                           <p>
                                           <b> Proof of financial support:</b> You will need to provide evidence that you have sufficient funds to cover your tuition fees, living expenses, and other costs associated with your stay in Canada.
                                           </p>
                                           <p>
                                            <b>Educational documents:</b> You will need to provide your academic transcripts and other educational documents to demonstrate your eligibility for the program you are applying for.
                                           </p>
                                           <p>
                                            <b>Language proficiency test results:</b> You may need to provide the results of an English language proficiency test such as IELTS or TOEFL.
                                           </p>
                                           <p>
                                           <b> Photographs:</b> You will need to provide recent passport-sized photographs.
                                           </p>
                                           <p>
                                           <b> Medical examination:</b> Depending on the length of your stay and the program you are applying for, you may be required to undergo a medical examination.
                                           </p>
                                           <p>
                                           <b> Police clearance certificate:</b> You may need to provide a police clearance certificate to demonstrate that you have no criminal record.
                                           </p>
                                           <p>
                                            <b>Study plan:</b> You may need to provide a statement of purpose or study plan outlining your academic goals and objectives.
                                           </p>
                                           <p>
                                            It is important to check the specific requirements for the program and the country of residence to ensure that you have all the necessary documents for your student visa application.
                                           </p>
                                       </div>
                                   </li>

                                   <li class="accordion block">
                                        <div class="acc-btn">
                                        <div class="icon-outer"></div>
                                        <h5> FAQ 13.What is DLI? </h5>
                                        </div>
                                        <div class="acc-content">
                                            <p>
                                                DLI stands for Designated Learning Institution. In Canada, a DLI is a post-secondary institution or school that has been approved by the provincial or territorial government to host international students.
                                            </p>
                                            <p>
                                                It is important to note that only students who study at a DLI are eligible to apply for a study permit in Canada. Before applying to study at a particular institution, it is important to confirm that it is a DLI, as this will ensure that you are eligible to apply for a study permit.
                                            </p>
                                            <p>
                                                The list of DLIs can be found on the website of the Canadian government's immigration department.
                                            </p>
                                        </div>
                                    </li>

                                    <li class="accordion block">
                                        <div class="acc-btn">
                                        <div class="icon-outer"></div>
                                        <h5> FAQ 14.How long does it take to issue student visa after application? </h5>
                                        </div>
                                        <div class="acc-content">
                                            <p>
                                                The processing time for a student visa application to Canada can vary depending on various factors such as the time of year, the number of applications received, the completeness of the application, and the country or region where the application is being processed.
                                            </p>
                                            <p>
                                                In general, the processing time for a student visa application can range from  eight weeks to three  months. It is important to apply as early as possible to allow for sufficient processing time and to avoid any delays that could impact your start date for the program.
                                            </p>
                                            <p>
                                                You can check the current processing times for student visa applications on the website of the Canadian government's immigration department. Additionally, you can track the status of your application online after submitting it.
                                            </p>
                                        </div>
                                    </li>


                                    <li class="accordion block">
                                        <div class="acc-btn">
                                        <div class="icon-outer"></div>
                                        <h5> FAQ 15.How student remitted tuition fee in Canada from Nepal?  </h5>
                                        </div>
                                        <div class="acc-content">
                                            <p>
                                                There are some ways that Nepalese students can remit tuition fees to their Canadian institution. Here are some common options:                                            </p>
                                            <p>
                                                <b>Bank transfer:</b> Students can transfer funds from their Nepalese bank account to the Canadian institution's bank account. This can be done through a wire transfer.                                             </p>
                                            <p>
                                                <b>Credit card:</b> Some institutions accept credit card payments for tuition fees. However, this method may be subject to additional fees and the institution may have restrictions on which credit cards are accepted.
                                            </p>
                                            <p>
                                                <b>Online payment platform:</b> Many institutions have an online payment platform that allows students to pay their tuition fees using a credit card or bank account. This may be available through the institution's website or through a third-party platform such as Flywire or PayMyTuition.
                                            </p>
                                            <p>
                                                <b>Education loan:</b> Some students may opt to take out an education loan from a Nepalese bank or financial institution to cover their tuition fees and living expenses in Canada.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                        <div class="icon-outer"></div>
                                        <h5>
                                            FAQ16. How much money need to show on bank, while applying for study permit in Canada from Nepal?
                                        </h5>
                                        </div>
                                        <div class="acc-content">
                                            <p>
                                                When applying for a study permit in Canada from Nepal, you will need to demonstrate that you have sufficient funds to cover your tuition fees and living expenses while in Canada. The amount of money required will depend on various factors such as the length of your program, the cost of living in the city where you will be studying, and whether or not you have dependents.
                                            </p>

                                            <p>
                                                As of April 2023, the minimum amount of funds that a student must show for a 12-month period is CAD $20,500, in addition to the tuition fees for the program. However, this amount can vary depending on the circumstances of the student.
                                            </p>
                                        </div>
                                    </li>

                                    <li class="accordion block">
                                        <div class="acc-btn">
                                        <div class="icon-outer"></div>
                                        <h5>

                                            FAQ 17. Does Bank Balance Certificate work to apply for study permit in Canada?

                                        </h5>
                                        </div>
                                        <div class="acc-content">
                                            <p>
                                                Yes, a bank balance certificate can be used as one of the supporting documents to apply for a study permit in Canada. This document can provide proof of the financial resources available to you to support your studies and living expenses in Canada.
                                            </p>

                                            <p>
                                                When submitting a bank balance certificate as part of your application, it is important to ensure that the certificate meets the requirements set by the Canadian government. The certificate should be issued by a recognized financial institution and include the following information:
                                            </p>
                                            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                                                <div class="content-box">
                                                    <ol class="list clearfix" style="list-style:1">
                                                        <li>The account holder's name</li>
                                                        <li>The account number</li>
                                                        <li>The date of issue</li>
                                                        <li>The current balance in the account (CAD$)</li>
                                                    </ol>
                                                </div>
                                            </div>


                                            <p>
                                                It is also recommended that the certificate be accompanied by bank statements or other evidence of financial resources to support the application.
                                            </p>
                                        </div>
                                    </li>

                                    <li class="accordion block">
                                        <div class="acc-btn">
                                        <div class="icon-outer"></div>
                                        <h5>
                                            FAQ 18.The maximum gap accepted for study permit in Canada is?                                         </h5>
                                        </div>
                                        <div class="acc-content">
                                            <p>
                                                There is no specific maximum gap limit for study permit applications in Canada. However, Canadian immigration officers will consider several factors when reviewing a study permit application, including the applicant's history of compliance with immigration laws and regulations, the length of time since the applicant last studied, and the reason for the gap in studies.                                            </p>

                                            <p>
                                                In general, a longer gap between studies may raise questions about the applicant's intention to study and their ability to successfully complete a program. However, if the applicant can provide a valid explanation for the gap and demonstrate their commitment to returning to studies, they may still be eligible for a study permit.                                            </p>
                                            <p>
                                                It is important for applicants to provide a complete and honest explanation of any gaps in their education history and to provide any relevant supporting documents or evidence to support their application. Ultimately, the decision to approve or deny a study permit application will be based on the individual circumstances of the applicant.
                                            </p>
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
