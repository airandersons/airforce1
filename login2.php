<?php
session_start();
require_once("loginp1.php");
?>

<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Login Page</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="index.php" class="logo">Air Shoe Center</a>
				<nav class="right">
					<a href="#" class="button alt">Log in</a>
				</nav>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="#footer">Contact Us</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="main2.php" class="button fit">Sign Up</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h1>Login Here</h1>
						<p><?php echo $_SESSION["success"]; ?> </p>
					</header>

					<hr class="major" />
								<!-- Form -->

									<form method="post" action="login2.php">
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="email" name="email" id="name" value="<?php echo $email; ?>" placeholder="Email" />
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type="password" name="pword" id="email" value="<?php echo $pword; ?>" placeholder="password" />
											</div>
											<!-- Break -->
											<div class="12u$">
												<ul class="actions">
													<li><input type="submit" value="Login" name="buttonLogin" /></li>
												</ul>
											</div>
										</div>
									</form>

									<hr />

							</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>Get In Touch</h2>
									<ul class="icons">
												<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
												<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
							</ul>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">(+256) 708-131-220</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">airtek5@gmail.com</a></li>
						<li><span class="icon fa-map-marker"></span> 123 Kampala Road, Kampala</li>
					</ul>
				</div>
				<div class="copyright">
					&copy; <a>Air Teknologies</a>. Design <a href="https://templated.co">TEMPLATED</a>.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>