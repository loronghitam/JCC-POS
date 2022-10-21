<div class="header-bottom-wrapper">
    <div class="logo-2 furniture-logo ptb-30">
        <a href="/">
            <img height="60" style="transform:scale(1.5);object-fit: cover;"
                src="{{ asset('frontend/assets/img/logo/logo.png') }}" alt="">
        </a>
    </div>
    <div class="menu-style-2 furniture-menu menu-hover">
        <nav>
            <ul>
                <li>
                    <a href="/">home</a>
                </li>
                <li>
                    <a href="">shop</a>
                </li>
                <li><a href="#">Categories</a>
                    <ul class="single-dropdown">
                        {{-- @foreach($categories_menu as $category_menu)
                        <li><a
                                href="{{ route('shop.index', $category_menu->slug) }}">{{ $category_menu->name }}</a>
                        </li>
                        @endforeach --}}
                    </ul>
                </li>
                <li>
                    <a href="#">contact</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="header-cart">
        {{-- <a class="icon-cart-furniture" href="{{ route('cart.index') }}"> --}}
            <i class="ti-shopping-cart"></i>
            {{-- <span class="shop-count-furniture green">{{ \Cart::getTotalQuantity() }}</span> --}}
        </a>
        {{-- @if (!\Cart::isEmpty()) --}}
        <ul class="cart-dropdown">
            {{-- @foreach (\Cart::getContent() as $item)
            @php
            $product = $item->associatedModel;
            $image = !empty($product->firstMedia) ? asset('storage/images/products/'.
            $product->firstMedia->file_name) : asset('frontend/assets/img/cart/3.jpg')
            @endphp
            <li class="single-product-cart">
                <div class="cart-img">
                    <a href="{{ route('product.show', $product->slug) }}"><img src="{{ $image }}"
                            alt="{{ $product->name }}" style="width:100px"></a>
                </div>
                <div class="cart-title">
                    <h5><a href="{{ route('product.show', $product->slug) }}">{{ $item->name }}</a></h5>
                    <span>{{ number_format($item->price) }} x {{ $item->quantity }}</span>
                </div>
                <div class="cart-delete">
                    <form id="deleteCart" action="{{ route('cart.destroy', $item->id) }}" method="POST"
                        class="d-none">
                        @csrf
                        @method('delete')
                    </form>
                    <a href=""
                        onclick="event.preventDefault();document.getElementById('deleteCart').submit();"
                        class="delete"><i class="ti-trash"></i></a>
                </div>
            </li>
            @endforeach --}}
            <li class="cart-space">
                <div class="cart-sub">
                    <h4>Subtotal</h4>
                </div>
                <div class="cart-price">
                    {{-- <h4>{{ number_format(\Cart::getSubTotal()) }}</h4> --}}
                </div>
            </li>
            <li class="cart-btn-wrapper">
                {{-- <a class="cart-btn btn-hover" href="{{ route('cart.index') }}">view cart</a>
                <a class="cart-btn btn-hover" href="{{ route('checkout.process') }}">checkout</a> --}}
            </li>
        </ul>
        {{-- @endif --}}
    </div>
</div>
<div class="row">
    <div class="mobile-menu-area d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
        <div class="mobile-menu">
            <nav id="mobile-menu-active">
                <ul class="menu-overflow">
                    <li>
                        <a href="#">HOME</a>
                    </li>
                    <li>
                        {{-- <a href="{{ route('shop.index') }}">shop</a> --}}
                    </li>
                    <li><a href="#">categories</a>
                        <ul>
                            {{-- @foreach($categories_menu as $category_menu)
                            <li><a
                                    href="{{ route('shop.index', $category_menu->slug) }}">{{ $category_menu->name }}</a>
                            </li>
                            @endforeach --}}
                        </ul>
                    </li>
                    <li><a href="#"> Contact </a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
