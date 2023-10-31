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
                    <a href="{{ url('shop') }}" class="theme_btn">Shop Now <img src="{{ asset('public/theme/prettychickscare/images/right-arrow.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-us">
    <section class="pretty-chicks-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="pretty-img">
                        <img src="{{ asset('public/theme/prettychickscare/images/client.png') }}" alt="">
                        <div class="pretty-pro-img">
                            <img src="{{ asset('public/theme/prettychickscare/images/2nd-banner-pro.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pretty-txt">
                        <h6><span></span> Welcome to</h6>
                        <h1><span>Pretty</span> Chics <span>Care</span></h1>
                        <p>Pretty Chics Care was started by Allita Ferguson Rn whose vision is to provide</p>
                        <p>Healthy skin products without harsh chemicals to maintain and enhance your beauty.</p>
                        <p>Allita is a nurse who ventured into aesthetics and beauty and found a love for making women
                            feel beautiful. </p>
                        <div class="pretty-txt-img">
                            <img src="{{ asset('public/theme/prettychickscare/images/banner-2-txtimg.png') }}" alt="">
                            <div class="pretty-img-txt">
                                <h4>Our <br> Story</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit, sed do eiusmod
                                    <br> tempor
                                    incididunt
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

@endsection

@section('js-script')
@endsection
