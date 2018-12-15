@extends('layouts.main')

@section('content')

<section class="engine">
    <a href="{{ route('index')}}">St. Mary's Secretarial College</a>
</section>

<section class="carousel slide cid-rc6fcu1eFu" data-interval="false" id="slider1-3">

    <div class="full-screen">
        <div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="false" data-interval="false">
            <ol class="carousel-indicators">
                <li data-app-prevent-settings="" data-target="#mbr-slider slide carousel" class=" active" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#mbr-slider slide carousel" data-slide-to="1"></li>
                <li data-app-prevent-settings="" data-target="#mbr-slider slide carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(assets/images/picture8.png);">
                    <div class="container container-slide">
                        <div class="image_wrapper">
                            <div class="mbr-overlay"></div>
                            <img src="{{asset ('assets/images/picture8.png')}}">
                            <div class="carousel-caption justify-content-center">
                                <div class="col-10 align-center">
                         <h2 class="mbr-fonts-style display-1"><span style="color: #CE0000">St.Mary's Secretarial College</span></h2>
                                    <p class="lead mbr-text mbr-fonts-style display-5">We are accredited by KNEC & KASNEB Examination Centre With Excellent Learning Environment and Facilities.</p>
                                    <div class="mbr-section-btn" buttons="0">
                                        <a class="btn btn-success display-4" href="{{ route('courses')}}">Check Courses</a>
                                        <a class="btn  btn-white-outline display-4" href="#">Register</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/picture4.png);">
                    <div class="container container-slide">
                        <div class="image_wrapper">
                            <div class="mbr-overlay"></div>
                            <img src="{{asset ('assets/images/picture4.png')}}">
                            <div class="carousel-caption justify-content-center">
                                <div class="col-10 align-right">
                                    <h2 class="mbr-fonts-style display-1">IMAGE SLIDE</h2>
                                    <p class="lead mbr-text mbr-fonts-style display-5">Choose from the large selection of latest pre-made blocks - jumbotrons, hero images, parallax scrolling, video backgrounds, hamburger menu, sticky header and more.</p>
                                    <div class="mbr-section-btn" buttons="0">
                                        <a class="btn btn-info display-4" href="#">FOR WINDOWS</a>
                                        <a class="btn  btn-white-outline display-4" href="#">FOR MAC</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-3"><span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only">Previous</span></a>
            <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-3"><span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only">Next</span></a>
        </div>
    </div>

</section>

<section class="mbr-section content4 cid-rcc8MwBB6d pt-5" id="content4-l">    
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">St.Mary's Secretarial College is an Accredited KNEC &amp; KASNEB Examination Center with Excellent Learning Environment and Facilities.</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">We have Boarding Facilities for Ladies and Day Schooling Open for All.</h3>
                <div class="mbr-section-btn align-center py-4">
                    <a class="btn btn-primary display-4" href="https://mobirise.co">LEARN MORE</a>
                    <a class="btn btn-black-outline display-4" href="https://mobirise.co">LIVE DEMO</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features3 cid-rc6su7RbIR" id="features3-i">

    

    
    <div class="container">
        <div class="text-center"><h2 style="color: #3295CC">Courses offered</h2></div>
        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="{{asset ('assets/images/picture6.png')}}" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                            Diploma in Secretarial Studies
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Mobirise is an easy website builder - just drop site elements to your page, add content and style it to look the way you like.
                        </p>
                    </div>
                    <div class="mbr-section-btn text-center">
                        <a href="#" class="btn btn-primary display-4">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="{{asset ('assets/images/picture4.png')}}" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                            Diploma in Business Management
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            All sites you make with Mobirise are mobile-friendly. You don't have to create a special mobile version of your site.
                        </p>
                    </div>
                    <div class="mbr-section-btn text-center">
                        <a href="#" class="btn btn-primary display-4">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="{{asset ('assets/images/03.jpg')}}" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                            Certificate in Secretarial Studies(Single & Group)
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Mobirise offers many site blocks in several themes, and though these blocks are pre-made, they are flexible.
                        </p>
                    </div>
                    <div class="mbr-section-btn text-center">
                        <a href="#" class="btn btn-primary display-4">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>

            
        </div>

        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="{{asset ('assets/images/01.jpg')}}" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                            Certified Public Accountant(CPA)
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Mobirise is an easy website builder - just drop site elements to your page, add content and style it to look the way you like.
                        </p>
                    </div>
                    <div class="mbr-section-btn text-center">
                        <a href="#" class="btn btn-primary display-4">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="{{asset ('assets/images/02.jpg')}}" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                            Computer Packages
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            All sites you make with Mobirise are mobile-friendly. You don't have to create a special mobile version of your site.
                        </p>
                    </div>
                    <div class="mbr-section-btn text-center">
                        <a href="#" class="btn btn-primary display-4">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="{{asset ('assets/images/03.jpg')}}" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                            Certificate in Accounting and Management Skills
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Mobirise offers many site blocks in several themes, and though these blocks are pre-made, they are flexible.
                        </p>
                    </div>
                    <div class="mbr-section-btn text-center">
                        <a href="#" class="btn btn-primary display-4">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</section>

<div class="container pt-4">
    <h1>JANUARY 2019 INTAKE</h1>
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th scope="col">COURSE</th>
          <th scope="col">QUALIFICATION</th>
          <th scope="col">MODE</th>
          <th scope="col">DURATION</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Diploma in Secretarial Studies</td>
          <td>KCSE C-</td>
          <td>Full Time</td>
          <td>3 Years</td>
        </tr>
        <tr>
          <td>Diploma in Business Management</td>
          <td>KCSE C-</td>
          <td>Full Time</td>
          <td>3 Years</td>
        <tr>
          <td>Certificate in Secretarial Studies (Single & Groups)</td>
          <td>KCSE D (Plain)</td>
          <td>Full Time</td>
          <td>2 Years</td>
        </tr>
        <tr>
          <td>CPA</td>
          <td>KCSE C+</td>
          <td>Part Time</td>
          <td>6 Months</td>
        </tr>
        <tr>
          <td>Computer Packages</td>
          <td>Open</td>
          <td>Part Time</td>
          <td>2 Months</td>
        </tr>
        <tr>
          <td>Certificate in Accounting & Management Skills</td>
          <td>KCSE D+</td>
          <td>Full Time</td>
          <td>1 Year</td>
        </tr>
      </tbody>
    </table>
</div>


@endsection