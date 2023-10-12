@extends('layouts.site')
@section('main')


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{url('assets')}}/css/SanPham.css">
<section  style="top: 90px;" class="u-clearfix u-image u-section-1" id="sec-7bbf" data-image-width="1920" data-image-height="400">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-custom-font u-text u-text-default u-title u-text-1">SẢN PHẨM </h1>
    </div>
</section>

<!-- ##### Breadcrumb Area Start ##### -->
<div class="breadcrumb-area">
    <!-- Top Breadcrumb Area -->


    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->



<!-- ##### Shop Area Start ##### -->
<section class="shop-page section-padding-0-100">
    <div class="container">
        <div class="row">
            <!-- Shop Sorting Data -->
            <div class="col-12">
                <div class="shop-sorting-data d-flex flex-wrap align-items-center justify-content-between">
                    <!-- Shop Page Count -->
                    <div class="shop-page-count">
                        <p>Bộ lọc sản phẩm</p>
                    </div>
                    <!-- Search by Terms -->
                    <div class="search_by_terms">
                        <form action="#" method="post" class="form-inline">
                            <select class="custom-select widget-title">
                                <option selected>Short by Popularity</option>
                                <option value="1">Short by Newest</option>
                                <option value="2">Short by Sales</option>
                                <option value="3">Short by Ratings</option>
                            </select>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Sidebar Area -->
            <div class="col-12 col-md-4 col-lg-3">
                <div class="shop-sidebar-area">



                    <!-- Shop Widget -->
                    <div class="shop-widget catagory mb-50">
                        <h4 class="widget-title">Loại sản phẩm</h4>
                        <div class="widget-desc" id="list-cates">
                            @foreach($category as $cat) 
                            <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <a href="" class="custom-control-label" for="customCheck1">{{$cat->name}}</a>
                            </div>
                            @endforeach
                        </div>
                    </div>



                    <!-- Shop Widget -->
                    <div class="shop-widget price mb-50">
                        <h4 class="widget-title">Giá thành</h4>
                        <div class="widget-desc">
                            <div class="slider-range">
                                <div data-min="8" data-max="30" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="8" data-value-max="30" data-label-result="Price:">
                                    <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all first-handle" tabindex="0"></span>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                </div>
                                <div class="range-price">Từ 50.000 đến 200.000</div>
                            </div>
                        </div>
                    </div>


                    <!-- Shop Widget -->
                    <div class="shop-widget sort-by mb-50">
                        <h4 class="widget-title">Thương hiệu</h4>
                        <div class="widget-desc">
                            <!-- Single Checkbox -->
                            <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                <label class="custom-control-label" for="customCheck7">Trà Tân Cương Xanh</label>
                            </div>
                            <!-- Single Checkbox -->
                            <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck7" checked>
                                <label class="custom-control-label" for="customCheck7">Trà Sen Tây Hồ</label>
                            </div>
                            <!-- Single Checkbox -->
                            <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck7" checked>
                                <label class="custom-control-label" for="customCheck7">Trà Lộc Tân</label>
                            </div>

                        </div>
                    </div>



                </div>
            </div>

            <!-- All Products Area -->
            <div class="col-12 col-md-8 col-lg-9">
                <div class="shop-products-area">
                    <div class="row" id="list-product">

                        <!-- Single Product Area -->
                        @foreach($product as $p)
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-area mb-50">
                                <div class="product-img">
                                    <a href="">
                                        <img height="200px" src="{{$p->image}}" alt="">
                                        <img height="200px" src="upload/{{$p->image}}" alt="">
                                    </a>
                                    <div class="product-meta d-flex">
                                        <a href="#" class="wishlist-btn"><i class="fa-heart"></i></a>
                                        <a href="{{route('cart.add', ['id' => $p -> id])}}" class="add-to-cart-btn">Add to cart</a>
                                        <a href="#" class="compare-btn"><i class="arrow_left-right_alt"></i></a>
                                    </div>
                                </div>
                                <div class="product-info mt-15 text-center">
                                    <a href="{{route('home.view', ['id'=>$p->id])}}" style="text-decoration: none;">
                                        <p style="font-size: 20px; padding-bottom: 10px;">{{$p->name}}</p>
                                    </a>
                                    <h6>{{$p->price}} VND</h6>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <!-- <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Shop Area End ##### -->


@stop()
