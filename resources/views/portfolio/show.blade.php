@extends('layout-inner')

@section('title', $item->name . ' - My portfolio - ' . config('app.name'))
@section('description', $item->short_description)
@section('image', asset($item->image))
@section('canonical', route('my-portfolio.show', $item))
@section('robots', 'index, follow')

@section('content-inner')
	<section class="resume-section portfolio">
		<h2>{{ $item->name }}</h2>
		<p><strong>{{ $item->short_description }}</strong></p>
		<img src="{{ asset($item->image) }}" alt="{{ $item->name }}" class="screenshot" />
		<div class="description-wrapper">
			<div class="description">
				<h3>Description</h3>
				{!! $item->description !!}
			</div>
			<div>
				<h3>Technologies</h3>
				<ul class="technologies">
					@foreach($item->technologies as $technology)
						<li>{{ $technology }}</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="buttonbar">
			<a href="{{ route('my-portfolio.index') }}" class="back">&larr; Back to Portfolio</a>
		</div>
	</section>
@endsection
