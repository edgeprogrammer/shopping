<?php 
$email=$_POST['email'];
$password=$_POST['password'];
#echo $email;
$conn = new mysqli("localhost","clientin_ciuser","Nb0DQ(ZH29&H","clientin_cidb");
if($conn->connect_error){
	die("Failed to connect:".$conn->connect_error);
}
else{
	$stml=$conn->prepare("select * from registration where email = ?");
	$stml->bind_param("s",$email);
	$stml->execute();
	$stml_result =$stml->get_result();
	if($stml_result->num_rows>0){
			$data=$stml_result->fetch_assoc();
			if($data['password']=== $password){

				echo "<h2>Login successfully</h2>";
			}
			else
			{
				echo "<h2>Invalid email or password</h2>";
			}
	}
	else
	{
		echo "<h2>Invalid Username or Password</h2>";
	}
}
?>