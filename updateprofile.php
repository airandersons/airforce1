<?php
session_start();
$servername = "localhost";
$dbname = "MyAPI";
$username = "root";
$password1 = "";

 try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password1);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare('select * from User where email = :email');
$stmt->bindValue('email', $_SESSION['email']);
$stmt->execute();
$User = $stmt->fetch(PDO::FETCH_OBJ);

if(isset($_POST['buttonSave'])) {
    $stmt = $conn->prepare('update User set Fname = :Fname, Lname = :Lname,email = :email, password = :password where email = :email1');
	$stmt->bindValue('Fname', $_POST['Fname']);
	$stmt->bindValue('Lname',$_POST['Lname']);
	$stmt->bindValue('email', $_POST['email']);
  $stmt->bindValue('password', sha1($_POST['pword']));
  $stmt->bindvalue('email1', $_SESSION['email']);
	$stmt->execute();
	//header('location:login2.php');
	if($stmt){
	  $_SESSION["email"] = $_POST["email"];
	$_SESSION["succ"] = "Status updated successfully";
	  
	}
    }
 }
 catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
	
?>

