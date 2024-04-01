@extends('layout')

@section('content')
	<header id="inner-header">
		<div>
			<a href="{{ route('index') }}"><img src="{{ asset('avatar.png') }}" alt="Avatar" /><h1>DaniloQuispe.dev</h1></a>
		</div>
		<nav class="main-menu">
			<ul>
				<li><a href="{{ route('index') }}">&larr; Home</a></li>
				<li><a href="{{ route('about') }}" @if(Route::is('about')) class="active" @endif>About me</a></li>
				<li><a href="https://resume.daniloquispe.dev" target="_blank">Resume</a></li>
				<li><a href="{{ route('my-portfolio.index') }}" @if(Route::is('my-portfolio.*')) class="active" @endif>Portfolio</a></li>
			</ul>
		</nav>
	</header>
	<main id="inner-content">
		@yield('content-inner')
	</main>
	<footer id="inner-footer">
		<p>&copy; 2024 Danilo Alejandro Quispe Lucana</p>
	</footer>
@endsection
