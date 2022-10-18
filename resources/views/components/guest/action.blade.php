<div class="furniture-login">
    <ul>
        @guest
        <li>Get Access: <a href="#">Login</a></li>
        <li><a href="#">Register</a></li>
        @else
        <li>Hello: <a href="#">{{ auth()->user()->username }}</a></li>
        <a href="#" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @endguest
    </ul>
</div>
<div class="furniture-search">
    <form>
        <input placeholder="I am Searching for . . ." type="text" name="q" autocomplete="off"
            id="search">
        <button disabled>
            <i class="ti-search"></i>
        </button>
    </form>
</div>
<div class="furniture-wishlist">
    <ul>
        {{-- <li>
            <a href="{{ route('favorite.index') }}"><i class="ti-heart"></i> Favorites</a>
        </li>
        @auth
        <li>
            <a href="{{ route('orders.index') }}"><i class="ti-money"></i> Orders</a>
        </li>
        @endauth --}}
    </ul>
</div>
