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
                        <a href="{{ route('products') }}" class="theme_btn">Shop Now <img
                                src="{{ asset('public/theme/prettychickscare/images/right-arrow.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WISHLIST__PAGE__START -->

    <section class="wishlist-page">
        <div class="container">

            <div class="wish-list-heading">
                <h2> <span>Wish</span> List </h2>
            </div>

            <div class="row">

                <div class="col-md-12">
                    <!-- FILTERS -->
                    <div class="filters-bar">
                        <div class="row">

                            <div class="col-md-7">
                                <!-- select boxes here -->
                                <!-- <div class="box-selector">
                                        <div class="box-one">
                                            <select class="custom-select">
                                                <option selected>Default sorting</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div> -->

                                <!-- <div class="box-two">
                                            <select class="custom-select">
                                                <option selected>12</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div> -->
                            </div>
                        </div>

                        <div class="col-md-5">
                            <!-- text here -->
                            <!-- <div class="side-text">
                                        <p>Showing 1-12 of 48 result</p>
                                    </div> -->
                        </div>
                    </div>
                </div>

                <!-- LISTING -->
                <div class="listing-area">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="pretty-product">
                                <div class="product-img">
                                    <img src="{{ asset('public/theme/prettychickscare/images/pro-1.png') }}" alt="">
                                </div>
                                <div class="product-txt">
                                    <div class="review-star">
                                        <ul>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                        </ul>
                                        <h4>Product Name</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing do eiusmod</p>
                                        <h5><span>$20.00</span> $20.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="pretty-product">
                                <div class="product-img">
                                    <img src="{{ asset('public/theme/prettychickscare/images/pro-1.png') }}" alt="">
                                </div>
                                <div class="product-txt">
                                    <div class="review-star">
                                        <ul>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                        </ul>
                                        <h4>Product Name</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing do eiusmod</p>
                                        <h5><span>$20.00</span> $20.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="pretty-product">
                                <div class="product-img">
                                    <img src="{{ asset('public/theme/prettychickscare/images/pro-1.png') }}" alt="">
                                </div>
                                <div class="product-txt">
                                    <div class="review-star">
                                        <ul>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                        </ul>
                                        <h4>Product Name</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing do eiusmod</p>
                                        <h5><span>$20.00</span> $20.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="pretty-product">
                                <div class="product-img">
                                    <img src="{{ asset('public/theme/prettychickscare/images/pro-1.png') }}" alt="">
                                </div>
                                <div class="product-txt">
                                    <div class="review-star">
                                        <ul>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                        </ul>
                                        <h4>Product Name</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing do eiusmod</p>
                                        <h5><span>$20.00</span> $20.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="pretty-product">
                                <div class="product-img">
                                    <img src="{{ asset('public/theme/prettychickscare/images/pro-1.png') }}" alt="">
                                </div>
                                <div class="product-txt">
                                    <div class="review-star">
                                        <ul>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                        </ul>
                                        <h4>Product Name</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing do eiusmod</p>
                                        <h5><span>$20.00</span> $20.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="pretty-product">
                                <div class="product-img">
                                    <img src="{{ asset('public/theme/prettychickscare/images/pro-1.png') }}" alt="">
                                </div>
                                <div class="product-txt">
                                    <div class="review-star">
                                        <ul>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                        </ul>
                                        <h4>Product Name</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing do eiusmod</p>
                                        <h5><span>$20.00</span> $20.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="pretty-product">
                                <div class="product-img">
                                    <img src="{{ asset('public/theme/prettychickscare/images/pro-1.png') }}"
                                        alt="">
                                </div>
                                <div class="product-txt">
                                    <div class="review-star">
                                        <ul>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                        </ul>
                                        <h4>Product Name</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing do eiusmod</p>
                                        <h5><span>$20.00</span> $20.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="pretty-product">
                                <div class="product-img">
                                    <img src="{{ asset('public/theme/prettychickscare/images/pro-1.png') }}"
                                        alt="">
                                </div>
                                <div class="product-txt">
                                    <div class="review-star">
                                        <ul>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                        </ul>
                                        <h4>Product Name</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing do eiusmod</p>
                                        <h5><span>$20.00</span> $20.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="pretty-product">
                                <div class="product-img">
                                    <img src="{{ asset('public/theme/prettychickscare/images/pro-1.png') }}"
                                        alt="">
                                </div>
                                <div class="product-txt">
                                    <div class="review-star">
                                        <ul>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                        </ul>
                                        <h4>Product Name</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing do eiusmod</p>
                                        <h5><span>$20.00</span> $20.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="pretty-product">
                                <div class="product-img">
                                    <img src="{{ asset('public/theme/prettychickscare/images/pro-1.png') }}"
                                        alt="">
                                </div>
                                <div class="product-txt">
                                    <div class="review-star">
                                        <ul>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                        </ul>
                                        <h4>Product Name</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing do eiusmod</p>
                                        <h5><span>$20.00</span> $20.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="pretty-product">
                                <div class="product-img">
                                    <img src="{{ asset('public/theme/prettychickscare/images/pro-1.png') }}"
                                        alt="">
                                </div>
                                <div class="product-txt">
                                    <div class="review-star">
                                        <ul>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                        </ul>
                                        <h4>Product Name</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing do eiusmod</p>
                                        <h5><span>$20.00</span> $20.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="pretty-product">
                                <div class="product-img">
                                    <img src="{{ asset('public/theme/prettychickscare/images/pro-1.png') }}"
                                        alt="">
                                </div>
                                <div class="product-txt">
                                    <div class="review-star">
                                        <ul>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                            <li><i class="bx bxs-star"></i></li>
                                        </ul>
                                        <h4>Product Name</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing do eiusmod</p>
                                        <h5><span>$20.00</span> $20.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>

    <!-- WISHLIST__PAGE__END -->
@endsection

@section('js-script')
@endsection
