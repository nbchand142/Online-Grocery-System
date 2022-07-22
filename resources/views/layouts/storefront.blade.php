
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
	<header class="bg-blue-500 py-3">
		<div class="container max-w-screen-xl mx-auto px-4">
			<div class="flex flex-wrap items-center">
				<!-- Brand -->
				<div class="flex-shrink-0 mr-5">
					<a href="/"> <img src="{{asset('image/army logo.png')}}" height="80" width="80" alt="Brand"  style = "border-radius:50%" /> </a>
				</div>
				<!-- Brand .//end -->
                <div class="text-white flex items-center space-x-2 ml-5 "> 
					<h1>Online Grocery System</h1>
				</div>
				<div class="col-md-2 float-left text-white flex items-center space-x-2 ml-5"><p> Date/Time: <span id="datetime"></span></p>
        <script>
        var dt = new Date();
        document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
        </script>
      </div>
      <div class="col-md-2 float-left text-white flex items-center space-x-1 ml-2">
        <script>
        function showtime(){
        var d = new Date();
        document.getElementById("clock").innerHTML = d.toLocaleTimeString();}
        setInterval(showtime, 1000);
    </script>
    <p><span id="clock"></span></p>
  </div>
				<!-- Search -->
				<div class="flex flex-nowrap items-center w-full order-last md:order-none mt-5 md:mt-0 md:w-2/4 lg:w-1/5 ml-8">
					<input class="flex-grow appearance-none border border-gray-400 bg-gray-200 rounded-tl-md rounded-bl-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400" type="text" placeholder="Search">
					<!-- <button type="button" class="px-4 py-2 inline-block text-blue-600 border border-gray-400 bg-gray-200 rounded-tr-md rounded-br-md hover:bg-blue-100">
						<i class="fa fa-search"></i>
					</button> -->
				</div>
				<!-- Search .//end -->

				<!-- Actions -->
				<div class="flex items-center space-x-2 ml-auto">
					<a class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300" href="{{route('login')}}">
						<i class="text-gray-400 w-5 fa fa-user"></i>
						<span class="hidden lg:inline ml-1 ">Sign in</span>
					</a>

					

					<a class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300" href="{{route('cart')}}">
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
					<a href="/"> <img src="{{asset('image/army logo.png')}}" height="80" width="80" alt="Brand" border-radius=50% /> </a>
						<p class="my-4">
							Company name. <br> Online Grocety System <br>
							
						</p>
					<!-- col .// -->
				</div>  <!-- grid .// -->
			</div> <!-- container .// -->
		</section>
		<!-- section footer top end -->

		
</body>
</html>
