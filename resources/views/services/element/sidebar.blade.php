<div class="service-sidebar">
    <div class="sidebar-widget sidebar-categories">
        <ul class="categories-list clearfix">
            <li><a href="{{route('services.index')}}" class="{{request()->routeIs('services.index')?'active':''}}">Our Services<i class="flaticon-right-arrow"></i></a></li>
            <li><a href="{{route('services.student-screening')}}" class="{{request()->routeIs('services.student-screening')?'active':''}}">Student Screening<i class="flaticon-right-arrow"></i></a></li>
            <li><a href="{{route('services.university-application-assistance')}}" class="{{request()->routeIs('services.university-application-assistance')?'active':''}}">University Application Assistance<i class="flaticon-right-arrow"></i></a></li>
            <li><a href="{{route('services.documentation-guidance')}}" class="{{request()->routeIs('services.documentation-guidance')?'active':''}}">Documentation Guidance<i class="flaticon-right-arrow"></i></a></li>
            <li><a href="{{route('services.office-letter-confirmation')}}" class="{{request()->routeIs('services.office-letter-confirmation')?'active':''}}">Offer Letter Confirmation<i class="flaticon-right-arrow"></i></a></li>
            <li><a href="{{route('services.counseling')}}" class="{{request()->routeIs('services.counseling')?'active':''}}">Counseling<i class="flaticon-right-arrow"></i></a></li>
        </ul>
    </div>
    <div class="sidebar-widget sidebar-categories">
        <ul class="categories-list clearfix">
            <li><a href="{{route('canada')}}" class="{{request()->routeIs('canada')?'active':''}}">About Canada<i class="flaticon-right-arrow"></i></a></li>
            <li><a href="{{route('intake')}}" class="{{request()->routeIs('intake')?'active':''}}">Available Inatakes In Canada<i class="flaticon-right-arrow"></i></a></li>
            <li><a href="{{route('geo-lifestyle')}}" class="{{request()->routeIs('geo-lifestyle')?'active':''}}">Geography And Lifestyle of Canada<i class="flaticon-right-arrow"></i></a></li>
        </ul>
    </div>
    <div class="sidebar-widget sidebar-download">
        <div class="widget-title">
            <h4>Related Downloads</h4>
        </div>
        <div class="widget-content">
            <ul class="download-list clearfix">
                <li>
                    <i class="flaticon-pdf"></i>
                    <h4><a target="__blank" href="https://college-ic.ca/protecting-the-public/find-an-immigration-consultant">Find Our Legal Status</a></h4>
                    <span>Last Update: 23 May 2020</span>
                </li>
                <li>
                    <i class="flaticon-pdf"></i>
                    <h4><a  target="__blank"  href="https://secure.officio.ca/qnr?id=2999&hash=8c89529b5709b39e9462cc1a7d668fa8">Visa Application Form</a></h4>
                    {{-- <span>Last Update: 23 May 2020</span> --}}
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-widget sidebar-categories-2">
        <div class="widget-title">
            <h4>More Topics</h4>
        </div>
        <div class="widget-content">
            <ul class="categories-list clearfix">
                <li><a href="{{route('about')}}">About us</a></li>
                <li><a href="{{route('canada')}}">Why Choose Canda?</a></li>
                <li><a href="{{route('intake')}}">Intakes In Canada</a></li>
                <li><a href="{{route('agents')}}">Our Teams</a></li>
                <li><a href="{{route('services.index')}}">Our Services</a></li>
                <li><a  href="{{route('geo-lifestyle')}}">Geography and Lifestyle</a></li>
                <li><a href="{{route('faq')}}">Frequently Asked Questions</a></li>
            </ul>
        </div>
    </div>

</div>
