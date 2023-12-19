@extends('client.layout.master')

@section('title', 'Product detail')


@section('body')

<!-- Main Content - start -->
<main>
	<section class="container">


		<ul class="b-crumbs">
			<li>
				<a href="./">
					Home
				</a>
			</li>
			<li>
				<a href="#">
					Category
				</a>
			</li>
			<li>
				<a href="#">
					{{ $product->productCategory->name }}
				</a>
			</li>
			<li>
				<span>{{ $product->name }}</span>
			</li>
		</ul>
		<h1 class="main-ttl"><span>{{ $product->name }}</span></h1>
		<!-- Single Product - start -->
		<div class="prod-wrap">

			<!-- Product Images -->
			<div class="prod-slider-wrap">
				<div class="prod-slider">
					<ul class="prod-slider-car">
						@foreach ($product->productImages as $image)
							@php
								$img_path = 'http://placehold.it/500x642';
								$img_alt = 'unknown-image';
								if ($image->path != null && file_exists (public_path ('resources/img/product/' . $image->path)))
								{
									$img_path = 'resources/img/product/' . $image->path;
									$img_alt = $product->name;
								}
							@endphp
							<li>
								<a data-fancybox-group="product" class="fancy-img" href="#">
									<img src="{{ $img_path }}" alt="{{ $img_alt }}">
								</a>
							</li>
						@endforeach
					</ul>
				</div>
				<div class="prod-thumbs">
					<ul class="prod-thumbs-car">
						@foreach ($product->productImages as $i => $image)
							@php
								$img_path = 'http://placehold.it/500x642';
								$img_alt = 'unknown-image';
								if ($image->path != null && file_exists (public_path ('resources/img/product/' . $image->path)))
								{
									$img_path = 'resources/img/product/' . $image->path;
									$img_alt = $product->name;
								}
							@endphp
							<li>
								<a data-slide-index="{{ $i }}" href="#">
									<img src="{{ $img_path }}" alt="{{ $img_alt }}">
								</a>
							</li>
						@endforeach
					</ul>
				</div>
			</div>

			<!-- Product Description/Info -->
			<div class="prod-cont">
				<div class="prod-cont-txt">
					{!! ($product->description != null) ? $product->description : '<i>(no description!)</i>' !!}
				</div>
				<p class="prod-actions">
					<a href="#" class="prod-favorites"><i class="fa fa-heart"></i> Wishlist</a>
					{{-- <a href="#" class="prod-compare"><i class="fa fa-bar-chart"></i> Compare</a> --}}
				</p>
				<div class="prod-skuwrap">
					<p class="prod-skuttl">Color</p>
					<div>
						@foreach (array_unique (array_column ($product->productDetails->toArray(), 'color')) as $i => $color)
							<input type="radio" name="color" id="pr-color-{{ $i }}" value="{{ $color }}">
							<label for="pr-color-{{ $i }}" class="color-label"><span class="{{ $color }}"></span></label>
						@endforeach
						{{-- <li>
							<img src="resources/img/color/red.jpg" alt="">
						</li> --}}
					</div>
					<br>
					<p class="prod-skuttl">CLOTHING SIZES</p>
					<div class="offer-props-select" id="offer-props-select">
						<p>{{ $product->productDetails[0]->size ?? '...' }}</p>
						<ul>
							@foreach (array_unique (array_column ($product->productDetails->toArray(), 'size')) as $i => $size)
								<li>
									<input type="radio" name="size" value="{{ $size }}" id="pr-size-{{ $i }}" {{ ($i == 0) ? 'checked' : '' }}>
									<label for="pr-size-{{ $i }}">{{ $size }}</label>
								</li>
							@endforeach
						</ul>
						
						{{-- <ul>
							<li><a href="#">XS</a></li>
							<li><a href="#">S</a></li>
							<li><a href="#">M</a></li>
							<li class="active"><a href="#">XL</a></li>
							<li><a href="#">L</a></li>
							<li><a href="#">4XL</a></li>
							<li><a href="#">XXL</a></li>
						</ul> --}}
					</div>
				</div>
				<div class="prod-info">
					<p class="prod-price">
						@if ($product->discount != null)
							@php
								$discount = (($product->price - $product->discount) * 100) / $product->price
							@endphp
							<b class="item_current_price">${{ $product->discount }}</b>
							<br>
							<small><s>{{ $product->price }}</s> (-{{ round($discount, 0) }}%)</small>
						@else
							<b class="item_current_price">${{ $product->price }}</b>
						@endif
					</p>
					<p class="prod-qnt">
						<input value="1" type="text">
						<a href="#" class="prod-plus"><i class="fa fa-angle-up"></i></a>
						<a href="#" class="prod-minus"><i class="fa fa-angle-down"></i></a>
					</p>
					<p class="prod-addwrap">
						<a href="{{ route('addToCart', $product->id) }}" class="prod-add" rel="nofollow">Add to cart</a>
					</p>
				</div>
				<ul class="prod-i-props">
					<li>
						<b>Tag</b>&ensp;{{ $product->tag ?? '...' }}
					</li>
					<li>
						<b>SKU</b>&ensp;{{ $product->sku ?? '...' }}
					</li>
					<li>
						<b>Material</b>&ensp;...
					</li>
					<li>
						<b>Colors</b>&ensp;{{ count( array_unique (array_column ($product->productDetails->toArray(), 'color'))) }}
					</li>
					<li>
						<b>Sizes</b>&ensp;{{ count( array_unique (array_column ($product->productDetails->toArray(), 'size'))) }}
					</li>
					<li>
						<b>Weight</b>&ensp;{{ $product->weight ?? '... ' }}kg
					</li>
					<li>
						<b>Availability</b>&ensp;{{ $product->quantity ?? '...' }} in stock
					</li>
					<li><a href="#" class="prod-showprops">All Features</a></li>
				</ul>
			</div>

			<!-- Product Tabs -->
			<div class="prod-tabs-wrap">
				<ul class="prod-tabs">
					<li><a data-prodtab-num="1" class="active" href="#" data-prodtab="#prod-tab-1">Description</a></li>
					<li><a data-prodtab-num="2" id="prod-props" href="#" data-prodtab="#prod-tab-2">Features</a></li>
					<li><a data-prodtab-num="3" href="#" data-prodtab="#prod-tab-3">Video</a></li>
					{{-- <li><a data-prodtab-num="4" href="#" data-prodtab="#prod-tab-4">Articles (6)</a></li> --}}
					<li><a data-prodtab-num="5" href="#" data-prodtab="#prod-tab-5">Comments ({{ count($product->productComments) }})</a></li>
				</ul>
				<div class="prod-tab-cont">

					<p data-prodtab-num="1" class="prod-tab-mob active" data-prodtab="#prod-tab-1">Description</p>
					<div class="prod-tab stylization" id="prod-tab-1">
						{!! ($product->description != null) ? $product->description : '<i>(no description!)</i>' !!}
					</div>
					<p data-prodtab-num="2" class="prod-tab-mob" data-prodtab="#prod-tab-2">Features</p>
					<div class="prod-tab prod-props" id="prod-tab-2">
						<table>
							<tbody>
							<tr>
								<td>Tag</td>
								<td>{{ $product->tag ?? '...' }}</td>
							</tr>
							<tr>
								<td>SKU</td>
								<td>{{ $product->sku ?? '...' }}</td>
							</tr>
							<tr>
								<td>Material</td>
								<td>...</td>
							</tr>
							<tr>
								<td>Pattern Type</td>
								<td>...</td>
							</tr>
							<tr>
								<td>Wash</td>
								<td>Colored</td>
							</tr>
							<tr>
								<td>Style</td>
								<td>...</td>
							</tr>
							<tr>
								<td>Colors</td>
								<td>
									@if (count( array_unique (array_column ($product->productDetails->toArray(), 'color'))) == null)
										0
									@endif
									@foreach (array_unique (array_column ($product->productDetails->toArray(), 'color')) as $color)
										<label class="color-label" style="pointer-events: none;"><span class="{{ $color }}"></span></label>
									@endforeach
								</td>
							</tr>
							<tr>
								<td>Sizes</td>
								<td>
									@if (count( array_unique (array_column ($product->productDetails->toArray(), 'size'))) == null)
										...
									@endif
									@foreach (array_unique (array_column ($product->productDetails->toArray(), 'size')) as $i => $size)
										{{ $size }}{{ ($i + 1 < count (array_keys (array_unique (array_column ($product->productDetails->toArray(), 'size'))))) ? ',' : '' }}
									@endforeach
								</td>
							</tr>
							<tr>
								<td>Gender</td>
								<td>...</td>
							</tr>
							<tr>
								<td>Rain Cover</td>
								<td>...</td>
							</tr>
							<tr>
								<td>Exterior</td>
								<td>...</td>
							</tr>
							<tr>
								<td>Closure Type</td>
								<td>...</td>
							</tr>
							<tr>
								<td>Weight</td>
								<td>{{ $product->weight ?? '... ' }}kg</td>
							</tr>
							<tr>
								<td>Availability</td>
								<td>{{ $product->quantity ?? '...' }} in stock</td>
							</tr>
							</tbody>
						</table>
					</div>
					<p data-prodtab-num="3" class="prod-tab-mob" data-prodtab="#prod-tab-3">Video</p>
					<div class="prod-tab prod-tab-video" id="prod-tab-3">
						{{-- <iframe width="853" height="480" src="https://www.youtube.com/embed/kaOVHSkDoPY?rel=0&amp;showinfo=0" allowfullscreen></iframe> --}}
						<p><i>(no video to preview!)</i></p>
					</div>
					<p data-prodtab-num="5" class="prod-tab-mob" data-prodtab="#prod-tab-5">Comments ({{ count($product->productComments) }})</p>
					<div class="prod-tab" id="prod-tab-5">
						<ul class="reviews-list">
							@foreach ($product->productComments as $comment)
								<li class="reviews-i existimg">
									<div class="reviews-i-img">
										@php
											$img_path = '_unknown-user.jpg';
											$img_alt = 'unknown-image';
											if ($comment->user_id != null && $comment->user->profile_photo_path != null && file_exists (public_path ('resources/img/user/' . $comment->user->profile_photo_path)))
											{
												$img_path = $comment->user->profile_photo_path;
												$img_alt = $comment->name;
											}
										@endphp
										<img src="resources/img/user/{{ $img_path }}" alt="{{ $img_alt }}">
										<div class="reviews-i-rating">
											@for ($i = 1; $i <= 5; $i++)
												@php
													$star = ($i <= $comment->rating) ? 'fa fa-star' : 'fa fa-star-o';
												@endphp
												<i class="{{ $star }}"></i>
											@endfor
										</div>
										<time datetime="{{ $comment->created_at }}" class="reviews-i-date">{{ $comment->created_at->isoFormat('D MMM Y') }}</time>
									</div>
									<div class="reviews-i-cont">
										<p>{{ $comment->messages }}</p>
										<span class="reviews-i-margin"></span>
										<h3 class="reviews-i-ttl">{{ $comment->name }}</h3>
										{{-- <p class="reviews-i-showanswer"><span data-open="Show answer" data-close="Hide answer">Show answer</span> <i class="fa fa-angle-down"></i></p> --}}
									</div>
									{{-- <div class="reviews-i-answer">
										<p>Thanks for your feedback!<br>
											Nostrum voluptate autem, eaque mollitia sed rem cum amet qui repudiandae libero quaerat veniam accusantium architecto minima impedit. Magni illo illum iure tempora vero explicabo, esse dolores rem at dolorum doloremque iusto laboriosam repellendus. <br>Numquam eius voluptatum sint modi nihil exercitationem dolorum asperiores maiores provident repellat magnam vitae, consequatur omnis expedita, accusantium voluptas odit id.</p>
										<span class="reviews-i-margin"></span>
									</div> --}}
								</li>
							@endforeach
						</ul>
						<div class="prod-comment-form">
							<h3>Add your review</h3>
							<form method="POST" action="">
								@csrf
								<input type="hidden" name="product_id" value="{{ $product->id }}">
								<input type="hidden" name="user_id" value="{{ Session()->get('loginId') ?? null }}">
								<input type="text" placeholder="Name" name="name">
								<input type="text" placeholder="E-mail" name="email">
								<textarea placeholder="Your review" name="messages"></textarea>
								<div class="prod-comment-submit">
									<p>
										<span class="star-cb-group">
											<input type="radio" id="rating-5" name="rating" value="5"><label for="rating-5">5</label>
											<input type="radio" id="rating-4" name="rating" value="4"><label for="rating-4">4</label>
											<input type="radio" id="rating-3" name="rating" value="3"><label for="rating-3">3</label>
											<input type="radio" id="rating-2" name="rating" value="2"><label for="rating-2">2</label>
											<input type="radio" id="rating-1" name="rating" value="1"><label for="rating-1">1</label>
											<input type="radio" id="rating-0" name="rating" value="0" class="star-cb-clear" checked="checked"><label for="rating-0">0</label>
										</span>
									</p>
									<input type="submit" value="Submit">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- Single Product - end -->

		<!-- Related Products - start -->
		<div class="prod-related">
			<h2><span>Related products</span></h2>
			<div class="prod-related-car" id="prod-related-car">
				<ul class="slides">
					<li class="prod-rel-wrap">
						@foreach ($related_products as $i => $r_product)
							<div class="prod-rel">
								<a href="./product/detail/{{ $r_product->id }}" class="prod-rel-img">
									@php
										$img_path = 'http://placehold.it/300x311';
										$img_alt = 'unknown-image';
										if ($r_product->productImages[0]->path != null && file_exists (public_path ('resources/img/product/' . $r_product->productImages[0]->path)))
										{
											$img_path = 'resources/img/product/' . $r_product->productImages[0]->path;
											$img_alt = $r_product->name;
										}
									@endphp
									<img src="{{ $img_path }}" alt="{{ $img_alt }}">
								</a>
								<div class="prod-rel-cont">
									<h3><a href="./product/detail/{{ $r_product->id }}">{{ $r_product->name }}</a></h3>
									<p class="prod-rel-price">
										@if ($r_product->discount != null)
											<b>${{ $r_product->discount }}</b>&ensp;<small><s>{{ $r_product->price }}</s></small>
										@else
											<b>${{ $r_product->price }}</b>
										@endif
									</p>
									<div class="prod-rel-actions">
										<a title="Wishlist" href="#" class="prod-rel-favorites"><i class="fa fa-heart"></i></a>
										{{-- <a title="Compare" href="#" class="prod-rel-compare"><i class="fa fa-bar-chart"></i></a> --}}
										<p class="prod-i-addwrap">
											<a title="Add to cart" href="{{ route('addToCart', $r_product->id) }}" class="prod-i-add"><i class="fa fa-shopping-cart"></i></a>
										</p>
									</div>
								</div>
							</div>
						@endforeach
					</li>
				</ul>
			</div>
		</div>
		<!-- Related Products - end -->

	</section>
</main>
<!-- Main Content - end -->

@endsection