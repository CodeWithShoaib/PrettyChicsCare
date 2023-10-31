@extends('theme.prettychickscare.website')
@section('content')

            @php
            $Product_translation=App\Entity\Product\ProductTranslation::where("product_id",$products->id)->first();
            @endphp

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


<!-- PRODUCT__DETAIL__PAGE__START -->

<section class="product-detail">
    <div class="container">
        <div class="row">

        <div class="col-md-6">
            <div class="product-image">
                <div class="product-img">
                <img src="{{ asset('storage/app/'. $products->image->file_path) }}" alt="">
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="product-pricing">
                <h3>{{$Product_translation->name}}   </h3>
                <div class="rating">
                    <ul>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    </ul>   
                </div>

                <div class="pricing">
                    <h3>@if($products->special_price != '' || (int) $products->special_price != 0 )<span>${!! $products->price !!}</span> ${!! $products->special_price !!} @else ${!! $products->price !!} @endif </h3>
                </div>

                <div class="discription">
                    <strong>Product Description</strong>

                    <p>{!! $Product_translation->description !!}</p>        
                </div>

                <div class="shop-btn">
                    <a href="{{ url('add_to_cart/'.$products->id) }}" class='buy_now'>Shop Now</a>
                </div>

            </div>
        </div>


        </div>
    </div>
</section>


<!-- PRODUCT__DETAIL__PAGE__END -->
@endsection
@section('js-script')
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