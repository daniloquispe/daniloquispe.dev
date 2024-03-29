@extends('layout')

@section('title', config('app.name'))

@section('content')
	{{-- Title --}}
	<header class="title">
		<h1>DaniloQuispe.dev</h1>
		<p class="lead">Web developer</p>
		<p>Hello, world! My name is Danilo, and I'm from Lima, Peru 🇵🇪</p>
	</header>
	{{-- Skills --}}
	<main>
		<section class="home-section">
			<div>
				<h2>Skills</h2>
			</div>
		</section>
		{{-- Portfolio --}}
		<section class="home-section portfolio">
			<div>
				<h2>My Portfolio</h2>
				<div class="portfolio-items">
					<a href="#" class="portfolio-item">
						<img src="//placekitten.com/640/480" alt="Screenshot" />
						<h3>AdminISOL</h3>
						<p>Hosting, domains and clients manager</p>
					</a>
					<a href="#" class="portfolio-item">
						<img src="//placekitten.com/640/480" alt="Screenshot" />
						<h3>AppData</h3>
						<p>Language interpreters' performance tracking</p>
					</a>
					<a href="#" class="portfolio-item">
						<img src="//placekitten.com/640/480" alt="Screenshot" />
						<h3>Admisión EPG-UNE</h3>
						<p>Candidates inscription wizard</p>
					</a>
					<a href="#" class="portfolio-item">
						<img src="//placekitten.com/640/480" alt="Screenshot" />
						<h3>WebAdmin</h3>
						<p>Simple website CMS</p>
					</a>
					<a href="#" class="portfolio-item">
						<img src="//placekitten.com/640/480" alt="Screenshot" />
						<h3>PradoNet</h3>
						<p>Inventory, customers, vendors and selling system</p>
					</a>
				</div>
			</div>
		</section>
	</main>
	<footer>
		&copy; 2023 Danilo Alejandro Quispe Lucana
	</footer>
@endsection
