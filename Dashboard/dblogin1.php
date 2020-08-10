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

  <title>GSRF - Login</title>

  <!-- Custom fonts for this template-->
  <link href="CSS/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome To Dashboard !</h1>
                    <hr/>
                  </div>
                  <form class="user" method="POST" action="#">
                    <div class="form-group">
                      <input type="text" name="umail" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="upass" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>

                    <div class="form-group">                     <div class="custom-control custom-checkbox small">                    </div>                    </div>

                    <input type="submit" name="submit" value="Login" class="btn btn-primary btn-user btn-block"/>
                    <!-- <a href="index.html" class="btn btn-primary btn-user btn-block">
                      Login
                    </a> -->
                    <!-- <hr/><hr/><hr/><hr/> -->
                    <!-- <hr> -->
                    <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a> -->
                  </form>
                  <hr>

                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <hr/>
                  <!-- <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="JS/jquery.min.js"></script>
  <script src="JS/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="JS/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="JS/sb-admin-2.min.js"></script>

</body>

</html>
<?PHP
if(isset($_POST['submit']))
{
  $user = $_POST['umail'];
  $pass = $_POST['upass'];
  // if (strcmp($user,'Admin') && strcmp($pass,'Admin') )
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



  // echo $user;
  // echo $pass;

?>
