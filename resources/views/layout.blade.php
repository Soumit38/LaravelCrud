<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v3.8.5">
	{{-- <script type="text/javascript" src="{{ URL::asset('js/vue.js') }}"></script> --}}
	<title> @yield('title') </title>

	<!-- Bootstrap core CSS -->
	<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">
	<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" crossorigin="anonymous">


</head>
<body>
<script type="text/javascript" src="{{ URL::asset('js/vue.js') }}"></script>	
<div class="container">
	<header class="blog-header py-3">
		<div class="row flex-nowrap justify-content-between align-items-center">

		</div>
	</header>

	<div class="nav-scroller py-1 mb-2">
		<nav class="nav d-flex justify-content-between">

		</nav>
	</div>

	<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
		<div class="col-md-6 px-0">
			<h2 class="display-4 font-italic">
				@yield('content')
			</h2>

			{{--<p class="lead my-3">--}}
				{{--@yield('content')--}}
			{{--</p>--}}

		</div>
	</div>

	<div class="row mb-2">

	</div>
</div>



<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>


</body>
</html>
