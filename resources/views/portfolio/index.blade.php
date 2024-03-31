@extends('layout-inner')

@section('title', 'My portfolio - ' . config('app.name'))
@section('description', 'This is my portfolio, where you can check websites ans web apps made by me')
@section('image', asset('avatar.png'))
@section('canonical', route('my-portfolio.index'))
@section('robots', 'index, follow')

@section('content-inner')
	<section class="resume-section">
		<h2>My portfolio</h2>
		<div class="portfolio-items">
			@foreach($items as $item)
				<a href="{{ route('my-portfolio.show', $item) }}" class="portfolio-item">
					<img src="{{ asset($item->image) }}" alt="{{ $item->name }}" />
					<h3>{{ $item->name }}</h3>
					<p>{{ $item->short_description }}</p>
				</a>
			@endforeach
		</div>
	</section>
@endsection
