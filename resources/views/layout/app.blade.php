<!DOCTYPE html>
<html>
<head>
	<title>Basic Website</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
	@include('inc.navbar')

	<div class="container">
		
		@if (Request::is('/'))
			@include('inc.showcase')
		@endif

		@include('inc.messages')

		<div class="row">
			<div class="col-md-8 col-lg-8">
				@yield('content')				
			</div>
			<div class="col-md-4 col-lg-4">
				@include('inc.sidebar')	

			</div>
		</div>	
	</div>

	<footer id="footer" class="text-center">
		<p>Copyright 2019 &copy; Jamil</p>
	</footer>
</body>
</html>