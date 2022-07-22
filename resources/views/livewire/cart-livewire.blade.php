<div>


	<!--  PAGE HEADER -->
	<section class="py-5 sm:py-7 bg-blue-100">
		<div class="container max-w-screen-xl mx-auto px-4">
			<!-- breadcrumbs start -->
			<h2 class="text-3xl font-semibold mb-2">Shopping cart</h2>

		</div><!-- /.container -->
	</section>
	<!--  PAGE HEADER .//END  -->

	<section class="py-10">
		<div class="container max-w-screen-xl mx-auto px-4">

<div class="flex flex-col md:flex-row gap-4">
	<main  class="md:w-3/4">

		<article class="border border-gray-200 bg-white shadow-sm rounded mb-5 p-3 lg:p-5">

			@php
                $total = 0;
            @endphp

            @foreach($products as $product)
                @php
                    $total = $total + $product->price;
                @endphp
			<div class="flex flex-wrap lg:flex-row gap-5  mb-4">
				<div class="w-full lg:w-2/5 xl:w-2/4">
					<figure class="flex leading-5">
						<div>
							<div class="block w-16 h-16 rounded border border-gray-200 overflow-hidden">
								<img src="{{asset($product->image()->first()->img_src)}}" alt="Title">
							</div>
						</div>
						<figcaption  class="ml-3">
							<p><a href="{{route('product',$product->id)}}" class="hover:text-blue-600">{{$product->name}}</a></p>
						</figcaption>
					</figure>
				</div>
				<div>
					<div class="leading-5">
						<p class="font-semibold not-italic">Rs {{$product->price}}.00</p>
					</div>
				</div>
				<div class="flex-auto">
					<div class="float-right">
						<button wire:click='removeFromCart({{$product->id}})' class="px-4 py-2 inline-block text-red-600 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100" href="#">  Remove </button>
					</div>
				</div>
			</div> <!-- item-cart end// -->

			<hr class="my-4">
            @endforeach
		</article> <!-- card end.// -->

	</main>
	<aside class="md:w-1/4">

		<article class="border border-gray-200 bg-white shadow-sm rounded mb-5 p-3 lg:p-5">

			<ul class="mb-5">
				<li class="text-lg font-bold flex justify-between mt-3 pt-3">
					<span>Total price:</span>
					<span>Rs {{$total}}</span>
				</li>
			</ul>
            <input placeholder="Order Note" wire:model='order_note'>
            <input placeholder="Delivery Address" wire:model='delivery_address'>
            <button wire:click='confirmOrder()' class="px-4 py-3 mb-2 inline-block text-lg w-full text-center font-medium text-white bg-green-600 border border-transparent rounded-md hover:bg-green-700">Confirm Order</button>

			<a class="px-4 py-3 inline-block text-lg w-full text-center font-medium text-green-600 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100" href="/"> Back to shop </a>

		</article> <!-- card end.// -->

	</aside> <!-- col.// -->
</div> <!-- grid.// -->

		</div>
	</section>
</div>
