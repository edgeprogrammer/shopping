<?php
session_start();
header("location:index.php");
$firstName=$_POST['firstName'];

$address=$_POST['address'];

$email=$_POST['email'];

$password=$_POST['password'];

$number=$_POST['number'];

$conn= new mysqli("localhost","clientin_ciuser","Nb0DQ(ZH29&H","clientin_cidb");
if($conn->connect_error){
	#echo "string";
	die('Connection Failed :'.$conn->connect_error);
}
else{

	$stml=$conn->prepare("insert into registration(firstName,number,email,address,password) VALUES(?,?,?,?,?)");
	$stml->bind_param("sisss",$firstName,$number,$email,$address,$password);
	$stml->execute();
	echo "registration successfully";

	$stml->close();
	$conn->close();
}
?>