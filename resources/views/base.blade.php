<!doctype html>
<html>
<head>
	<meta charset="{{ $site->info('charset') }}" />
	<meta name="description" content="{{ $site->info('description') }}">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="pingback" href="{{ $site->info('pingback_url') }}" />

	{!! $wp_head !!}

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,600,700' rel='stylesheet' type='text/css'>
</head>

<body {{ body_class() }}>

	@include('includes.header')

	<main id="main" class="page" role="main">

		@yield('content')

	</main>

	@include('includes.footer')

	{{ wp_footer() }}

</body>
</html>