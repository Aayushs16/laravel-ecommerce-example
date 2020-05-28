<div class="navbar-tool ml-4">
    <ul class="navbar-nav mega-nav pr-lg-2 mr-lg-2">
        @guest
            <li class="nav-item pr-lg-2 mr-lg-2"><a href="{{ route('register') }}">Sign Up</a></li>
            <li class="nav-item pr-lg-2 mr-lg-2"><a href="{{ route('login') }}">Login</a></li>
        @else
            <li class="nav-item pr-lg-2 mr-lg-2">
                <a href="{{ route('users.edit') }}">My Account</a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @endguest

            {{-- <li><a href="{{ route('cart.index') }}">Cart
             @if (Cart::instance('default')->count() > 0)
             <span class="cart-count"><span>{{ Cart::instance('default')->count() }}</span></span>
             @endif
             </a></li>
              @foreach($items as $menu_item)
                 <li>
                     <a href="{{ $menu_item->link() }}">
                         {{ $menu_item->title }}
                         @if ($menu_item->title === 'Cart')
                             @if (Cart::instance('default')->count() > 0)
                             <span class="cart-count"><span>{{ Cart::instance('default')->count() }}</span></span>
                             @endif
                         @endif
                     </a>
                 </li>
         @endforeach --}}
    </ul>
    <a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="marketplace-cart.html">
        @if (Cart::instance('default')->count() > 0)
            <span class="navbar-tool-label">
                        <span class="cart-count"><span>{{ Cart::instance('default')->count() }}</span></span>
                    </span>
        @endif
        <i class="navbar-tool-icon czi-cart"></i>
    </a>
</div>