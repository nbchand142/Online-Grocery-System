<div>

<section class="bg-blue-100 py-4">
		<div class="container max-w-screen-xl mx-auto px-4">
			<!-- breadcrumbs start -->
			<ol class="inline-flex flex-wrap text-gray-600 space-x-1 md:space-x-3 items-center">
				<li class="inline-flex items-center">
					<a class="text-gray-600 hover:text-blue-600" href="#">Home</a>
					<i class="ml-3 text-gray-400 fa fa-chevron-right"></i>
				</li>
				<li class="inline-flex items-center" aria-current="page">
					<a class="text-gray-600 hover:text-blue-600" href="#"> Clothes </a>
					<i class="ml-3 text-gray-400  fa fa-chevron-right"></i>
				</li>
				<li class="inline-flex items-center" aria-current="page">
					<a class="text-gray-600 hover:text-blue-600" href="#"> Men's wear </a>
					<i class="ml-3 text-gray-400  fa fa-chevron-right"></i>
				</li>
				<li class="inline-flex items-center"> Detail </li>
			</ol>
			<!-- breadcrumbs end -->
		</div> <!-- container .// -->
	</section>

	<section class="bg-white py-10">
		<div class="container max-w-screen-xl mx-auto px-4">

			<div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
				<aside>
					<!-- gallery -->
					<div class="border border-gray-200 shadow-sm p-3 text-center rounded mb-5">
						<img class="object-cover inline-block" width="400" src="images/items/detail/big.jpg" alt="Product title">
					</div>
					<div class="space-x-2 overflow-auto text-center whitespace-nowrap">
						<a href="#" class="inline-block border border-gray-200 p-1 rounded-md hover:border-blue-500">
							<img class="w-14 h-14" src="image/logo.png" alt="Product title">
						</a>
						<a href="#" class="inline-block border border-gray-200 p-1 rounded-md hover:border-blue-500 ">
							<img class="w-14 h-14 object-cover" src="image/logo.png" alt="Product title">
						</a>
						<a href="#" class="inline-block border border-gray-200 p-1 rounded-md hover:border-blue-500">
							<img class="w-14 h-14 object-cover" src="images/items/detail/thumb2.jpg" alt="Product title">
						</a>
						<a href="#" class="inline-block border border-gray-200 p-1 rounded-md hover:border-blue-500">
							<img class="w-14 h-14 object-cover" src="images/items/detail/thumb3.jpg" alt="Product title">
						</a>
						<a href="#" class="inline-block border border-gray-200 p-1 rounded-md hover:border-blue-500">
							<img class="w-14 h-14 object-cover" src="images/items/detail/thumb4.jpg" alt="Product title">
						</a>
					</div>
					<!-- gallery end.// -->
				</aside>
				<main>
					<h2 class="font-semibold text-2xl mb-4">
                        {{$product->name}}
					</h2>

					{{-- <div class="flex flex-wrap items-center space-x-2 mb-2">

						<img class="d-inline-block h-4" src="images/misc/stars-active.svg" alt="Rating">
						<span class="text-yellow-500">9.3</span>

						<svg width="6px" height="6px" viewbox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
							<circle cx="3" cy="3" r="3" fill="#DBDBDB" />
						</svg>

						<span class="text-gray-400">
							<i class="fa fa-shopping-bag mr-2"></i> 154 orders
						</span>

						<svg width="6px" height="6px" viewbox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
							<circle cx="3" cy="3" r="3" fill="#DBDBDB" />
						</svg>

						<span class="text-green-500">Verified</span>

					</div> --}}

					<p class="mb-4 font-semibold text-xl">Rs:{{$product->price}}
						<span class="text-base font-normal">/1 box</span>
					</p>

					<p class="mb-4 text-gray-500">
                        {{$product->description}}
					</p>

					<div class="flex flex-wrap gap-2">
						<a class="px-4 py-2 inline-block text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700"
							href="#">
							<i class="fa fa-shopping-cart mr-2"></i>
							Add to cart
						</a>
					</div>
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
                                        <img src="images/items/8.jpg" alt="Title">
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
