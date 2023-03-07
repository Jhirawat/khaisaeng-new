@extends('layouts.main_user')

@section('head')
@endsection


@section('style')
    <style>
        .navbar-floating .header-navbar-shadow {
            display: block;
            background: linear-gradient(180deg, #524f4f00 44%, rgb(248 248 248 / 0%) 73%, rgba(255, 255, 255, 0)) !important;
            padding-top: 2.2rem;
            background-repeat: repeat;
            width: 100%;
            height: 102px;
            position: fixed;
            top: 0;
            z-index: 11;
        }
    </style>
@endsection


@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Shop</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">eCommerce</a>
                                    </li>
                                    <li class="breadcrumb-item active">Shop
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                    href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a
                                    class="dropdown-item" href="#">Calendar</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-detached content-right">
                <div class="content-body">
                    <!-- Ecommerce Content Section Starts -->
                    <section id="ecommerce-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="ecommerce-header-items">
                                    <div class="result-toggler">
                                        <button class="navbar-toggler shop-sidebar-toggler" type="button"
                                            data-toggle="collapse">
                                            <span class="navbar-toggler-icon d-block d-lg-none"><i
                                                    class="feather icon-menu"></i></span>
                                        </button>
                                        <div class="search-results">
                                            16285 results found
                                        </div>
                                    </div>
                                    <div class="view-options">
                                        <select class="price-options form-control" id="ecommerce-price-options">
                                            <option selected>Featured</option>
                                            <option value="1">Lowest</option>
                                            <option value="2">Highest</option>
                                        </select>
                                        <div class="view-btn-option">
                                            <button class="btn btn-white view-btn grid-view-btn active">
                                                <i class="feather icon-grid"></i>
                                            </button>
                                            <button class="btn btn-white list-view-btn view-btn">
                                                <i class="feather icon-list"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Ecommerce Content Section Starts -->
                    <!-- background Overlay when sidebar is shown  starts-->
                    <div class="shop-content-overlay"></div>
                    <!-- background Overlay when sidebar is shown  ends-->

                    <!-- Ecommerce Search Bar Starts -->
                    <section id="ecommerce-searchbar">
                        <div class="row mt-1">
                            <div class="col-sm-12">
                                <fieldset class="form-group position-relative">
                                    <input type="text" class="form-control search-product" id="iconLeft5"
                                        placeholder="Search here">
                                    <div class="form-control-position">
                                        <i class="feather icon-search"></i>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </section>
                    <!-- Ecommerce Search Bar Ends -->

                    <!-- Ecommerce Products Starts -->
                    <section id="ecommerce-products" class="grid-view">
                        <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html">
                                        <img class="img-fluid" src="../../../app-assets/images/pages/eCommerce/1.png"
                                            alt="img-placeholder"></a>
                                </div>
                                <div class="card-body">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span> <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="item-price">
                                                $39.99
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="item-name">
                                        <a href="app-ecommerce-details.html">Amazon - Fire TV Stick with Alexa Voice Remote
                                            - Black</a>
                                        <p class="item-company">By <span class="company-name">Google</span></p>
                                    </div>
                                    <div>
                                        <p class="item-description">
                                            Enjoy smart access to videos, games and apps with this Amazon Fire TV stick. Its
                                            Alexa voice remote lets you
                                            deliver hands-free commands when you want to watch television or engage with
                                            other applications. With a
                                            quad-core processor, 1GB internal memory and 8GB of storage, this portable
                                            Amazon Fire TV stick works fast
                                            for buffer-free streaming.
                                        </p>
                                    </div>
                                </div>
                                <div class="item-options text-center">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span> <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $39.99
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="wishlist">
                                        <i class="fa fa-heart-o"></i> <span>Wishlist</span>
                                    </div>
                                    <div class="cart">
                                        <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Add to
                                            cart</span> <a href="/home"
                                            class="view-in-cart d-none">View In Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html">
                                        <img class="img-fluid" src="../../../app-assets/images/pages/eCommerce/2.png"
                                            alt="img-placeholder">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span> <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="item-price">
                                                $35.00
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="item-name">
                                        <a href="app-ecommerce-details.html">Google - Chromecast - Black</a>
                                        <p class="item-company">By <span class="company-name">Amazon</span></p>
                                    </div>
                                    <div>
                                        <p class="item-description">
                                            Google Chromecast: Enjoy a world of entertainment with Google Chromecast. Just
                                            connect to your HDTV's HDMI
                                            interface and your home Wi-Fi network to get started. You can stream your
                                            favorite apps from your compatible
                                            phone, tablet or laptop, plus use your phone as a remote to search, play and
                                            pause content.
                                        </p>
                                    </div>
                                </div>
                                <div class="item-options text-center">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span> <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $35.00
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="wishlist">
                                        <i class="fa fa-heart-o mr-25"></i> Wishlist
                                    </div>
                                    <div class="cart">
                                        <i class="feather icon-shopping-cart mr-25"></i> <span class="add-to-cart">Add to
                                            cart</span> <a href="/home"
                                            class="view-in-cart d-none">View In Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html"><img class="img-fluid"
                                            src="../../../app-assets/images/pages/eCommerce/3.png"
                                            alt="img-placeholder"></a>
                                </div>
                                <div class="card-body">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span> <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="item-cost">
                                                <h6 class="item-price">
                                                    $499.99
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-name">
                                        <a href="app-ecommerce-details.html">Dell - Inspiron 15.6" Touch-Screen Laptop -
                                            Black</a>
                                        <p class="item-company">By <span class="company-name">Dell</span></p>
                                    </div>
                                    <div>
                                        <p class="item-description">
                                            Dell Inspiron Laptop: Get speed and performance from this 15.6-inch Dell
                                            Inspiron laptop. Supported by an
                                            Intel Core i5-5200U processor and 6GB of DDR3L RAM, this slim touch screen
                                            laptop lets you run multiple
                                            applications without lag. The 1TB hard drive in this Dell Inspiron laptop lets
                                            you store multiple music,
                                            video and document files.
                                        </p>
                                    </div>
                                </div>
                                <div class="item-options text-center">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span> <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $499.99
                                            </h6>
                                            <p class="shipping">
                                                <i class="feather icon-shopping-cart"></i> Free Shipping
                                            </p>
                                        </div>
                                    </div>
                                    <div class="wishlist">
                                        <i class="fa fa-heart-o mr-25"></i> Wishlist
                                    </div>
                                    <div class="cart">
                                        <i class="feather icon-shopping-cart mr-25"></i> <span class="add-to-cart">Add to
                                            cart</span> <a href="/home"
                                            class="view-in-cart d-none">View In Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html"> <img class="img-fluid"
                                            src="../../../app-assets/images/pages/eCommerce/4.png"
                                            alt="img-placeholder"></a>
                                </div>
                                <div class="card-body">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span> <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $49.99
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="item-name">
                                        <a href="app-ecommerce-details.html">Amazon - Echo Dot</a>
                                        <p class="item-company">By <span class="company-name">Amazon</span></p>
                                    </div>
                                    <div>
                                        <p class="item-description">
                                            Echo Dot is the latest addition to Amazon's voice-controlled devices.
                                            Deliver your favorite playlist anywhere in your home with the Amazon Echo Dot
                                            voice-controlled device.
                                            Control most electric devices through voice activation, or schedule a ride with
                                            Uber and order a pizza. The
                                            Amazon Echo Dot voice-controlled device turns any home into a smart home with
                                            the Alexa app on a smartphone
                                            or tablet.
                                        </p>
                                    </div>
                                </div>
                                <div class="item-options text-center">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span> <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $49.99
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="wishlist">
                                        <i class="fa fa-heart-o mr-25"></i> Wishlist
                                    </div>
                                    <div class="cart">
                                        <i class="feather icon-shopping-cart mr-25"></i> <span class="add-to-cart">Add to
                                            cart</span> <a href="/home"
                                            class="view-in-cart d-none">View In Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html">
                                        <img class="img-fluid" src="../../../app-assets/images/pages/eCommerce/5.png"
                                            alt="img-placeholder">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span> <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $999.99
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="item-name">
                                        <a href="app-ecommerce-details.html">
                                            Apple - MacBook Air® (Latest Model) - 13.3" Display - Silver
                                        </a>
                                        <p class="item-company">By <span class="company-name">Apple</span></p>
                                    </div>
                                    <div>
                                        <p class="item-description">
                                            MacBook Air is a thin, lightweight laptop from Apple.
                                            MacBook Air features up to 8GB of memory, a fifth-generation Intel Core
                                            processor, Thunderbolt 2, great
                                            built-in apps, and all-day battery life.1 Its thin, light, and durable enough to
                                            take everywhere you go-and
                                            powerful enough to do everything once you get there, better.
                                        </p>
                                    </div>
                                </div>
                                <div class="item-options text-center">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span> <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $999.99
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="wishlist">
                                        <i class="fa fa-heart-o mr-25"></i> Wishlist
                                    </div>
                                    <div class="cart">
                                        <i class="feather icon-shopping-cart mr-25"></i> <span class="add-to-cart">Add to
                                            cart</span> <a href="/home"
                                            class="view-in-cart d-none">View In Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html">
                                        <img class="img-fluid" src="../../../app-assets/images/pages/eCommerce/6.png"
                                            alt="img-placeholder">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span> <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $429.99
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="item-name">
                                        <a href="app-ecommerce-details.html">
                                            Sharp - 50" Class (49.5" Diag.) - LED - 1080p - Black
                                        </a>
                                        <p class="item-company">By <span class="company-name">Sharp</span></p>
                                    </div>
                                    <div>
                                        <p class="item-description">
                                            Only at Best Buy Sharp LC-50LB481U LED Roku TV: Get a TV that enjoys full
                                            Internet connectivity with this
                                            Sharp 49.5-inch smart TV. Full HD resolutions give you plenty of detail whether
                                            you're streaming content
                                            from the Internet using the integrated Roku player or watching via cable.
                                        </p>
                                    </div>
                                </div>
                                <div class="item-options text-center">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span> <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $429.99
                                            </h6>
                                            <p class="shipping">
                                                <i class="feather icon-shopping-cart"></i> Free Shipping
                                            </p>
                                        </div>
                                    </div>
                                    <div class="wishlist">
                                        <i class="fa fa-heart-o mr-25"></i> Wishlist
                                    </div>
                                    <div class="cart">
                                        <i class="feather icon-shopping-cart mr-25"></i> <span class="add-to-cart">Add to
                                            cart</span> <a href="/home"
                                            class="view-in-cart d-none">View In Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html">
                                        <img class="img-fluid" src="../../../app-assets/images/pages/eCommerce/7.png"
                                            alt="img-placeholder">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span> <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $129
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="item-name">
                                        <a href="app-ecommerce-details.html">
                                            Google - Google Home - White/Slate fabric
                                        </a>
                                        <p class="item-company">By <span class="company-name">Google</span></p>
                                    </div>
                                    <div>
                                        <p class="item-description">
                                            Simplify your everyday life with the Google Home, a voice-activated speaker
                                            powered by the Google Assistant.
                                            Use voice commands to enjoy music, get answers from Google and manage everyday
                                            tasks. Google Home is
                                            compatible with Android and iOS operating systems, and can control compatible
                                            smart devices such as
                                            Chromecast or Nest.
                                        </p>
                                    </div>
                                </div>
                                <div class="item-options text-center">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span> <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $129
                                            </h6>
                                            <p class="shipping">
                                                <i class="feather icon-shopping-cart"></i> Free Shipping
                                            </p>
                                        </div>
                                    </div>
                                    <div class="wishlist">
                                        <i class="fa fa-heart-o mr-25"></i> Wishlist
                                    </div>
                                    <div class="cart">
                                        <i class="feather icon-shopping-cart mr-25"></i> <span class="add-to-cart">Add to
                                            cart</span> <a href="/home"
                                            class="view-in-cart d-none">View In Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html">
                                        <img class="img-fluid" src="../../../app-assets/images/pages/eCommerce/10.png"
                                            alt="img-placeholder">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span> <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $29.99
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="item-name">
                                        <a href="app-ecommerce-details.html">
                                            Apple - EarPods™ with Remote and Mic - White
                                        </a>
                                        <p class="item-company">By <span class="company-name">Apple</span></p>
                                    </div>
                                    <div>
                                        <p class="item-description">
                                            Apple EarPods are white in-ear headphones included with music players and
                                            smartphones designed and marketed
                                            by Apple Inc. They are designed to fit the ear while retaining a new design
                                            pushed by Apple alongside the
                                            iPod and iPod Touch products, with which they were sold together.
                                        </p>
                                    </div>
                                </div>
                                <div class="item-options text-center">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span> <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $29.99
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="wishlist">
                                        <i class="fa fa-heart-o mr-25"></i> Wishlist
                                    </div>
                                    <div class="cart">
                                        <i class="feather icon-shopping-cart mr-25"></i> <span class="add-to-cart">Add to
                                            cart</span> <a href="/home"
                                            class="view-in-cart d-none">View In Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html">
                                        <img class="img-fluid" src="../../../app-assets/images/pages/eCommerce/9.png"
                                            alt="img-placeholder">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span> <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $14.99
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="item-name">
                                        <a href="app-ecommerce-details.html">
                                            Philips - hue A19 Smart LED Light Bulb - White Only
                                        </a>
                                        <p class="item-company">By <span class="company-name">Philips</span></p>
                                    </div>
                                    <div>
                                        <p class="item-description">
                                            Philips hue A19 Smart LED Light Bulb: Get lighting that's as smart as you are.
                                            You can easily dim this light
                                            bulb and set timers and alarms using your smartphone or tablet. Plus, LED
                                            technology offers lasting
                                            illumination while using minimal energy.Get lighting that's as smart as you are.
                                        </p>
                                    </div>
                                </div>
                                <div class="item-options text-center">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span> <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $14.99
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="wishlist">
                                        <i class="fa fa-heart-o mr-25"></i> Wishlist
                                    </div>
                                    <div class="cart">
                                        <i class="feather icon-shopping-cart mr-25"></i> <span class="add-to-cart">Add to
                                            cart</span> <a href="/home"
                                            class="view-in-cart d-none">View In Cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Ecommerce Products Ends -->

                    <!-- Ecommerce Pagination Starts -->
                    <section id="ecommerce-pagination">
                        <div class="row">
                            <div class="col-sm-12">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center mt-2">
                                        <li class="page-item prev-item"><a class="page-link" href="#"></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item" aria-current="page"><a class="page-link"
                                                href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                                        <li class="page-item next-item"><a class="page-link" href="#"></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </section>
                @endsection


                @section('script')
                    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
                    <!-- BEGIN Vendor JS-->

                    <!-- BEGIN: Page Vendor JS-->
                    {{-- <script src="../../../app-assets/vendors/js/ui/prism.min.js"></script>
                    <script src="../../../app-assets/vendors/js/extensions/wNumb.js"></script>
                    <script src="../../../app-assets/vendors/js/extensions/nouislider.min.js"></script>
                    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
                    <!-- END: Page Vendor JS-->

                    <!-- BEGIN: Theme JS-->
                    <script src="../../../app-assets/js/core/app-menu.js"></script>
                    <script src="../../../app-assets/js/core/app.js"></script>
                    <script src="../../../app-assets/js/scripts/components.js"></script>
                    <!-- END: Theme JS-->

                    <!-- BEGIN: Page JS-->
                    <script src="../../../app-assets/js/scripts/pages/app-ecommerce-shop.js"></script> --}}

                    <script>
                        $(document).ready(function() {
                            "use strict";
                            // RTL Support
                            var direction = 'ltr';
                            if ($('html').data('textdirection') == 'rtl') {
                                direction = 'rtl';
                            }

                            var sidebarShop = $(".sidebar-shop"),
                                shopOverlay = $(".shop-content-overlay"),
                                sidebarToggler = $(".shop-sidebar-toggler"),
                                priceFilter = $(".price-options"),
                                gridViewBtn = $(".grid-view-btn"),
                                listViewBtn = $(".list-view-btn"),
                                ecommerceProducts = $("#ecommerce-products"),
                                cart = $(".cart"),
                                wishlist = $(".wishlist");


                            // show sidebar
                            sidebarToggler.on("click", function() {
                                sidebarShop.toggleClass("show");
                                shopOverlay.toggleClass("show");
                            });

                            // remove sidebar
                            $(".shop-content-overlay, .sidebar-close-icon").on("click", function() {
                                sidebarShop.removeClass("show");
                                shopOverlay.removeClass("show");
                            })

                            //price slider
                            var slider = document.getElementById("price-slider");
                            if (slider) {
                                noUiSlider.create(slider, {
                                    start: [51, 5000],
                                    direction: direction,
                                    connect: true,
                                    tooltips: [true, true],
                                    format: wNumb({
                                        decimals: 0,
                                    }),
                                    range: {
                                        "min": 51,
                                        "max": 5000
                                    }
                                });
                            }
                            // for select in ecommerce header
                            if (priceFilter.length > 0) {
                                priceFilter.select2({
                                    minimumResultsForSearch: -1,
                                    dropdownAutoWidth: true,
                                    width: '100%'
                                });
                            }

                            /***** CHANGE VIEW *****/
                            // Grid View
                            gridViewBtn.on("click", function() {
                                ecommerceProducts.removeClass("list-view").addClass("grid-view");
                                listViewBtn.removeClass("active");
                                gridViewBtn.addClass("active");
                            });

                            // List View
                            listViewBtn.on("click", function() {
                                ecommerceProducts.removeClass("grid-view").addClass("list-view");
                                gridViewBtn.removeClass("active");
                                listViewBtn.addClass("active");
                            });

                            // For View in cart
                            cart.on("click", function() {
                                var $this = $(this),
                                    addToCart = $this.find(".add-to-cart"),
                                    viewInCart = $this.find(".view-in-cart");
                                if (addToCart.is(':visible')) {
                                    addToCart.addClass("d-none");
                                    viewInCart.addClass("d-inline-block");
                                } else {
                                    var href = viewInCart.attr('href');
                                    window.location.href = href;
                                }
                            });

                            $(".view-in-cart").on('click', function(e) {
                                e.preventDefault();
                            });

                            // For Wishlist Icon
                            wishlist.on("click", function() {
                                var $this = $(this)
                                $this.find("i").toggleClass("fa-heart-o fa-heart")
                                $this.toggleClass("added");
                            })

                            // Checkout Wizard
                            var checkoutWizard = $(".checkout-tab-steps"),
                                checkoutValidation = checkoutWizard.show();
                            if (checkoutWizard.length > 0) {
                                $(checkoutWizard).steps({
                                    headerTag: "h6",
                                    bodyTag: "fieldset",
                                    transitionEffect: "fade",
                                    titleTemplate: '<span class="step">#index#</span> #title#',
                                    enablePagination: false,
                                    onStepChanging: function(event, currentIndex, newIndex) {
                                        // allows to go back to previous step if form is
                                        if (currentIndex > newIndex) {
                                            return true;
                                        }
                                        // Needed in some cases if the user went back (clean up)
                                        if (currentIndex < newIndex) {
                                            // To remove error styles
                                            checkoutValidation.find(".body:eq(" + newIndex + ") label.error").remove();
                                            checkoutValidation.find(".body:eq(" + newIndex + ") .error").removeClass(
                                                "error");
                                        }
                                        // check for valid details and show notification accordingly
                                        if (currentIndex === 1 && Number($(".form-control.required").val().length) <
                                            1) {
                                            toastr.warning('Error', 'Please Enter Valid Details', {
                                                "positionClass": "toast-bottom-right"
                                            });
                                        }
                                        checkoutValidation.validate().settings.ignore = ":disabled,:hidden";
                                        return checkoutValidation.valid();
                                    },
                                });
                                // to move to next step on place order and save address click
                                $(".place-order, .delivery-address").on("click", function() {
                                    $(".checkout-tab-steps").steps("next", {});
                                });
                                // check if user has entered valid cvv
                                $(".btn-cvv").on("click", function() {
                                    if ($(".input-cvv").val().length == 3) {
                                        toastr.success('Success', 'Payment received Successfully', {
                                            "positionClass": "toast-bottom-right"
                                        });
                                    } else {
                                        toastr.warning('Error', 'Please Enter Valid Details', {
                                            "positionClass": "toast-bottom-right"
                                        });
                                    }
                                })
                            }

                            // checkout quantity counter
                            var quantityCounter = $(".quantity-counter"),
                                CounterMin = 1,
                                CounterMax = 10;
                            if (quantityCounter.length > 0) {
                                quantityCounter.TouchSpin({
                                    min: CounterMin,
                                    max: CounterMax
                                }).on('touchspin.on.startdownspin', function() {
                                    var $this = $(this);
                                    $('.bootstrap-touchspin-up').removeClass("disabled-max-min");
                                    if ($this.val() == 1) {
                                        $(this).siblings().find('.bootstrap-touchspin-down').addClass("disabled-max-min");
                                    }
                                }).on('touchspin.on.startupspin', function() {
                                    var $this = $(this);
                                    $('.bootstrap-touchspin-down').removeClass("disabled-max-min");
                                    if ($this.val() == 10) {
                                        $(this).siblings().find('.bootstrap-touchspin-up').addClass("disabled-max-min");
                                    }
                                });
                            }

                            // remove items from wishlist page
                            $(".remove-wishlist , .move-cart").on("click", function() {
                                $(this).closest(".ecommerce-card").remove();
                            })
                        })
                        // on window resize hide sidebar
                        $(window).on("resize", function() {
                            if ($(window).width() <= 991) {
                                $(".sidebar-shop").removeClass("show");
                                $(".shop-content-overlay").removeClass("show");
                            } else {
                                $(".sidebar-shop").addClass("show");
                            }
                        });
                    </script>
                @endsection
