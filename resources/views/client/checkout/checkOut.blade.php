@extends('client.layout.master')

@section('title', 'Check out')


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
                <span>Check out</span>
            </li>
        </ul>
        <h1 class="main-ttl"><span>Check out</span></h1>
        <div class="auth-wrap">
            <div class="auth-col">
                <h2>Billing Details</h2>
                <form method="post" action="{{ route('addOrder') }}" id="checkout_form">
                    @csrf
                    <p>
                        <label for="first_name">First Name </label><input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}">
                    </p>
                    <p>
                        <label for="last_name">Last Name </label><input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}">
                    </p>
                    <p>
                        <label for="company_name">Company </label><input type="text" name="company_name" id="company_name" value="{{ old('company_name') }}">
                    </p>
                    <p>
                        <label for="country">Country </label><input type="text" name="country" id="country" value="{{ old('country') }}">
                    </p>
                    <p>
                        <label for="street_address">Address </label><input type="text" name="street_address" id="street_address" value="{{ old('street_address') }}">
                    </p>
                    <p>
                        <label for="postcode_zip">ZIP </label><input type="text" name="postcode_zip" id="postcode_zip" value="{{ old('postcode_zip') }}">
                    </p>
                    <p>
                        <label for="town_city">Town/City </label><input type="text" name="town_city" id="town_city" value="{{ old('town_city') }}">
                    </p>
                    <p>
                        <label for="email">Email </label><input type="email" name="email" id="email" value="{{ old('email') }}">
                    </p>
                    <p>
                        <label for="phone_number">Phone </label><input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number') }}">
                    </p>
                    <p>
                        <label for="">Payment method </label>
                        <label for="paypal">Paypal</label>
                        <input type="radio" id="paypal" value="2" name="payment_method">
                        <label for="cod">COD</label>
                        <input type="radio" id="cod" value="1" name="payment_method" checked>
                    </p>
                    {{-- <p class="auth-submit">
                        <input type="submit" value="Login">
                        <input type="checkbox" id="rememberme" value="forever">
                        <label for="rememberme">Remember me</label>
                    </p>
                    <p class="auth-lost_password">
                        <a href="#">Lost your password?</a>
                    </p> --}}
                </form>
            </div>
            <div class="auth-col">
                <h2>Your Order</h2>
                <div class="border-2">
                    <table class="table m-3">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product</th>
                            <th scope="col">Price x Quantity</th>
                            <th scope="col">Sub Total ($)</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $key = 0;
                            @endphp
                            @foreach ($cart['content'] as $i => $product)
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td><a href="{{ route('productDetail', $product->id) }}">{{ $product->name }}</a></td>
                                    <td>{{ $product->price }}&ensp;x&ensp;{{ $product->qty }}</td>
                                    <td>{{ $product->price * $product->qty }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                          <tr>
                            <th scope="col" colspan="3">Total ($)</th>
                            <th scope="col">{{ $cart['total'] }}</th>
                          </tr>
                        </tfoot>
                      </table>
                      
                    @if (Session::has('payment_method_warning'))
                        <div class="alert alert-warning">{{ Session::get('payment_method_warning') }}</div>
                        @php
                            Session::pull('payment_method_warning');
                        @endphp
                    @endif

                      <p class="auth-submit">
                          <input type="submit" value="Place order" form="checkout_form">
                      </p>
                </div>
            </div>
        </div>



    </section>
</main>
<!-- Main Content - end -->


@endsection