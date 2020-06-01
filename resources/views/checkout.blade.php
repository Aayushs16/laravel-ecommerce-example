
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Snkr Haven | Checkout  ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️ ❤️
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
<!-- Page Title (Shop)-->
<div class="page-title-overlap bg-accent pt-4">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                    <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="czi-home"></i>Home</a></li>
                    <li class="breadcrumb-item text-nowrap"><a href="marketplace-category.html">Checkout</a>
                    </li>
                    <li class="breadcrumb-item text-nowrap active" aria-current="page">Checkout</li>
                </ol>
            </nav>
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
            <h1 class="h3 text-light mb-0">Checkout</h1>
        </div>
    </div>
</div>
<!-- Page Content-->
<div class="container mb-5 pb-3">
    <div class="bg-light box-shadow-lg rounded-lg overflow-hidden">
        <div class="row">
            <!-- Content-->
            <section class="col-lg-8 pt-2 pt-lg-4 pb-4 mb-3">
                <div class="pt-2 px-4 pr-lg-0 pl-xl-5">
                    <!-- Title-->
                    <h2 class="h6 border-bottom pb-3 mb-3">Billing details</h2>
                    <!-- Billing detail-->
                    <div class="row pb-4">
                        <div class="col-sm-6 form-group">
                            <label for="mc-fn">First name <span class='text-danger'>*</span></label>
                            <input class="form-control" type="text" value="Jonathan" id="mc-fn">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="mc-ln">Last name <span class='text-danger'>*</span></label>
                            <input class="form-control" type="text" value="Doe" id="mc-ln">
                        </div>
                        <div class="col-12 form-group">
                            <label for="mc-email">Email address <span class='text-danger'>*</span></label>
                            <input class="form-control" type="email" value="contact@createx.studio" id="mc-email">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="mc-company">Company</label>
                            <input class="form-control" type="text" value="Createx Studio" id="mc-company">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="mc-country">Country <span class='text-danger'>*</span></label>
                            <select class="custom-select" id="mc-country">
                                <option value>Select country</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Belgium">Belgium</option>
                                <option value="France">France</option>
                                <option value="Germany">Germany</option>
                                <option value="Madagascar" selected>Madagascar</option>
                                <option value="Spain">Spain</option>
                                <option value="UK">United Kingdom</option>
                                <option value="USA">USA</option>
                            </select>
                        </div>
                    </div>
                    <!-- Order preview on mobile (screens small than 991px)-->
                    <div class="widget mb-3 d-lg-none">
                        <h2 class="widget-title">Order summary</h2>
                        <div class="media align-items-center pb-2 border-bottom"><a class="d-block mr-2" href="marketplace-single.html"><img class="rounded-sm" width="64" src="img/marketplace/products/widget/01.jpg" alt="Product"/></a>
                            <div class="media-body pl-1">
                                <h6 class="widget-product-title"><a href="marketplace-single.html">UI Isometric Devices Pack</a></h6>
                                <div class="widget-product-meta"><span class="text-accent border-right pr-2 mr-2">$23.<small>99</small></span><span class="font-size-xs text-muted">Standard license</span></div>
                            </div>
                        </div>
                        <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2" href="marketplace-single.html"><img class="rounded-sm" width="64" src="img/marketplace/products/widget/02.jpg" alt="Product"/></a>
                            <div class="media-body pl-1">
                                <h6 class="widget-product-title"><a href="marketplace-single.html">Project Devices Showcase</a></h6>
                                <div class="widget-product-meta"><span class="text-accent border-right pr-2 mr-2">$18.<small>99</small></span><span class="font-size-xs text-muted">Standard license</span></div>
                            </div>
                        </div>
                        <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2" href="marketplace-single.html"><img class="rounded-sm" width="64" src="img/marketplace/products/widget/03.jpg" alt="Product"/></a>
                            <div class="media-body pl-1">
                                <h6 class="widget-product-title"><a href="marketplace-single.html">Gravity Devices UI Mockup</a></h6>
                                <div class="widget-product-meta"><span class="text-accent border-right pr-2 mr-2">$15.<small>99</small></span><span class="font-size-xs text-muted">Standard license</span></div>
                            </div>
                        </div>
                        <ul class="list-unstyled font-size-sm py-3">
                            <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Subtotal:</span><span class="text-right">$58.<small>97</small></span></li>
                            <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Taxes:</span><span class="text-right">$10.<small>45</small></span></li>
                            <li class="d-flex justify-content-between align-items-center font-size-base"><span class="mr-2">Total:</span><span class="text-right">$69.<small>42</small></span></li>
                        </ul>
                    </div>
                    <!-- Payment methods accordion-->
                    <div class="accordion mb-2" id="payment-method" role="tablist">
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h3 class="accordion-heading"><a href="#card" data-toggle="collapse"><i class="czi-card font-size-lg mr-2 mt-n1 align-middle"></i>Pay with Credit Card<span class="accordion-indicator"><i data-feather="chevron-up"></i></span></a></h3>
                            </div>
                            <div class="collapse show" id="card" data-parent="#payment-method" role="tabpanel">
                                <div class="card-body">
                                    <p class="font-size-sm">We accept following credit cards:&nbsp;&nbsp;<img class="d-inline-block align-middle" src="img/cards.png" style="width: 187px;" alt="Cerdit Cards"></p>
                                    <div class="card-wrapper"></div>
                                    <form class="interactive-credit-card row">
                                        <div class="form-group col-sm-6">
                                            <input class="form-control" type="text" name="number" placeholder="Card Number" required>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <input class="form-control" type="text" name="expiry" placeholder="MM/YY" required>
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <input class="form-control" type="text" name="cvc" placeholder="CVC" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <button class="btn btn-primary btn-block mt-0" type="submit">Place order</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h3 class="accordion-heading"><a class="collapsed" href="#paypal" data-toggle="collapse"><i class="czi-paypal mr-2 align-middle"></i>Pay with PayPal<span class="accordion-indicator"><i data-feather="chevron-up"></i></span></a></h3>
                            </div>
                            <div class="collapse" id="paypal" data-parent="#payment-method" role="tabpanel">
                                <div class="card-body font-size-sm">
                                    <p><span class='font-weight-medium'>PayPal</span> - the safer, easier way to pay</p>
                                    <button class="btn btn-primary" type="button">Checkout with PayPal</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h3 class="accordion-heading"><a class="collapsed" href="#points" data-toggle="collapse"><i class="czi-money-bag mr-2"></i>Pay with my account balance<span class="accordion-indicator"><i data-feather="chevron-up"></i></span></a></h3>
                            </div>
                            <div class="collapse" id="points" data-parent="#payment-method" role="tabpanel">
                                <div class="card-body">
                                    <p>You currently have<span class="font-weight-medium">&nbsp;$1,375.<small>00</small></span>&nbsp;on your account balance.</p>
                                    <button class="btn btn-primary mt-0" type="submit">Pay with account balance</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Sidebar-->
            <!-- Order preview on desktop (screens larger than 991px)-->
            <aside class="col-lg-4 d-none d-lg-block">
                <hr class="d-lg-none">
                <div class="cz-sidebar-static h-100 ml-auto border-left">
                    <div class="widget mb-3">
                        <h2 class="widget-title text-center">Order summary</h2>
                        @foreach (Cart::content() as $item)
                            <div class="media align-items-center pb-2 border-bottom"><a class="d-block mr-2" ><img class="rounded-sm" width="64" src="{{ productImage($item->model->image) }}" alt="Product"/></a>
                                <div class="media-body pl-1">
                                    <h6 class="widget-product-title">{{ $item->model->name }}</a></h6>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <ul class="list-unstyled font-size-sm pt-3 pb-2 border-bottom">
                        <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Subtotal:</span><span class="text-right">{{ presentPrice(Cart::subtotal()) }}</li>
                        <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Taxes:</span><span class="text-right">{{ presentPrice($newTax) }}</li>
                    </ul>
                    <h3 class="font-weight-normal text-center my-4">{{ presentPrice($newTotal) }}</h3>
                </div>
            </aside>
        </div>
    </div>
</div>
<!-- Footer-->
<footer class="pt-5 bg-darker">
    <div class="container">
        <div class="row pb-2">
            <div class="col-md-6 text-center text-md-left mb-4">
                <div class="text-nowrap mb-4"><a class="d-inline-block align-middle mt-n1 mr-3" href="#"><img class="d-block" width="117" src="img/logo-dark.png" alt="Snkr Haven"/></a>
                </div>
                <div class="widget widget-links widget-light">
                    <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
                        <li class="widget-list-item mr-4"><a class="widget-list-link" href="help.html">Support</a></li>
                        <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Privacy</a></li>
                        <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Terms of use</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="pb-4 font-size-xs text-light opacity-50 text-center text-md-left">© Snkr Haven 2020. All rights reserved.</div>
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
<script src="js/card.min.js"></script>
<script>
    new Card({
        form: document.querySelector('.interactive-credit-card'),
        container: '.card-wrapper'
    });
</script>
<script src="js/theme.min.js"></script>
</body>
</html>