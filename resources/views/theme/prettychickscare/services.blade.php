@extends('theme.prettychickscare.website')
@section('content')
    <!-- Maintain your beauty skin  Section Start -->
    <section class="maintain-beauty-skin product-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="enhance-txt">
                        <h6><span></span> women who want to </h6>
                        <h1><span>Our</span>Services</h1>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do elusmod tempor
                            incididunt ut
                            labore</p> -->
                        <a href="{{ route('products') }}" class="theme_btn">Shop Now <img src="{{ asset('public/theme/prettychickscare/images/right-arrow.png') }}" alt=""></a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="product-banner-img">
                        <img src="{{ asset('public/theme/prettychickscare/images/Untitled-new.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- PRODUCTS__SECTION__START -->

    <section class="services">
        <div class="container">

            <div class="top-heading">
                <h1> <span>OUR</span> SERVICES </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla maxime <br> unde facilis cum error? Earum,
                    , consectetur </p>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="box-packages">
                        <img src="{{ asset('public/theme/prettychickscare/images/Untitled-5.png') }}" alt="">
                        <div class="services-pkg">
                            <h3>SERVICE HERE</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p> 
                        </div>
                        <div class="arrow">
                            <a href="https://linktr.ee/dollhousemedspa?fbclid=PAAaYcXEaUhzKHGsn0Cx9C3P2pFTmFEMUS2Et1_MIURkO3OwKzsxGSWyQKISI"> book now </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box-packages">
                        <img src="{{ asset('public/theme/prettychickscare/images/Untitled-6.png') }}" alt="">
                        <div class="services-pkg">
                            <h3>SERVICE HERE</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="arrow">
                            <a href="https://linktr.ee/dollhousemedspa?fbclid=PAAaYcXEaUhzKHGsn0Cx9C3P2pFTmFEMUS2Et1_MIURkO3OwKzsxGSWyQKISI"> book now </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box-packages">
                        <img src="{{ asset('public/theme/prettychickscare/images/Untitled-6.png') }}" alt="">
                        <div class="services-pkg">
                            <h3>SERVICE HERE</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="arrow">
                            <a href="https://linktr.ee/dollhousemedspa?fbclid=PAAaYcXEaUhzKHGsn0Cx9C3P2pFTmFEMUS2Et1_MIURkO3OwKzsxGSWyQKISI"> book now </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box-packages">
                        <img src="{{ asset('public/theme/prettychickscare/images/Untitled-4.png') }}" alt="">

                        <div class="services-pkg">
                            <h3>SERVICE HERE</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="arrow"> 
                            <a href="https://linktr.ee/dollhousemedspa?fbclid=PAAaYcXEaUhzKHGsn0Cx9C3P2pFTmFEMUS2Et1_MIURkO3OwKzsxGSWyQKISI"> book now </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- PRODUCTS__SECTION__END -->
@endsection

@section('js-script')
@endsection
