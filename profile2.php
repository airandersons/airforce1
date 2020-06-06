<?php 
 session_start();
 require_once "logout1.php";
 require_once "profiling.php";
?>

<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Generic - Intensify by TEMPLATED</title>
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
					<li><a href="index3d.php">Home</a></li>
					<li><a href="index2.php">My posts</a></li>
					<li><a href="updateprofile2.php">Update Profile</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="index.php?action=logout" class="button fit">Logout</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h1><?php echo $_SESSION['Uname']."'s Profile"; ?></h1>
						<p></p>
					</header>
	        <div class="flex-item image fit round">
						<img src="uploads/<?php echo $_SESSION['pic']; ?>" alt="" />
					</div>
					<div class="row">
							<div class="6u 12u$(small)">
								<h3>First Name</h3>
								<p><?php echo $_SESSION['Fname']; ?></p>
							</div>
		<div class="6u 12u$(small)">
								<h3>Surname Name</h3>
								<p><?php echo $_SESSION["Lname"]; ?></p>
							</div>
		<div class="6u 12u$(small)">
								<h3>Email Address</h3>
								<p><?php echo $_SESSION["email"]; ?></p>
							</div>
		<div class="6u 12u$(small)">
								<h3>Username</h3>
								<p><?php echo $_SESSION["Uname"]; ?></p>
							</div>
		<div class="6u 12u$(small)">
								<h3>Gender</h3>
								<p></p>
							</div>
		<div class="6u 12u$(small)">
								<h3>Date Of Birth</h3>
								<p></p>
							</div>
						</div>
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
						<li><span class="icon fa-map-marker"></span> 123 Kampala Road, Kamapala</li>
					</ul>
				</div>
				<div class="copyright">
					&copy;<a> Air Teknologies.</a> Design <a href="https://templated.co">TEMPLATED</a>.
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