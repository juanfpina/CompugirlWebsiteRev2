<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CompuGirls Home</title>

		<!-- Css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/main.css">

		<!-- Scripts -->
		<script src="js/jquery-2.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/app.js"></script>

	</head>

	<body>

		
				
			

		<div class="container">
			<!-- Used for javascript depending on media queries-->
			<div class="sampleClass"></div>
			<div class="navigation">
					<p><a href="#" class="hidemenu">X</a></p>
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="#home">Home</a></li>
						<li><a href="#involved">Get Involved</a></li>
						<li><a href="#calendar">Calendar</a></li>
						<li><a href="#games">Games</a></li>
						<!-- only if signed in -->
						<li><a href="#progress">My Progress</a></li>
						<li><a href="#profile">My Profile</a></li>
						<!-- end signed in -->
						<br>
						<br>
						<br>
						<li><a href="#login">Log In</a></li>
						<li><a href="#signup">Sign Up</a></li>
						<br>
						<li><a href="#contact">Contact Us</a></li>
					</ul>
				</div>

			<div class="row">
				<a href="#" class="showmenu"><img src="http://f.cl.ly/items/1U2c3b1215383h3a2T2r/icon-menu.svg"/> Menu</a>

				<div class="content col-xs-12">
					
				</div>
			</div>

		</div>

		<div id="home" class="hidden">
			<div class="jumbotron">
				<h1>Welcome CompuGirls</h1>
				<p>This is a simple dummy jumbotron for the home page</p>
				<p>Make sure to sign up for an account if you have not created one yet</p>
				<p><a href="#signup" class="btn btn-primary btn-lg">Sign Up</a></p>
</div>
			</div>
		</div>

		<div id="calendar" class="hidden">
			<iframe src="https://www.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=lielcvjkud2ge5tg3bcd4oln0c%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=America%2FPhoenix" style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="no"></iframe>
		</div>

		<div id="games" class="hidden">
			<h3>List of Games</h3>
			<div class="gamelist">
				<ul class="nav nav-tabs">
					<li><a href="#">Something fun</a></li>
					<li><a href="#">Spot the Difference</a></li>
					<li><a href="#">Snake</a></li>
					<li><a href="#">Word Search</a></li>
				</ul>
			</div>
		</div>
		
		<div id="login" class="hidden">
			<form class="form-signin">
				<h2 class="form-signin-heading">Please sign in</h2>
				<input type="name" class="form-control" placeholder="Username" required autofocus>
				<input type="password" class="form-control" placeholder="Password" required>
				<div class="checkbox">
					<label>
						<input type="checkbox" value"remember-me"> Remember me
					</label>
				</div>
				<button type="submit" class="btn btn-lg btn-primary btn-block" >Sign in</button>
			</form>
		</div>
		
		<div id="signup" class="hidden">
			<form class="form-signup">
				<h2 class="form-signup-heading">Please register</h2>
				<input type="name" class="form-control" placeholder="First name" required autofocus>
				<input type="name" class="form-control" placeholder="Last name" required>
				<input type="email" class="form-control" placeholder="Email" required>
				<input type="name" class="form-control" placeholder="Username" required>
				<input type="password" class="form-control" placeholder="Password" required>
				
				<button type="submit" class="btn btn-lg btn-primary btn-block" >Sign Up</button>
			</form>
		</div>

	</body>

</html>