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
					<li>
						<a href="{{ route('my-portfolio.index') }}">
							<i class="fa-solid fa-briefcase"></i>
							Portfolio
						</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="bottom">
			<footer>
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
		</div>
	</div>
@endsection
