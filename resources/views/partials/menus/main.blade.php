<ul class="dropdown-menu py-1">
    @foreach($items as $menu_item)
        <li>
            <a class="dropdown-item" href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>
                @if ($menu_item->title === 'Cart')
                    @if (Cart::instance('default')->count() > 0)
                        <span class="cart-count"><span>{{ Cart::instance('default')->count() }}</span></span>
                    @endif
                @endif
            </a>
        </li>
    @endforeach
</ul>
