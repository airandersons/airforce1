<?php 
session_start();
require_once "loginp1.php";

$servername = "localhost";
$dbname = "MyAPI";
$username = "root";
$password1 = "";
 
//inserting data into database
//if(isset($_POST["buttonProfile"])){
  
 try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password1);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
$stmt = $conn->prepare('select * from User where email = :email');
$stmt->bindValue('email', $_SESSION['email']);
$stmt->execute();
$User = $stmt->fetch(PDO::FETCH_OBJ);
   $_SESSION["Fname"] = $User->Fname;
   $_SESSION["Lname"] = $User->Lname;
   $_SESSION["Uname"] = $User->Uname;
   //$_SESSION["pic"] = $User->pics;
   
    }
 catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
  


?>