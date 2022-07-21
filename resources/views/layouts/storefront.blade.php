
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Type some info" />
	<meta name="author" content="Type name" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Online Grocery System</title>
	<link rel="shortcut icon" href="{{asset('image/logo.png')}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
	<!--  COMPONENT: HEADER -->
	<header class="bg-white py-3">
		<div class="container max-w-screen-xl mx-auto px-4">
			<div class="flex flex-wrap items-center">
				<!-- Brand -->
				<div class="flex-shrink-0 mr-5">
					<a href="/"> <img src="{{asset('image/download.jpg')}}" height="80" width="80" alt="Brand" /> </a>
				</div>
				<!-- Brand .//end -->

				<!-- Search -->
				<div class="flex flex-nowrap items-center w-full order-last md:order-none mt-5 md:mt-0 md:w-2/4 lg:w-2/4">
					<input class="flex-grow appearance-none border border-gray-200 bg-gray-100 rounded-tl-md rounded-bl-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400" type="text" placeholder="Search">
					<button type="button" class="px-4 py-2 inline-block text-blue-600 border border-gray-200 bg-gray-100 rounded-tr-md rounded-br-md hover:bg-blue-100">
						<i class="fa fa-search"></i>
					</button>
				</div>
				<!-- Search .//end -->

				<!-- Actions -->
				<div class="flex items-center space-x-2 ml-auto">
					<a class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300" href="{{route('login')}}">
						<i class="text-gray-400 w-5 fa fa-user"></i>
						<span class="hidden lg:inline ml-1 ">Sign in</span>
					</a>

					

					<a class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300" href="#">
						<i class="text-gray-400 w-5 fa fa-shopping-cart"></i>
						<span class="hidden lg:inline ml-1">My cart</span>
					</a>
				</div>
				<!-- Actions .//end -->

				<!-- mobile-only -->
				
				<!-- mobile-only //end  -->

			</div> <!-- flex grid //end -->
		</div> <!-- container //end -->
	</header>
	
	<nav class="border-b bg-blue-600 text-white">
		<div class="container max-w-screen-xl mx-auto px-4">
			<!-- menu -->
			<nav class="hidden lg:flex flex-1 items-center py-1">
				<a class="px-3 py-2 rounded-md hover:bg-blue-500" href="/"> Home </a>
				<a class="px-3 py-2 rounded-md hover:bg-blue-500" href="/admin/products"> Product </a>
				<a class="px-3 py-2 rounded-md hover:bg-blue-500" href="/admin/categories"> Category </a>
			</nav>
			<!-- menu //end -->
		</div> <!-- container //end -->
	</nav>
	<!--  COMPONENT: HEADER //END -->


    <main>
        {{ $slot }}1`
    </main>

	<footer class="bg-blue-600">
		<!-- section footer top -->

		<section class="py-10 text-white">
			<div class="container max-w-screen-xl mx-auto px-4">

				<div class="flex flex-wrap">
					<aside class="w-full md:w-1/3 lg:w-1/4 mb-5">
						<img src="images/logo-white.png" height="38" alt="Company name">
						<p class="my-4">
							Company name. <br> © 2018- 2021 Templatemount. <br>
							All rights reserved.
						</p>
					</aside> <!-- col .// -->
					<aside  class="w-1/2 sm:w-auto flex-auto mb-5">
						<h3 class="font-semibold"> Store </h3>
						<ul class="mt-2 space-y-1">
 							<li>
								<a href="#" class="opacity-70 hover:opacity-100"> Join us </a>
							</li>
							<li>
								<a href="#" class="opacity-70 hover:opacity-100"> Find store </a>
							</li>
							<li>
								<a href="#" class="opacity-70 hover:opacity-100"> Categories </a>
							</li>
							<li>
								<a href="#" class="opacity-70 hover:opacity-100"> Partnership </a>
							</li>
						</ul>
					</aside> <!-- col .// -->
					<aside  class="w-1/2 sm:w-auto flex-auto mb-5">
						<h3 class="font-semibold"> About </h3>
						<ul class="mt-2 space-y-1">
 							<li>
								<a href="#" class="opacity-70 hover:opacity-100"> About us </a>
							</li>
							<li>
								<a href="#" class="opacity-70 hover:opacity-100"> Our history </a>
							</li>
							<li>
								<a href="#" class="opacity-70 hover:opacity-100"> Our team </a>
							</li>
							<li>
								<a href="#" class="opacity-70 hover:opacity-100"> Offices </a>
							</li>
						</ul>
					</aside> <!-- col .// -->
					<aside  class="w-1/2 sm:w-auto flex-auto  mb-5">
						<h3 class="font-semibold"> Help </h3>
						<ul class="mt-2 space-y-1">
 							<li>
								<a href="#" class="opacity-70 hover:opacity-100"> Contact us </a>
							</li>
							<li>
								<a href="#" class="opacity-70 hover:opacity-100"> Submit ticket </a>
							</li>
							<li>
								<a href="#" class="opacity-70 hover:opacity-100"> FAQs </a>
							</li>
							<li>
								<a href="#" class="opacity-70 hover:opacity-100"> Refunds </a>
							</li>
						</ul>
					</aside> <!-- col .// -->
					<aside  class="w-1/2 sm:w-auto flex-auto  mb-5">
						<h3 class="font-semibold"> Links </h3>
						<ul class="mt-2 space-y-1">
 							<li>
								 <a href="#" class="opacity-70 hover:opacity-100"> Our terms  </a>
							</li>
							<li>
								 <a href="#" class="opacity-70 hover:opacity-100"> Privacy setting</a>
							</li>
							<li>
								 <a href="#" class="opacity-70 hover:opacity-100"> Sign up </a>
							</li>
						</ul>
					</aside> <!-- col .// -->
					<aside  class="w-1/2 sm:w-auto lg:w-40  mb-5">
						<h3 class="font-semibold"> Apps </h3>
						<a href="#" class="mt-3 inline-block">
							<img class="h-10" src="images/misc/btn-appstore.png" height="38">
						</a>
						<a href="#" class="inline-block">
							<img class="h-10" src="images/misc/btn-market.png" height="38">
						</a>
					</aside> <!-- col .// -->
				</div>  <!-- grid .// -->
			</div> <!-- container .// -->
		</section>
		<!-- section footer top end -->

		<!-- section footer bottom  -->
		<section class="bg-blue-700 py-6 text-white">
			<div class="container max-w-screen-xl mx-auto px-4">
				<div class="lg:flex justify-between">
					<div class="mb-3">
						<img src="images/misc/payments.png" height="24" class="h-6" alt="Payment methods">
					</div> <!-- col .// -->
					<div class="space-x-6">
						<nav class="text-sm space-x-4">
							<a href="#" class="opacity-70 hover:opacity-100">
								Support
							</a>
							<a href="#" class="opacity-70 hover:opacity-100">
								Privacy &amp; Cookies
							</a>
							<a href="#" class="opacity-70 hover:opacity-100">
								Accessibility
							</a>
						</nav>
					</div> <!-- col .// -->
				</div>  <!-- grid .// -->
			</div> <!-- container .// -->
		</section>
		<!-- section footer bottom  end -->
	</footer>
        @stack('modals')
        @livewireScripts
</body>
</html>
