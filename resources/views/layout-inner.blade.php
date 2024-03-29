@extends('layout')

@section('content')
	<header id="inner-header">
		<a href="{{ route('index') }}"><img src="{{ asset('avatar.png') }}" alt="Avatar" /><h1>DaniloQuispe.dev</h1></a>
	</header>
	<main id="inner-content">
		@yield('content-inner')
	</main>
	<footer id="inner-footer">
		<p>&copy; 2024 Danilo Alejandro Quispe Lucana</p>
	</footer>
@endsection
