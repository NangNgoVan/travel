<!DOCTYPE html>
<html>
<head>
	<title>Ha Noi Travel</title>
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="{{asset('plugins/bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/animation.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body id="page-top" data-spy="scroll">

<!-- header -->
@include('layouts.nav')

<!-- content -->
@yield('content')

<!-- footer -->
@include('layouts.footer')

<script src="{{asset('js/parallax.js')}}"></script>
<script src="{{asset('js/jquery.easing.min.js')}}"></script>
<script src="{{asset('js/scrolling.js')}}"></script>
<script src="{{asset('js/search.nav.js')}}"></script>
</script>
</body>
</html>
