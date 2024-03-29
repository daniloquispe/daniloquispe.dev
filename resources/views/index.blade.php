@extends('layout')

@section('title', config('app.name'))
@section('description', 'Hello, world! My name is Danilo, and here you can find info about me as a fullstack web developer')
@section('image', asset('avatar.png'))
@section('canonical', route('index'))
@section('robots', 'index, follow')

@section('content')
	<div class="hero">
		<div class="center">
			<header>
				<p><img src="{{ asset('avatar.png') }}" alt="Danilo Alejandro Quispe Lucana" /></p>
				<h1>DaniloQuispe.dev</h1>
				<p>Fullstack Web Developer</p>
			</header>
			<main>
				Hello, world! My name is <strong>Danilo</strong>, and I'm from <strong>Lima, Peru 🇵🇪</strong>
			</main>
			<nav class="main-menu">
				<ul>
					<li>
						<a href="{{ route('about') }}">
							<i class="fa-solid fa-address-card"></i>
							About me
						</a>
					</li>
					<li>
						<a href="https://resume.daniloquispe.dev" target="_blank">
							Resume (printable)
						</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="bottom">
			<footer>
				<p>&copy; 2024 Danilo Alejandro Quispe Lucana</p>
			</footer>
		</div>
	</div>
@endsection
