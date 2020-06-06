<?php
session_start();
require 'mainp.php';
if(isset($_POST['buttonLogin'])) {
  $email = sanitize($_POST["email"]);
  $pword = sha1(sanitize($_POST["pword"]));
  
  try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password1);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $conn->prepare('select * from User where email = :email');
	$stmt->bindParam('email', $email);
	$stmt->execute();
	$User = $stmt->fetch(PDO::FETCH_OBJ);
	//print_r($User);
    if($User != NULL) {
      $_SESSION['id'] = $User->id;
        if ($pword == $User->password){
        $_SESSION['email'] = $User->email;
            header('location: http://localhost:8080/project1/intensify/index2.php');
        } else {
            $error = 'Account Invalid';
        }
    } else {
        $error = 'Account Invalid';
    }
  }
  catch(PDOException $e){
    echo "Error: " . $e->getMessage();
  }
}
?>