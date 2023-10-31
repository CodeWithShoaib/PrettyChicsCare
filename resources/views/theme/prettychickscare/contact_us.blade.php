@extends('theme.prettychickscare.website')

@section('content')
<!-- Maintain your beauty skin  Section Start -->
<section class="maintain-beauty-skin">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="enhance-txt">
                    <h6><span></span> women who want to </h6>
                    <h1><span>Enhance</span>& maintain your beauty/skin</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do elusmod tempor
                        incididunt ut
                        labore</p>
                    <a href="{{ route('products') }}" class="theme_btn">Shop Now <img src="{{ asset('public/theme/prettychickscare/images/right-arrow.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-page">
    <div class="container">

        <div class="contact heading">
            <h1> <span>CONTACT</span> WITH US </h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quibusdam saepe, </p>
        </div>

        <div class="row align-items-center">

            <div class="col-md-6">

                <div class="mail-contact">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="First Name">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Last Name">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
                    </div>
                </div>

            </div>

            <div class="col-md-6">
                <div class="right-side-img">
                    <img src="{{ asset('public/theme/prettychickscare/images/first-banner.jpg') }}" alt="">
                </div>
            </div>

        </div>
    </div>
</section>

@endsection

@section('js-script')
@endsection