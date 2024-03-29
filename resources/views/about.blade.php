@extends('layout-inner')

@section('title', 'About me - ' . config('app.name'))
@section('description', 'My name is Danilo, and here you can find detailed info about me as a fullstack web developer, tech skills and languages')
@section('image', asset('photo.jpg'))
@section('canonical', route('about'))
@section('robots', 'index, follow')

@section('content-inner')
	<section class="resume-section">
		<h2>Who am I?</h2>
		<img src="{{ asset('photo.jpg') }}" alt="Danilo Alejandro Quispe Lucana" class="my-photo" />
		<p>Hello! 👋</p>
		<p>My name is <strong>Danilo Alejandro Quispe Lucana</strong>, and I'm from <strong>Lima, Peru</strong>.</p>
		<p>I have experience in web design and development for all-size organizations and business sectors, CMS and
			enterprise information systems (ERPs) in desktop, client/server or Web environments. Software skills
			acquired by self-learning (PHP, MySQL/MariaDB, GIMP, Inkscape, hosting and Web servers management).</p>
		<p>Experienced in software development project teams, including new members selection, skills evaluation and
			workflow planning. Experienced in direct client assistance, tech support, using remote tools (phone
			call, e-mail, tickets systems and/or remote-control software such as AnyDesk, TeamViewer, Remmina or
			similar).</p>
	</section>
	<section class="resume-section">
		<h2>Tech skills</h2>
		<ul class="skills">
			<li>GNU/Linux</li>
			<li>HTML 5</li>
			<li>CSS 3</li>
			<li>Tailwind CSS</li>
			<li>Bootstrap 3/4/5</li>
			<li>JavaScript</li>
			<li>Vue 2/3</li>
			<li>PHP 7/8</li>
			<li>Laravel 7/8/9/10</li>
			<li>MySQL / MariaDB</li>
			<li>AWS</li>
			<li>UML modeling</li>
		</ul>
		<p>... And if I don't know something, I can learn it! 👍</p>
	</section>
	<section class="resume-section">
		<h2>Languages</h2>
		<ul class="languages">
			<li>
				<span class="language-icon">🇵🇪</span>
				<h2>Spanish</h2>
				Native
			</li>
			<li>
				<span class="language-icon">🇺🇸</span>
				<h2>English</h2>
				Intermediate
			</li>
			<li>
				<span class="language-icon">🇧🇷</span>
				<h2>Portuguese</h2>
				Basic
			</li>
			<li>
				<span class="language-icon">🤟</span>
				<h2>Sign language</h2>
				Intermediate
			</li>
		</ul>
	</section>
@endsection
