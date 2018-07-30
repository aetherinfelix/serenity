
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg">
		<div class="container">
			<img src="/images/veganlogo.png" class="img-thiumbnail" style="width:100px;height:100px;" alt="Vegan Logo">&nbsp;&nbsp;
			<a class="navbar-brand" href="/">The Fat Bearded Vegan</a> <button aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav text-right">
					<li class="nav-item">
						<a class="nav-link" href="/">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/about">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/posts">Blog</a>
					</li>
					<li class="nav-item">
							<a class="nav-link" href="/gallery">Gallery</a>
						</li>
					<li class="nav-item">
						<a class="nav-link" href="/contact">Contact</a>
					</li>
				</ul>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<!-- Authentication Links -->
						<li style="list-style: none">@guest</li>
						<li>
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
					</li>
						<li>
							<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
						</li>
						<li style="list-style: none">@else</li>
						<li class="nav-item dropdown">
							<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown" role="button">{{ Auth::user()->name }} <span class="caret"></span></a>
							<div aria-labelledby="navbarDropdown" class="dropdown-menu">
               <a class="dropdown-item" href="/home">Dashboard</a>
               <a class="dropdown-item" href="/posts/create">Create Post</a>
								<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
								<form action="{{ route('logout') }}" id="logout-form" method="post" name="logout-form" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
						<li style="list-style: none">@endguest</li>
					</ul>
				</div>
				
			</div>
		</div>
	</nav>
