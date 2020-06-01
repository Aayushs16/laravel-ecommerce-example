
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Snkr Haven | Affordable Resell
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
    <link rel="stylesheet" media="screen" href="css/vendor.min.css">
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" id="main-styles" href="css/theme.min.css">
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
@include('header')
<!-- Page Content-->
<!-- Hero section-->
<section class="bg-accent bg-position-center-top bg-no-repeat py-5" style="background-image: url(/img/home/marketplace-hero.jpg);">
    <div class="pb-lg-5 mb-lg-3">
        <div class="container py-lg-5 my-lg-5">
            <div class="row mb-4 mb-sm-5">
                <div class="col-lg-7 col-md-9 text-center text-sm-left">
                    <h1 class="text-Black line-height-base"><span class='font-weight-light'>Buy from Snkr Haven to </span>protect the streetwear community<span class='font-weight-light'> and </span>protect your pocket<span class='font-weight-light'>.</span></h1>
                </div>
            </div>
            <div class="row pb-lg-5 mb-4 mb-sm-5">
                <div class="col-lg-6 col-md-8">
                    <div class="input-group input-group-overlay input-group-lg">
                        <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                        <input class="form-control form-control-lg prepended-form-control rounded-right-0" type="text" placeholder="Start your search">
                        <div class="input-group-append">
                            <button class="btn btn-primary btn-lg dropdown-toggle font-size-base" type="button" data-toggle="dropdown">All categories</button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Photos</a><a class="dropdown-item" href="#">Graphics</a><a class="dropdown-item" href="#">UI Design</a><a class="dropdown-item" href="#">Web Themes</a><a class="dropdown-item" href="#">Add-Ons</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Featured products (Carousel)-->
<section class="container position-relative pt-3 pt-lg-0 pb-5 mt-lg-n10" style="z-index: 10;">
    <div class="card px-lg-2 border-0 box-shadow-lg">
        <div class="card-body px-4 pt-5 pb-4">
            <h2 class="h3 text-center">Discover featured products</h2>
            <p class="text-muted text-center">Every week we hand-pick some of the best items from our collection</p>
            <!-- Carousel-->
            <div class="cz-carousel pt-4">
                <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 15, &quot;controls&quot;: false, &quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}, &quot;992&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 30}}}">
                    @foreach ($products as $product)
                        <!-- Product-->
                        <div>
                            <div class="card product-card-alt">
                                <div class="product-thumb">
                                    <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="{{ route('shop.show', $product->slug) }}"><i class="czi-eye"></i></a>
                                        <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
                                    </div><a class="product-thumb-overlay" href="{{ route('shop.show', $product->slug) }}"></a><img src="{{ productImage($product->image) }}" alt="Product">
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                                    </div>
                                    <h3 class="product-title font-size-sm mb-2"><a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a></h3>
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">

                                        <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">{{ $product->presentPrice() }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Recent products grid-->
<section class="container pb-5 mb-lg-3">
    <!-- Heading-->
    <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
        <h2 class="h3 mb-0 pt-3 mr-2">The most recent releases</h2>
        <div class="pt-3">
            <select class="custom-select">
                <option>All categories</option>
                <option>Photos</option>
                <option>Graphics</option>
                <option>UI Design</option>
                <option>Web Themes</option>
                <option>Fonts</option>
                <option>Add-Ons</option>
            </select>
        </div>
    </div>
    <!-- Grid-->
    <div class="row pt-2 mx-n2">
        <!-- Product-->
        @foreach ($products as $product)
        <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
            <div class="card product-card-alt">
                <div class="product-thumb">
                    <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="{{ route('shop.show', $product->slug) }}"><i class="czi-eye"></i></a>
                        <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
                    </div><a class="product-thumb-overlay" href="{{ route('shop.show', $product->slug) }}"></a><img src="{{ productImage($product->image) }}" alt="Product">
                </div>
                <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                        </div>
                    </div>
                    <h3 class="product-title font-size-sm mb-2"><a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a></h3>
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">{{ $product->presentPrice() }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>





    <!-- More button-->
    <div class="text-center"><a class="btn btn-outline-accent" href="marketplace-category.html">View more products<i class="czi-arrow-right font-size-ms ml-1"></i></a></div>
</section>
<!-- Seller of the month-->

        <!-- More button-->

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
@include('footer')
</body>
</html>