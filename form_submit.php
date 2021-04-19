<?php

if(isset($_POST['submit'])){
$name = $_POST['username'];
$email = $_POST['email'];
$psd = $_POST['password'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname="babu";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
// set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO form (username, email,password, dob,mobile,address,gender)
VALUES (:username, :email, :password,:dob,:mobile,:address,:gender)");
    $stmt->bindParam(':username', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $psd);
	 $stmt->bindParam(':dob', $dob);
	  $stmt->bindParam(':mobile', $mobile);
	   $stmt->bindParam(':address', $address);
	    $stmt->bindParam(':gender', $gender);


    $stmt->execute();


   header("Location: succes.php");
}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}
$conn = null;
}else{
	echo "Submit correct data";
}

?>