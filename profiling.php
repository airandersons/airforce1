<?php
session_start();
require_once("mainp.php");
try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password1);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$stmt1 = $conn->prepare("select * from User where email=:email");
	$stmt1->bindParam("email",$_SESSION["email"]);
	$stmt1->execute();
	
	$pic = $stmt1->fetch(PDO::FETCH_OBJ);
	$_SESSION["pic"] = $pic->pics;
	
  }
  catch(PDOException $e){
    echo "Error: " . $e->getMessage();
  }
  
?>