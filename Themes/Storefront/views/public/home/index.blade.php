@extends('public.layout')

@section('title', setting('store_tagline'))

@section('content')
    @unless (is_null($slider))
        @if (storefront_layout() === 'default')
            <div class="tp-banner-container hidden-dot ver1">
                <div class="tp-banner" >
                    <ul>
                        @include('public.home.sections.slider')
                    </ul>
                </div>
            </div>
        @endif
    @endunless
    <div class="container container-ver2 space-30">
        <div class="shipping-v2 home3-shiping space-30">
            <div class="col-md-3 col-sm-3 col-xs-6">
                <img src="{{ asset('assets/images/icon-shipping-1.png') }}" alt="images">
                <h3>Miễn phí ship</h3>
                <p>Cho đơn hàng trên 5.000.000 đ</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <img src="{{ asset('assets/images/icon-shipping-2.png') }}" alt="images">
                <h3>Hỗ trợ</h3>
                <p>Nhiệt tình 24/7</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <img src="{{ asset('assets/images/icon-shipping-3.png') }}" alt="images">
                <h3>Trợ giúp</h3>
                <p>Đối tác</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <img src="{{ asset('assets/images/icon-shipping-4.png') }}" alt="images">
                <h3>Liên hệ với chúng tôi</h3>
                <p>+07 (0) 7782 9137</p>
            </div>
        </div>
    </div>
    @if($categories->count() > 0)
        @foreach($categories as $category)
            @php $indexFirst = $loop->index * 5 @endphp
            <div class="container container-ver2">
                <div class="title-text-v2">
                    <h3>{{ $category->name }}</h3>
                </div>
                <div class="featured-products home_2 new-arrivals lastest">
                    <ul class="tabs tabs-title">
                        @if($category->children->count() > 0)
                            @foreach($category->children as $children)
                                <li class="item @if($loop->iteration == 1) active @endif" rel="tab_{{ $loop->index + 1 + $indexFirst }}">{{ $children->name }}</li>
                            @endforeach
                        @endif
                    </ul>
                    <div class="tab-container space-10">
                        @if($category->children->count() > 0)
                            @foreach($category->children as $children)
                                <div id="tab_{{$loop->index + 1 + $indexFirst}}" class="tab-content @if($loop->iteration == 1) {{ 'active' }} @endif"><br>
                                    <div class="products hover-shadow ver2 border-space-product">
                                        @if($children->products->count() > 0)
                                            @foreach($children->products as $product)
                                                <div class="product">
                                                    <div class="product-images">
                                                        <a href="{{ route('products.show', $product->slug) }}">
                                                            <img src="{{ $product->base_image->path }}" class="primary_image"/>
                                                            <img src="{{ $product->base_image->path }}" class="secondary_image"/>
                                                        </a>
                                                    </div>
                                                    <a href="{{ route('products.show', $product->slug) }}" title="{{ $product->name }}"><p class="product-title">{{ $product->name }}</p></a>
                                                    <p class="product-price">{{ product_price($product) }}</p>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="box center space-padding-tb-30 space-50">
                    <a class="link-v1 color-brand font-300" href="" title="Xem tất cả">Xem tất cả</a>
                </div>
            </div>
        @endforeach
    @endif
    <div class="special home_v1 bg-images box space-100" style="background-image:url('assets/images/home1-banner1.jpg');background-repeat: no-repeat;">
        <div class="col-md-5 float-left align-right">
            <img class="images-logo" src="{{ asset('assets/images/home1-images-banner1.png') }}" alt="images">
        </div>
        <!-- End col-md-7 -->
        <div class="col-md-7 float-right align-left">
            <div class="special-content">
                <img class="icon-big" src="{{ asset('assets/images/icon-shipping-5.png') }}" alt="Giảm giá lớn hôm nay"><h3>GIẢM GIÁ LỚN NGAY HÔM NAY</h3>
                <h5>Được giảm giá 30% cho đơn hàng từ 100 đô la trở lên của bạn ...</h5>
                <div class="time" data-countdown="countdown" data-date="04-20-2017-10-20-30"><div class="labelexpired"> Đã hết hạn</div></div>
                <a class="link-v1 bg-brand font-300" href="#" title="shopnow">Mua ngay</a>
            </div>
        </div>
        <!-- End col-md-5 -->
    </div>
    <div class="choose-us">
        <div class="container container-ver2">
            <div class="title-choose align-center">
                <h3>Tại sao nên chọn chúng tôi</h3>
                <p>Chúng tôi cung cấp sản phẩm tươi sạch. Giúp gia đình bạn nấu những bữa ăn ngon và an toàn.</p>
                <div class="align-center border-choose">
                    <div class="images">
                        <img src="assets/images/bg-border-center.png" alt="icon">
                    </div>
                    <!--End images-->
                </div>
                <!--End border-->
            </div>
            <!--End title-->
            <div class="col-md-3 align-left">
                <div class="text">
                    <img class="icon-choose" src="assets/images/icon-choose-1.png" alt="icon-choose">
                    <h3>100% tự nhiên</h3>
                    <p>Xanh - Sạch</p>
                </div>
                <!--End text-->
                <div class="text">
                    <img class="icon-choose" src="assets/images/icon-choose-2.png" alt="icon-choose">
                    <h3>Gia đình</h3>
                    <p>Khỏe mạnh - An toàn</p>
                </div>
                <!--End text-->
                <div class="text">
                    <img class="icon-choose" src="assets/images/icon-choose-3.png" alt="icon-choose">
                    <h3>Luôn tươi</h3>
                    <p>Luôn luôn tươi ngon </p>
                </div>
                <!--End text-->
            </div>
            <!--End col-md-3-->
            <div class="col-md-6">
                <img class="img-responsive" src="assets/images/images-choose.jpg" alt="banner">
            </div>
            <!--End col-md-6-->
            <div class="col-md-3 align-right right-items">
                <div class="text">
                    <h3>0% hóa chất</h3>
                    <img class="icon-choose" src="assets/images/icon-choose-4.png" alt="icon-choose">
                    <p>Không sử dụng hóa chất trong nuôi trồng </p>
                </div>
                <!--End text-->
                <div class="text">
                    <h3>Khỏe mạnh hơn</h3>
                    <img class="icon-choose" src="assets/images/icon-choose-5.png" alt="icon-choose">
                    <p>Ăn uống điều độ </p>
                </div>
                <!--End text-->
                <div class="text">
                    <h3>An toàn</h3>
                    <img class="icon-choose" src="assets/images/icon-choose-6.png" alt="icon-choose">
                    <p>Cuộc sống vui vẻ </p>
                </div>
                <!--End text-->
            </div>
            <!--End col-md-3-->
        </div>
        <!--End container-->
    </div>
    <div class="bg-slider-one-item space-50">
        <div class="slider-dot-images">
            <div class="container container-ver2 center">
                <div class="slider-nav">
                    <div>
                        <img src="assets/images/about1.jpg" alt="images">
                    </div>
                    <div>
                        <img src="assets/images/about2.jpg" alt="images">
                    </div>
                    <div>
                        <img src="assets/images/about3.jpg" alt="images">
                    </div>
                    <div>
                        <img src="assets/images/about4.jpg" alt="images">
                    </div>
                    <div>
                        <img src="assets/images/about5.jpg" alt="images">
                    </div>
                    <div>
                        <img src="assets/images/about1.jpg" alt="images">
                    </div>
                    <div>
                        <img src="assets/images/about2.jpg" alt="images">
                    </div>
                    <div>
                        <img src="assets/images/about3.jpg" alt="images">
                    </div>
                    <div>
                        <img src="assets/images/about4.jpg" alt="images">
                    </div>
                    <div>
                        <img src="assets/images/about5.jpg" alt="images">
                    </div>
                </div>
                <div class="slider-for">
                    <div>
                        <p>I rarely write reviews for products but with the EngoCreative, I am more than grateful. The site is fully customizable and you can really feel like playing while designing the site! Thanks again for having made such a convenient, yet fully-functional theme.</p>
                        <h3>JONATHAN VANCE</h3>
                        <a href="#" title="CEO">CEO &amp; Founder</a>
                    </div>
                    <div>
                        <p>I rarely write reviews for products but with the EngoCreative, I am more than grateful. The site is fully customizable and you can really feel like playing while designing the site! Thanks again for having made such a convenient, yet fully-functional theme.</p>
                        <h3>JONATHAN VANCE</h3>
                        <a href="#" title="CEO">CEO &amp; Founder</a>
                    </div>
                    <div>
                        <p>I rarely write reviews for products but with the EngoCreative, I am more than grateful. The site is fully customizable and you can really feel like playing while designing the site! Thanks again for having made such a convenient, yet fully-functional theme.</p>
                        <h3>JONATHAN VANCE</h3>
                        <a href="#" title="CEO">CEO &amp; Founder</a>
                    </div>
                    <div>
                        <p>I rarely write reviews for products but with the EngoCreative, I am more than grateful. The site is fully customizable and you can really feel like playing while designing the site! Thanks again for having made such a convenient, yet fully-functional theme.</p>
                        <h3>JONATHAN VANCE</h3>
                        <a href="#" title="CEO">CEO &amp; Founder</a>
                    </div>
                    <div>
                        <p>I rarely write reviews for products but with the EngoCreative, I am more than grateful. The site is fully customizable and you can really feel like playing while designing the site! Thanks again for having made such a convenient, yet fully-functional theme.</p>
                        <h3>JONATHAN VANCE</h3>
                        <a href="#" title="CEO">CEO &amp; Founder</a>
                    </div>
                    <div>
                        <p>I rarely write reviews for products but with the EngoCreative, I am more than grateful. The site is fully customizable and you can really feel like playing while designing the site! Thanks again for having made such a convenient, yet fully-functional theme.</p>
                        <h3>JONATHAN VANCE</h3>
                        <a href="#" title="CEO">CEO &amp; Founder</a>
                    </div>
                    <div>
                        <p>I rarely write reviews for products but with the EngoCreative, I am more than grateful. The site is fully customizable and you can really feel like playing while designing the site! Thanks again for having made such a convenient, yet fully-functional theme.</p>
                        <h3>JONATHAN VANCE</h3>
                        <a href="#" title="CEO">CEO &amp; Founder</a>
                    </div>
                    <div>
                        <p>I rarely write reviews for products but with the EngoCreative, I am more than grateful. The site is fully customizable and you can really feel like playing while designing the site! Thanks again for having made such a convenient, yet fully-functional theme.</p>
                        <h3>JONATHAN VANCE</h3>
                        <a href="#" title="CEO">CEO &amp; Founder</a>
                    </div>
                    <div>
                        <p>I rarely write reviews for products but with the EngoCreative, I am more than grateful. The site is fully customizable and you can really feel like playing while designing the site! Thanks again for having made such a convenient, yet fully-functional theme.</p>
                        <h3>JONATHAN VANCE</h3>
                        <a href="#" title="CEO">CEO &amp; Founder</a>
                    </div>
                    <div>
                        <p>I rarely write reviews for products but with the EngoCreative, I am more than grateful. The site is fully customizable and you can really feel like playing while designing the site! Thanks again for having made such a convenient, yet fully-functional theme.</p>
                        <h3>JONATHAN VANCE</h3>
                        <a href="#" title="CEO">CEO &amp; Founder</a>
                    </div>
                </div>
                <!-- End slider-for -->
            </div>
            <!-- End container -->
            <div class="container container-ver2">
                <div class="brand-content owl-carousel">
                    <div class="items">
                        <a href="#" title="brand"><img class="img-responsive" src="assets/images/brand-1.png" alt="Brand"></a>
                    </div>
                    <div class="items">
                        <a href="#" title="brand"><img class="img-responsive" src="assets/images/brand-2.png" alt="Brand"></a>
                    </div>
                    <div class="items">
                        <a href="#" title="brand"><img class="img-responsive" src="assets/images/brand-3.png" alt="Brand"></a>
                    </div>
                    <div class="items">
                        <a href="#" title="brand"><img class="img-responsive" src="assets/images/brand-4.png" alt="Brand"></a>
                    </div>
                    <div class="items">
                        <a href="#" title="brand"><img class="img-responsive" src="assets/images/brand-5.png" alt="Brand"></a>
                    </div>
                    <div class="items">
                        <a href="#" title="brand"><img class="img-responsive" src="assets/images/brand-6.png" alt="Brand"></a>
                    </div>
                </div>
            </div>
            <!--End container-->
        </div>
    </div>
    @if($posts->count() >0 )
        <div class="container container-ver2 blog-home1">
            <div class="title-text-v2">
                <div class="icon-title align-center space-20">
                    <img src="assets/images/title-lastest-from.png" alt="icon-title">
                </div>
                <h3>Bài viết</h3>
                <a class="link padding-bt-20" href="#" title="Xem tất cả">Xem tất cả</a>
            </div>
            <div class="blog-content slider-three-item owl-carousel">
                @foreach($posts as $post)
                <div class="item">
                    <a class="hover-images" href="{{ route('posts.show', $post->slug) }}" title="images">
                        <img class="img-responsive" src="{{ optional($post->base_image)->path }}" alt="blog">
                    </a>
                    <div class="text">
                        <p class="date">{{ $post->created_at }}</p>
                        <a href="{{ route('posts.show', $post->slug) }}" title="title"><h3>{{ $post->title }}</h3></a>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- End blog-content -->
        </div>
    @endif
@endsection
