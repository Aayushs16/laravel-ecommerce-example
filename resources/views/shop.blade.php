
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cartzilla | Marketplace category
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
<header class="bg-light box-shadow-sm navbar-sticky">
    <div class="navbar navbar-expand-lg navbar-light">
        <div class="container"><a class="navbar-brand d-none d-sm-block mr-4 order-lg-1" href="index.html" style="min-width: 7rem;"><img width="142" src="img/logo-dark.png" alt="Cartzilla"/></a><a class="navbar-brand d-sm-none mr-2 order-lg-1" href="index.html" style="min-width: 4.625rem;"><img width="74" src="img/logo-icon.png" alt="Cartzilla"/></a>
            <!-- Toolbar-->
            <div class="navbar-toolbar d-flex align-items-center order-lg-3">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool d-none d-lg-flex" href="#searchBox" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="searchBox"><span class="navbar-tool-tooltip">Search</span>
                    <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-search"></i></div></a><a class="navbar-tool d-none d-lg-flex" href="dashboard-favorites.html"><span class="navbar-tool-tooltip">Favorites</span>
                    <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-heart"></i></div></a>
                <div class="navbar-tool dropdown ml-2"><a class="navbar-tool-icon-box border dropdown-toggle" href="dashboard-sales.html"><img width="32" src="img/marketplace/account/avatar-sm.png" alt="Createx Studio"/></a><a class="navbar-tool-text ml-n1" href="dashboard-sales.html"><small>Createx Std.</small>$1,375.00</a>
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
<!-- Page Title (Shop Alt)-->
<!-- used for shop templates with filters on top-->
<div class="bg-accent pt-4 pb-5">
    <div class="container pt-2 pb-3 pt-lg-3 pb-lg-4">
        <div class="d-lg-flex justify-content-between pb-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="czi-home"></i>Home</a></li>
                        <li class="breadcrumb-item text-nowrap"><a href="home-marketplace.html">Market</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">Inside category</li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
                <h1 class="h3 text-light mb-0">Marketplace category</h1>
            </div>
        </div>
    </div>
</div>
<!-- Page Content-->
<div class="container pb-5 mb-2 mb-md-4">
    <!-- Toolbar-->
    <div class="bg-light box-shadow-lg rounded-lg mt-n5 mb-4">
        <div class="d-flex align-items-center pl-2">
            <!-- Search-->
            <div class="input-group-overlay">
                <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                <input class="form-control prepended-form-control border-0 box-shadow-0" type="text" placeholder="Search in this category...">
            </div>
            <!-- Sort-->
            <div class="d-flex align-items-center">
                <div class="dropdown py-4 border-left"><a class="nav-link-style font-size-md font-weight-medium dropdown-toggle p-4" href="#" data-toggle="dropdown"><span class="d-inline-block py-1"><i class="czi-thumb-up align-middle opacity-60 mt-n1 mr-2"></i>Popular</span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a class="dropdown-item" href="#"><i class="czi-flag mr-2 opacity-60"></i>Newest</a></li>
                        <li><a class="dropdown-item" href="#"><i class="czi-rocket mr-2 opacity-60"></i>Bestsellers</a></li>
                        <li><a class="dropdown-item" href="#"><i class="czi-loading mr-2 opacity-60"></i>Updated</a></li>
                        <li><a class="dropdown-item" href="#"><i class="czi-arrow-down mr-2 opacity-60"></i>Low Price</a></li>
                        <li><a class="dropdown-item" href="#"><i class="czi-arrow-up mr-2 opacity-60"></i>High Price</a></li>
                    </ul>
                </div>
            </div>
            <!-- Pagination-->
            <div class="d-none d-md-flex align-items-center border-left pl-4"><span class="font-size-md text-nowrap mr-4">Pages&nbsp; 1 / 5</span><a class="nav-link-style p-4 border-left" href="#"><span class="d-inline-block py-1"><i class="czi-arrow-left"></i></span></a><a class="nav-link-style p-4 border-left" href="#"><span class="d-inline-block py-1"><i class="czi-arrow-right"></i></span></a></div>
        </div>
    </div>
    <!-- Products grid-->
    <div class="row pt-3 mx-n2">
        <!-- Product-->
        <div class="products text-center product-thumb">
            @forelse ($products as $product)
                <div class="product">
                    <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ productImage($product->image) }}" alt="product"></a>
                    <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                    <div class="product-price">{{ $product->presentPrice() }}</div>
                </div>
            @empty
                <div style="text-align: left">No items found</div>
            @endforelse
        </div> <!-- end products -->
    </div>
    <hr class="my-3">
    <!-- Pagination-->
    <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#"><i class="czi-arrow-left mr-2"></i>Prev</a></li>
        </ul>
        <ul class="pagination">
            <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
            <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="sr-only">(current)</span></span></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">5</a></li>
        </ul>
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#" aria-label="Next">Next<i class="czi-arrow-right ml-2"></i></a></li>
        </ul>
    </nav>
</div>
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
                <div class="text-nowrap mb-3"><a class="d-inline-block align-middle mt-n2 mr-2" href="#"><img class="d-block" width="117" src="img/footer-logo-light.png" alt="Cartzilla"/></a><span class="d-inline-block align-middle h5 font-weight-light text-white mb-0">Marketplace</span></div>
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
<script src="js/vendor.min.js"></script>
<script src="js/theme.min.js"></script>
</body>
</html>