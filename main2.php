<?php
session_start();
require_once("mainp.php");
?>

<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Sign Up page</title>
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
					<a href="login2.php" class="button alt">Log in</a>
				</nav>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="#footer">Contact Us</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="#" class="button fit">Login</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h1>SignUp Here</h1>
						<p> </p>
					</header>

					<hr class="major" />
								<!-- Form -->

									<form name="signup" method="post" onsubmit="return validateForm()" action="main2.php">
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="Fname" class="name" id="name" value="<?php echo $_POST["Fname"]; ?>" placeholder="First Name" />
											<span id="span1" style="color:red;"></span>
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type="text" name="Lname" class="name" id="" value="<?php echo $_POST["Lname"]; ?>" placeholder="Surname" />
											<span id="span2" style="color:red;"></span>
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type="email" name="email" id="email" value="<?php echo $_POST["email"]; ?>" placeholder="Email" />
											<span id="span3" style="color:red;"></span>
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type="text" name="Uname" class="name" id="" value="<?php echo $_POST["Uname"]; ?>" placeholder="Username" />
											<span id="span4" style="color:red;"></span>
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type="password" class="password" name="pword" id="pword" value="<?php echo $_POST["pword"]; ?>" placeholder="password" />
												<span id="span5" style="color:red;"></span>
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type="password" class="password" name="pwordr" id="pwordr" value="<?php echo $_POST["pwordr"]; ?>" placeholder="Re-type password" />
												<span id="span6" style="color:red;"></span>
											</div>
											<!-- Break -->
											<div class="12u$">
												<ul class="actions">
													<li><input type="submit" value="Sign Up" name="buttonSignUp" /></li>
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
					&copy; <a>Air Teknologies.</a> Design <a href="https://templated.co">TEMPLATED</a>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			
			<script>
function validateForm() {
    var fname = document.forms["signup"]["Fname"].value;
    var lname = document. forms["signup"]["Lname"].value;
    var email = document. forms["signup"]["email"].value;
    var uname = document. forms["signup"]["Uname"].value;
    var pword = document. forms["signup"]["pword"].value;
    var pwordr = document. forms["signup"]["pwordr"].value;
    
    if (fname == null || fname == "") {
    document.getElementById("span1").innerHTML = "First name is required!";
        return false;
    }
    
    if (lname == null || lname == "") {
    document.getElementById("span2").innerHTML = "Last name is required!";
        return false;
    }
    
    if (email == null || email == "") {
    document.getElementById("span3").innerHTML = "Your Email is required!";
        return false;
    }
    
    if (uname == null || uname == "") {
    document.getElementById("span4").innerHTML = "Username is required!";
        return false;
    }
    
    if (pword == null || pword == "") {
    document.getElementById("span5").innerHTML = "This field is required!";
        return false;
    }
    
    if (pwordr == null || pwordr == "") {
    document.getElementById("span6").innerHTML = "This field is required!";
        return false;
    }
    
    if(pword.length < 6){
      document.getElementById("span5").innerHTML = "at least 6 chatacters required!";
      return false;
    }
    
    if(pwordr !== pword){
      document.getElementById("span6").innerHTML = "passwords do not match!";
      return false;
    }
}
			</script>

	</body>
</html>