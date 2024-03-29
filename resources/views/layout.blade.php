<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>@yield('title')</title>
	<link href="{{ asset('favicon.png') }}" rel="icon" />
	<meta name="description" content="@yield('description')" />
	<meta name="robots" content="@yield('robots')" />
	<link rel="canonical" href="@yield('canonical')" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="@yield('title')" />
	<meta property="og:description" content="@yield('description')" />
	<meta property="og:image" content="@yield('image')" />
	<meta property="og:url" content="@yield('canonical')" />
	<meta property="og:site_name" content="{{ config('app.name') }}" />
	<meta name="twitter:title" content="@yield('title')">
	<meta name="twitter:description" content="@yield('description')" />
	<meta name="twitter:image" content="@yield('image')" />
	<meta name="twitter:site" content="@daniloquispe" />
	<meta name="twitter:creator" content="@daniloquispe" />
	@vite('resources/css/app.css')
	<script src="https://kit.fontawesome.com/17d60dca64.js" crossorigin="anonymous"></script>
	<script>
		function setDarkMode(matchMedia)
		{
			if (localStorage.theme === 'dark' || (!('theme' in localStorage) && matchMedia.matches))
				document.documentElement.classList.add('dark');
			else
				document.documentElement.classList.remove('dark');
		}
		let matchMedia = window.matchMedia('(prefers-color-scheme: dark)');
		matchMedia.addEventListener('change', (e) => setDarkMode(e));
		setDarkMode(matchMedia);
	</script>
</head>
<body>
<div id="app">
	@yield('content')
</div>
{{-- JS --}}
<script src="{{ mix('js/app.js') }}"></script>
@env('production')
	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
			var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
			s1.async=true;
			s1.src='https://embed.tawk.to/63570ec3b0d6371309cb5207/1gg613ces';
			s1.charset='UTF-8';
			s1.setAttribute('crossorigin','*');
			s0.parentNode.insertBefore(s1,s0);
		})();
	</script>
	<!--End of Tawk.to Script-->
@endenv
@yield('js-footer')
</body>
</html>
