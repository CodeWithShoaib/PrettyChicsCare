@extends('theme.prettychickscare.website')
<style>

.shopping-cart .total-amount .left .checkbox label::after {
	position: absolute;
	content: "\f00c";
	font-family: "Fontawesome";
	left: 0;
	top: 0;
	width: 22px;
	height: 22px;
	line-height: 24px;
	left: 3px;
	top: 0px;
	opacity: 0;
	visibility: hidden;
	transform: scale(0);
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
	display: block;
	font-size: 11px;
}
.shopping-cart .total-amount .left .checkbox label.checked::after{
	opacity:1;
	visibility:visible;
	transform:scale(1);
}
.shopping-cart .total-amount .left .shipping_methods h4 {
	font-size: 18px;
	margin-bottom: 15px;
	font-weight: 600;
}
.shopping-cart .total-amount .left .shipping_methods label {
	font-size: 15px;
	font-weight: 400;
	color: #333;
	position: relative;
}
.shopping-cart .total-amount .left .shipping_methods label:hover{
	cursor:pointer;
}
.shopping-cart .total-amount .right {
	padding-left: 100px;
}
.shopping-cart .total-amount .right ul{
	
}
.shopping-cart .total-amount .right ul li {
	font-size: 15px;
	font-weight: 400;
	color: #333;
	margin-bottom: 12px;
}
.shopping-cart .total-amount .right ul li.last {
	padding-top: 12px;
	border-top: 1px solid #c8c8c8;
	color: #333;
	font-size: 15px;
	font-weight: 400;
}
.shopping-cart .total-amount .right ul li span{
	display:inline-block;
	float:right;
}
.shopping-cart .total-amount .right .button5 .btn {
	text-align: center;
	border-radius: 0;
	width: 100%;
	margin-top: 10px;
	height: 46px;
	line-height: 18px;
	font-size: 13px;
	color: #fff;
}
/*======================================
   End Shopping Cart CSS
========================================*/

/*======================================
   Start Checkout Form CSS
========================================*/
.shop.checkout {
	padding: 0;
	background: #fff;
	padding-top: 20px;
	padding-bottom: 50px;
}
.shop.checkout .checkout-form {
	margin-top: 30px;
}
.shop.checkout .checkout-form h2 {
	font-size: 25px;
	color: #333;
	font-weight: 700;
	line-height: 27px;
}
.shop.checkout .checkout-form p {
	font-size: 16px;
	color: #333;
	font-weight: 400;
	margin-top: 12px;
	margin-bottom: 30px;
}

.shop.checkout .form-group {
	margin-bottom: 25px;
}
.shop.checkout .form-group label{
	color:#333;
	position:relative;
}
.shop.checkout .form-group label span {
	color: #ff2c18;
	display: inline-block;
	position: absolute;
	right: -12px;
	top: 4px;
	font-size: 16px;
}
.shop.checkout .form-group input {
	width: 100%;
	height: 45px;
	line-height: 50px;
	padding: 0 20px;
	border-radius: 3px;
	border-radius: 0px;
	color: #333 !important;
	border: none;
	background: #F6F7FB;
}
.shop.checkout .form-group input[type=checkbox]{
	width: auto;
	height: auto;
}
.shop.checkout .form-group select {
	width: 100%;
	height: 45px;
	line-height: 50px;
	padding: 0 20px;
	border-radius: 3px;
	border-radius: 0px;
	color: #333 !important;
	border: none;
	background: #F6F7FB;
}

.shop.checkout .form-group textarea {
	width: 100%;
	line-height: 50px;
	padding: 0 20px;
	border-radius: 3px;
	border-radius: 0px;
	color: #333 !important;
	border: none;
	background: #F6F7FB;
}

.shop.checkout #payment-descriptions{
	width: 100%;
    min-height: 60px;
    line-height: 30px;
    border-radius: 0px;
    color: #333 !important;
    border: none;
    background: #F6F7FB;
    display: block;
    padding: 15px 20px;
    font-size: 14px;
}

.shop.checkout .nice-select {
	width: 100%;
	height: 45px;
	line-height: 50px;
	margin-bottom: 25px;
	background: #F6F7FB;
	border-radius: 0px;
	border:none;
}
.shop.checkout .nice-select .list {
	width: 100%;
	height: 300px;
	overflow: scroll;
}
.shop.checkout .nice-select .list li{}
.shop.checkout .nice-select .list li.option{
	color:#333;
}
.shop.checkout .nice-select .list li.option:hover{
	background:#F6F7FB;
	color:#333;
}
.shop.checkout .form .address input {
	margin-bottom: 15px;
}
.shop.checkout .form .address input:last-child{
	margin:0;
}
.shop.checkout .form .create-account {
	margin: 0;
}
.shop.checkout .form .create-account input {
	width: auto;
	display: inline-block;
	height: auto;
	border-radius: 100%;
	margin-right: 3px;
}
.shop.checkout .form .create-account label {
	display: inline-block;
	margin: 0;
}
.shop.checkout .order-details {
	margin-top: 30px;
	background: #fff;
	padding: 15px 0 30px 0;
	border: 1px solid #eee;
}
.shop.checkout .single-widget {
	margin-bottom: 30px;
}
.shop.checkout .single-widget:last-child{
	margin:0;
}
.shop.checkout .single-widget h2 {
	position:relative;
	font-size: 15px;
	font-weight: 600;
	padding: 10px 30px;
	line-height: 24px;
	text-transform: uppercase;
	color: #333;
	padding-bottom: 5px;
}
.shop.checkout .single-widget h2:before{
	position:absolute;
	content:"";
	left:30px;
	bottom:0;
	height:2px;
	width:50px;
	background:var(--primary-color);
}
.shop.checkout .single-widget .content ul{
	margin-top:30px;
}
.shop.checkout .single-widget .content ul li {
	display: block;
	padding: 0px 30px;
	font-size: 15px;
	font-weight: 400;
	color: #333;
	margin-bottom: 12px;
}
.shop.checkout .single-widget .content ul li span{
	display:inline-block;
	float:right;
}
.shop.checkout .single-widget .content ul li.last {
	padding-top: 12px;
	border-top: 1px solid #ebebeb;
	display: block;
	font-size: 15px;
	font-weight: 400;
	color: #333;
}

.shop.checkout .single-widget .content form {
	margin-top: 20px;
}

.shop.checkout .single-widget .content form input {
	width: 100%;
	display: inline-block;
	height: 48px;
	color: #333;
	padding: 0px 20px;
	border: 1px solid #333;
	box-shadow: 0px 0px 5px #0000000a;
}
.shop.checkout .single-widget .content form .btn {
    width: 100%;
    margin-top:5px;
}

.shop.checkout .single-widget .checkbox {
	text-align: left;
	margin: 0;
	padding: 0px 30px;
	margin-top:30px;
}
.shop.checkout .single-widget .checkbox label {
	color: #555555;
	position: relative;
	font-size: 14px;
	padding-left: 20px;
	margin-top: -5px;
	font-weight: 400;
	display: block;
	margin-bottom: 15px;
}
.shop.checkout .single-widget .checkbox label:last-child{
	margin-bottom:0;
}
.shop.checkout .single-widget .checkbox label:hover{
	cursor:pointer;
}
.shop.checkout .single-widget .checkbox label input{
	display:none;
}
.shop.checkout .single-widget .checkbox label::before {
	position: absolute;
	content: "";
	left: 0;
	top: 7px;
	width: 12px;
	height: 12px;
	line-height: 16px;
	border: 1px solid #666;
	border-radius: 100%;
}
.shop.checkout .single-widget .checkbox label::after {
	position: absolute;
	content: "";
	left: 0;
	top: 7px;
	width: 12px;
	height: 12px;
	line-height: 16px;
	border-radius: 100%;
	display:block;
	background:#666;
	transform:scale(0);
	-webkit-transition:all 0.4s ease;
	-moz-transition:all 0.4s ease;
	transition:all 0.4s ease;
}
.shop.checkout .single-widget .checkbox label.checked::after{
	opacity:1;
	visibility:visible;
	transform:scale(1);
}
.shop.checkout .single-widget.payement {
	padding: 0px 38px;
	text-align: center;
	margin-top: 30px;
}
.shop.checkout .single-widget.get-button {
	text-align: center;
	padding:0px 35px;
}
.shop.checkout .single-widget.get-button .btn {
	height: 46px;
	width: 100%;
	line-height: 19px;
	text-align: center;
	border-radius: 0;
	text-transform: uppercase;
	color: #fff;
}
.custom-control-label {
    cursor: pointer;
}
/*======================================
   End Checkout Form CSS
========================================*/

/*======================================
   Login & Register & My Account CSS
========================================*/
.alert-success {
    color: #ffffff;
    background-color: #00b894;
    border-color: #00b894;
}

.alert-danger {
    color: #FFF;
    background-color: #ff4949;
    border-color: #ff4949;
}

.section{
	padding-top: 80px;
	padding-bottom: 50px;
}

.section-heading{
	text-align: center;
	font-weight: 600;
	margin-bottom: 60px;
	color: var(--primary-color);
	position: relative;
	line-height: 24px;
}

.section-heading::after{
	content: '';
    width: 60px;
    height: 6px;
    background: var(--primary-color);
    border-radius: 10px;
    position: absolute;
    display: block;
    left: 0;
    right: 0;
    margin-left: auto;
    margin-right: auto;
    margin-top: 15px;
}

#auth{
	padding: 60px 0px;
}

.login_register{
	background: #ffffff;
    padding: 50px;
    box-shadow: 1px 3px 10px #d8d8d8;
}

.login_register .form-control {
	height: auto;
    display: block;
    width: 100%;
   	padding: 15px;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #CCC;
    border-radius: .25rem;
    margin-top: 15px;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.login_register .form-control:focus{
	outline: none;
	-webkit-box-shadow: none;
    box-shadow: none;
	border: 1px solid #000;
}

.login_register .btn-login{
	display: block;
    background: #FFF;
    padding: 18px 50px;
    border: 1px solid var(--primary-color);
    color: var(--primary-color);
	transition: all 0.3s;
	width: 100%;
	margin-top: 30px;
}
.login_register .btn-login:hover{
    background: var(--primary-color);
    color: #FFF;
}

.login_register .right_link{
	color: var(--primary-color);
	margin-top: 15px;
	transition: all 0.3s;
	display: inline-block;
}

.login_register .right_link:hover{
	text-decoration: underline;
}

.create-account-link{
	color: var(--primary-color);
	display: inline-block;
	margin-top: 15px;
	transition: all 0.3s;
}

.create-account-link:hover{
	color: var(--primary-color);
	text-decoration: underline;
}

.customer_dashboard{
	box-shadow: 0 0 4px 0 #e9e9e9;
}

.customer_dashboard{
	box-shadow: 0 0 4px 0 #d0cfcf;
}

.customer_dashboard .nav-tabs li.nav-item a {
    text-align: left;
    padding: 12px 20px;
    border-radius: 0;
    border-bottom: 1px solid #efefef;
    color: #2b2f4c;
}
.customer_dashboard .nav-tabs li.nav-item a.active{
	background: #1d2224;
	color: #FFF;
}
.customer_dashboard .nav-tabs li.nav-item a i {
    margin-right: 8px;
    vertical-align: middle;
}

.dashboard_content .card-header {
    background-color: #1d2224;
    border-color: #1d2224;
    padding: 14px 20px;
}

.dashboard_content .card-header > h4 {
	font-size: 16px;
	color: #FFF;
	font-weight: 400;
	margin: 0;
}

.account_details .form-control {
	height: auto;
    display: block;
    width: 100%;
   	padding: 15px;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #CCC;
    border-radius: .25rem;
    margin-top: 15px;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.account_details .form-control:focus{
	outline: none;
	-webkit-box-shadow: none;
    box-shadow: none;
	border: 1px solid #000;
}

.account_details .btn-login{
    background: #FFF;
    padding: 18px 50px;
    border: 1px solid #303952;
    color: #303952;
	transition: all 0.3s;
	margin-top: 30px;
}
.account_details .btn-login:hover{
    background: #303952;
    color: #FFF;
}
.btn-add-address{
	color: #FFF !important;
	padding: 6px 16px;
	display: inline-block;
	font-size: 14px;
	border: 1px solid #FFF;
	border-radius: 50px;
}

/*======================================
	End Login CSS
========================================*/

/*======================================
   Start Shop List CSS
========================================*/
.shop-list .list-content{
	margin-top:50px;
}
.shop-list .list-content .product-price{}
.shop-list .list-content .product-price span {
	font-size: 14px;
	font-weight: 600;
	margin-bottom: 3px;
	display: block;
}
.shop-list .list-content .title {
	line-height: 20px;
}
.shop-list .list-content .title a:hover{
	color:var(--primary-color);
}
.shop-list .list-content .title a {
	font-size: 18px;
	font-weight: 600;
}
.shop-list .list-content .rating {
	margin: 5px 0 8px 0;
}
.shop-list .list-content .rating li{
	display:inline-block;
}
.shop-list .list-content .rating li i{
	color: var(--primary-color);
}
.shop-list .list-content .rating li.total {
	color: #333;
	font-size: 12px;
	margin-left: 3px;
}
.shop-list .list-content .des{}
.shop-list .list-content .btn {
	margin-top: 22px;
	height: 42px;
	line-height: 15px;
	color: #333;
	background: transparent;
	border: 1px solid #cecece;
	font-size: 13px;
	border-radius: 30px;
	height: auto;
	line-height: a;
	padding: 13px 32px;
}
.shop-list .list-content .btn:hover{
	background:var(--primary-color);
	color:#fff;
	border-color:transparent;
}
/* Pagination CSS */
.pagination {
	text-align: left;
	margin: 50px 0 0 0;
	/*display:block;*/
}
.pagination.center {
	text-align: center;
}
.pagination .pagination-list li {
	margin-right: 5px;
	display: inline-block;
}
.pagination .pagination-list li:last-child{
	margin-right:0px;
}
.pagination .pagination-list li a {
	background: #F6F7FB;
	color: #666;
	padding: 6px 18px;
	font-weight: 400;
	border: 1px solid #e1e1e1;
	font-size: 16px;
	border-radius: 0px;
}
.pagination .pagination-list li.active a,
.pagination .pagination-list li:hover a{
	background: var(--primary-color);
	color: #fff;
	border-color: transparent;
}
.pagination .pagination-list li a i{
	font-size:13px;
}
.blog-grids.pagination{
	margin-top:50px;
	text-align:center;
}

.pagination .page-item.active a,
.pagination .page-item:hover a{
	background: var(--primary-color);
	color: #fff;
	border-color: transparent;
}
.page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: var(--primary-color);
    border-color: var(--primary-color);
}
section.shop.checkout.section {
    padding-top: 30px;
    background: #000;
}    
.shop.checkout .order-details {
    margin-top: 30px;
    background: #000;
    padding: 15px 0 30px 0;
    border: 1px solid #eee;
}
.shop.checkout #payment-descriptions {
    width: 100%;
    min-height: 60px;
    line-height: 30px;
    border-radius: 0px;
    color: #333 !important;
    border: none;
    background: #0000;
    display: block;
    padding: 15px 20px;
    font-size: 14px;
}
.custom-control-input {
    position: absolute;
    /* z-index: 1 !important; */
    opacity: 1 !important;
}
section.shop.checkout.section h2 {
    color: #fff !important;
}
.payment-methods label {
    color: #ffff;
}
div#cart-contents ul li {
    color: #fff !important;
}
.shop.checkout #payment-descriptions {
    color: #fff !important;
}
.shop.checkout .single-widget.get-button .btn {
    height: 46px;
    width: 100%;
    line-height: 19px;
    text-align: center;
    border-radius: 0;
    text-transform: uppercase;
    color: #000;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: white;
}
section.shop.checkout.section {
    padding-top: 164px !important;
    background: #000;
}
.slick-slide {
    display: none;
    float: left;
    height: 30% !important;
    min-height: 1px;
    margin-right: 20px;
}
.brand-slider {
    margin: 40px 0px 0px 0px;
}
 </style>   
@section('content')

<!-- <section class="maintain-beauty-skin">
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
</section> -->
<!-- Start Checkout -->
<section class="shop checkout section">
	<div class="container">
		<div class="row"> 
			<div class="col-12">
				@if(\Session::has('success'))
					<div class="alert alert-success mt-4">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<span>{!! xss_clean(session('success')) !!}</span>
					</div>
				@endif

				@if(\Session::has('error'))
					<div class="alert alert-danger mt-4">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<span>{!! xss_clean(session('error')) !!}</span>
					</div>
				@endif
			</div>

			<div class="col-lg-6 col-12">

				<div class="order-details">
					<div class="single-widget">
						<h2>{{ _lang('Payment Methods') }}</h2>
						<div class="content">
							<div class="payment-methods">
								<ul>
									@if(get_option('paypal_active') == 'Yes')
										<li>
											<div class="custom-control custom-radio">
												<input type="radio" id="paypal-method" value="paypal" name="payment_method" class="custom-control-input select-payment-method" data-description="{{ get_option('paypal_description') }}">
												<label class="custom-control-label" for="paypal-method">{{ get_option('paypal_label') }}</label>
											</div>
										</li>
									@endif

									@if(get_option('stripe_active') == 'Yes')
										<li>
											<div class="custom-control custom-radio">
												<input type="radio" id="stripe-box" value="stripe" name="payment_method" class="custom-control-input select-payment-method" data-description="{{ get_option('stripe_description') }}">
												<label class="custom-control-label" for="stripe-box">{{ get_option('stripe_label') }}</label>
											</div>
										</li>
									@endif

									@if(get_option('razorpay_active') == 'Yes')
										<li>
											<div class="custom-control custom-radio">
												<input type="radio" id="razorpay-box" value="razorpay" name="payment_method" class="custom-control-input select-payment-method" data-description="{{ get_option('razorpay_description') }}">
												<label class="custom-control-label" for="razorpay-box">{{ get_option('razorpay_label') }}</label>
											</div>
										</li>
									@endif

									@if(get_option('paystack_active') == 'Yes')
										<li>
											<div class="custom-control custom-radio">
												<input type="radio" id="paystack-box" value="paystack" name="payment_method" class="custom-control-input select-payment-method" data-description="{{ get_option('paystack_description') }}">
												<label class="custom-control-label" for="paystack-box">{{ get_option('paystack_label') }}</label>
											</div>
										</li>
									@endif

									@if(get_option('cod_active') == 'Yes')
										<li>
											<div class="custom-control custom-radio">
												<input type="radio" id="cod" value="cod" name="payment_method" class="custom-control-input select-payment-method" data-description="{{ get_option('cod_description') }}">
												<label class="custom-control-label" for="cod">{{ get_option('cod_label') }}</label>
											</div>
										</li>
									@endif

									@if(get_option('bank_transfer_active') == 'Yes')
										<li>
											<div class="custom-control custom-radio">
												<input type="radio" id="bank_transfer" value="bank_transfer" name="payment_method" class="custom-control-input select-payment-method" data-description="{{ get_option('bank_transfer_description') }}">
												<label class="custom-control-label" for="bank_transfer">{{ get_option('bank_transfer_label') }}</label>
											</div>
										</li>
									@endif
								</ul>
							</div>

						</div>
					</div>

					
					<!--Payment Descriptions-->
					<div class="col-md-12">
						<span id="payment-descriptions">{{ _lang('Select Payment Method') }}</span>
					</div>
					<!--End Payment Descriptions-->
					

				</div>

			</div>

			<div class="col-lg-6 col-12">
				<div class="order-details">
					
					<div class="single-widget">
						<h2>{{ _lang('CART  TOTALS') }}</h2>
						<div class="content" id="cart-contents">
							<ul>
								<li>{{ _lang('Sub Total') }}<span>{!! $order->sub_total !!}</span></li>
								
								<li>{{ _lang('Shipping Cost') }}<span>+ {!! $order->shipping_cost !!}</span></li>

								@if($order->coupon_id != null)
									<li>{{ _lang('Discount') }}<span>- {!! $order->discount !!}</span></li>
								@endif

								@foreach($order->taxes as $tax)
									<li>{{ $tax->translation->name }}<span>+ {!! $tax->order_tax->amount !!}</span></li>
								@endforeach

								<li class="last">{{ _lang('Total') }}<span><b>{!! $order->total !!}</b></span></li>
							</ul>
						</div>
					</div>	

					
					<div class="single-widget get-button">
						<div class="content">
							<div class="button" id="payment-button">
								<div id="paypal-container" class="d-none">
									@include('theme.default.gateways.paypal')
								</div>

								<div id="stripe-container" class="d-none">
									@include('theme.default.gateways.stripe')
								</div>

								<div id="razorpay-container" class="d-none">
									@include('theme.default.gateways.razorpay')
								</div>

								<div id="paystack-container" class="d-none">
									@include('theme.default.gateways.paystack')
								</div>

								<div id="cod-container" class="d-none">
									<a href="{{ url('gateway/confirm_order/cod/'.encrypt($order->id)) }}" id="confirm_order" class="btn">{{ _lang('Confirm Order') }}</a>
								</div>

								<div id="bank_transfer-container" class="d-none">
									<a href="{{ url('gateway/confirm_order/bank_transfer/'.encrypt($order->id)) }}" id="confirm_order" class="btn">{{ _lang('Confirm Order') }}</a>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End Checkout -->

	
@endsection

@section('js-script')
<script src="{{ asset('public/theme/default/js/checkout.js') }}"></script>
@endsection