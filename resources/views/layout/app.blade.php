<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta content="{{ csrf_token() }}" name="csrf-token">
	<script defer src="{{ asset('js/app.js') }}">
	</script>
	<title></title>
</head>
<body>
	@include('inc.head') @include('inc.navbar') @include('inc.messages')
	<div class="container">
		<div class="my-4">
			@yield('content')
		</div>
	</div>@include('inc.foot') 
	<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js">
	</script> 
	<script>
	       CKEDITOR.replace( 'article-ckeditor' );
	</script>
</body>
</html>