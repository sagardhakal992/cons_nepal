<!-- main header -->
<header class="main-header">
    <div class="auto-container">
        <!-- header-top -->
        <div class="header-top">
            <div class="top-inner clearfix">
                <div class="left-column pull-left">
                    <ul class="info-list clearfix">
                        <li><i class="fas fa-phone-square"></i><a href="tel:014597063">014597063,014583238</a></li>
                        <li><i class="fas fa-envelope"></i><a href="mailto:arcticnepal@gmail.com">arcticnepal@gmail.com</a></li>
                    </ul>
                </div>
                <div class="right-column pull-right">
                    <ul class="social-links clearfix">
                        {{-- <li><a href="{{route('home')}}"><i class="fab fab fa-twitter"></i></a></li> --}}
                        <li><a target="_blank" href="https://www.facebook.com/arcticimmigration/"><i class="fab fab fa-facebook-f"></i></a></li>
                        <li><a target="_blank" href="https://www.youtube.com/@ArcticImmigration"><i class="fab fab fa-youtube"></i></a></li>
                        {{-- <li><a href="{{route('home')}}"><i class="fab fab fa-instagram"></i></a></li> --}}
                    </ul>
                    <div class="btn-box"><a href="{{route('home')}}">Book Appointment</a></div>
                </div>
            </div>
        </div>
        <!-- header-lower -->
        <div class="header-lower">
            <div class="outer-box clearfix">
                <div class="logo-box">
                    <figure class="logo"><a href="{{route('home')}}"><img src="{{asset('assets/images/logo-artic.jpg')}}" alt=""></a></figure>
                </div>
                <div class="menu-area clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="{{request()->routeIs('home') ? 'current':''}} dropdown"><a href="{{route('home')}}">Home</a>

                                </li>
                                <li class=" dropdown"><a href="{{route('study')}}">Study</a>
                                    <ul>
                                        {{-- <li><a href="{{route('services.student-screening')}}">Student Screening</a></li>
                                        <li><a href="{{route('services.university-application-assistance')}}">University Application Assistance</a></li>
                                        <li><a href="{{route('services.documentation-guidance')}}">Document Guidance</a></li>
                                        <li><a href="{{route('services.office-letter-confirmation')}}">Office Letter Confirmation</a></li>
                                        <li><a href="{{route('services.counseling')}}">Counselling</a></li> --}}
                                        <li><a href="{{route('study')}}#type-of-canada-student-visa">Types of Canada Student Visa</a></li>
                                        <li><a href="{{route('study')}}#study-permit">What is a Canada Study Permit? </a></li>
                                        <li><a href="{{route('study')}}#canada-student-visa">Canada Student Visa Fee</a></li>
                                        <li><a href="{{route('study')}}#visa-requirements">Canada Student Visa Requirement </a></li>
                                        <li><a href="{{route('study')}}#document-required">Documents Required for Canada Student Visa </a></li>
                                        <li><a href="{{route('study')}}#apply">How to Apply for a Canada Student Visa? </a></li>
                                        <li><a href="{{route('study')}}#stay-back">Stay Back in Canada and Post-Graduation Work Permit (PGWP) </a></li>
                                        <li><a href="{{route('study')}}#pr">PR in Canada</a></li>

                                        {{-- <li><a href="{{route('intake')}}">Intake Process</a></li>
                                        <li><a href="{{route('geo-lifestyle')}}">Geograpy And Lifestyle</a></li> --}}
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="{{route('faq')}}">FAQ</a>
                                    <ul>
                                        <li><a href="{{route('faq')}}">FAQ</a></li>
                                        {{-- <li><a href="coaching-details.html">Citizenship Test</a></li>
                                        <li><a href="coaching-details-2.html">TOEFL</a></li>
                                        <li><a href="coaching-details-3.html">Take IELTS</a></li>
                                        <li><a href="coaching-details-4.html">PTE Coaching</a></li>
                                        <li><a href="coaching-details-5.html">Management Test</a></li>
                                        <li><a href="coaching-details-6.html">Skills Exam</a></li> --}}
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="{{route('services.index')}}">Services</a>
                                    <ul>
                                        <li><a href="{{route('services.index')}}">Our Services</a></li>
                                        <li><a href="{{route('services.student-screening')}}">Student Screening</a></li>
                                        <li><a href="{{route('services.university-application-assistance')}}">University Application Assistance</a></li>
                                        <li><a href="{{route('services.documentation-guidance')}}">Document Guidance</a></li>
                                        <li><a href="{{route('services.office-letter-confirmation')}}">Office Letter Confirmation</a></li>
                                        {{-- <li><a href="{{route('services.counseling')}}">Counselling</a></li> --}}
                                        <li><a href="{{route('services.counseling')}}">Student Counselling</a></li>
                                        <li><a href="{{route('services.counseling')}}">Visa Application</a></li>
                                        <li><a href="{{route('services.counseling')}}">Admission Process</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="{{route('canada')}}">Country</a>
                                    <ul>
                                    <li><a href="{{route('canada')}}">Canada</a></li>
                                        <li><a href="{{route('intake')}}">Intake Process</a></li>
                                        <li><a href="{{route('geo-lifestyle')}}">Geograpy And Lifestyle</a></li>

                                        {{-- <li><a href="country.html">Country</a></li>
                                        <li><a href="united-state.html">United States</a></li>
                                        <li><a href="united-kingdom.html">United Kingdom</a></li>
                                        <li><a href="australia.html">Australia</a></li>
                                        <li><a href="canada.html">Canada</a></li>
                                        <li><a href="south-africa.html">South Africa</a></li>
                                        <li><a href="new-zealand.html">New Zealand</a></li>
                                        <li><a href="dubai.html">Dubai</a></li>
                                        <li><a href="china.html">China</a></li> --}}
                                    </ul>
                                </li>
                                <li class=" dropdown"><a href="{{route('about')}}">About Us</a>
                                    <ul>
                                        <li><a href="{{route('about')}}">About Us</a></li>
                                        <li><a href="{{route('agents')}}">Our Teams</a></li>
                                        {{-- <li><a href="{{route('agents-detail',"sdas")}}">Agents Details</a></li> --}}
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="{{route('blog')}}">Blog</a>
                                    <ul>
                                        <li><a href="{{route('blog')}}">Our Blog</a></li>
                                        <li><a href="{{route('blog-detail','safa')}}">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a class="{{request()->routeIs('contact') ? 'current':''}}" href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="nav-right clearfix">
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <a style="color:white;font-weight:500;padding:10px 20px; background:#FF6D6C;border-radius:5px" target="_blank" href="https://www.arcticimmigration.com/">Our Head Office</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="{{route('home')}}"><img src="{{asset('assets/images/logo-artic.jpg')}}" alt=""></a></figure>
                </div>
                <div class="menu-area clearfix pull-right">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                    <div class="nav-right clearfix">
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <a style="color:white;font-weight:500;padding:10px 20px; background:#FF6D6C;border-radius:5px" target="_blank" href="https://www.arcticimmigration.com/">Our Head Office</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->
