<?php 
 session_start();
 require_once "updateprofile.php";
 require_once "profilepicupload.php";
?>

<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>profile update page</title>
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
				<a href="index.html" class="logo">Air Shoe Center</a>
				<nav class="right">
					<a href="#" class="button alt">Log in</a>
				</nav>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index3d.php">Home</a></li>
					<li><a href="profile2.php">My Profile</a></li>
					<li><a href="index2.php">My Posts</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="index.php?action=logout" class="button fit">Logout</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h1>Update User Profile</h1>
						<p><?php echo $_SESSION['succ']; ?></p>
					</header>
	        <div class="flex-item image fit round">
						<img src="uploads/<?php echo $_SESSION['pic']; ?>" alt="" />
					</div>
					<form method="post" action="updateprofile2.php" enctype="multipart/form-data">
					  <input type="file" name="filetoupload" value="choo"/>
					  <input name="upload" type="submit" value="Upload"/>
					</form>
					<div class="row">
					  <form method="post" action="updateprofile2.php">
							<div class="6u 12u$(small)">
								<h3>First Name</h3>
		<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="Fname" id="name" value="" placeholder="" />
											</div>
											</div>
							</div>
		<div class="6u 12u$(small)">
								<h3>Surname Name</h3>
		<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="Lname" id="name" value="" placeholder="" />
											</div>
											</div>
							</div>
		<div class="6u 12u$(small)">
								<h3>Email Address</h3>
		<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="email" name="email" id="name" value="" placeholder="" />
											</div>
											</div>
							</div>
		<div class="6u 12u$(small)">
								<h3>Username</h3>
		<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="Uname" id="name" value="" placeholder="" />
											</div>
											</div>
					</div>
		<div class="6u 12u$(small)">
								<h3>Password</h3>
		<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="password" name="pword" id="name" value="" placeholder="" />
											</div>
											</div>
							</div><br>
	           <ul class="actions">
													<li><input type="submit" value="Save Changes" name="buttonSave" /></li>
											</ul>
							</form>
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
						<li><span class="icon fa-map-marker"></span> 123 Kampala Road, Kampala</li>
					</ul>
				</div>
				<div class="copyright">
					&copy; <a>Airteknologies</a>. Design <a href="https://templated.co">TEMPLATED</a>.
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