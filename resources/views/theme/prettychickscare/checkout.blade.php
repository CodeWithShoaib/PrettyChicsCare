    @extends('theme.prettychickscare.website')
    @section('content')
    <style>
    .bottom__button a,
    button {
        width: 100%;
    }

    .bottom__button a,
    button {
        border-radius: 5px;
        border: none;
    }

    .bottom__button a:hover {
        background-color: #d30078;
        color: #fff;
    }

    .custom-control-input {
        position: absolute;
        z-index: 0 !important;
        opacity: 1 !important;
    }

    .form-control {
        color: #ffff !important;
    }
    .form-group.create-account label {
        color: #ffff;
        margin-top: 22px;
    }
    a#add_new_address {
        color: #fff !important;
    }
    .account_details .btn-login {
        background: #FFF;
        padding: 12px 0px;
        border: 1px solid #303952;
        color: #303952;
        transition: all 0.3s;
        margin-top: 30px;
        width: 34%;
        cursor: pointer;
    }
 
    button#proceed_to_checkout {
    white-space: nowrap;
}
.account_details .form-control {
    height: auto;
    display: block;
    width: 100%;
    padding: 15px;
    font-size: 1rem;
    line-height: 1.5;
    color: #0000;
    background-color: #00000017;
    background-clip: padding-box;
    border: 1px solid #CCC;
    border-radius: .25rem;
    margin-top: 15px;
    transition: border-color .15s ease-in-out,
  box-shadow .15s ease-in-out;
}
select.customer-country {
    width: 100%;
    margin: 10px 0;
    padding: 10px 0;
    background: transparent;
    color: #ffff;
}
select#state{
    width: 100%;
    margin: 10px 0;
    padding: 10px 0;
    background: transparent;
    color: #ffff;
}
.main__check__out {
    padding: 80px 0 0;
    margin-top: 114px !important;
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
                            labore
                        </p>
                        <a href="#" class="theme_btn">Shop Now <img
                                src="{{ asset('public/theme/prettychickscare/images/right-arrow.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- CHECKOUT__PAGE__START -->
    <section class="main__check__out">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="form__checkout">
                        @if(! Auth::check())
                        <p style='color:#fff;'>{{ _lang('You have an account already?') }} <a href="{{ url('/sign_in') }}"
                                class="btn-link"><b>{{ _lang('Login to your account') }}</b></a></p>
                        <form id="checkout-form" class="row g-3" method="post" action="{{ url('/make_order') }}">
                            @csrf
                            <div class="col-md-12">
                                <label for="firstName" class="form-label">Name</label>
                                <!-- <input type="text" class="form-control" id="name"> -->
                                <input type="text" name="name" class="form-control" placeholder="{{ _lang('Name') }}"
                                    required>
                                @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-12">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="email" name="email" class='form-control'
                                    placeholder="{{ _lang('Email Address') }}" required>
                                @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-12">
                                <label for="inputContact" class="form-label">Contact No</label>
                                <input type="number" name="phone" placeholder="{{ _lang('Phone Number') }}"
                                    class='form-control' required>
                            </div>
                            <div class="col-12">
                                <label for="inputCompany" class="form-label">Company name
                                    (optional)</label>
                                <input type="text" name='company_name' class="form-control" id="inputCompany"
                                    placeholder="{{ _lang('Company Name') }}">
                            </div>
                            <div class="col-12">
                                <label for="inputStreet" class="form-label">Country *</label>
                                <select name="country" class="customer-country form-control" id="country" required>
                                    @php $supported_countries = get_option('supported_countries'); @endphp
                                    <option value="" style='color:#000;'>{{ _lang('Select Country') }}</option>
                                    @if(!empty($supported_countries))
                                    @foreach(get_all_country() as $country)
                                    @if(in_array($country->name, $supported_countries))
                                    <option value="{{ $country->sortname }}" 
                                        data-id="{{ $country->id }}" style='color:#000;'
                                        {{ old('country') == $country->sortname ? 'selected' : '' }}>
                                        {{ $country->name }}
                                    </option>
                                    @endif
                                    @endforeach
                                    @endif
                                </select>
                                @if($errors->has('country'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('country') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-12">
                                <label for="inputTown" class="form-label">State / Divition *</label>
                                <select name="state" class="select-state-no-auth form-control" id="state" required>
                                    <option value="" style='color:#000;'>{{ _lang('Select State') }}</option>
                                </select>
                                @if($errors->has('state'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('state') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-12">
                                <label for="inputTown" class="form-label">City *</label>
                                <input type="text" class='form-control' name="city" placeholder="{{ _lang('City') }}"
                                    required="required">
                                @if($errors->has('city'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('city') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-12">
                                <label for="inputTown" class="form-label">{{ _lang('Postal Code') }} *</label>
                                <input type="text" class='form-control' name="post_code"
                                    placeholder="{{ _lang('Postal Code') }}" required="required">
                                @if($errors->has('post_code'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('post_code') }}
                                </div>
                                @endif
                            </div>

                            <div class="col-12">
                                <label for="inputZip" class="form-label">Address *</label>
                                <input type="text" name="address" class='form-control' placeholder="{{ _lang('Address') }}" required>
                                            @if($errors->has('address'))
                                                <div class="invalid-feedback">
                                                {{ $errors->first('address') }}
                                                </div>
                                            @endif
                            </div>
                            <div class="col-12 mb-3">
                                        <div class="form-group create-account">	
                                            <label><input id="create_account" name="create_account" value="1" type="checkbox"> {{ _lang('Create an account?') }}</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 create_account {{ old('create_account') == 1 ? '' : 'd-none'  }}">
                                        <div class="form-group">
                                            <label class='form-label'>{{ _lang('Password') }}<span>*</span></label>
                                            <input type="password" name="password" class='form-control' placeholder="{{ _lang('Password') }}" required="required">

                                            @if($errors->has('password'))
                                                <div class="invalid-feedback">
                                                {{ $errors->first('password') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6 create_account d-none">
                                        <div class="form-group">
                                            <label class='form-label'>{{ _lang('Password Confirmation') }}<span>*</span></label>
                                            <input type="password" name="password_confirmation" class='form-control' placeholder="{{ _lang('Password Confirmation') }}" required="required">

                                            @if($errors->has('password_confirmation'))
                                                <div class="invalid-feedback">
                                                {{ $errors->first('password_confirmation') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>					 
                        </form>
                        @else
                        <p style='color:#fff;'>{{ _lang('You are now logged in') }}</p>
                            @php $address_list = \App\CustomerAddress::where('customer_id',Auth::id())->get(); @endphp
                            
                            <form id="checkout-form" method="post" action="{{ url('/make_order') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label class="form-label">{{ _lang('Shipping Address    ') }}<span>*</span></label>
                                            <select name="shipping_address" class='form-control' id="select-shipping-address" required>
                                                @foreach($address_list as $shipping_address)
                                                    <option value="{{ $shipping_address->id }}" style='color:#000;' data-state="{{ $shipping_address->state }}" {{ $shipping_address->is_default == 1 ? 'selected' : '' }}>{{ $shipping_address->address }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label class="form-label">{{ _lang('Billing Address') }}<span>*</span></label>
                                            <select name="billing_address" class='form-control' id="select-billing-address" required>
                                                @foreach($address_list as $billing_address)
                                                    <option value="{{ $billing_address->id }}"   style='color:#000;' data-state="{{ $billing_address->state }}" {{ $billing_address->is_default == 1 ? 'selected' : '' }}>{{ $billing_address->address }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="form-label">{{ _lang('Order Note') }}</label>
                                                <textarea name="note" class='form-control' placeholder="{{ _lang('Order Note') }}"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <a href="" id="add_new_address"><i class="fa fa-plus"></i> {{ _lang('Add New Address') }}</a>
                            
                            <div class="account_details d-none mt-3">
                                <h5 style='color:#fff;'>{{ _lang('Add New Address') }}</h5>
                                <form action="{{ url('/add_new_address') }}" id="create_address_form" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="{{ _lang('Name') }}" required>
                                        </div>

                                        <div class="col-md-6">
                                            @php $supported_countries = get_option('supported_countries'); @endphp
                                                    
                                            <select class=" customer-country" data-selected="{{ old('country') }}" name="country" required >
                                                <option value=""  disabled selected style='color:#000;' >{{ _lang('Select Country') }}</option>	
                                                @if(!empty($supported_countries))
                                                    @foreach(get_all_country() as $country)
                                                            @if(in_array($country->name, $supported_countries))
                                                                <option value="{{ $country->sortname }}" style='color:#000;' data-id="{{ $country->id }}" >
                                                                    {{ $country->name }}
                                                                </option>
                                                            @endif
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <select class=""  id="state" name="state" required>
                                                <option value="" style='color:#000;'  disabled selected>{{ _lang('Select State') }}</option>	
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <input type="text" name="city"  value="{{ old('city') }}" class="form-control" placeholder="{{ _lang('City') }}" required>
                                        </div>

                                        <div class="col-md-6">
                                            <input type="text" name="post_code" value="{{ old('post_code') }}" class="form-control" placeholder="{{ _lang('Post Code') }}" required>
                                        </div>

                                        <div class="col-md-12">
                                            <textarea class="form-control" name="address" placeholder="{{ _lang('Address') }}" required>{{ old('address') }}</textarea>
                                        </div>

                                        <input type="hidden" name="is_default" value="0">

                                    
                                        <div class="col-md-12">
                                            <button type="submit" class="btn-login">{{ _lang('Save Address') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="check__box">
                        <h4>Your Order</h4>
                        <table class="shop_table">
                            <thead>
                                <tr>
                                    <th class="product-name">Items</th>
                                    <th class="product-total">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(\Cart::getContent() as $cart)
                                <tr class="cart_item">
                                    <th class="product-name">{{ $cart->associatedModel->translation->name }}<strong
                                            class="product-quantity"></strong>
                                    </th>
                                    <td class="product-total"><span class="Price-amount amount"><span
                                                class="Price-Symbol"></span>${{$cart->getPriceSum()}}</span>
                                    </td>
                                </tr>
                                @endforeach
                                <tr class="cart_item">
                                    <th class="product-name">Shipping Methods:-<strong class="product-quantity"></strong>
                                    </th>
                                </tr>
                                @if(get_option('free_shipping_active') == 'Yes' && \Cart::getSubTotal() >=
                                get_option('free_shipping_minimum_amount',0))
                                <tr class="cart_item">
                                    <th class="product-name">Free Shipping<strong class="product-quantity"></strong>
                                    </th>
                                    <td class="product-total"><span class="Price-amount amount">
                                            <input type="radio" name="shipping_method" value="free_shipping"
                                                id="free_shipping" class="custom-control-input select-shipping-method"
                                                {{ empty(Cart::getCondition(get_option('free_shipping_label'))) ? '' : 'checked' }}>
                                            <!-- <input type="radio" id="free_shipping" value="free_shipping" name="shipping_method" class="custom-control-input select-shipping-method" >                             -->
                                        </span>
                                    </td>
                                </tr>
                                @endif
                                @if(get_option('flat_rate_active') == 'Yes')
                                <tr class="cart_item">
                                    <th class="product-name">{{ get_option('flat_rate_label') }} + <b>{!!
                                            xss_clean(show_price(get_option('flat_rate_cost'))) !!}</b><strong
                                            class="product-quantity"></strong>
                                    </th>
                                    <td class="product-total"><span class="Price-amount amount">
                                            <input type="radio" name="shipping_method" value="flat_rate" id="flat_rate"
                                                class="custom-control-input select-shipping-method"
                                                {{ empty(Cart::getCondition(get_option('flat_rate_label'))) ? '' : 'checked' }}>
                                            <!-- <input type="radio" id="flat_rate" value="flat_rate" name="shipping_method" class="custom-control-input select-shipping-method" >    </span> -->
                                    </td>
                                </tr>
                                @endif
                                @if(get_option('flat_rate_active') == 'Yes')
                                <tr class="cart_item">
                                    <th class="product-name">{{ get_option('local_pickup_label') }} + <b>{!!
                                            xss_clean(show_price(get_option('local_pickup_cost'))) !!}</b><strong
                                            class="product-quantity"></strong>
                                    </th>
                                    <td class="product-total"><span class="Price-amount amount">
                                            <input type="radio" name="shipping_method" value="local_pickup"
                                                id="local_pickup" class="custom-control-input select-shipping-method"
                                                {{ empty(Cart::getCondition(get_option('local_pickup_label'))) ? '' : 'checked' }}>
                                            <!-- <input type="radio" id="local_pickup" value="local_pickup" name="shipping_method" class="custom-control-input select-shipping-method" > -->
                                        </span>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                            <tfoot>
                                <tr class="order-total">
                                    <th>Total:</th>
                                    <td><strong><span class="Price-amount amount"><span class="Price-Symbol"></span>${!!
                                                (Cart::getSubTotal()) !!}</span></strong>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="bottom__check">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet, nobis labore. Eveniet esse
                                architecto, labore ab necessitatibus, quibusdam explicabo quas ea odio recusandae blanditiis
                                culpa pariatur nisi, error aliquam consectetur?
                            </p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    I have read and agree to website terms and conditions*
                                </label>
                            </div>
                        </div>
                        <div class=" main__bot__button">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="bottom__button">
                                        <button type="button" class="orange-btn btn-style white-btn btn-style" id="proceed_to_checkout">{{ _lang('Proceed to Payment') }}</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bottom__button border__btn">
                                        <a href="{{url('shop')}}" class=" white-btn btn-style">Continue Shopping</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CHECKOUT__PAGE__END -->
    @endsection
    @section('js-script')
    <script src="{{ asset('public/theme/default/js/cart.js?v=1.1') }}"></script>
    <script src="{{ asset('public/theme/default/js/checkout.js?v=1.1') }}"></script>
    @endsection