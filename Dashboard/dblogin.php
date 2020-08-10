<?PHP
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <!-- <link rel="stylesheet" href="css/bootstrap.min.css">	 -->
 <link rel="stylesheet" type="text/css" href="CSS/global.css">
</head>
<body class="bg">
  <!--<header class="login_h">
  <h2>Rent IT On<h2>
</header>-->
<div class="container-fluid ">
	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-12"></div>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<!--form start-->

<form action='#' method="post" class="form-container">
  <h1>Login Form</h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" id="" name="umail" placeholder="Username" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" name="upass" placeholder="Password" required>
  </div>

  <br>
  <input type="submit" id="submit" name="submit" value="Submit" class="btn btn-success btn-block">
  <br>
  <!-- <p>If not Registered <a href="register.php">Click Here</a></p> -->
</form>

            <!--form ends-->
		</div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
	</div>
</div>
<?PHP
if(isset($_POST['submit']))
{
  $user = $_POST['umail'];
  $pass = $_POST['upass'];
  // if (strcmp($user,'Admin') && strcmp($pass,'Admin') )
  // if($user == 'Admin' && $pass == 'Admin')
  // {
  //   echo "<h1 style='color: white;'> Ok </h1>";
  //   $_SESSION['id'] = 'Admin125';
  //     echo "<script> location.href='index.php'; </script>";
  // }
  if ($user == 'Admin' && $pass == 'Admin')
  {
    $_SESSION['id'] = 'Admin1245';
    echo "<script> location.href='index.php'; </script>";
  }
  else
  {
    echo "<script> alert('Username Or Password Incorrect ...! '); </script> ";
  }
}



  // echo "<h1 style='color: white;'> ".$user . ' + '. $pass . "</h1>";

?>
