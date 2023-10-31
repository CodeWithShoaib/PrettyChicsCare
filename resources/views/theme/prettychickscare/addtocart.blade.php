@extends('theme.prettychickscare.website')
@section('content')
<style>
i.fa.fa-minus {
    color: #fff;
    cursor:pointer;
}
i.fa.fa-plus {
    color: #fff;
    cursor:pointer;

}
.update_cart {
    display: flex;
    justify-content: end;
    margin-bottom:20px;
}
.coupon {
    text-align: right;
    margin-bottom: 31px;
}
i.fas.fa-trash.remove-icon {
    color: #fff;
}
form#shopping-cart-form {
    margin-top: 148px !important;
}
</style>

<!-- Maintain your beauty skin  Section Start -->
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
                    <a href="{{ url('shop') }}" class="theme_btn">Shop Now <img src="{{ asset('public/theme/prettychickscare/images/right-arrow.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<form id="shopping-cart-form" action="{{ url('/update_cart') }}" method="post">
<!-- ADD__TO__CART__START -->
<section class="cart-page pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cart__table">
                    <div class="inner__cart">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="Product col-md-7">
                                        Product
                                    </th>
                                    <th scope="col" class="pname-quan col-md-3">
                                        Quantity
                                    </th>
                                    <th scope="col" class="pname-total col-md-2">
                                        Total
                                    </th>
                                    <th class="text-center"><i class="fas fa-trash"></i></th>
                                </tr>
                            </thead>

                            <tbody>
                    @if(\Cart::isEmpty())
						<tr>
							<td colspan="6" class="text-center">{{ _lang('No Product added to cart !') }}</td>
						</tr>
					@endif
                            
                            @foreach(\Cart::getContent() as $cart)
                            <input type="hidden" name="cart_id[{{ $loop->index }}]" value="{{ $cart->id }}"> 
                                <tr>
                                    <td>
                                        <div class="product__bottom">
                                            <a href="{{ url('product/'.$cart->associatedModel->slug) }}">
                                                <img src="{{ asset('storage/app/'. $cart->associatedModel->image->file_path) }}" alt="">
                                            </a>
                                            <div class="table__ptext">
                                                <span>${!! $cart->price !!}</span>
                                                <a href="{{ url('product/'.$cart->associatedModel->slug) }}">{{ $cart->associatedModel->translation->name }}</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="qty" data-title="Qty">
                                        <div class="cart__input input-group">
                                            <div class="pb-qty-box">
                                            <button type="button" class="btn btn btn-number" data-type="plus" data-field="quantity[{{ $loop->index }}]">
												<i class="fa fa-plus"></i>
											</button> <input type="text" name="quantity[{{ $loop->index }}]" class="quantity-txt input-number" data-min="1" data-max="100" value="{{ $cart->quantity }}">
                                                <div class='button minus'>
                                                    <button class="inc-btn btn-number" data-type="minus" data-field="quantity[{{ $loop->index }}]"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>    
                                        <strong>${{$cart->getPriceSum()}}</strong>
                                    </td>
                                    <td class="text-center"><a href="{{ url('/remove_cart_item/'.$cart->id) }}" class="remove-cart-item"><i class="fas fa-trash remove-icon"></i></a></td>
                                </tr>
                            @endforeach    
                            </tbody>
                        </table>
                    </div>
                    <div class='coupon'>

             
                        @csrf
                        @if(! \Cart::isEmpty())
                        <button type="button"  class="btn orange-btn btn-style update-cart-btn" id="update-cart">Update Cart</a>
                        @endif
                    </form>

                    </div>
                    <div class="end-cart">
                        <p>Subtotal: <strong>${!! (Cart::getSubTotal()) !!}</strong></p>
                        <p>Taxes and shipping calculated at checkout</p>
                        <a href="{{ route('checkout') }}" class="btn orange-btn btn-style">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ADD__TO__CART__END -->
@endsection
@section('js-script')
<script src="{{ asset('public/theme/default/js/cart.js?v=1.1') }}"></script>
@endsection