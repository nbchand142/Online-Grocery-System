<div>

	<!--  MAIN SECTION  -->
	<section class="pt-5">
		<div class="container max-w-screen-xl mx-auto px-4">
		<nav id="sidebar" class='mx-lt-4 bg-primary' >

			<article class="mx-lt-4 bg-primary">
				<div class="flex flex-col md:flex-row">
					<aside class="md:w-1/4 flex-auto mb-4 pr-4 md:mb-0">
						<ul>
							<li>
								<a class="block px-3 py-2 hover:bg-blue-50 rounded-md hover:text-blue-600" href="#">Electronics</a>
							</li>
							<li>
								<a class="block px-3 py-2 hover:bg-blue-50 rounded-md hover:text-blue-600" href="#">Clothes and wear</a>
							</li>
							<li>
								<a class="block px-3 py-2 hover:bg-blue-50 rounded-md hover:text-blue-600" href="#">Home interiors</a>
							</li>
							<li>
								<a class="block px-3 py-2 hover:bg-blue-50 rounded-md hover:text-blue-600" href="#">Dry foods</a>
							</li>
							<li>
								<a class="block px-3 py-2 hover:bg-blue-50 rounded-md hover:text-blue-600" href="#">Stationary</a>
							</li>
							<li>
								<a class="block px-3 py-2 hover:bg-blue-50 rounded-md hover:text-blue-600" href="#">Sports</a>
							</li>
							<li>
								<a class="block px-3 py-2 hover:bg-blue-50 rounded-md hover:text-blue-600" href="#">Drinks</a>
							</li>
							
						</ul>
					</aside>
					<main class="md:w-3/4 flex-auto">
						<!-- banner-main -->
						<article class="bg-blue-500 p-6 lg:p-16 rounded w-full h-full">
							<h1 class="text-3xl md:text-4xl text-white font-semibold">
							Best products &amp; <br>brands in our store
							</h1>
							<p class="text-lg text-white font-normal mt-4 mb-6">
							Trendy Products, Factory Prices, Excellent Service
							</p>
							<div>
								<a class="px-4 py-2 inline-block font-semibold bg-yellow-500 text-white border border-transparent rounded-md hover:bg-yellow-600" href="#">
									Discover
								</a>
								<a class="px-4 py-2 inline-block font-semibold text-blue-600 border border-transparent rounded-md hover:bg-gray-100 bg-white" href="#">
									Learn more
								</a>
							</div>
						</article>
						<!-- banner-main end// -->
					</main>
				</div> <!-- grid.// -->
			</article>


		</div> <!-- container //end -->
	</section>
	<!--  MAIN SECTION //END -->


	<!-- SECTION-CONTENT -->
	<section class="py-10">
		<div class="container max-w-screen-xl mx-auto px-4">
			<h2 class="text-3xl font-bold mb-8">New products</h2>

			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach($products as $product)
				<div>
					<!-- COMPONENT: PRODUCT CARD -->
					<article class="shadow-sm rounded bg-white border border-gray-200">
						<a href="#" class="relative block p-1">
							<img src="image/shampoo.jpg" class="mx-auto w-auto" style="height: 250px" height="250" alt="Product title here">
							<span class="inline-block px-3 py-1 text-sm bg-red-100 text-red-600 rounded-full absolute left-3 top-3">
								Offer
							</span>
						</a>
						<div class="p-4 border-t border-t-gray-200">
							<a class="float-right px-3 py-2 text-gray-400 border border-gray-300 rounded-md hover:border-blue-400 hover:text-blue-600" href="#">
								<i class="fa fa-heart"></i>
							</a>
							<h6>
								<a href="{{route('product',$product->id)}}" class="text-gray-600 hover:text-blue-500">{{$product->name}}</a>
							</h6>
							<p class="text-sm text-gray-400">Sizes: S, M, XL</p>
							<span class="font-semibold">Rs {{$product->price}}</span>
						</div>
					</article>
					<!-- COMPONENT: PRODUCT CARD //END -->
				</div>
                @endforeach
			</div> <!-- grid .// -->
		</div>
	</section>
	<!--  SECTION-CONTENT  //END -->


	<!-- SECTION-INFOBLOCK -->
	<section class="pb-10">
		<div class="container max-w-screen-xl mx-auto px-4">

			<article class="shadow-sm rounded bg-white border border-gray-200 p-4">
				<div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-4 gap-4">
					<!-- item -->
					<figure class="flex items-center mr-10">
						<div class="flex mr-5 items-center justify-center mr-4 rounded w-11 h-11 bg-green-200">
							<i class="fa fa-truck fa-lg text-green-600"></i>
						</div>
						<figcaption>
							<p class="font-medium">Free shipping</p>
							<p class="text-sm text-gray-500">Have you ever finally just</p>
						</figcaption>
					</figure>
					<!-- item end -->

					<!-- item -->
					<figure class="flex items-center mr-10">
						<div class="flex mr-5 items-center justify-center mr-4 rounded w-11 h-11 bg-yellow-200">
							<i class="fa fa-star fa-lg text-yellow-600"></i>
						</div>
						<figcaption>
							<p class="font-medium">High quality</p>
							<p class="text-sm text-gray-500">Have you ever finally just</p>
						</figcaption>
					</figure>
					<!-- item end -->

					<!-- item -->
					<figure class="flex items-center mr-10">
						<div class="flex mr-5 items-center justify-center mr-4 rounded w-11 h-11 bg-red-200">
							<i class="fa fa-envelope fa-lg text-red-600"></i>
						</div>
						<figcaption>
							<p class="font-medium">Customer support</p>
							<p class="text-sm text-gray-500">Have you ever finally just</p>
						</figcaption>
					</figure>
					<!-- item end -->

					<!-- item -->
					<figure class="flex items-center mr-10">
						<div class="flex mr-5 items-center justify-center mr-4 rounded w-11 h-11 bg-blue-200">
							<i class="fa fa-tag fa-lg text-blue-600"></i>
						</div>
						<figcaption>
							<p class="font-medium">Reasonable Prices</p>
							<p class="text-sm text-gray-500">Have you ever finally just</p>
						</figcaption>
					</figure>
					<!-- item end -->
				</div>
			</article>
		</div> <!-- container .// -->
	</section>
	<!-- SECTION-INFOBLOCK //END -->
</div>
