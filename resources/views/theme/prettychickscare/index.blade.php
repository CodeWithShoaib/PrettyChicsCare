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
                        <a href="{{ url('shop') }}" class="theme_btn">Shop Now <img
                                src="{{ asset('public/theme/prettychickscare/images/right-arrow.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Maintain your beauty skin End -->

    <div class="preetty-social-acc">
        <ul>
            <li><a href="https://www.instagram.com/Dollhouse.Medicalspa/"><i class='bx bxl-instagram'></i></a></li>
            {{-- <li><a href="#"><i class='bx bxl-google-plus'></i></a></li>
            <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
            <li><a href="#"><i class='bx bxl-facebook'></i></a></li> --}}
        </ul>
    </div>

    <!-- Pretty Chicks care section Start -->
    <section class="pretty-chicks-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="pretty-img">
                        <img src="{{ asset('public/theme/prettychickscare/images/prett-chicks-banner.png') }}"
                            alt="">
                        <div class="pretty-pro-img">
                            <img src="{{ asset('public/theme/prettychickscare/images/right-arrow.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pretty-txt">
                        <h6><span></span> Welcome to</h6>
                        <h1><span>Pretty</span> Chics <span>Care</span></h1>
                        <p>Pretty Chics Care was started by Allita Ferguson Rn whose vision is to provide Healthy skin
                            products without harsh chemicals to maintain and enhance your beauty. Allita is a nurse who
                            ventured into aesthetics and beauty and found a love for making women feel
                            beautiful. </p>
                        <div class="pretty-txt-img">
                            <img src="{{ asset('public/theme/prettychickscare/images/banner-2-txtimg.png') }}"
                                alt="">
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
    <!-- Pretty Chicks care section End -->

    <!-- Our Product Section Start -->
    <section class="our-product-sec">
        <h6>Our Skin & Beauty Products</h6>
        <h2>Our Products</h2>
        <div class="container">
            <div class="row">
               
            @php
            $product=App\Entity\Product\Product::all();
            @endphp
            @foreach($product as $item)
            @php
            $Product_translation=App\Entity\Product\ProductTranslation::where("product_id",$item->id)->first();
            @endphp
                <div class="col-lg-3">
                    <div class="pretty-product">
                        <div class="product-img">
                        <a href="{{route('product_detail',[$item->id])}}">
                            <img src="{{ asset('storage/app/'. $item->image->file_path) }}" alt="">
                       </a>
                            <ul>
                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                <li><a href="{{ route('addtocart') }}"><i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-txt">
                            <div class="review-star">
                                <ul>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                </ul>
                                <h4>{{$Product_translation->name}}</h4>
                                <p>{{substr($Product_translation->short_description,0,62)}}</p>

                                <h5>@if($item->special_price != '' || (int) $item->special_price != 0 )<span>${!! $item->price !!}</span> ${!! $item->special_price !!} @else ${!! $item->price !!} @endif</h5>
                                <div class="theme-group">
                                    <a href="{{ url('add_to_cart/'.$item->id) }}" class="themeBtn buy_now">buy now</a>
                                    <a href="{{ url('add_to_cart/'.$item->id) }}" class="add_to_cart themeBtn" data-type="{{ $item->product_type }}" >add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach    
            
            </div>
        </div>
    </section>
    <!-- Our Product Section End -->

    <!-- Best SPA Section Start -->
    <section class="best-spa-sec">
        <div class="spa-img">
            <img src="{{ asset('public/theme/prettychickscare/images/spa-backgorund-img.png') }}" alt="">
        </div>
        <div class="spa-text">
            <h1>The Best <span>SPA</span> In Town</h1>
            <p>By Doll House Med Spa</p>
        </div>
        <div class="spa-logo">
            <img src="{{ asset('public/theme/prettychickscare/images/spa-logo.jpg') }}" alt="">
        </div>
    </section>
    <!-- Best SPA Section End -->

    <!-- Best Selling Section Start -->
    <section class="best-selling-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="best-sell-head">
                        <h6><span></span> Our Skin & Beauty Products</h6>
                        <h2>our services</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6">

                    <div class="box-packages">
                        <img src="https://customdev.devopdigital.com/prettychickscare/public/theme/prettychickscare/images/Untitled-5.png"
                            alt="">

                        <div class="services-pkg">
                            <h3>Mesotherapy/Lipo Injections</h3>
                            <p>$999</p>

                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="https://linktr.ee/dollhousemedspa?fbclid=PAAaYcXEaUhzKHGsn0Cx9C3P2pFTmFEMUS2Et1_MIURkO3OwKzsxGSWyQKISI"
                                class="theme_btn"> book now</a>
                        </div>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="box-packages">
                        <img src="https://customdev.devopdigital.com/prettychickscare/public/theme/prettychickscare/images/Untitled-6.png"
                            alt="">

                        <div class="services-pkg">
                            <h3>Hyaluronic BBL 200ccs</h3>
                            <p>$3000</p>

                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="https://linktr.ee/dollhousemedspa?fbclid=PAAaYcXEaUhzKHGsn0Cx9C3P2pFTmFEMUS2Et1_MIURkO3OwKzsxGSWyQKISI"
                                class="theme_btn"> book now</a>
                        </div>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="box-packages">
                        <img src="https://customdev.devopdigital.com/prettychickscare/public/theme/prettychickscare/images/Untitled-6.png"
                            alt="">

                        <div class="services-pkg">
                            <h3>Hyaluronic BBL 300ccs</h3>
                            <p>$4000</p>

                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="https://linktr.ee/dollhousemedspa?fbclid=PAAaYcXEaUhzKHGsn0Cx9C3P2pFTmFEMUS2Et1_MIURkO3OwKzsxGSWyQKISI"
                                class="theme_btn"> book now</a>
                        </div>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="box-packages">
                        <img src="https://customdev.devopdigital.com/prettychickscare/public/theme/prettychickscare/images/Untitled-4.png"
                            alt="">

                        <div class="services-pkg">
                            <h3>Hyaluronic BBL 400ccs</h3>
                            <p>$5000</p>

                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="https://linktr.ee/dollhousemedspa?fbclid=PAAaYcXEaUhzKHGsn0Cx9C3P2pFTmFEMUS2Et1_MIURkO3OwKzsxGSWyQKISI"
                                class="theme_btn"> book now</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- Best Selling  Section End -->

    <div class="product-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="best-sell-head text-center">
                        {{-- <h6><span></span> Our Skin & Beauty Products</h6> --}}
                        <h2>Our Work</h2>
                    </div>
                </div>
                <div class="col-12 col-lg-4 p-3">
                    <div class="product-box">
                        <img src="{{ asset('public/theme/prettychickscare/images/pro-01.jpg') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-lg-4 p-3">
                    <div class="product-box">
                        <img src="{{ asset('public/theme/prettychickscare/images/pro-04.jpg') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-lg-4 p-3">
                    <div class="product-box">
                        <img src="{{ asset('public/theme/prettychickscare/images/pro-03.jpg') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-lg-4 p-3">
                    <div class="product-box">
                        <img src="{{ asset('public/theme/prettychickscare/images/pro-05.jpg') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-lg-4 p-3">
                    <div class="product-box">
                        <img src="{{ asset('public/theme/prettychickscare/images/pro-06.jpg') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-lg-4 p-3">
                    <div class="product-box">
                        <img src="{{ asset('public/theme/prettychickscare/images/pro-02.jpg') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Breast Cancer Section Start -->
    <section class="breast-cancer-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breast-cancer-txt">
                        <h1><span></span>Breast</h1>
                        <h2>Cancer</h2>
                        <h4>What you need to know</h4>
                        <p>Pretty Chics LLC has been impacted personally by breast cancer and wants women to know that
                            prevention is key, so check your boobies!
                            Breast Cancer is a curable and treatable occurrence and Pretty Chics LLC wants you to know that
                            your not in the fight alone. Prevention is key.
                            Please click the link to assess your risk factors and prevention tips! </p>
                        <div class="breast-cancer-btn">
                            <a href="{{url('services')}}">Learn More <img
                                    src="{{ asset('public/theme/prettychickscare/images/right-arrow-purple.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="breast-cancer-img">
                        <img src="{{ asset('public/theme/prettychickscare/images/breast-cancer.png') }}" alt="">
                        <div class="ribbon-img">
                            <img src="{{ asset('public/theme/prettychickscare/images/Ribbon.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breast Cancer Section End -->

    <!-- What our client say Section Start -->
    <section class="client-say-sec">
        <div class="container">
            <div class="before-border"></div>
            <div class="row client-review-slider">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="client-say-img">
                                <img src="{{ asset('public/theme/prettychickscare/images/slider-img-1.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="client-say-txt">
                                <h1>What Our Clients Say</h1>
                                <p>A few months ago I was scrolling on instagram and came across Dollhouse Med Spa and I’m
                                    sure glad I did! I got lipo injections to my submental region to help with my stubborn
                                    chin fat. After one round I am in awe at my results! Nurse Allita knows her stuff! She
                                    was very welcoming and well trained. The Doctor and staff were both very friendly! The
                                    office is clean and well decorated! I highly recommend them and will definitely be going
                                    back for more services!</p>
                                <div class="client-review">
                                    <h4>Gloria Harden</h4>
                                    <ul>
                                        <li><i class='bx bxs-star'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="client-say-img">
                                <img src="{{ asset('public/theme/prettychickscare/images/slider-img-1.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="client-say-txt">
                                <h1>What Our Client Say</h1>
                                <p>I had Lipo injections done on my lower stomach and back fat I Love the results  thank you Dollhouse Med Spa .</p>
                                <div class="client-review">
                                    <h4>miesha styles</h4>
                                    <ul>
                                        <li><i class='bx bxs-star'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="client-say-img">
                                <img src="{{ asset('public/theme/prettychickscare/images/slider-img-1.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="client-say-txt">
                                <h1>What Our Client Say</h1>
                                <p>Staff very friendly and made my visit comfortable. Allita RN is so nice and personable. She is very gentle and takes her time. Receptionist is welcoming and the physician on site has great bedside manners. Definitely recommend!!</p>
                                <div class="client-review">
                                    <h4>Natesha Fields</h4>
                                    <ul>
                                        <li><i class='bx bxs-star'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="client-say-img">
                                <img src="{{ asset('public/theme/prettychickscare/images/slider-img-1.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="client-say-txt">
                                <h1>What Our Client Say</h1>
                                <p>Hello future dolls I'm so happy to be a doll I so love everything about this place the customer service hands down the best the doctor and nurses made sure I was comfortable always text to see if I'm enjoying my results ♥ made sure I wasn't in any pain I really appreciate doll house spa thanks yall for everything im getting fine by the day ♥</p>
                                <div class="client-review">
                                    <h4>Jessica S</h4>
                                    <ul>
                                        <li><i class='bx bxs-star'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="white-layer-img">
            <img src="{{ asset('public/theme/prettychickscare/images/white-layer.png') }}" alt="">
        </div>
    </section>
    <!-- What our client say Section End -->
@endsection

@section('js-script')
<script src="{{ asset('public/theme/default/js/cart.js?v=1.1') }}"></script>
<script>
  $(document).on('click','.buy_now',function(event){
    	event.preventDefault();
    	var elem = $(this);
    	$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

    	var product_type = $(this).data('type');
    	if(product_type != 'variable_product'){
    		$.ajax({
    			url: $(this).attr("href"),
    			method: "POST",
    			data: { 
					'quantity': typeof $('input[name="quantity"]').val() === "undefined" ? 1 : $('input[name="quantity"]').val()
				}, 
				beforeSend: function(){
					$(elem).find('i').remove();
					$(elem).html($(elem).html() + '<i class="fa fa-circle-o-notch fa-spin ml-2"></i>');
				},success: function(data){
					$(elem).find('i').remove();
					$(elem).html($(elem).html() + '<i class="fa fa-check text-success ml-2"></i>');
					window.location.href = `${_url}/checkout`;
					
					var json = JSON.parse(JSON.stringify(data));

					if(json['result'] == true){
						//Update Dropdown Cart
						$("#mini-cart").html(json['data']);
						$("#mobile-cart .total-count").html(json['total_items']);
					}else{
						$.toast({
							text: json['message'],
							showHideTransition: 'slide',
							icon: 'error',
							position : 'top-right' 
						});
					}
	
				},
				error: function (request, status, error) {
					console.log(request.responseText);
				}
    		});
    	}else{
			
    		$.ajax({
    			url: $(this).attr("href"),
    			method: "POST",
    			data: { 
					'quantity': $('input[name="quantity"]').val(),
					'product_option[]': $('.select_product_option').serialize(),
				}, 
				beforeSend: function(){
					$(elem).find('i').remove();
					$(elem).html($(elem).html() + '<i class="fa fa-circle-o-notch fa-spin ml-2"></i>');
				},success: function(data){
					$(elem).find('i').remove();
					$(elem).html($(elem).html() + '<i class="fa fa-check text-success ml-2"></i>');
					var json = JSON.parse(JSON.stringify(data));
					
					if(json['result'] == true){
						//Update Dropdown Cart
						$("#mini-cart").html(json['data']);
						$("#mobile-cart .total-count").html(json['total_items']);
					  	
					}else{
						$.toast({
							text: json['message'],
							showHideTransition: 'slide',
							icon: 'error',
							position : 'top-right' 
						});
					}
				},
				error: function (request, status, error) {
					console.log(request.responseText);
				}
    		});
		
    	}

    });

</script>
@endsection
