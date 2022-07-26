
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
                <div class="text-white text-3xl flex items-center space-x-2 ml-5 ">
					<h1> <b> Online Grocery System</b></h1>
				</div>

				<!-- Search -->
                    <form action="{{route('search')}}" method="get" class="flex flex-nowrap items-center w-full order-last md:order-none mt-5 md:mt-0 md:w-2/4 lg:w-1/5 ml-8">
                        <input class="flex-grow appearance-none border border-gray-400 bg-gray-200 rounded-tl-md rounded-bl-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400" type="text" name="q" placeholder="Search">
                        <button type="submit" class="px-4 py-2 inline-block text-blue-600 border border-gray-400 bg-gray-200 rounded-tr-md rounded-br-md hover:bg-blue-100">
                            <i class="fa fa-search"></i>
                            Search
                        </button>
                    </form>
				<!-- Search .//end -->

				<!-- Actions -->
				<div class="flex items-center space-x-2 ml-auto">

                    @guest
					<a class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300" href="{{route('login')}}">
						<i class="text-gray-400 w-5 fa fa-user"></i>
						<span class="hidden lg:inline ml-1 ">Sign in</span>
					</a>
					<a class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300" href="{{route('register')}}">
						<i class="text-gray-400 w-5 fa fa-user"></i>
						<span class="hidden lg:inline ml-1 ">Sign up</span>
					</a>


                    @else
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <a class="px-3 py-2 inline-block text-center text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:border-gray-300"href="{{ route('logout') }}"
                                 @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                    @endguest

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

	<nav class="border-b bg-blue-600 text-red text-white">
		<div class="container max-w-screen-xl mx-auto px-4 flex justify-between items-center">
			<!-- menu -->
			<nav class="hidden lg:flex flex-1 items-center py-1">
				<a class="px-3 py-2 rounded-md hover:bg-blue-500" href="/"> Home </a>
				<a class="px-3 py-2 rounded-md hover:bg-blue-500" href="{{route('my-orders')}}"> My Order </a>

			</nav>
            <div>
                    <div class="col-md-2 float-left text-white text-xl flex items-center space-x-2 ml-5"><p> Date/Time: <span id="datetime"></span></p>
                        <script>
                        var dt = new Date();
                        document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
                        </script>
                </div>
                <div class="col-md-2 float-left text-white text-xl flex items-center space-x-1 ml-2">
                    <script>
                    function showtime(){
                    var d = new Date();
                    document.getElementById("clock").innerHTML = d.toLocaleTimeString();}
                    setInterval(showtime, 1000);
                </script>
                <p><span id="clock"></span></p>
                </div>
            </div>
			<!-- menu //end -->
		</div> <!-- container //end -->
	</nav>
	<!--  COMPONENT: HEADER //END -->


    <main>
        {{ $slot }}
    </main>

	<footer class="bg-blue-600 mt-5">
		<!-- section footer top -->

		<section class="py-0 text-white">
			<div class="container max-w-screen-xl mx-auto px-4">

				<div class="flex flex-wrap">
					<aside class="w-full md:w-1/3 lg:w-1/4 mb-0">
					<a href="/"> <img src="{{asset('image/army logo.png')}}" height="80" width="80" alt="Brand" style="border-radius:50%" /> </a>
						<p class="my-4">
							Company Name. <br> Online Grocety System <br>

						</p>
					<!-- col .// -->
				</div>  <!-- grid .// -->
			</div> <!-- container .// -->
		</section>
		<!-- section footer top end -->

        @stack('modals')
        @livewireScripts

</body>
</html>
