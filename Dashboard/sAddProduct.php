<?PHP
  session_start();

 if(isset($_SESSION['id']))
 {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>ClientBazar - Dashboard</title>

      <!-- Custom fonts for this template-->
      <link href="CSS/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      <!-- Custom styles for this template-->
      <link href="CSS/sb-admin-2.min.css" rel="stylesheet">

      <style media="screen">
        .navbar-nav
        {
          width: 100%;
        }
        .navbar-nav h1
        {
          width: 90%;
        }


      </style>

    </head>

    <body id="page-top">

      <!-- Page Wrapper -->
      <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon rotate-n-15">
              <!-- <i class="fas fa-laugh-wink"></i> -->
            </div>
            <div class="sidebar-brand-text mx-3">ClientInvesters Admin <sup>😎 </sup></div>
          </a>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <!-- Nav Item - Dashboard -->
          <li class="nav-item active">
            <a class="nav-link" href="index.php">
              <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
              <span>Dashboard</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
            Order
          </div>

          <!-- Nav Item - Tables -->
          <li class="nav-item">
            <a class="nav-link" href="#">
              <!-- <i class="fas fa-fw fa-table"></i> -->
              <span>Order Details </span></a>
          </li>


          <hr class="sidebar-divider">
          <!-- Heading -->
          <div class="sidebar-heading">
            Panel
          </div>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              <!-- <i class="fas fa-fw fa-cog"></i> -->
              <!-- <i class="fas fa-cog"></i> -->
              <!-- 🧧 -->
              <span>Products</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Add Product</h6>
                <a class="collapse-item" href="gAddProduct.php"> Add Grocery Product </a>
                <a class="collapse-item" href="fAddProduct.php">Add Fashion Product</a>
                <a class="collapse-item" href="sAddProduct.php">Add Seafty Product</a>
                <h6 class="collapse-header">List of Products</h6>
                <a class="collapse-item" href="gdisp.php"> Grocery Products </a>
                <a class="collapse-item" href="fdisp.php">Fashion Products</a>
                <a class="collapse-item" href="sdisp.php">Safety Products</a>
              </div>
            </div>
          </li>


          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
            User Dtails
          </div>

          <!-- Nav Item - Tables -->
          <li class="nav-item">
            <a class="nav-link" href="userdisp.php">
              <!-- <i class="fas fa-fw fa-table"></i> -->
              <span>User Details</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">

          <!-- Sidebar Toggler (Sidebar) -->
          <!-- <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"> Hi</button>
          </div> -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

              <!-- Sidebar Toggle (Topbar) -->
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
              </button>

              <!-- Topbar Search -->
              <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                  <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                      <i class="fas fa-search fa-sm"></i>
                    </button>
                  </div>
                </div>
              </form> -->

              <!-- Topbar Navbar -->
              <ul class="navbar-nav ml-auto">
                <h1> Safety Products </h1>

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">

                  <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw">  </i>
                  </a>
                  <!-- Dropdown - Messages -->
                  <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">

                  </div>
                </li>





                <div class="topbar-divider d-none d-sm-block">
                </div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                  <a href="logout.php"> <button type="button" name="button" class="btn btn-danger"  value="Logout" > Logout</button> </a>

                  <!-- Dropdown - User Information -->

                </li>

              </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
              <!-- Page Heading -->
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Add New Product</h1>
              </div>
              <!-- index page content -->
              <div class="">
                <form class="form" action="#" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="scat">Category</label>
                    <input type="text" name="scat" class="form-control" placeholder="Safety Product Category" required>
                  </div>
                  <div class="form-group">
                    <label for="stype">Type </label>
                    <input type="text" name="stype" class="form-control" placeholder="Safety Product Type" required>
                  </div>
                  <div class="form-group">
                    <label for="sbrand">Brand </label>
                    <input type="text" name="sbrand" class="form-control" placeholder="Safety Product Brand Name" required>
                  </div>
                  <div class="form-group">
                    <label for="squantity">Quantity </label>
                    <input type="text" name="squantity" class="form-control" placeholder="Safety Product Quantity" required>
                  </div>
                  <div class="form-group">
                    <label for="sprice">Price </label>
                    <input type="text" name="sprice" class="form-control" placeholder="Safety Product Price" required>
                  </div>
                  <div class="form-group">
                    <label for="sdesc">Safety Product Description </label>
                    <textarea name="sdesc" class="form-control" rows="5" cols="80" placeholder="About Your Safety Product"></textarea>
                    <!-- <input type="text" name="gprice" class="form-control" placeholder="Product Price" required> -->
                  </div>

                  <div class="form-group">
                    <label for="simg">Safety Product Image</label>
                    <input type="file" name="simg" accept=".jpg, .png" required />
                      <!-- <div class="custom-file">
                       <input type="file" class="custom-file-input" name="uReport" id="validatedCustomFile" accept=".pdf" >
                       <label class="custom-file-label" for="validatedCustomFile">Choose Report...</label>
                     </div> -->
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-success" name="submit" value="Save"/>
                  </div>
                </form>
                <hr/>

              </div>


          </div>
          <!-- End of Main Content -->

          <!-- Footer -->
          <footer class="sticky-footer bg-white">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>Copyright &copy; <a href="#"> Client Investers </a> | Designed By: <a href="www.indiaprocess.com"> Indiaprocess.com </a> </span>
              </div>
            </div>
          </footer>
          <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

      </div>
      <!-- End of Page Wrapper -->

      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>

      <!-- Logout Modal-->
      <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="logout.php">Logout</a>
            </div>
          </div>
        </div> -->
      </div>

      <!-- Bootstrap core JavaScript-->
      <script src="JS/jquery.min.js"></script>
      <script src="JS/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="JS/jquery.easing.min.js"></script>

      <!-- Custom scripts for all pages-->
      <script src="JS/sb-admin-2.min.js"></script>

      <!-- Page level plugins -->
      <!-- <script src="vendor/chart.js/Chart.min.js"></script> -->

      <!-- Page level custom scripts -->
      <!-- <script src="js/demo/chart-area-demo.js"></script>
      <script src="js/demo/chart-pie-demo.js"></script> -->

    </body>

    </html>
<?PHP
  if(isset($_POST['submit']))
  {
    // include configuration file
    require("db/config.php");

    // date zone function
    date_default_timezone_set("Asia/Kolkata");

    // variable get data from from
    $cat = $_POST['scat'];
    $type = $_POST['stype'];
    $brand = $_POST['sbrand'];
    $quantity = $_POST['squantity'];
    $price = $_POST['sprice'];
    $desc = $_POST['sdesc'];


    // product id stratgy
    $id = "S".date("m").strtoupper($brand[0]).date("yhi");

    // binary format image conversion
    $image = addslashes($_FILES['simg']['tmp_name']);
    $name = addslashes($_FILES['simg']['tmp_name']);
    $image = file_get_contents($image);
    $image = base64_encode($image);

    // database record insert query

    $sql = "INSERT INTO `sproduct`(`sid`, `scategory`, `stype`, `sbrand`, `squantity`, `sprice`, `sdesc`, `simg`) VALUES ('$id','$cat','$type','$brand','$quantity','$price','$desc','$image') ";
    $query = mysqli_query($con,$sql);
    if($query)
    {
      echo "<script> alert('Record Save  !'); </script>";
    }
    else {
      echo "<script> alert('Oops Not Save  !'); </script>";
    }

    mysqli_close($con);
  }

}
else
{
    echo "<script> location.href='dblogin.php' </script>";
}
?>
