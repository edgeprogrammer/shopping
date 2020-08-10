<?PHP
	session_start();

	if(isset($_SESSION['id']))
	{
		session_destroy();
		echo "<script> location.href='dblogin.php' </script>";
	}
	else
	{
		echo "<script> location.href='dblogin.php' </script>";
	}
?>
