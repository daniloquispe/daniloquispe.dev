@extends('layout-inner')

@section('title', 'Job experience - ' . config('app.name'))
@section('description', 'My name is Danilo, and here you can find detailed info about me as a fullstack web developer, tech skills and languages')
@section('image', asset('photo.jpg'))
@section('canonical', route('experience'))
@section('robots', 'index, follow')

@section('content-inner')
	<section class="resume-section">
		<h2>Job experience</h2>
		<ol class="timeline">
			<li>
				<div class="marker"></div>
				<div class="period"><time>2021</time> - <time>2023</time></div>
				<h3>Developer</h3>
				<p class="location">Bilingual</p>
				<div class="detail">
					<ul>
						<li>Development of integration software for Bilingual interpreters' information, metrics and productivity reports (web-based platform, REST API and Google Chrome extension).</li>
						<li>Integration with AWS and Pusher.</li>
						<li>Phone calls data extraction from Asterisk database.</li>
						<li>Application feature/unit testing and deployment.</li>
						<li>Employees training.</li>
						<li>User manuals and technical documentation</li>
					</ul>
				</div>
			</li>
			<li>
				<div class="marker"></div>
				<div class="period"><time>2022</time></div>
				<h3>Support developer</h3>
				<p class="location">Arellano Investigación de Marketing</p>
				<div class="detail">
					<ul>
						<li>In-house web developer in Arequipa city (Peru) for 2 weeks.</li>
						<li>Support development, quick fixes and performance enhancements for Perumin 35 mining convention website and custom-made CMS</li>
					</ul>
				</div>
			</li>
			<li>
				<div class="marker"></div>
				<div class="period"><time>2022</time></div>
				<h3>Freelance developer</h3>
				<p class="location">FuzzPass</p>
				<div class="detail">
					<ul>
						<li>Development of REST API for Perumin mobile app (integration with Perumin 35 mining convention website information)</li>
					</ul>
				</div>
			</li>
			<li>
				<div class="marker"></div>
				<div class="period"><time>2021</time></div>
				<h3>Freelance web developer</h3>
				<p class="location">New Information Digital</p>
				<div class="detail">
					<ul>
						<li>Modifications and mew modules development for Perumin 35 mining convention website (3rd-party custom CMS).</li>
					</ul>
				</div>
			</li>
			<li>
				<div class="marker"></div>
				<div class="period"><time>2020</time> - <time>2021</time></div>
				<h3>PHP developer</h3>
				<p class="location">Informática Delta</p>
				<div class="detail">
					<ul>
						<li>Software development for finance/retail clients.</li>
						<li>Integration with AWS.</li>
						<li>Migration from desktop (legacy) software (Visual Basic .NET and SQL Server)</li>
						<li>Junior programmers technical interview and selection.</li>
					</ul>
				</div>
			</li>
			<li>
				<div class="marker"></div>
				<div class="period"><time>2017</time> - <time>2018</time></div>
				<h3>Web programmer</h3>
				<p class="location">Corporación Efameinsa e Ingeniería</p>
				<div class="detail">
					<ul>
						<li>WordPress theme customization, enhancements and bugfixes (3rd-party development)</li>
						<li>CMS migration, from WordPress to OpenCart.</li>
						<li>OpenCart 3rd-party themes customization.</li>
						<li>Webmaster.</li>
						<li>Tech support assistance.</li>
						<li>Coordination with hosting and e-mail providers.</li>
					</ul>
				</div>
			</li>
			<li>
				<div class="marker"></div>
				<div class="period"><time>2012</time> - <time>today</time></div>
				<h3>Web &amp; software developer</h3>
				<p class="location">ISOL Perú: Soluciones en Internet</p>
				<div class="detail">
					<ul>
						<li>My own development business and commercial name.</li>
						<li>Web and software development, hosting and domains.</li>
						<li>Clients training, help desk and remote technical support.</li>
						<li>Coordination with external providers (Spanish and English).</li>
					</ul>
				</div>
			</li>
		</ol>
	</section>
@endsection
