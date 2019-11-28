
<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no, email=no" >
	<meta name="apple-moblie-web-app-title" content="'.$title.'" >
	<meta http-equiv="X-UA-Compatible" content="IE=edge" >
	<link rel="stylesheet" href="./common/css/style.css" ></link>
	<script  src="./common/js/jquery-3.4.1.min.js"></script>
@yield('css')
    <title>Home @yield('title')</title>
</head>
<body>
	<!-- Header -->
    @include('header.header')
	<!-- End header -->

	<!--Container-content -->
    @yield('container')    
	<!-- End container -->

	<!-- Footer -->
	@include('footer.footer')
	<!-- End footer -->
   <script  src="./common/js/script.js"></script>
@yield('js')
</body>
</html>