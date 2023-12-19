@extends('client.layout.master')

@section('title', 'Cart')


@section('body')

<!-- Main Content - start -->
<main>
    <section class="container stylization maincont">

        <ul class="b-crumbs">
            <li>
                <a href="{{ route('index') }}">
                    Home
                </a>
            </li>
            <li>
                <span>Cart</span>
            </li>
        </ul>
        <h1 class="main-ttl"><span>Cart</span></h1>
        <!-- Cart Items - start -->

        @if (Cart::count() < 1)
            <div class="row">
                <div class="col-lg-12">
                    <h4>Your cart is empty.</h4>
                </div>
            </div>
        @else
            <form action="#">
                <div class="cart-items-wrap">
                    <table class="cart-items">
                        <thead>
                        <tr>
                            <td class="cart-image">Photo</td>
                            <td class="cart-ttl">Products</td>
                            <td class="cart-price">Price</td>
                            <td class="cart-quantity">Quantity</td>
                            <td class="cart-summ">Sum</td>
                            <td class="cart-del">&nbsp;</td>
                        </tr>
                        </thead>
                        <tbody>

                            @foreach ($cart['content'] as $product)
                                <tr>
                                    <td class="cart-image">
                                        <a href="{{ route('productDetail', $product->id) }}">
                                            @php
                                                $img_path = 'http://placehold.it/96x80';
                                                $img_alt = 'unknown-image';
                                                if (sizeof($product->options->images) > 0 && $product->options->images[0]->path != null && file_exists (public_path ('resources/img/product/' . $product->options->images[0]->path)))
                                                {
                                                    $img_path = 'resources/img/product/' . $product->options->images[0]->path;
                                                    $img_alt = $product->name;
                                                }
                                            @endphp
                                            <img src="{{ $img_path }}" alt="{{ $img_alt }}">
                                        </a>
                                    </td>
                                    <td class="cart-ttl">
                                        <a href="{{ route('productDetail', $product->id) }}">{{ $product->name }}</a>
                                        <p>Color: ..</p>
                                        <p>Size: ..</p>
                                    </td>
                                    <td class="cart-price">
                                        <b>${{ $product->price }}</b>
                                    </td>
                                    <td class="cart-quantity">
                                        <p class="cart-qnt">
                                            <input value="{{ $product->qty }}" type="text">
                                            <a href="#" class="cart-plus"><i class="fa fa-angle-up"></i></a>
                                            <a href="#" class="cart-minus"><i class="fa fa-angle-down"></i></a>
                                        </p>
                                    </td>
                                    <td class="cart-summ">
                                        <b>${{ $product->price * $product->qty }}</b>
                                        <p class="cart-forone">unit price <b>${{ $product->price }}</b></p>
                                    </td>
                                    <td class="cart-del">
                                        <a href="{{ route('removeFromCart', $product->rowId) }}" class="cart-remove"></a>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                <ul class="cart-total">
                    <li class="cart-summ">TOTAL: <b>${{ $cart['total'] }}</b></li>
                </ul>
                <div class="cart-submit">
                    <div class="cart-coupon">
                        <input placeholder="your coupon" type="text">
                        <a class="cart-coupon-btn" href="#"><img src="img/ok.png" alt="your coupon"></a>
                    </div>
                    <a href="{{ route('checkOut') }}" class="cart-submit-btn">Checkout</a>
                    <a href="{{ route('deleteCart') }}" class="cart-clear">Clear cart</a>
                </div>
            </form>
        @endif

        <!-- Cart Items - end -->

    </section>
</main>
<!-- Main Content - end -->

@endsection