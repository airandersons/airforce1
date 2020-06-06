<?php 
  session_start();
  require_once "profilep.php";
  require_once "logout1.php";
  require_once "fileupload.php";
?>

<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>my posts page</title>
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
					<li><a href="index3d.php">Home</a></li>
					<li><a href="profile2.php">My profile</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="index.php?action=logout" class="button fit">Logout</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="content">
					<h1 style="color:orange">The Home of Sneakers</h1>
					<p>.                                                                                                                   <br /></p>
					<ul class="actions">
						<li><a href="#three" class="button scrolly">My Posts</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
		<!--	<section id="one" class="wrapper">
				<div class="inner flex flex-3">
					<div class="flex-item left">
						<div>
							<h3>Magna ultricies</h3>
							<p>Morbi in sem quis dui plalorem ipsum<br /> euismod in, pharetra sed ultricies.</p>
						</div>
						<div>
							<h3>Ipsum adipiscing lorem</h3>
							<p>Tristique yonve cursus jam nulla quam<br /> loreipsu gravida adipiscing lorem</p>
						</div>
					</div>
					<div class="flex-item image fit round">
						<img src="images/pic01.jpg" alt="" />
					</div>
					<div class="flex-item right">
						<div>
							<h3>Tempus nullam</h3>
							<p>Sed adipiscing ornare risus. Morbi estes<br /> blandit sit et amet, sagittis magna.</p>
						</div>
						<div>
							<h3>Suscipit nibh dolore</h3>
							<p>Pellentesque egestas sem. Suspendisse<br /> modo ullamcorper feugiat lorem.</p>
						</div>
					</div>
				</div>
			</section> -->

		<!-- Two -->
			<!-- <section id="two" class="wrapper style1 special">
				<div class="inner">
					<h2>Feugiat lorem</h2>
					<figure>
					    <blockquote>
					        "Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra<br /> magna etiam lorem ultricies in diam. Sed arcu cras consequat."
					    </blockquote>
					    <footer>
					        <cite class="author">Jane Anderson</cite>
					        <cite class="company">CEO, Untitled</cite>
					    </footer>
					</figure>
				</div>
			</section> -->

		<!-- Three -->
			<section id="three" class="wrapper">
			  <form enctype="multipart/form-data" method="post" action="index2.php">
				<div class="inner flex flex-3">
					<div class="flex-item box">
						<div class="image fit">
							<img src="<?php //echo $target_file; ?>" alt="" />
							<input type="file" name="fileToUpload">
						</div>
						<div class="content">
							<textarea name="title" rows="2" cols="10">Name of product.
							  
							</textarea>
               <textarea name="content" rows="5" cols="40">Say something about your product.
               </textarea>
							<input type="submit" name="submit" value="Post content">
						</div>
					</div>
				  <?php
				  if(isset($_POST['delete'])){
				    $id = $_POST['del'];
				   //print($id);
				    $query1 = "delete from Images". $_SESSION['id']." where id ='$id'";
				    $result1 = $conn->query($query1);
				    //print_r($result1);
				    if(!$result1) die($result1->error);
				  }
				  
				      $conn = new mysqli("localhost", "root", "","MyAPI");
				      if(!$conn) die($conn->connect_error);
				      $query = "select * from Images".$_SESSION['id'];
				      $result = $conn->query($query);
				      if(!$result) die($conn->error);
				      $rows = $result->num_rows;
				      for($i = 0; $i < $rows; ++$i){
				        $result->data_seek($i);
				        $row = $result->fetch_array(MYSQLI_ASSOC);

		echo '<div class="flex-item box">'
						.'<div class="image fit">'
							.'<img src='.'uploads/'.$row['image'].'/>'.
						'</div>'.
						'<div class="content">
							<h3>'.$row['title'].$row['id'].'</h3>
							<p>'.$row['content'].'</p>'.'<form method="post"'.'action="index2.php">'.'
							<input type="hidden"'.' name="del"'.' value='.$row['id'].'>'.'<input type="submit"'.' value="Delete content"'.' name="delete">'.'</form>
						</div>
					</div>';
				  }
				 

					?>

				</div>
				</form>
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
						<li><span class="icon fa-map-marker"></span> 123 Kampala Road, Kampala.</li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Air Teknologies. Design <a href="https://templated.co">TEMPLATED</a>
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