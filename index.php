<?php
session_start();
require_once "logout1.php";
require_once("product.php");
?>

<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Intensify by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="index.php" class="logo">Air Shoe Mall</a>
				<nav class="right">
					<a href="#" class="button alt">Log in</a>
				</nav>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="#one">About Us</a></li>
					<li><a href="#footer">Contact Us</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="login2.php" class="button fit">Login</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="main2.php" class="button fit">Sign Up</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="content">
					<h1 style="">The Home of Sneakers!!</h1>
					<p>.                                                                                                                                       <br /></p>
					<ul class="actions">
						<li><a href="#three" class="button scrolly">Let's Design!!</a></li>
					</ul>
				</div>
			</section>



		<!-- Two -->
			<section id="two" class="wrapper style1 special">
				<div class="inner">
					<h2>The Million Dollar Qoute!</h2>
					<figure>
					    <blockquote>
					        "All men are equal, but men who wear sneakers are more equal than others.<br /> "
					    </blockquote>
					    <footer>
					        <cite class="author">Isma Andersons</cite>
					        <cite class="company">CEO, Air Teknologies LTD</cite>
					    </footer>
					</figure>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper">
			<div class="inner flex flex-3">
			  <?php
			     $conn = new mysqli("localhost","root","","MyAPI");
			     if(!$conn) die($conn->connect_error);
			     $query = "select id from User";
			     $result = $conn->query($query);
			     if(!$result) die($conn->error);
			     $rows = $result->num_rows;
			     for($i = 0; $i < $rows; ++$i){
			       $result->data_seek;
			       $row = $result->fetch_array(MYSQLI_ASSOC);
			       global $id1; 
			       $id1 = $row['id'];
			       
			       $query1 = "select * from Images".$id1;
			       $result1 = $conn->query($query1);
			       if(!$result1){
			         //die($conn->error); continue;
			         }
			       $rows1 = $result1->num_rows;
			       for($j = 0; $j < $rows1; ++$j){
			         $result1->data_seek;
			         $row1 = $result1->fetch_array(MYSQLI_ASSOC);
			         
		echo '<div class="flex-item box">'
						.'<div class="image fit">'
							.'<img src='.'uploads/'.$row1['image'].'/>'.
						'</div>'.
						'<div class="content">
							<h3>'.$row1['title'].'</h3>
							<p>'.$row1['content'].'</p>
									<ul class="actions small">
										<li><a href="airprofile.php" name="product" class="button special small">Contact seller for this!!</a></li>
						</div>
					</div>';
				  }
			}
					?>
				</div>
			</section>
			
		<!-- One -->
			<section id="one" class="wrapper">
				<div class="inner flex flex-3">
					<div class="flex-item left">
						<div>
							<h3>About Us</h3>
							<p>We are an enthusiastic team of designers ready  to bring closer to you the sneaker pair of your dreams.<br />We deliver your orders right to your door step at the cheapest shipping fee ever!<br/> You can also pick up your purchases directly from our store at Cham Towers,Kampala Road.</p>
						</div>
						<div>
							<h3>Our Team</h3>
							<p>Isma Andersons a.k.a Air, Janat.K, Chris West, B.Andrew, Kenneth.M, William, W.Cranmer,<br /> B.Brian, B.Claire and Diana.S.</p>
						</div>
					</div>
					<div class="flex-item image fit round">
						<img src="images/pic01.jpg" alt="" />
					</div>
					<div class="flex-item right">
						<div>
							<h3>Our Vision</h3>
							<p>To be the Lead Supplier of Original sneakers in Uganda and  to her neighbours.</p>
						</div>
						<div>
							<h3>Our mission</h3>
							<p>Supplying sneakers to all our customers daily at the Cheapest price possible.<br /></p>
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
						<li><span class="icon fa-map-marker"></span> 123 Kampala Road, Kampala</li>
					</ul>
				</div>
				<div class="copyright">
					&copy; <a></a>Air Teknologies LTD</a>. Design <a href="https://templated.co">TEMPLATED</a>.
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