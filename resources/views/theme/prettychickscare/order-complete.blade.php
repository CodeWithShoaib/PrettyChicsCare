@extends('theme.prettychickscare.website')
<style>
	i.ti-check-box h2 {
    color: #fff !important;
}

.order-success h2 {
    color: #fff !important;
}

.order-success p {
    color: #fff;
}

.order-success a {
    color: #ffff;
}

.order-success {
    text-align: center;
}
.section {
    height: 100vh;
    display: flex;
    align-items: center;
}
a:hover, a.active {
    color: #fff !important;
}
.slick-slide {
    display: none;
    float: left;
    height: 30% !important;
    min-height: 1px;
    margin-right: 20px;
}
</style>	
@section('content')

<!-- Start Checkout -->


<!-- Start Checkout -->
<section class="shop checkout section">
	<div class="container">
		<div class="row"> 

			<div class="col-lg-12">	
				<div class="order-success">
					<i class="ti-check-box"></i>
					<h2>{{ _lang('Your Order has been Placed Sucessfully') }}</h2>
					<p>{{ _lang('Your Order ID') }}#: {{ $order->id }}</p>
					<a href="{{ url('/shop') }}" class="btn-back-to-store">{{ _lang('Back to Store') }}</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End Checkout -->

@endsection

