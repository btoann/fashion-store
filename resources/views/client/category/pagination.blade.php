
<div class="prod-items section-items">

    @foreach ($products['this_category'] as $product)
        <div class="prod-i">
            <div class="prod-i-top">
                @php
                    $img_path = 'http://placehold.it/300x311';
                    $img_alt = 'unknown-image';
                    if ($product->productImages[0]->path != null && file_exists (public_path ('resources/img/product/' . $product->productImages[0]->path)))
                    {
                        $img_path = 'resources/img/product/' . $product->productImages[0]->path;
                        $img_alt = $product->name;
                    }
                @endphp
                <a href="./product/detail/{{ $product->id }}" class="prod-i-img"><!-- NO SPACE --><img src="{{ $img_path }}" alt="{{ $img_alt }}"><!-- NO SPACE --></a>
                <p class="prod-i-info">
                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                    <a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                </p>
                <a href="{{ route('addToCart', $product->id) }}" class="prod-i-buy">Add to cart</a>
                @if ($product->discount != null)
                @php
                    $discount = (($product->price - $product->discount) * 100) / $product->price
                @endphp
                    <div class="prod-sticker">
                        <p class="prod-sticker-3">-{{ round($discount, 0) }}%</p>
                        {{-- <p class="prod-sticker-4 countdown" data-date="29 Jan 2017, 14:30:00"></p> --}}
                    </div>
                @endif
                <p class="prod-i-properties-label"><i class="fa fa-info"></i></p>
                <div class="prod-i-properties">
                    <dl>
                        <dt>Tag</dt>&ensp;<dd>{{ $product->tag ?? '...' }}<br></dd>
                        <dt>Material</dt>&ensp;<dd>...<br></dd>
                        <dt>Colors</dt>&ensp;<dd>{{ count( array_unique (array_column ($product->productDetails->toArray(), 'color'))) }}<br></dd>
                        <dt>Sizes</dt>&ensp;
                        <dd>
                            @if (count( array_unique (array_column ($product->productDetails->toArray(), 'size'))) == null)
                                ...
                            @endif
                            @foreach (array_unique (array_column ($product->productDetails->toArray(), 'size')) as $i => $size)
                                {{ $size }}{{ ($i + 1 < count (array_keys (array_unique (array_column ($product->productDetails->toArray(), 'size'))))) ? ',' : '' }}
                            @endforeach
                            <br>
                        </dd>
                        <dt>Gender</dt>&ensp;<dd>...<br></dd>
                        <dt>Weight</dt>&ensp;<dd>{{ $product->weight ?? '... ' }}kg<br></dd>
                        <dt>Availability</dt>&ensp;<dd>{{ $product->quantity ?? '...' }}<br></dd>
                    </dl>
                </div>
            </div>
            <h3>
                <a href="./product/detail/{{ $product->id }}">{{ $product->name }}</a>
            </h3>
            <p class="prod-i-price">
                <b>${{ $product->discount ?? $product->price }}</b>
            </p>
        </div>
    @endforeach

</div>
