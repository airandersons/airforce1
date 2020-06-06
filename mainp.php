<?php 
session_start();
$servername = "localhost";
$dbname = "MyAPI";
$username = "root";
$password1 = "";
 

//inserting data into database
if(isset($_POST["buttonSignUp"])){
  $Fname = sanitize($_POST["Fname"]);
  $Lname = sanitize($_POST["Lname"]);
  $email = sanitize($_POST["email"]);
  $Uname = sanitize($_POST["Uname"]);
  $pword = sha1(sanitize($_POST["pword"]));
  $pwordr = sha1(sanitize($_POST["pwordr"]));
  
 try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password1);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
 $stmt3 = $conn->prepare("select * from User where email=:email");
 $stmt3->bindParam("email",$email);
 $stmt3->execute();
 $User3 = $stmt3->fetch(PDO::FETCH_OBJ);
 if($User3->email){ 
   echo '<p style="color:red;">Email linked to an account already!!</p>';
 }else{
 
    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO User (Fname, Lname, email, Uname, password, passwordr)
    VALUES (:Fname, :Lname, :email, :Uname, :password, :passwordr)");
    $stmt->bindParam(':Fname', $Fname);
    $stmt->bindParam(':Lname', $Lname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':Uname', $Uname);
    $stmt->bindParam(':password', $pword);
    $stmt->bindParam(':passwordr', $pwordr);
    $stmt->execute();
  
   $stmt1 = $conn->prepare('SELECT * FROM User where email = :email');
   $stmt1->bindParam('email', $email);
   $stmt1->execute();
    
  $User = $stmt1->fetch(PDO::FETCH_OBJ);
  $c = $User->id;
  
    $stmt2 = $conn->prepare('CREATE TABLE Images'.$c.'(image VARCHAR(255), title TEXT, content TEXT, id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY)');
    $stmt2->execute();
    $_SESSION["success"] = "SignUp Successful. Now login to start!!";
   header("Location: http://localhost:8080/project1/intensify/login2.php");
 }
    }
 catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
  
}
//function to sanitize user input
function sanitize($text){
  $text = trim($text);
  $text = stripslashes($text);
  $text = htmlspecialchars($text);
  return $text;
}


?>