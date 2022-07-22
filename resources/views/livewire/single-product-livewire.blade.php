<div>

	<section class="bg-white py-10">
		<div class="container max-w-screen-xl mx-auto px-4">

			<div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
				<aside>
					<!-- gallery -->
					<div class="border border-gray-200 shadow-sm p-3 text-center rounded mb-5">
						<img class="object-cover inline-block" width="400" src="{{asset($product->image()->first()->img_src)}}" alt="Product title">
					</div>
					<div class="space-x-2 overflow-auto text-center whitespace-nowrap">
                        @foreach($product->image()->get() as $photo)
						<a href="#" class="inline-block border border-gray-200 p-1 rounded-md hover:border-blue-500">
							<img class="w-14 h-14" src="                        {{asset($photo->img_src)}}
                            " alt="Product title">
						</a>
                        @endforeach
					</div>
					<!-- gallery end.// -->
				</aside>
				<main>
					<h2 class="font-semibold text-2xl mb-4">
                        {{$product->name}}
					</h2>

					<p class="mb-4 font-semibold text-xl">Rs {{$product->price}}
					</p>

					<p class="mb-4 text-gray-500">
                        {{$product->description}}
					</p>
                    @if(in_array($product->id,$cart))
                        <div class="flex flex-wrap gap-2">
                            <button wire:click='removeFromCart()' class="px-4 py-2 inline-block text-white bg-red-600 border border-transparent rounded-md hover:bg-red-700">
                                <i class="fa fa-shopping-cart mr-2"></i>
                                Remove from cart
                            </button>
                        </div>
                    @else
					<div class="flex flex-wrap gap-2">
						<button wire:click='addToCart()' class="px-4 py-2 inline-block text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700">
							<i class="fa fa-shopping-cart mr-2"></i>
							Add to cart
                        </button>
					</div>
                    @endif
					<!-- action buttons .//end -->
				</main>
			</div> <!-- grid .// -->
		</div> <!-- container .// -->
	</section>

	<section class="bg-gray-100 py-10">
		<div class="container max-w-screen-xl mx-auto px-4">

			<div class="flex flex-wrap -mx-2">
				<div class="lg:w-3/4 px-2">

					<article class="border border-gray-200 shadow-sm rounded bg-white">
						<nav class="border-b px-4">
							<a class="px-3 py-4 mx-1 inline-block border-b border-blue-600 text-blue-600 hover:border-blue-600 hover:text-blue-500">Overview</a>
						</nav>
						<div class="p-5 text-gray-700">
                            {{$product->description}}
						</div>
					</article>
				</div> <!-- col.// -->
				<aside class="lg:w-1/4 px-2">

					<article class="border border-gray-200 shadow-sm rounded bg-white p-4">
						<h3 class="mb-5 text-lg font-semibold">Similar products</h3>

                        @foreach ($similar_products as $similar_product)
                            <figure class="flex flex-row mb-4">
                                <div>
                                    <a href="#" class="block w-20 h-20 rounded border border-gray-200 overflow-hidden">
                                        <img src="{{asset($similar_product->image()->first()->img_src)}}" alt="Title">
                                    </a>
                                </div>
                                <figcaption class="ml-3">
                                    <p><a href="{{route('product',$similar_product->id)}}" class="text-gray-600 hover:text-blue-600">{{$similar_product->name}}</a></p>
                                    <p class="mt-1 font-semibold">Rs {{$similar_product->price}}</p>
                                </figcaption>
                            </figure>
                        @endforeach

					</article>

				</aside> <!-- col.// -->
			</div> <!-- grid.// -->

		</div> <!-- container.// -->
	</section>

</div>
