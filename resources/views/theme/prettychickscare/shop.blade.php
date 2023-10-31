@extends('theme.prettychickscare.website')
@section('content')
    <!-- Maintain your beauty skin  Section Start -->
    <section class="maintain-beauty-skin product-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="enhance-txt">
                        <h6><span></span> women who want to </h6>
                        <h1><span>OUR</span>Products</h1>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do elusmod tempor
                                incididunt ut
                                labore</p> -->
                        <!-- <a href="products.php" class="theme_btn">Shop Now <img src="images/right-arrow.png" alt=""></a> -->
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="product-banner-img">
                        <img src="{{ asset('public/theme/prettychickscare/images/Untitled-new-2.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-page">
        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <div class="sidebar">
                        <div class="categories-range">

                            <div class="category">
                                <div class="accordion" id="accordionExample">
                                    
                                    <div class="card-one">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left" type="button"
                                                    data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    CATEGORIES
                                                </button>
                                            </h2>
                                        </div>
                                        <!--
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                data-parent="#accordionExample1">
                                                <div class="card-body">
                                                    Some placeholder content for the first accordion panel. This panel is shown by
                                                    default, thanks to the <code>.show</code> class.
                                                </div>
                                            </div> -->
                                    </div>
                                    @php
                                    $categories=App\Entity\Category\Category::all();
                                    $i=2;
                                    @endphp
                                    
                                    @foreach($categories as $category)
                                    @php
                                    $category_translation=App\Entity\Category\CategoryTranslation::where("category_id",$category->id)->first();
                                    @endphp
                                    <div class="card-two">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                    data-toggle="collapse" data-target="#{{$i}}" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    {{$category_translation->name}}
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="{{$i}}" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                Some placeholder content for the second accordion panel. This panel is
                                                hidden by
                                                default.
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                    $i++;
                                    @endphp
                                    @endforeach
                                 
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <!-- FILTERS -->
                    <div class="filters-bar">
                        <div class="row">
                            <div class="col-md-7">
                                <!-- select boxes here -->
                                <div class="box-selector">
                                    <div class="box-one single-shorter">
                                    @php $sort_by = isset($_GET['sort_by']) ? $_GET['sort_by'] : ''; @endphp
                                        <select class="custom-select filter" id="sort_by" >
                                        <option value="default">{{ _lang('Default') }}</option>
										<option value="oldest" {{ $sort_by == "oldest" ? "selected" : "" }}>{{ _lang('Oldest') }}</option>
										<option value="newest" {{ $sort_by == "newest" ? "selected" : "" }}>{{ _lang('Newest') }}</option>
										<option value="low_to_high" {{ $sort_by == "low_to_high" ? "selected" : "" }}>{{ _lang('Price: Low to High') }}</option>
										<option value="high_to_low" {{ $sort_by == "high_to_low" ? "selected" : "" }}>{{ _lang('Price: High to Low') }}</option>
										<option value="a_to_z" {{ $sort_by == "a_to_z" ? "selected" : "" }}>{{ _lang('Name: A-Z') }}</option>
										<option value="z_to_a" {{ $sort_by == "z_to_a" ? "selected" : "" }}>{{ _lang('Name: Z-A') }}</option>
                                        </select>
                                    </div>
                                    @php $length = isset($_GET['length']) ? $_GET['length'] : ''; @endphp
                                    <div class="box-two single-shorter">
                                        <select class="custom-select filter" id="length" >
                                        <option value="09" {{ $length == '01' ? 'selected' : '' }}>09</option>
										<option value="15" {{ $length == '15' ? 'selected' : '' }}>15</option>
										<option value="25" {{ $length == '25' ? 'selected' : '' }}>25</option>
										<option value="30" {{ $length == '30' ? 'selected' : '' }}>30</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <!-- text here -->
                                <div class="side-text">
                                    <p>Showing 1-12 of 48 result</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- LISTING -->
                    <div class="listing-area">
                        <div class="row">
                            @php
                            $product=App\Entity\Product\Product::all();
                            @endphp
                            @foreach($products as $item)
                            @php
                            $Product_translation=App\Entity\Product\ProductTranslation::where("product_id",$item->id)->first();
                            @endphp
                            <div class="col-lg-4">
                                <div class="pretty-product">
                                    <div class="product-img">
                                        <a href="{{route('product_detail',[$item->id])}}"><img src="{{ asset('storage/app/'. $item->image->file_path) }}" alt=""></a>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="{{ route('addtocart') }}"><i class="fa fa-shopping-cart"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
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
                                            <a href="{{route('product_detail',[$item->id])}}">
                                                <h4>{{$Product_translation->name}}</h4>
                                            </a>
                                            <p>{{substr($Product_translation->short_description,0,62)}}</p>
                                            <h5>@if($item->special_price != '' || (int) $item->special_price != 0 )<span>${!! $item->price !!}</span> ${!! $item->special_price !!} @else ${!! $item->price !!} @endif</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
            @endforeach             
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
@section('js-script')
<script src="{{ asset('public/theme/default/js/cart.js?v=1.1') }}"></script>
@endsection
