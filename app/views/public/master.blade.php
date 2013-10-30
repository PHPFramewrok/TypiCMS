<!doctype html>
<html lang="fr">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title>{{ $title }}</title>

	{{ basset_stylesheets('public') }}

	<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>

	{{ basset_javascripts('public') }}

	@yield('head')

</head>

<body>
	<a href="#content" class="sr-only">{{ trans('public.Skip to content') }}</a>

@include('_navbar')

<div class="container" id="content">

ee ee eee

	<nav role="navigation" class="menu menu-languages pull-right">
		{{-- $languagesMenuList --}}
		<ul class="nav nav-pills">
			@foreach ($languagesMenu as $item)
				<li class="{{ $item->class }}">
					<a href="{{ $item->url }}">{{ $item->lang }}</a>
				</li>
			@endforeach
		</ul>
	</nav>

	@yield('menu')

	<nav role="navigation">
		{{ $mainMenu }}
	</nav>

	@yield('main')

	@include('public._footer')

</div>

</body>

</html>