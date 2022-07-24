<div>

	<!-- SECTION-CONTENT -->
	<section class="py-10">
		<div class="container max-w-screen-xl mx-auto px-4">
			<h2 class="text-3xl font-bold mb-8">{{$category->name}}</h2>

			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach($products as $product)
				<div>
					<!-- COMPONENT: PRODUCT CARD -->
					<article class="shadow-sm rounded bg-white border border-gray-200">
						<a href="#" class="relative block p-1">
							<img src="{{asset($product->image()->first()->img_src)}}" class="mx-auto w-auto" style="height: 250px" height="250" alt="Product title here">
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
							<span class="font-semibold">Rs {{$product->price}}</span>
						</div>
					</article>
					<!-- COMPONENT: PRODUCT CARD //END -->
				</div>
                @endforeach
			</div> <!-- grid .// -->
		</div>
	</section>

</div>
