<ul>
    @guest
    <li><a href="{{ route('register') }}">Registrieren</a></li>
    <li><a href="{{ route('login') }}">Anmelden</a></li>
    @else
    <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Abmelden</a>
    </li>
    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display:none;">{{ csrf_field() }}</form>
    @endguest
    <li><a href="{{ route('cart.index') }}">Korb
        @if (Cart::instance('default')->count() > 0)
        <span class="cart-count"><span>{{ Cart::instance('default')->count() }}</span></span>
        @endif
    </a></li>
    {{-- @foreach ($items as $menu_item)
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