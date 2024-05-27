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
				<li><a href="{{ route('experience') }}" @if(Route::is('experience')) class="active" @endif>Job experience</a></li>
				<li><a href="{{ route('my-portfolio.index') }}" @if(Route::is('my-portfolio.*')) class="active" @endif>Portfolio</a></li>
			</ul>
		</nav>
	</header>
	<main id="inner-content">
		@yield('content-inner')
	</main>
	<footer id="inner-footer">
		<nav class="footer-menu">
			<ul>
				<li>
					<a href="https://github.com/daniloquispe" target="_blank" title="GitHub">
						<span class="icon-[ant-design--github-outlined]" role="img" aria-hidden="true"></span>
						<span class="sr-only">GitHub</span>
					</a>
				</li>
				<li>
					<a href="https://pe.linkedin.com/in/daniloquispe" target="_blank" title="LinkedIn">
						<span class="icon-[ant-design--linkedin-outlined]" role="img" aria-hidden="true"></span>
						<span class="sr-only">LinkedIn</span>
					</a>
				</li>
			</ul>
		</nav>
		<p>&copy; 2024 Danilo Alejandro Quispe Lucana</p>
	</footer>
@endsection
