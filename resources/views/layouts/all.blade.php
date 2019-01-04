<!DOCTYPE html>
<html>
    <head>
        <title>Nextech Designs - UIKIT</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('assets/css/uikit.min.css')}}" />
    </head>
    <body>
        <header>
            <div class="uk-position-relative uk-margin-large-bottom">
                <div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="animation: fade; autoplay: true">

                    <ul class="uk-slideshow-items" uk-height-viewport="min-height: 300">
                        <li>
                            <img src="{{asset('assets/images/school2.jpg')}}" alt="" uk-cover>
                            <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                                <h3 class="uk-margin-remove">Catholic Diosece Of Isiolo(CDI) St.Mary's Secretarial College</h3>
                                <p class="uk-margin-remove">"The Fountain Of Integrity and Knowledge"</p>
                            </div>
                        </li>
                        <li>
                            <img src="{{asset('assets/images/pic1.png')}}" alt="" uk-cover>
                            <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                                <h3 class="uk-margin-remove">SCHOOL PRINCIPAL AND STUDENTS LEADERS</h3>
                                <p class="uk-margin-remove">St.Mary's Secretarial College is a Catholic Diosece School that is christian based.We mentor our students physically, mentally and Spiritually.</p>
                            </div>
                        </li>
                        <li>
                            <img src="{{asset('assets/images/Picture2.png')}}" alt="" uk-cover>
                            <div class="uk-overlay uk-overlay-primary uk-position-right uk-text-center uk-transition-slide-right uk-width-medium">
                                <h3 class="uk-margin-remove">STUDENTS SCOUT UNION</h3>
                                <p class="uk-margin-remove">Physical Matching and practising Scouting Services is part and parcel of St.Mary's Students and that shows a sense of responsibility in them.</p>
                            </div>
                        </li>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                </div>
                <div class="uk-position-top">
                    <div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-dark; top: 200">
                        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                            <div class="uk-navbar-left">
                                <a class="uk-navbar-item uk-logo uk-height-max-small" href="{{ url('/')}}"><img src="{{asset ('assets/images/logoz.png')}}" alt="logo" style="height: 4.8rem;"></a>
                                
                            </div>
                            <div class="uk-navbar-center">
                                <ul class="uk-navbar-nav uk-visible@s">
                                    <li class="uk-active"><a href="{{ url('/')}}">Home</a></li>
                                    <li><a href="{{ route('about')}}">About US</a></li>
                                    <li><a href="{{ route('fee')}}">Fee Structure</a></li>
                                    <li><a href="{{ route('downloads')}}">Downloads</a></li>
                                    <li>
                                        <a href="#">Courses</a>
                                        <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li class="uk-active"><a href="{{ route('dss')}}">Diploma in Secretarial Studies</a></li>
                                                <li><a href="{{ route('dbm')}}">Diploma in Business Management</a></li>
                                                <li class="uk-nav-divider"></li>
                                                <li><a href="{{ route('css')}}">Certificate in Secretarial Studies (Single &amp; Group)</a></li>
                                                <li><a href="{{ route('cpa')}}">Certified Public Accountant(CPA)</a></li>
                                                <li class="uk-nav-divider"></li>
                                                <li><a href="{{ route('packages')}}">Computer Packages</a></li>
                                                <li><a href="{{ route('cams')}}">Certificate in Accounting &amp; Management Skills</a></li>
                                            </ul>
                                            <a href="#" class="uk-navbar-toggle uk-hidden@s" uk-navbar-toggle-icon uk-toggle="target: #sidenav"></a>
                                        </div>
                                    </li>
                                    <li><a href="{{ route('contact')}}">Contact Us</a></li>
                                </ul>
                                <a href="#" class="uk-navbar-toggle uk-hidden@s" uk-navbar-toggle-icon uk-toggle="target: #sidenav"></a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <div id="sidenav" uk-offcanvas="flip: true" class="uk-offcanvas">
            <div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">
              <button class="uk-offcanvas-close uk-close" type="button" data-uk-close></button>
                <ul class="uk-nav uk-nav-default">
                    <li class="uk-active"><a href="{{ url('/')}}">Home</a></li>
                    <li><a href="{{ route('about')}}">About US</a></li>
                    <li><a href="{{ route('fee')}}">Fee Structure</a></li>
                    <li><a href="{{ route('downloads')}}">Downloads</a></li>
                    <li>
                        <a href="#">Courses</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="{{ route('dss')}}">Diploma in Secretarial Studies</a></li>
                                <li><a href="{{ route('dbm')}}">Diploma in Business Management</a></li>
                                <li class="uk-nav-header">Header</li>
                                <li><a href="{{ route('css')}}">Certificate in Secretarial Studies (Single &amp; Group)</a></li>
                                <li><a href="{{ route('cpa')}}">Certified Public Accountant(CPA)</a></li>
                                <li class="uk-nav-divider"></li>
                                <li><a href="{{ route('packages')}}">Computer Packages</a></li>
                                <li><a href="{{ route('cams')}}">Certificate in Accounting &amp; Management Skills</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="{{ route('contact')}}">Contact US</a></li>
                </ul>
            </div>
        </div>

        @yield('content')


        <a href="#" uk-totop uk-scroll></a>

<div class="uk-section uk-section-secondary">
    <div class="uk-container">

        <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
            <div>
              <div class="uk-width-auto">
                <img class="uk-border-circle" width="100" height="100" src="{{asset ('assets/images/logoz.png')}}">
            </div>
              <h4>St.Mary's College</h4>
                <p>St.Mary's Secretarial College is an Accredited KNEC & KASNEB Examination Center with Excellent Learning Environment and Facilities.</p>
            </div>
            <div>
              <h4>Recent Updates</h4>
                <p>2019 January Intake is in progress for all courses</p>
                <p>The School got official Registration and Accreditation by KNEC and KASNEB </p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
        </div>

    </div>
</div>


    <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/uikit.min.js')}}"></script>
    <script src="{{asset('assets/js/uikit-icons.min.js')}}"></script>
        
    </body>
</html>