<header class="bg-darker box-shadow-sm navbar-sticky">
    <div class="navbar navbar-expand-lg navbar-light">
        <div class="container"><a class="navbar-brand d-none d-sm-block mr-4 order-lg-1" href="index.html" style="min-width: 7rem;"><img width="142" src="/img/logo-dark.png" alt="Cartzilla"/></a><a class="navbar-brand d-sm-none mr-2 order-lg-1" href="index.html" style="min-width: 4.625rem;"><img width="74" src="img/logo-icon.png" alt="Cartzilla"/></a>
            <!-- Toolbar-->
            <div class="navbar-toolbar d-flex align-items-center order-lg-3">
                @include('partials.menus.main-right')
            </div>
            <div class="collapse navbar-collapse mr-auto order-lg-2" id="navbarCollapse">
                <!-- Search-->
                <div class="input-group-overlay d-lg-none my-3">
                    <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                    <input class="form-control prepended-form-control" type="text" placeholder="Search marketplace">
                </div>
                <!-- Categories dropdown-->
                <ul class="navbar-nav mega-nav pr-lg-2 mr-lg-2">
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle pl-0" href="#" data-toggle="dropdown" style="color:#fff;"><i class="czi-menu align-middle mt-n1 mr-2" aria-haspopup="true" aria-expanded="false" style="color:#fff;"></i>Navigation</a>
                        {{ menu('main', 'partials.menus.main') }}
                    </li>
                </ul>
                <!-- Primary menu-->
                <ul class="navbar-nav">
                </ul>
            </div>
        </div>
    </div>
    <!-- Search collapse-->

</header>