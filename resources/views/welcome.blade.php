<html>
	<head>
		<title>Urban Tell</title>
		
		<link href="{{ asset('/css/normalize.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/style.css') }}" rel="stylesheet">

	</head>
	<body>
		<div class="bg-default">
			<div class="container">
				<div class="row">
					<div class="left col">
						<h1 class="head-white"><strong class="head-blue">Urban</strong> Tell</h1>
					</div>
					<div class="right col">
						<nav class="right-nav">
							<ul>
								<!--<li><a href="">Home</a></li>-->
								<!--<li><a href="#!">Forum</a></li>-->
								<!--<li><a href="{{ url ('/contact')}}">Contact</a></li>-->
								<li><a href="{{ url('/auth/login')}}">Login</a></li>
								
							</ul>
						</nav>
					</div>
				</div>
				<div class="middel">
					<div class="center">
						<div class="row">
							<p>Create and Read<strong> Urban Explorers </strong>Stories</p>
						</div>
						<div class="row">
							<nav>
								<ul>
									<li><a class="start-btn" href="{{ url('/auth/register') }}">get started</a></li>
									<li><a class="learn-btn"href="#section-1">learn more</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<div class="bg-email">
				<div class="container">
					<div class="align-center">
						<div class="inline1">
							<p class="big">Subscribe</p>
							<p>Join our email list to get future update</p>
						</div>
						<div class="inline2">
							<form action="POST">
								<input type="email" name="email" class="subscribe-email">
								<input class="submit-btn" type="submit" name="post" value="Join">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-1" id="section-1">
			<div class="container">
				<div class="center row">  
					<div class="col"><i class="medium mdi-content-create" alt="Create stories"></i><p>Create stories</p></div>
					<div class="col"><i class="medium mdi-action-visibility" alt="Read Stories"></i><p>Read Stories</p></div>
					<div class="col"><i class="medium mdi-communication-forum" alt="Speak to Autor"></i><p>Speak to Autor</p></div>
					<div class="col"><i class="medium mdi-action-perm-contact-cal" alt="Plan expedition"></i><p>Plan expedition</p></div>
				</div>
				<!--<div class="row">
					<div class="info-text col">
						<h3>
							Super Easy to Make Stories
						</h3>
						<p>Het is al geruime tijd een bekend gegeven dat een lezer, 
						tijdens het bekijken van de layout van een pagina, afgeleid 
						wordt door de tekstuele inhoud Het belangrijke punt van het gebruik van Lorem Ipsum is dat het uit een min of meer normale verdeling van letters bestaat, 
						in tegenstelling tot "Hier uw tekst, hier uw tekst" wat het tot min of meer leesbaar nederlands maakt.</p>
						<li><a class="start-btn" href="{{ url('/auth/register') }}">Get Started</a></li>
					</div>
					<div class="right col">
						<img src="{{ asset('/img/home/urban-tell-appbg.jpg') }}" alt="screen shot Urban Tell application">
					</div>-->	
				</div>
			</div>
		</div>
		<div class="section-3">
			<div class="container">
				<div class="center team">
					<h2>Meet our Team</h2>
					<img src="/img/home/profile.png" class="circle responsive-img" alt="profile picture of hannes verdoodt">
					<p><strong>Hannes Verdoodt</strong></p>
					<p>Founder and Developer</p>
				</div>
			</div>
		</div>
		<footer>
			<div class="container row">
				<div class="col left">
					<p>Copyrights 2015 - Urban Tell</p>
				</div>
				<div class="col right">
				<ul>
					<li><a href=""><i class="tiny flaticon-facebook55"></i></a></li>
					<li><a href=""><i class="tiny flaticon-google116"></i></a></li>
					<li><a href=""><i class="tiny flaticon-twitter1"></i></a></li>
				</ul>
				</div>
			</div>
		</footer>
	</body>
</html>
