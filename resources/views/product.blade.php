<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cartzilla | Isometric Device Mockups Bundle
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="/css/vendor.min.css">
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" id="main-styles" href="/css/theme.min.css">
</head>
<!-- Body-->
<body class="toolbar-enabled">
<!-- Sign in / sign up modal-->
<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="nav nav-tabs card-header-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" href="#signin-tab" data-toggle="tab" role="tab" aria-selected="true"><i class="czi-unlocked mr-2 mt-n1"></i>Sign in</a></li>
                    <li class="nav-item"><a class="nav-link" href="#signup-tab" data-toggle="tab" role="tab" aria-selected="false"><i class="czi-user mr-2 mt-n1"></i>Sign up</a></li>
                </ul>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body tab-content py-4">
                <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
                    <div class="form-group">
                        <label for="si-email">Email address</label>
                        <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required>
                        <div class="invalid-feedback">Please provide a valid email address.</div>
                    </div>
                    <div class="form-group">
                        <label for="si-password">Password</label>
                        <div class="password-toggle">
                            <input class="form-control" type="password" id="si-password" required>
                            <label class="password-toggle-btn">
                                <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group d-flex flex-wrap justify-content-between">
                        <div class="custom-control custom-checkbox mb-2">
                            <input class="custom-control-input" type="checkbox" id="si-remember">
                            <label class="custom-control-label" for="si-remember">Remember me</label>
                        </div><a class="font-size-sm" href="#">Forgot password?</a>
                    </div>
                    <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign in</button>
                </form>
                <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
                    <div class="form-group">
                        <label for="su-name">Full name</label>
                        <input class="form-control" type="text" id="su-name" placeholder="John Doe" required>
                        <div class="invalid-feedback">Please fill in your name.</div>
                    </div>
                    <div class="form-group">
                        <label for="su-email">Email address</label>
                        <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required>
                        <div class="invalid-feedback">Please provide a valid email address.</div>
                    </div>
                    <div class="form-group">
                        <label for="su-password">Password</label>
                        <div class="password-toggle">
                            <input class="form-control" type="password" id="su-password" required>
                            <label class="password-toggle-btn">
                                <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="su-password-confirm">Confirm password</label>
                        <div class="password-toggle">
                            <input class="form-control" type="password" id="su-password-confirm" required>
                            <label class="password-toggle-btn">
                                <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign up</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Navbar Marketplace-->
<!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
<header class="bg-light box-shadow-sm navbar-sticky">
    <div class="navbar navbar-expand-lg navbar-light">
        <div class="container"><a class="navbar-brand d-none d-sm-block mr-4 order-lg-1" href="index.html" style="min-width: 7rem;"><img width="142" src="/img/logo-dark.png" alt="Cartzilla"/></a><a class="navbar-brand d-sm-none mr-2 order-lg-1" href="index.html" style="min-width: 4.625rem;"><img width="74" src="/img/logo-icon.png" alt="Cartzilla"/></a>
            <!-- Toolbar-->
            <div class="navbar-toolbar d-flex align-items-center order-lg-3">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool d-none d-lg-flex" href="#searchBox" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="searchBox"><span class="navbar-tool-tooltip">Search</span>
                    <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-search"></i></div></a><a class="navbar-tool d-none d-lg-flex" href="dashboard-favorites.html"><span class="navbar-tool-tooltip">Favorites</span>
                    <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-heart"></i></div></a>
                <div class="navbar-tool dropdown ml-2"><a class="navbar-tool-icon-box border dropdown-toggle" href="dashboard-sales.html"><img width="32" src="/img/marketplace/account/avatar-sm.png" alt="Createx Studio"/></a><a class="navbar-tool-text ml-n1" href="dashboard-sales.html"><small>Createx Std.</small>$1,375.00</a>
                    <div class="dropdown-menu dropdown-menu-right" style="min-width: 14rem;">
                        <h6 class="dropdown-header">Account</h6><a class="dropdown-item d-flex align-items-center" href="dashboard-settings.html"><i class="czi-settings opacity-60 mr-2"></i>Settings</a><a class="dropdown-item d-flex align-items-center" href="dashboard-purchases.html"><i class="czi-basket opacity-60 mr-2"></i>Purchases</a><a class="dropdown-item d-flex align-items-center" href="dashboard-favorites.html"><i class="czi-heart opacity-60 mr-2"></i>Favorites<span class="font-size-xs text-muted ml-auto">4</span></a>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header">Seller Dashboard</h6><a class="dropdown-item d-flex align-items-center" href="dashboard-sales.html"><i class="czi-dollar opacity-60 mr-2"></i>Sales<span class="font-size-xs text-muted ml-auto">$1,375.00</span></a><a class="dropdown-item d-flex align-items-center" href="dashboard-products.html"><i class="czi-package opacity-60 mr-2"></i>Products<span class="font-size-xs text-muted ml-auto">5</span></a><a class="dropdown-item d-flex align-items-center" href="dashboard-add-new-product.html"><i class="czi-cloud-upload opacity-60 mr-2"></i>Add New Product</a><a class="dropdown-item d-flex align-items-center" href="dashboard-payouts.html"><i class="czi-currency-exchange opacity-60 mr-2"></i>Payouts</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item d-flex align-items-center" href="account-signin.html"><i class="czi-sign-out opacity-60 mr-2"></i>Sign Out</a>
                    </div>
                </div>
                <div class="navbar-tool ml-4"><a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="marketplace-cart.html"><span class="navbar-tool-label">3</span><i class="navbar-tool-icon czi-cart"></i></a></div>
            </div>
            <div class="collapse navbar-collapse mr-auto order-lg-2" id="navbarCollapse">
                <!-- Search-->
                <div class="input-group-overlay d-lg-none my-3">
                    <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                    <input class="form-control prepended-form-control" type="text" placeholder="Search marketplace">
                </div>
                <!-- Categories dropdown-->
                <ul class="navbar-nav mega-nav pr-lg-2 mr-lg-2">
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle pl-0" href="#" data-toggle="dropdown"><i class="czi-menu align-middle mt-n1 mr-2"></i>Categories</a>
                        <ul class="dropdown-menu py-1">
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Photos</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item product-title font-weight-medium"><a href="#">All Photos<i class="czi-arrow-right font-size-xs ml-1"></i></a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Abstract</a></li>
                                    <li><a class="dropdown-item" href="#">Animals</a></li>
                                    <li><a class="dropdown-item" href="#">Architecture</a></li>
                                    <li><a class="dropdown-item" href="#">Beauty &amp; Fashion</a></li>
                                    <li><a class="dropdown-item" href="#">Business</a></li>
                                    <li><a class="dropdown-item" href="#">Education</a></li>
                                    <li><a class="dropdown-item" href="#">Food &amp; Drink</a></li>
                                    <li><a class="dropdown-item" href="#">Holidays</a></li>
                                    <li><a class="dropdown-item" href="#">Industrial</a></li>
                                    <li><a class="dropdown-item" href="#">People</a></li>
                                    <li><a class="dropdown-item" href="#">Sports</a></li>
                                    <li><a class="dropdown-item" href="#">Technology</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Graphics</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item product-title font-weight-medium"><a href="#">All Graphics<i class="czi-arrow-right font-size-xs ml-1"></i></a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Icons</a></li>
                                    <li><a class="dropdown-item" href="#">Illustartions</a></li>
                                    <li><a class="dropdown-item" href="#">Patterns</a></li>
                                    <li><a class="dropdown-item" href="#">Textures</a></li>
                                    <li><a class="dropdown-item" href="#">Web Elements</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">UI Design</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item product-title font-weight-medium"><a href="#">All UI Design<i class="czi-arrow-right font-size-xs ml-1"></i></a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">PSD Templates</a></li>
                                    <li><a class="dropdown-item" href="#">Sketch Templates</a></li>
                                    <li><a class="dropdown-item" href="#">Adobe XD Templates</a></li>
                                    <li><a class="dropdown-item" href="#">Figma Templates</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Web Themes</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item product-title font-weight-medium"><a href="#">All Web Themes<i class="czi-arrow-right font-size-xs ml-1"></i></a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">WordPress Themes</a></li>
                                    <li><a class="dropdown-item" href="#">Bootstrap Themes</a></li>
                                    <li><a class="dropdown-item" href="#">eCommerce Templates</a></li>
                                    <li><a class="dropdown-item" href="#">Muse Templates</a></li>
                                    <li><a class="dropdown-item" href="#">Plugins</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Fonts</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item product-title font-weight-medium"><a href="#">All Fonts<i class="czi-arrow-right font-size-xs ml-1"></i></a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Blackletter</a></li>
                                    <li><a class="dropdown-item" href="#">Display</a></li>
                                    <li><a class="dropdown-item" href="#">Non Western</a></li>
                                    <li><a class="dropdown-item" href="#">Sans Serif</a></li>
                                    <li><a class="dropdown-item" href="#">Script</a></li>
                                    <li><a class="dropdown-item" href="#">Serif</a></li>
                                    <li><a class="dropdown-item" href="#">Slab Serif</a></li>
                                    <li><a class="dropdown-item" href="#">Symbols</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Add-Ons</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item product-title font-weight-medium"><a href="#">All Add-Ons<i class="czi-arrow-right font-size-xs ml-1"></i></a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Photoshop Add-Ons</a></li>
                                    <li><a class="dropdown-item" href="#">Illustrator Add-Ons</a></li>
                                    <li><a class="dropdown-item" href="#">Sketch Plugins</a></li>
                                    <li><a class="dropdown-item" href="#">Procreate Brushes</a></li>
                                    <li><a class="dropdown-item" href="#">InDesign Palettes</a></li>
                                    <li><a class="dropdown-item" href="#">Lightroom Presets</a></li>
                                    <li><a class="dropdown-item" href="#">Other Software</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Primary menu-->
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.html">Back to main demo</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Search collapse-->
    <div class="search-box collapse" id="searchBox">
        <div class="card pt-2 pb-4 border-0 rounded-0">
            <div class="container">
                <div class="input-group-overlay">
                    <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                    <input class="form-control prepended-form-control" type="text" placeholder="Search marketplace">
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Page Title (Shop)-->
<div class="page-title-overlap bg-accent pt-4">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                    <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="czi-home"></i>Home</a></li>
                    <li class="breadcrumb-item text-nowrap"><a href="marketplace-category.html">Market</a>
                    </li>
                    <li class="breadcrumb-item text-nowrap active" aria-current="page">Single Item</li>
                </ol>
            </nav>
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
            <h1 class="h3 text-light mb-0">Isometric Device Mockups Bundle</h1>
        </div>
    </div>
</div>
<!-- Page Content-->
<!-- Shadow box-->
<section class="container mb-3 pb-3">
    <div class="bg-light box-shadow-lg rounded-lg overflow-hidden">
        <div class="row">
            <!-- Content-->
            <section class="col-lg-8 pt-2 pt-lg-4 pb-4 mb-lg-3">
                <div class="pt-2 px-4 pr-lg-0 pl-xl-5">
                    <!-- Product gallery-->
                    <div class="product-section-images">
                        <div class="product-section-thumbnail selected">
                            <img src="{{ productImage($product->image) }}" alt="product">
                        </div>

                        @if ($product->images)
                            @foreach (json_decode($product->images, true) as $image)
                                <div class="product-section-thumbnail">
                                    <img src="{{ productImage($image) }}" alt="product">
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <!-- Wishlist + Sharing-->
                    <div class="d-flex flex-wrap justify-content-between align-items-center border-top pt-3">
                        <div class="py-2 mr-2">
                            <button class="btn btn-outline-accent" type="button"><i class="czi-heart font-size-lg mr-2"></i>Add to Favorites</button>
                        </div>
                        <div class="py-2"><i class="czi-share-alt font-size-lg align-middle text-muted mr-2"></i><a class="social-btn sb-outline sb-facebook sb-sm ml-2" href="#"><i class="czi-facebook"></i></a><a class="social-btn sb-outline sb-twitter sb-sm ml-2" href="#"><i class="czi-twitter"></i></a><a class="social-btn sb-outline sb-pinterest sb-sm ml-2" href="#"><i class="czi-pinterest"></i></a><a class="social-btn sb-outline sb-instagram sb-sm ml-2" href="#"><i class="czi-instagram"></i></a></div>
                    </div>
                </div>
            </section>
            <!-- Sidebar-->
            <aside class="col-lg-4">
                <hr class="d-lg-none">
                <div class="cz-sidebar-static h-100 ml-auto border-left">
                    <div class="accordion" id="licenses">
                        <div class="card border-top-0 border-left-0 border-right-0">
                            <div class="card-header d-flex justify-content-between align-items-center py-3 border-0">
                            </div>

                        </div>
                        <div class="card border-bottom-0 border-left-0 border-right-0">
                            <div class="card-header d-flex justify-content-between align-items-center py-3 border-0">
                                <div class="custom-control custom-radio">
                                </div>

                            </div>
                            <div class="collapse" id="extended-license" data-parent="#licenses">
                                <div class="card-body py-0 pb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <button class="btn btn-primary btn-shadow btn-block mt-4" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-lg mr-2"></i>Add to Cart</button>
                    <div class="bg-secondary rounded p-3 mt-4 mb-2"><a class="media align-items-center" href="#"><img class="rounded-circle" width="50" src="/img/testimonials/01.jpg" alt="Sara Palson"/>
                            <div class="media-body pl-2"><span class="font-size-ms text-muted">Created by</span>
                                <h6 class="font-size-sm mb-0">Sara Palson</h6>
                            </div></a></div>
                    <div class="bg-secondary rounded p-3 mb-2"><i class="czi-download h5 text-muted align-middle mb-0 mt-n1 mr-2"></i><span class="d-inline-block h6 mb-0 mr-1">715</span><span class="font-size-sm">Sales</span></div>
                    <div class="bg-secondary rounded p-3 mb-4">
                        <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                        </div><span class="font-size-ms ml-2">4.1/5</span>
                        <div class="font-size-ms text-muted">based on 74 reviews</div>
                    </div>
                    <ul class="list-unstyled font-size-sm">
                        <li class="d-flex justify-content-between mb-3 pb-3 border-bottom"><span class="text-dark font-weight-medium">Last update</span><span class="text-muted">April 27, 2019</span></li>
                        <li class="d-flex justify-content-between mb-3 pb-3 border-bottom"><span class="text-dark font-weight-medium">Released</span><span class="text-muted">February 13, 2019</span></li>
                        <li class="d-flex justify-content-between mb-3 pb-3 border-bottom"><span class="text-dark font-weight-medium">Category</span><a class="product-meta" href="#">Graphics</a></li>
                        <li class="d-flex justify-content-between mb-3 pb-3 border-bottom"><span class="text-dark font-weight-medium">Compatible with</span><span class="text-muted">Photoshop CS5</span></li>
                        <li class="d-flex justify-content-between mb-3 pb-3 border-bottom"><span class="text-dark font-weight-medium">File type</span><span class="text-muted">PSD, JPG</span></li>
                        <li class="d-flex justify-content-between pb-3 border-bottom"><span class="text-dark font-weight-medium">File size</span><span class="text-muted">56 MB</span></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>
<!-- Product description + Reviews + Comments-->
<section class="container mb-4 mb-lg-5">
    <!-- Nav tabs-->
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item"><a class="nav-link p-4 active" href="#details" data-toggle="tab" role="tab">Product details</a></li>
        <li class="nav-item"><a class="nav-link p-4" href="#reviews" data-toggle="tab" role="tab">Reviews</a></li>
        <li class="nav-item"><a class="nav-link p-4" href="#comments" data-toggle="tab" role="tab">Comments</a></li>
    </ul>
    <div class="tab-content pt-2">
        <!-- Product details tab-->
        <div class="tab-pane fade show active" id="details" role="tabpanel">
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="h5 pt-2">Product Details</h3>
                    <p>
                        {!! $product->description !!}
                    </p>
                </div>
            </div>
        </div>
        <!-- Reviews tab-->
        <div class="tab-pane fade" id="reviews" role="tabpanel">
            <!-- Reviews-->
            <div class="row pt-2 pb-3">
                <div class="col-lg-4 col-md-5">
                    <h3 class="h4 mb-4">74 Reviews</h3>
                    <div class="star-rating mr-2"><i class="czi-star-filled font-size-sm text-accent mr-1"></i><i class="czi-star-filled font-size-sm text-accent mr-1"></i><i class="czi-star-filled font-size-sm text-accent mr-1"></i><i class="czi-star-filled font-size-sm text-accent mr-1"></i><i class="czi-star font-size-sm text-muted mr-1"></i></div><span class="d-inline-block align-middle">4.1 Overall rating</span>
                    <p class="pt-3 font-size-sm text-muted">58 out of 74 (77%)<br>Customers recommended this product</p>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="d-flex align-items-center mb-2">
                        <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">5</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
                        <div class="w-100">
                            <div class="progress" style="height: 4px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div><span class="text-muted ml-3">43</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">4</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
                        <div class="w-100">
                            <div class="progress" style="height: 4px;">
                                <div class="progress-bar" role="progressbar" style="width: 27%; background-color: #a7e453;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div><span class="text-muted ml-3">16</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">3</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
                        <div class="w-100">
                            <div class="progress" style="height: 4px;">
                                <div class="progress-bar" role="progressbar" style="width: 17%; background-color: #ffda75;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div><span class="text-muted ml-3">9</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">2</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
                        <div class="w-100">
                            <div class="progress" style="height: 4px;">
                                <div class="progress-bar" role="progressbar" style="width: 9%; background-color: #fea569;" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div><span class="text-muted ml-3">4</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">1</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
                        <div class="w-100">
                            <div class="progress" style="height: 4px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 4%;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div><span class="text-muted ml-3">2</span>
                    </div>
                </div>
            </div>
            <hr class="mt-4 pb-4 mb-3">
            <div class="row pb-4">
                <!-- Reviews list-->
                <div class="col-md-7">
                    <div class="d-flex justify-content-end pb-4">
                        <div class="form-inline flex-nowrap">
                            <label class="text-muted text-nowrap mr-2 d-none d-sm-block" for="sort-reviews">Sort by:</label>
                            <select class="custom-select custom-select-sm" id="sort-reviews">
                                <option>Newest</option>
                                <option>Oldest</option>
                                <option>Popular</option>
                                <option>High rating</option>
                                <option>Low rating</option>
                            </select>
                        </div>
                    </div>
                    <!-- Review-->
                    <div class="product-review pb-4 mb-4 border-bottom">
                        <div class="d-flex mb-3">
                            <div class="media media-ie-fix align-items-center mr-4 pr-2"><img class="rounded-circle" width="50" src="/img/shop/reviews/01.jpg" alt="Rafael Marquez"/>
                                <div class="media-body pl-3">
                                    <h6 class="font-size-sm mb-0">Rafael Marquez</h6><span class="font-size-ms text-muted">June 28, 2019</span>
                                </div>
                            </div>
                            <div>
                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                </div>
                                <div class="font-size-ms text-muted">83% of users found this review helpful</div>
                            </div>
                        </div>
                        <p class="font-size-md mb-2">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est...</p>
                        <ul class="list-unstyled font-size-ms pt-1">
                            <li class="mb-1"><span class="font-weight-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi, tempora</li>
                            <li class="mb-1"><span class="font-weight-medium">Cons:&nbsp;</span>Architecto beatae, quis autem</li>
                        </ul>
                        <div class="text-nowrap">
                            <button class="btn-like" type="button">15</button>
                            <button class="btn-dislike" type="button">3</button>
                        </div>
                    </div>
                    <!-- Review-->
                    <div class="product-review pb-4 mb-4 border-bottom">
                        <div class="d-flex mb-3">
                            <div class="media media-ie-fix align-items-center mr-4 pr-2"><img class="rounded-circle" width="50" src="/img/shop/reviews/02.jpg" alt="Barbara Palson"/>
                                <div class="media-body pl-3">
                                    <h6 class="font-size-sm mb-0">Barbara Palson</h6><span class="font-size-ms text-muted">May 17, 2019</span>
                                </div>
                            </div>
                            <div>
                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                                </div>
                                <div class="font-size-ms text-muted">99% of users found this review helpful</div>
                            </div>
                        </div>
                        <p class="font-size-md mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <ul class="list-unstyled font-size-ms pt-1">
                            <li class="mb-1"><span class="font-weight-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi, tempora</li>
                            <li class="mb-1"><span class="font-weight-medium">Cons:&nbsp;</span>Architecto beatae, quis autem</li>
                        </ul>
                        <div class="text-nowrap">
                            <button class="btn-like" type="button">34</button>
                            <button class="btn-dislike" type="button">1</button>
                        </div>
                    </div>
                    <!-- Review-->
                    <div class="product-review pb-4 mb-4 border-bottom">
                        <div class="d-flex mb-3">
                            <div class="media media-ie-fix align-items-center mr-4 pr-2"><img class="rounded-circle" width="50" src="/img/shop/reviews/03.jpg" alt="Daniel Adams"/>
                                <div class="media-body pl-3">
                                    <h6 class="font-size-sm mb-0">Daniel Adams</h6><span class="font-size-ms text-muted">May 8, 2019</span>
                                </div>
                            </div>
                            <div>
                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                                </div>
                                <div class="font-size-ms text-muted">75% of users found this review helpful</div>
                            </div>
                        </div>
                        <p class="font-size-md mb-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
                        <ul class="list-unstyled font-size-ms pt-1">
                            <li class="mb-1"><span class="font-weight-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi</li>
                            <li class="mb-1"><span class="font-weight-medium">Cons:&nbsp;</span>Architecto beatae,  quis autem, voluptatem sequ</li>
                        </ul>
                        <div class="text-nowrap">
                            <button class="btn-like" type="button">26</button>
                            <button class="btn-dislike" type="button">9</button>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-outline-accent" type="button"><i class="czi-reload mr-2"></i>Load more reviews</button>
                    </div>
                </div>
                <!-- Leave review form-->
                <div class="col-md-5 mt-2 pt-4 mt-md-0 pt-md-0">
                    <div class="bg-secondary py-grid-gutter px-grid-gutter rounded-lg">
                        <h3 class="h4 pb-2">Write a review</h3>
                        <form class="needs-validation" method="post" novalidate>
                            <div class="form-group">
                                <label for="review-name">Your name<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" required id="review-name">
                                <div class="invalid-feedback">Please enter your name!</div><small class="form-text text-muted">Will be displayed on the comment.</small>
                            </div>
                            <div class="form-group">
                                <label for="review-email">Your email<span class="text-danger">*</span></label>
                                <input class="form-control" type="email" required id="review-email">
                                <div class="invalid-feedback">Please provide valid email address!</div><small class="form-text text-muted">Authentication only - we won't spam you.</small>
                            </div>
                            <div class="form-group">
                                <label for="review-rating">Rating<span class="text-danger">*</span></label>
                                <select class="custom-select" required id="review-rating">
                                    <option value="">Choose rating</option>
                                    <option value="5">5 stars</option>
                                    <option value="4">4 stars</option>
                                    <option value="3">3 stars</option>
                                    <option value="2">2 stars</option>
                                    <option value="1">1 star</option>
                                </select>
                                <div class="invalid-feedback">Please choose rating!</div>
                            </div>
                            <div class="form-group">
                                <label for="review-text">Review<span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="6" required id="review-text"></textarea>
                                <div class="invalid-feedback">Please write a review!</div><small class="form-text text-muted">Your review must be at least 50 characters.</small>
                            </div>
                            <div class="form-group">
                                <label for="review-pros">Pros</label>
                                <textarea class="form-control" rows="2" placeholder="Separated by commas" id="review-pros"></textarea>
                            </div>
                            <div class="form-group mb-4">
                                <label for="review-cons">Cons</label>
                                <textarea class="form-control" rows="2" placeholder="Separated by commas" id="review-cons"></textarea>
                            </div>
                            <button class="btn btn-primary btn-shadow btn-block" type="submit">Submit a Review</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Comments tab-->
        <div class="tab-pane fade" id="comments" role="tabpanel">
            <div class="row">
                <div class="col-lg-8">
                    <!-- comment-->
                    <div class="media py-4 border-bottom"><img class="rounded-circle" width="50" src="/img/testimonials/04.jpg" alt="Laura Willson"/>
                        <div class="media-body pl-3">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="font-size-md mb-0">Laura Willson</h6><a class="nav-link-style font-size-sm font-weight-medium" href="#"><i class="czi-reply mr-2"></i>Reply</a>
                            </div>
                            <p class="font-size-md mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat cupidatat non proident, sunt in culpa qui.</p><span class="font-size-ms text-muted"><i class="czi-time align-middle mr-2"></i>Sep 7, 2019</span>
                            <!-- comment reply-->
                            <div class="media border-top pt-4 mt-4"><img class="rounded-circle" width="50" src="/img/testimonials/01.jpg" alt="Sara Palson"/>
                                <div class="media-body pl-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h6 class="font-size-md mb-0">Sara Palson</h6>
                                    </div>
                                    <p class="font-size-md mb-1">Egestas sed sed risus pretium quam vulputate dignissim. A diam sollicitudin tempor id eu nisl. Ut porttitor leo a diam. Bibendum at varius vel pharetra vel turpis nunc.</p><span class="font-size-ms text-muted"><i class="czi-time align-middle mr-2"></i>Sep 13, 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- comment-->
                    <div class="media py-4"><img class="rounded-circle" width="50" src="/img/testimonials/02.jpg" alt="Benjamin Miller"/>
                        <div class="media-body pl-3">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="font-size-md mb-0">Benjamin Miller</h6><a class="nav-link-style font-size-sm font-weight-medium" href="#"><i class="czi-reply mr-2"></i>Reply</a>
                            </div>
                            <p class="font-size-md mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat cupidatat non proident, sunt in culpa qui.</p><span class="font-size-ms text-muted"><i class="czi-time align-middle mr-2"></i>Aug 15, 2019</span>
                        </div>
                    </div>
                    <!-- Post comment form-->
                    <div class="card border-0 box-shadow my-2">
                        <div class="card-body">
                            <div class="media"><img class="rounded-circle border p-2" width="50" src="/img/marketplace/account/avatar-sm.png" alt="Createx Studio"/>
                                <form class="media-body needs-validation ml-3" novalidate>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="4" placeholder="Write comment..." required></textarea>
                                        <div class="invalid-feedback">Please write your comment.</div>
                                    </div>
                                    <button class="btn btn-primary btn-sm" type="submit">Post comment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Related products carousel-->
<section class="container mb-5 pb-lg-3">
    <div class="d-flex flex-wrap justify-content-between align-items-center border-bottom pb-4 mb-4">
        <h2 class="h3 mb-0 pt-2">Related mockups</h2>
        <div class="pt-2"><a class="btn btn-outline-accent btn-sm" href="marketplace-category.html">More mockups<i class="czi-arrow-right ml-1 mr-n1"></i></a></div>
    </div>
    <!-- Carousel-->
    <div class="cz-carousel">
        <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 16, &quot;controls&quot;: false, &quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2 },&quot;768&quot;:{&quot;items&quot;:3}, &quot;992&quot;:{&quot;items&quot;:4}}}">
            <!-- Product-->
            <div class="products text-center">
                @foreach ($mightAlsoLike as $product)
                    <div class="product">
                        <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ productImage($product->image) }}" alt="product"></a>
                        <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                        <div class="product-price">{{ $product->presentPrice() }}</div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!-- Toast: Added to Cart-->
<div class="toast-container toast-bottom-center">
    <div class="toast mb-3" id="cart-toast" data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header bg-success text-white"><i class="czi-check-circle mr-2"></i>
            <h6 class="font-size-sm text-white mb-0 mr-auto">Added to cart!</h6>
            <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="toast-body">This item has been added to your cart.</div>
    </div>
</div>
<!-- Footer-->
<footer class="bg-dark pt-5">
    <div class="container pt-2 pb-3">
        <div class="row">
            <div class="col-md-6 text-center text-md-left mb-4">
                <div class="text-nowrap mb-3"><a class="d-inline-block align-middle mt-n2 mr-2" href="#"><img class="d-block" width="117" src="/img/footer-logo-light.png" alt="Cartzilla"/></a><span class="d-inline-block align-middle h5 font-weight-light text-white mb-0">Marketplace</span></div>
                <p class="font-size-sm text-white opacity-70 pb-1">High quality items created by our global community.</p>
                <h6 class="d-inline-block pr-3 mr-3 border-right border-light"><span class="text-primary">65,478 </span><span class="font-weight-normal text-white">Products</span></h6>
                <h6 class="d-inline-block pr-3 mr-3 border-right border-light"><span class="text-primary">2,521 </span><span class="font-weight-normal text-white">Members</span></h6>
                <h6 class="d-inline-block mr-3"><span class="text-primary">897 </span><span class="font-weight-normal text-white">Vendors</span></h6>
                <div class="widget mt-4 text-md-nowrap text-center text-md-left"><a class="social-btn sb-light sb-twitter mr-2 mb-2" href="#"><i class="czi-twitter"></i></a><a class="social-btn sb-light sb-facebook mr-2 mb-2" href="#"><i class="czi-facebook"></i></a><a class="social-btn sb-light sb-dribbble mr-2 mb-2" href="#"><i class="czi-dribbble"></i></a><a class="social-btn sb-light sb-behance mr-2 mb-2" href="#"><i class="czi-behance"></i></a><a class="social-btn sb-light sb-pinterest mr-2 mb-2" href="#"><i class="czi-pinterest"></i></a></div>
            </div>
            <!-- Mobile dropdown menu (visible on screens below md)-->
            <div class="col-12 d-md-none text-center mb-4 pb-2">
                <div class="btn-group dropdown d-block mx-auto mb-3">
                    <button class="btn btn-outline-light border-light dropdown-toggle" type="button" data-toggle="dropdown">Categories</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Photos</a></li>
                        <li><a class="dropdown-item" href="#">Graphics</a></li>
                        <li><a class="dropdown-item" href="#">UI Design</a></li>
                        <li><a class="dropdown-item" href="#">Web Themes</a></li>
                        <li><a class="dropdown-item" href="#">Fonts</a></li>
                        <li><a class="dropdown-item" href="#">Add-Ons</a></li>
                    </ul>
                </div>
                <div class="btn-group dropdown d-block mx-auto">
                    <button class="btn btn-outline-light border-light dropdown-toggle" type="button" data-toggle="dropdown">For members</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Licenses</a></li>
                        <li><a class="dropdown-item" href="#">Return policy</a></li>
                        <li><a class="dropdown-item" href="#">Payment methods</a></li>
                        <li><a class="dropdown-item" href="#">Become a vendor</a></li>
                        <li><a class="dropdown-item" href="#">Become an affiliate</a></li>
                        <li><a class="dropdown-item" href="#">Marketplace benefits</a></li>
                    </ul>
                </div>
            </div>
            <!-- Desktop menu (visible on screens above md)-->
            <div class="col-md-3 d-none d-md-block text-center text-md-left mb-4">
                <div class="widget widget-links widget-light pb-2">
                    <h3 class="widget-title text-light">Categories</h3>
                    <ul class="widget-list">
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Photos</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Graphics</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">UI Design</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Web Themes</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Fonts</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Add-Ons</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 d-none d-md-block text-center text-md-left mb-4">
                <div class="widget widget-links widget-light pb-2">
                    <h3 class="widget-title text-light">For members</h3>
                    <ul class="widget-list">
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Licenses</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Return policy</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Payment methods</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Become a vendor</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Become an affiliate</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Marketplace benefits</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Second row-->
    <div class="pt-5 bg-darker">
        <div class="container">
            <div class="widget w-100 mb-4 pb-3 text-center mx-auto" style="max-width: 28rem;">
                <h3 class="widget-title text-light pb-1">Subscribe to newsletter</h3>
                <form class="validate" action="https://studio.us12.list-manage.com/subscribe/post-json?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126&amp;c=?" method="get" name="mc-embedded-subscribe-form" id="mc-embedded-subscribe-form">
                    <div class="input-group input-group-overlay flex-nowrap">
                        <div class="input-group-prepend-overlay"><span class="input-group-text text-muted font-size-base"><i class="czi-mail"></i></span></div>
                        <input class="form-control prepended-form-control" type="email" name="EMAIL" id="mce-EMAIL" value="" placeholder="Your email" required>
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" name="subscribe" id="mc-embedded-subscribe">Subscribe*</button>
                        </div>
                    </div>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                        <input type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                    </div><small class="form-text text-light opacity-50" id="mc-helper">*Receive early discount offers, updates and new products info.</small>
                    <div class="subscribe-status"></div>
                </form>
            </div>
            <hr class="hr-light pb-4 mb-3">
            <div class="d-md-flex justify-content-between">
                <div class="pb-4 font-size-xs text-light opacity-50 text-center text-md-left">© All rights reserved. Made by <a class="text-light" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></div>
                <div class="widget widget-links widget-light pb-4">
                    <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
                        <li class="widget-list-item ml-4"><a class="widget-list-link font-size-ms" href="#">Help Center</a></li>
                        <li class="widget-list-item ml-4"><a class="widget-list-link font-size-ms" href="#">Affiliates</a></li>
                        <li class="widget-list-item ml-4"><a class="widget-list-link font-size-ms" href="#">Support</a></li>
                        <li class="widget-list-item ml-4"><a class="widget-list-link font-size-ms" href="#">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Toolbar for handheld devices-->
<div class="cz-handheld-toolbar">
    <div class="d-table table-fixed w-100"><a class="d-table-cell cz-handheld-toolbar-item" href="account-wishlist.html"><span class="cz-handheld-toolbar-icon"><i class="czi-heart"></i></span><span class="cz-handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse" onclick="window.scrollTo(0, 0)"><span class="cz-handheld-toolbar-icon"><i class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="shop-cart.html"><span class="cz-handheld-toolbar-icon"><i class="czi-cart"></i><span class="badge badge-primary badge-pill ml-1">4</span></span><span class="cz-handheld-toolbar-label">$265.00</span></a>
    </div>
</div>
<!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i class="btn-scroll-top-icon czi-arrow-up">   </i></a>
<!-- JavaScript libraries, plugins and custom scripts-->
<script src="/js/vendor.min.js"></script>
<script src="/js/theme.min.js"></script>
</body>
</html>