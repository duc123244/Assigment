<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{ asset('assets/client/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/client/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/client/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/client/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/client/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/client/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/client/css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('assets/client/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ asset('assets/client/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ asset('assets/client/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{ asset('assets/client/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed"
        href="{{ asset('assets/client/images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->

        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index.html"><img src="{{ asset('assets/client/images/home/logo.png') }}"
                                    alt="" /></a>
                        </div>

                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                                <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                <li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{ URL::to('/trangchu') }}" class="active">Home</a></li>
                                <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{ URL::to('/trangchu') }}">Sản phẩm</a></li>
                                        <li><a href="cart.html">Giỏ hàng</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search" />
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->

    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="product-carousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#product-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#product-carousel" data-slide-to="1"></li>
                            <li data-target="#product-carousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{ asset('assets/client/images/z5105076273922_afd08d611db3d6131b86b85c549ecb27_c057293f6b854e859a885b0e576e85e7.jpg') }}"
                                    alt="Product 1" />
                                <div class="carousel-caption">
                                    <h3>Product 1</h3>
                                    <p>Discover the latest trends in fashion and technology.</p>
                                    <a href="#" class="btn btn-primary">Shop Now</a>
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/client/images/z5166066753482_99082913a48637e250a8d1d0de1af059_bc93d1954f4d414c886e4af18a617483.jpg') }}"
                                    alt="Product 2" />
                                <div class="carousel-caption">
                                    <h3>Product 2</h3>
                                    <p>Explore our new collection of summer essentials.</p>
                                    <a href="#" class="btn btn-primary">Shop Now</a>
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/client/images/z5159279044397_a566e0b58656992ad8e58f9d89f32c0c_bf3c502fa3f34b6898bd907f0861fab9.jpg') }}"
                                    alt="Product 3" />
                                <div class="carousel-caption">
                                    <h3>Product 3</h3>
                                    <p>Find the perfect gift for any occasion.</p>
                                    <a href="#" class="btn btn-primary">Shop Now</a>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#product-carousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#product-carousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/slider-->


    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh mục</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            @foreach ($categories as $category)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian"
                                                href="#category{{ $category->id }}">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                {{ $category->name }}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="category{{ $category->id }}" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                @foreach ($category->books as $book)
                                                    <li><a href="danh-muc-sp{id}">{{ $book->name }}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div><!--/category-products-->
                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
    @include('client.layouts.footer')
    <!--/Footer-->
<script>
	$(document).ready(function(){
    $('.category-products ul li a').click(function(e){
        e.preventDefault();
        var categoryId = $(this).data('category-id'); // hoặc một cách khác để lấy ID danh mục
        $.ajax({
            url: '/get-products',
            method: 'GET',
            data: { category_id: categoryId },
            success: function(data) {
                $('#product-list').html(data); // Cập nhật danh sách sản phẩm
            }
        });
    });
});

</script>

    <link href="{{ asset('assets/client/css/bootstrap.min.css') }}" rel="stylesheet">

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('js/price-range.js') }}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.j') }}s"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
