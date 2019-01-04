@extends('layouts.main')

@section('content')

<section class="engine"><a href="{{url('/')}}">School Website</a>
</section>
<section class="mbr-section content5 cid-rcch5LToVN mbr-parallax-background" id="content5-n">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1"><span style="color: #CD0100">Contact Us</h2>
                
                
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section form4 cid-rc6q3frea7" id="form4-d">

    

    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/search?key=AIzaSyA9BrfG0u2ijdH2dToRwvs-P-WSDn3nF0U&q=St.-Marys+Secretarial-college-isiolo&zoom=9"" allowfullscreen=""></iframe></div>
                
            </div>
            <div class="col-md-6">
                <h2 class="pb-3 align-left mbr-fonts-style display-2">
                    Drop any Concern Here
                </h2>
                <div>
                    <div class="icon-block pb-3">
                        <span class="icon-block__icon">
                            <span class="mbri-letter mbr-iconfont"></span>
                        </span>
                        <h4 class="icon-block__title align-left mbr-fonts-style display-5">
                            Don't hesitate to contact us
                        </h4>
                    </div>
                    <div class="icon-contacts pb-3">
                        <h5 class="align-left mbr-fonts-style display-7">
                            We are very ready for any communicaion from you
                        </h5>
                        <p class="mbr-text align-left mbr-fonts-style display-7">
                        <span style="color: #000000">phone: <a style="color: #005D7E"  
                        href="tel: +254723977280">
                        +254723977280</a><br>
                        <span style="color: #000000">Mail: <a style="color: #005D7E"  
                        href="mailto: smscmarys@gmail.com">
                        smscmarys@gmail.com</a>
            </span>
                        </p>
                    </div>
                </div>
                <div data-form-type="formoid">
                    <div data-form-alert="" hidden="">
                        Thanks for filling out the form!
                    </div>
                    <form class="block mbr-form" action="{{url('/')}}" method="post" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="SGp3qprqvnXrjz3YPe4w+Eea5ZWti64gMY3rDDM4BrExOdfKBRE05zmj9PJMVep8Mm3RA7Skbdrf2fhQaEKjDl909prkneyBV4YT3XpgpMvzsOcV54O7QFJ+16ys3hMa">
                        <div class="row">
                            <div class="col-md-6 multi-horizontal" data-for="name">
                                <input type="text" class="form-control input" name="name" data-form-field="Name" placeholder="Your Name" required="" id="name-form4-d">
                            </div>
                            <div class="col-md-6 multi-horizontal" data-for="phone">
                                <input type="text" class="form-control input" name="phone" data-form-field="Phone" placeholder="Phone" required="" id="phone-form4-d">
                            </div>
                            <div class="col-md-12" data-for="email">
                                <input type="text" class="form-control input" name="email" data-form-field="Email" placeholder="Email" required="" id="email-form4-d">
                            </div>
                            <div class="col-md-12" data-for="message">
                                <textarea class="form-control input" name="message" rows="3" data-form-field="Message" placeholder="Message" style="resize:none" id="message-form4-d"></textarea>
                            </div>
                            <div class="input-group-btn col-md-12" style="margin-top: 10px;">
                                <button href="" type="submit" class="btn btn-primary btn-form display-4">SEND MESSAGE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection