<!doctype html>
<html lang="zxx">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/boxicons.min.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="assets/css/nice-select.min.css">
        <link rel="stylesheet" href="assets/css/slick.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/rangeSlider.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="assets/css/product.css">

        <title>Client Bazar - Products</title>

        <link rel="icon" type="image/png" href="assets/img/favicon.png">

        <style media="screen">
        .main-image
        {
          /* height: 10em; */
        }

        </style>
    </head>
    <body>


        <?php
          include('header.php');
          require('db/config.php');

          $val = $_GET['id'];

          switch ($val) {

            // grocery section

            case 'G1':

              ?>
              <section class="products-area pt-100 pb-70">
                <div class="container">
                  <div class="section-title">
                      <span class="sub-title">See Our Collection</span>
                      <h2>Dal & Pulses</h2>
                  </div>
                  <div class="row">
                  <!-- product start -->
                  <?PHP
                  $sql = "SELECT * FROM gproduct WHERE gsubCategory='Dal & Pulses'";
                  $result  = mysqli_query($con,$sql);
                  if(mysqli_num_rows($result)>0)
                  {
                    while ($row = mysqli_fetch_assoc($result) )
                    {
                      ?>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-products-box">
                          <div class="products-image">
                              <a href="product-type.php?id=<?PHP echo $row['gpid']; ?>">

                                  <?PHP echo "<td> <img src='data:image;base64,".$row['gimg']."' class='main-image' alt='image'/> </td>"; ?>
                                  <?PHP echo "<td> <img src='data:image;base64,".$row['gimg']."' class='hover-image' alt='image'/> </td>"; ?>
                                  <!-- <img src="assets/img/products/daal.jpg" > -->
                              </a>

                              <div class="products-button">
                                 <ul>
                                      <!-- <li>
                                          <div class="wishlist-btn">
                                              <a href="#">
                                                  <i class='bx bx-heart'></i>
                                                  <span class="tooltip-label">Add to Wishlist</span>
                                              </a>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="compare-btn">
                                              <a href="#">
                                                  <i class='bx bx-refresh'></i>
                                                  <span class="tooltip-label">Compare</span>
                                              </a>
                                          </div>
                                      </li> -->
                                      <li>
                                          <div class="quick-view-btn">
                                              <a href="product-type.php?id=<?PHP echo $row['gpid']; ?>" data-toggle="modal" data-target="#productsQuickView">
                                                  <i class='bx bx-search-alt'></i>
                                                  <span class="tooltip-label">Quick View</span>
                                              </a>
                                          </div>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="products-content">
                              <h3><a href="product-type.php?id=<?PHP echo $row['gpid']; ?>"> <?PHP echo $row['gtype']; echo "&nbsp;(".$row['gbrand'].")"; ?></a></h3>
                              <div class="price">
                                <span class="new-price"> Available </span>
                                  <!-- <span class="old-price">$321</span>
                                  <span class="new-price">$250</span> -->
                              </div>
                              <!-- <div class="star-rating">
                                  <i class='bx bxs-star'></i>
                                  <i class='bx bxs-star'></i>
                                  <i class='bx bxs-star'></i>
                                  <i class='bx bxs-star'></i>
                                  <i class='bx bxs-star'></i>
                              </div> -->
                              <a href="#" class="add-to-cart">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                  <?php
                      }
                    }
                   ?>
                  <!-- product end -->
                  </div>
                </div>
              </section>

              <?PHP

            break;

            case 'G2':
              // case G2 start

              ?>
              <section class="products-area pt-100 pb-70">
                <div class="container">
                  <div class="section-title">
                      <span class="sub-title">See Our Collection</span>
                      <h2>Ghee & Oils</h2>
                  </div>
                  <div class="row">
                  <!-- product start -->
                  <?PHP
                  $sql = "SELECT * FROM gproduct WHERE gsubCategory='Ghee & Oils'";
                  $result  = mysqli_query($con,$sql);
                  if(mysqli_num_rows($result)>0)
                  {
                    while ($row = mysqli_fetch_assoc($result) )
                    {?>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-products-box">
                          <div class="products-image">
                              <a href="product-type.php?id=<?PHP echo $row['gpid']; ?>">

                                  <?PHP echo "<td> <img src='data:image;base64,".$row['gimg']."' class='main-image' alt='image'/> </td>"; ?>
                                  <?PHP echo "<td> <img src='data:image;base64,".$row['gimg']."' class='hover-image' alt='image'/> </td>"; ?>
                                  <!-- <img src="assets/img/products/daal.jpg" > -->
                              </a>

                              <div class="products-button">
                                 <ul>
                                      <!-- <li>
                                          <div class="wishlist-btn">
                                              <a href="#">
                                                  <i class='bx bx-heart'></i>
                                                  <span class="tooltip-label">Add to Wishlist</span>
                                              </a>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="compare-btn">
                                              <a href="#">
                                                  <i class='bx bx-refresh'></i>
                                                  <span class="tooltip-label">Compare</span>
                                              </a>
                                          </div>
                                      </li> -->
                                      <li>
                                          <div class="quick-view-btn">
                                              <a href="product-type.php?id=<?PHP echo $row['gpid']; ?>" data-toggle="modal" data-target="#productsQuickView">
                                                  <i class='bx bx-search-alt'></i>
                                                  <span class="tooltip-label">Quick View</span>
                                              </a>
                                          </div>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="products-content">
                              <h3><a href="product-type.php?id=<?PHP echo $row['gpid']; ?>"> <?PHP echo $row['gtype']; echo "&nbsp;(".$row['gbrand'].")"; ?></a></h3>
                              <div class="price">
                                  <span class="new-price"> Available </span>
                                  <!-- <span class="old-price">$321</span>
                                  <span class="new-price">$250</span> -->
                              </div>
                              <!-- <div class="star-rating">
                                  <i class='bx bxs-star'></i>
                                  <i class='bx bxs-star'></i>
                                  <i class='bx bxs-star'></i>
                                  <i class='bx bxs-star'></i>
                                  <i class='bx bxs-star'></i>
                              </div> -->
                              <a href="#" class="add-to-cart">Add to Cart</a>
                          </div>


                        </div>

                      </div>
                  <?php
                        // echo "<br/>".$row['gpid'];
                      }
                    }
                   ?>
                  <!-- product end -->
                  </div>
                </div>
              </section>
              <?PHP

              // case g2 end


            break;

            case 'G3':
              // case G3 start

              ?>
              <section class="products-area pt-100 pb-70">
                <div class="container">
                  <div class="section-title">
                      <span class="sub-title">See Our Collection</span>
                      <h2>Atta & Flours</h2>
                  </div>
                  <div class="row">
                  <!-- product start -->
                  <?PHP
                  $sql = "SELECT * FROM gproduct WHERE gsubCategory='Atta & Flours'";
                  $result  = mysqli_query($con,$sql);
                  if(mysqli_num_rows($result)>0)
                  {
                    while ($row = mysqli_fetch_assoc($result) )
                    {?>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-products-box">
                          <div class="products-image">
                              <a href="product-type.php?id=<?PHP echo $row['gpid']; ?>">

                                  <?PHP echo "<td> <img src='data:image;base64,".$row['gimg']."' class='main-image' alt='image'/> </td>"; ?>
                                  <?PHP echo "<td> <img src='data:image;base64,".$row['gimg']."' class='hover-image' alt='image'/> </td>"; ?>
                                  <!-- <img src="assets/img/products/daal.jpg" > -->
                              </a>

                              <div class="products-button">
                                 <ul>
                                      <!-- <li>
                                          <div class="wishlist-btn">
                                              <a href="#">
                                                  <i class='bx bx-heart'></i>
                                                  <span class="tooltip-label">Add to Wishlist</span>
                                              </a>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="compare-btn">
                                              <a href="#">
                                                  <i class='bx bx-refresh'></i>
                                                  <span class="tooltip-label">Compare</span>
                                              </a>
                                          </div>
                                      </li> -->
                                      <li>
                                          <div class="quick-view-btn">
                                              <a href="product-type.php?id=<?PHP echo $row['gpid']; ?>" data-toggle="modal" data-target="#productsQuickView">
                                                  <i class='bx bx-search-alt'></i>
                                                  <span class="tooltip-label">Quick View</span>
                                              </a>
                                          </div>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="products-content">
                              <h3><a href="product-type.php?id=<?PHP echo $row['gpid']; ?>"> <?PHP echo $row['gtype']; echo "&nbsp;(".$row['gbrand'].")"; ?></a></h3>
                              <div class="price">
                                <span class="new-price"> Available </span>
                                  <!-- <span class="old-price">$321</span>
                                  <span class="new-price">$250</span> -->
                              </div>
                              <!-- <div class="star-rating">
                                  <i class='bx bxs-star'></i>
                                  <i class='bx bxs-star'></i>
                                  <i class='bx bxs-star'></i>
                                  <i class='bx bxs-star'></i>
                                  <i class='bx bxs-star'></i>
                              </div> -->
                              <a href="#" class="add-to-cart">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                  <?php
                        // echo "<br/>".$row['gpid'];
                      }
                    }
                   ?>
                  <!-- product end -->
                  </div>
                </div>
              </section>
              <?PHP
              // case g3 end

            break;

            case 'G4':
              // case G4 start

              ?>
              <section class="products-area pt-100 pb-70">
                <div class="container">
                  <div class="section-title">
                      <span class="sub-title">See Our Collection</span>
                      <h2>Rice & Rice Products</h2>
                  </div>
                  <div class="row">
                  <!-- product start -->
                  <?PHP
                  $sql = "SELECT * FROM gproduct WHERE gsubCategory='Rice & Rice Products'";
                  $result  = mysqli_query($con,$sql);
                  if(mysqli_num_rows($result)>0)
                  {
                    while ($row = mysqli_fetch_assoc($result) )
                    {?>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-products-box">
                          <div class="products-image">
                              <a href="product-type.php?id=<?PHP echo $row['gpid']; ?>">

                                  <?PHP echo "<td> <img src='data:image;base64,".$row['gimg']."' class='main-image' alt='image'/> </td>"; ?>
                                  <?PHP echo "<td> <img src='data:image;base64,".$row['gimg']."' class='hover-image' alt='image'/> </td>"; ?>
                                  <!-- <img src="assets/img/products/daal.jpg" > -->
                              </a>

                              <div class="products-button">
                                 <ul>
                                      <!-- <li>
                                          <div class="wishlist-btn">
                                              <a href="#">
                                                  <i class='bx bx-heart'></i>
                                                  <span class="tooltip-label">Add to Wishlist</span>
                                              </a>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="compare-btn">
                                              <a href="#">
                                                  <i class='bx bx-refresh'></i>
                                                  <span class="tooltip-label">Compare</span>
                                              </a>
                                          </div>
                                      </li> -->
                                      <li>
                                          <div class="quick-view-btn">
                                              <a href="product-type.php?id=<?PHP echo $row['gpid']; ?>" data-toggle="modal" data-target="#productsQuickView">
                                                  <i class='bx bx-search-alt'></i>
                                                  <span class="tooltip-label">Quick View</span>
                                              </a>
                                          </div>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="products-content">
                              <h3><a href="product-type.php?id=<?PHP echo $row['gpid']; ?>"> <?PHP echo $row['gtype']; echo "&nbsp;(".$row['gbrand'].")"; ?></a></h3>
                              <div class="price">
                                <span class="new-price"> Available </span>
                                  <!-- <span class="old-price">$321</span>
                                  <span class="new-price">$250</span> -->
                              </div>
                              <!-- <div class="star-rating">
                                  <i class='bx bxs-star'></i>
                                  <i class='bx bxs-star'></i>
                                  <i class='bx bxs-star'></i>
                                  <i class='bx bxs-star'></i>
                                  <i class='bx bxs-star'></i>
                              </div> -->
                              <a href="#" class="add-to-cart">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                  <?php
                        // echo "<br/>".$row['gpid'];
                      }
                    }
                   ?>
                  <!-- product end -->
                  </div>
                </div>
              </section>
              <?PHP
              // case g4 end

            break;

            case 'G5':
              // case G5 start
              ?>
              <section class="products-area pt-100 pb-70">
                <div class="container">
                  <div class="section-title">
                      <span class="sub-title">See Our Collection</span>
                      <h2>Masalas & Spices</h2>
                  </div>
                  <div class="row">
                  <!-- product start -->
                  <?PHP
                  $sql = "SELECT * FROM gproduct WHERE gsubCategory='Masalas & Spices'";
                  $result  = mysqli_query($con,$sql);
                  if(mysqli_num_rows($result)>0)
                  {
                    while ($row = mysqli_fetch_assoc($result) )
                    {?>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-products-box">
                          <div class="products-image">
                              <a href="product-type.php?id=<?PHP echo $row['gpid']; ?>">

                                  <?PHP echo "<td> <img src='data:image;base64,".$row['gimg']."' class='main-image' alt='image'/> </td>"; ?>
                                  <?PHP echo "<td> <img src='data:image;base64,".$row['gimg']."' class='hover-image' alt='image'/> </td>"; ?>
                                  <!-- <img src="assets/img/products/daal.jpg" > -->
                              </a>

                              <div class="products-button">
                                 <ul>
                                      <!-- <li>
                                          <div class="wishlist-btn">
                                              <a href="#">
                                                  <i class='bx bx-heart'></i>
                                                  <span class="tooltip-label">Add to Wishlist</span>
                                              </a>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="compare-btn">
                                              <a href="#">
                                                  <i class='bx bx-refresh'></i>
                                                  <span class="tooltip-label">Compare</span>
                                              </a>
                                          </div>
                                      </li> -->
                                      <li>
                                          <div class="quick-view-btn">
                                              <a href="product-type.php?id=<?PHP echo $row['gpid']; ?>" data-toggle="modal" data-target="#productsQuickView">
                                                  <i class='bx bx-search-alt'></i>
                                                  <span class="tooltip-label">Quick View</span>
                                              </a>
                                          </div>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="products-content">
                              <h3><a href="product-type.php?id=<?PHP echo $row['gpid']; ?>"> <?PHP echo $row['gtype']; echo "&nbsp;(".$row['gbrand'].")"; ?></a></h3>
                              <div class="price">
                                <span class="new-price"> Available </span>
                                  <!-- <span class="old-price">$321</span>
                                  <span class="new-price">$250</span> -->
                              </div>
                              <!-- <div class="star-rating">
                                  <i class='bx bxs-star'></i>
                                  <i class='bx bxs-star'></i>
                                  <i class='bx bxs-star'></i>
                                  <i class='bx bxs-star'></i>
                                  <i class='bx bxs-star'></i>
                              </div> -->
                              <a href="#" class="add-to-cart">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                  <?php
                        // echo "<br/>".$row['gpid'];
                      }
                    }
                   ?>
                  <!-- product end -->
                  </div>
                </div>
              </section>
              <?PHP
              // case g5 end

            break;

            case 'G6':

                        // case G6 start

                        ?>
                        <section class="products-area pt-100 pb-70">
                          <div class="container">
                            <div class="section-title">
                                <span class="sub-title">See Our Collection</span>
                                <h2>Dry Fruits,Nuts & Seeds</h2>
                            </div>
                            <div class="row">
                            <!-- product start -->
                            <?PHP
                            $sql = "SELECT * FROM gproduct WHERE gsubCategory='Dry Fruits,Nuts & Seeds'";
                            $result  = mysqli_query($con,$sql);
                            if(mysqli_num_rows($result)>0)
                            {
                              while ($row = mysqli_fetch_assoc($result) )
                              {?>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                  <div class="single-products-box">
                                    <div class="products-image">
                                        <a href="product-type.php?id=<?PHP echo $row['gpid']; ?>">

                                            <?PHP echo "<td> <img src='data:image;base64,".$row['gimg']."' class='main-image' alt='image'/> </td>"; ?>
                                            <?PHP echo "<td> <img src='data:image;base64,".$row['gimg']."' class='hover-image' alt='image'/> </td>"; ?>
                                            <!-- <img src="assets/img/products/daal.jpg" > -->
                                        </a>

                                        <div class="products-button">
                                           <ul>
                                                <!-- <li>
                                                    <div class="wishlist-btn">
                                                        <a href="#">
                                                            <i class='bx bx-heart'></i>
                                                            <span class="tooltip-label">Add to Wishlist</span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="compare-btn">
                                                        <a href="#">
                                                            <i class='bx bx-refresh'></i>
                                                            <span class="tooltip-label">Compare</span>
                                                        </a>
                                                    </div>
                                                </li> -->
                                                <li>
                                                    <div class="quick-view-btn">
                                                        <a href="product-type.php?id=<?PHP echo $row['gpid']; ?>" data-toggle="modal" data-target="#productsQuickView">
                                                            <i class='bx bx-search-alt'></i>
                                                            <span class="tooltip-label">Quick View</span>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="products-content">
                                        <h3><a href="product-type.php?id=<?PHP echo $row['gpid']; ?>"> <?PHP echo $row['gtype']; echo "&nbsp;(".$row['gbrand'].")"; ?></a></h3>
                                        <div class="price">
                                            <!-- <span class="old-price">$321</span> -->
                                            <!-- <span class="new-price">$250</span> -->
                                            <span class="new-price"> Available </span>
                                        </div>
                                        <!-- <div class="star-rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div> -->
                                        <a href="#" class="add-to-cart">Add to Cart</a>
                                    </div>
                                  </div>
                                </div>
                            <?php
                                  // echo "<br/>".$row['gpid'];
                                }
                              }
                             ?>
                            <!-- product end -->
                            </div>
                          </div>
                        </section>
                        <?PHP
                        // case g6 end

            break;

            case 'G7':

                                    // case G7 start

                                    ?>
                                    <section class="products-area pt-100 pb-70">
                                      <div class="container">
                                        <div class="section-title">
                                            <span class="sub-title">See Our Collection</span>
                                            <h2>Sugar,Jaggery & Salt</h2>
                                        </div>
                                        <div class="row">
                                        <!-- product start -->
                                        <?PHP
                                        $sql = "SELECT * FROM gproduct WHERE gsubCategory='Sugar,Jaggery & Salt'";
                                        $result  = mysqli_query($con,$sql);
                                        if(mysqli_num_rows($result)>0)
                                        {
                                          while ($row = mysqli_fetch_assoc($result) )
                                          {?>
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                              <div class="single-products-box">
                                                <div class="products-image">
                                                    <a href="product-type.php?id=<?PHP echo $row['gpid']; ?>">

                                                        <?PHP echo "<td> <img src='data:image;base64,".$row['gimg']."' class='main-image' alt='image'/> </td>"; ?>
                                                        <?PHP echo "<td> <img src='data:image;base64,".$row['gimg']."' class='hover-image' alt='image'/> </td>"; ?>
                                                        <!-- <img src="assets/img/products/daal.jpg" > -->
                                                    </a>

                                                    <div class="products-button">
                                                       <ul>
                                                            <!-- <li>
                                                                <div class="wishlist-btn">
                                                                    <a href="#">
                                                                        <i class='bx bx-heart'></i>
                                                                        <span class="tooltip-label">Add to Wishlist</span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="compare-btn">
                                                                    <a href="#">
                                                                        <i class='bx bx-refresh'></i>
                                                                        <span class="tooltip-label">Compare</span>
                                                                    </a>
                                                                </div>
                                                            </li> -->
                                                            <li>
                                                                <div class="quick-view-btn">
                                                                    <a href="product-type.php?id=<?PHP echo $row['gpid']; ?>" data-toggle="modal" data-target="#productsQuickView">
                                                                        <i class='bx bx-search-alt'></i>
                                                                        <span class="tooltip-label">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="products-content">
                                                    <h3><a href="product-type.php?id=<?PHP echo $row['gpid']; ?>"> <?PHP echo $row['gtype']; echo "&nbsp;(".$row['gbrand'].")"; ?></a></h3>
                                                    <div class="price">
                                                      <span class="new-price"><?PHP echo 'Available'; ?></span>
                                                        <!-- <span class="old-price">$321</span>
                                                        <span class="new-price">$250</span> -->
                                                    </div>
                                                    <!-- <div class="star-rating">
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                    </div> -->
                                                    <a href="#" class="add-to-cart">Add to Cart</a>
                                                </div>
                                              </div>
                                            </div>
                                        <?php
                                              // echo "<br/>".$row['gpid'];
                                            }
                                          }
                                         ?>
                                        <!-- product end -->
                                        </div>
                                      </div>
                                    </section>
                                    <?PHP
                                    // case g7 end


            break;

            // Fashion Section

            case 'Men':
              ?>
              <!-- Start Products Area -->
              <section class="products-area pb-70">
                <div class="container">
                  <div class="section-title">
                    <span class="sub-title">See Our Collection</span>
                    <h2> Women Fashion Store</h2>
                  </div>

                  <div class="row">
                    <?PHP
                    $sql = "SELECT * FROM fproduct WHERE fcat='Men'";
                    $result  = mysqli_query($con,$sql);
                    if(mysqli_num_rows($result)>0)
                    {
                      while ($row = mysqli_fetch_assoc($result) )
                      {?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-products-box">
                                <div class="products-image men">
                                    <a href="product-type.php?id=<?PHP echo $row['fid']; ?>">
                                        <?PHP echo "<td> <img src='data:image;base64,".$row['fimg1']."' class='main-image' alt='image'/> </td>"; ?>
                                        <?PHP echo "<td> <img src='data:image;base64,".$row['fimg2']."' class='hover-image' alt='image'/> </td>"; ?>
                                        <!-- <img src="assets/img/products/img13.jpg" class="main-image" alt="image"> -->
                                        <!-- <img src="assets/img/products/img-hover13.jpg" class="hover-image" alt="image"> -->
                                    </a>

                                    <div class="products-button">
                                        <ul>
                                            <!-- <li>
                                                <div class="wishlist-btn">
                                                    <a href="#">
                                                        <i class='bx bx-heart'></i>
                                                        <span class="tooltip-label">Add to Wishlist</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="compare-btn">
                                                    <a href="#">
                                                        <i class='bx bx-refresh'></i>
                                                        <span class="tooltip-label">Compare</span>
                                                    </a>
                                                </div>
                                            </li> -->
                                            <li>
                                                <div class="quick-view-btn">
                                                    <a href="product-type.php?id=<?PHP echo $row['fid']; ?>"> <!--  data-toggle="modal" data-target="#productsQuickView" -->

                                                        <i class='bx bx-search-alt'></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                        <!-- <span class="tooltip-label">   </span> -->
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="products-content">
                                    <h3><a href="product-type.php?id=<?PHP echo $row['fid']; ?>"><?PHP echo $row['fsubCat'].'-'.$row['ftype'].'('.$row['fbrand'].')' ; ?></a></h3>
                                    <div class="price">

                                        <!-- <span class="old-price">$321</span>-->
                                        <span class="new-price"><?PHP echo 'Available'; ?></span>
                                    </div>
                                    <!-- <div class="star-rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div> -->
                                    <a href="#" class="add-to-cart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <?PHP
                      }
                    }
                      ?>

                  </div>
                </div>
              </section>

              <?PHP

            break;

            case 'Women':
              ?>
              <!-- Start Products Area -->
              <section class="products-area pb-70">
                <div class="container">
                  <div class="section-title">
                    <span class="sub-title">See Our Collection</span>
                    <h2> Men Fashion Store</h2>
                  </div>

                  <div class="row">
                    <?PHP
                    $sql = "SELECT * FROM fproduct WHERE fcat='Women'";
                    $result  = mysqli_query($con,$sql);
                    if(mysqli_num_rows($result)>0)
                    {
                      while ($row = mysqli_fetch_assoc($result) )
                      {?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-products-box">
                                <div class="products-image women">
                                    <a href="product-type.php?id=<?PHP echo $row['fid']; ?>">
                                        <?PHP echo "<td> <img src='data:image;base64,".$row['fimg1']."' class='main-image' alt='image'/> </td>"; ?>
                                        <?PHP echo "<td> <img src='data:image;base64,".$row['fimg2']."' class='hover-image' alt='image'/> </td>"; ?>
                                        <!-- <img src="assets/img/products/img13.jpg" class="main-image" alt="image"> -->
                                        <!-- <img src="assets/img/products/img-hover13.jpg" class="hover-image" alt="image"> -->
                                    </a>

                                    <div class="products-button">
                                        <ul>
                                            <!-- <li>
                                                <div class="wishlist-btn">
                                                    <a href="#">
                                                        <i class='bx bx-heart'></i>
                                                        <span class="tooltip-label">Add to Wishlist</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="compare-btn">
                                                    <a href="#">
                                                        <i class='bx bx-refresh'></i>
                                                        <span class="tooltip-label">Compare</span>
                                                    </a>
                                                </div>
                                            </li> -->
                                            <li>
                                                <div class="quick-view-btn">
                                                    <a href="product-type.php?id=<?PHP echo $row['fid']; ?>" data-toggle="modal" data-target="#productsQuickView">
                                                        <i class='bx bx-search-alt'></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="products-content">
                                    <h3><a href="product-type.php?id=<?PHP echo $row['fid']; ?>"><?PHP echo $row['fsubCat'].'-'.$row['ftype'].'('.$row['fbrand'].')' ; ?></a></h3>
                                    <div class="price">
                                        <span class="new-price"><?PHP echo 'Available'; ?></span>
                                        <!-- <span class="old-price">$321</span>
                                        <span class="new-price">$250</span> -->
                                    </div>
                                    <!-- <div class="star-rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div> -->
                                    <a href="#" class="add-to-cart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <?PHP
                      }
                    }
                      ?>

                  </div>
                </div>
              </section>

              <?PHP

            break;

            case 'Child':
              ?>
              <!-- Start Products Area -->
              <section class="products-area pb-70">
                <div class="container">
                  <div class="section-title">
                    <span class="sub-title">See Our Collection</span>
                    <h2> Men Fashion Store</h2>
                  </div>

                  <div class="row">
                    <?PHP
                    $sql = "SELECT * FROM fproduct WHERE fcat='Child'";
                    $result  = mysqli_query($con,$sql);
                    if(mysqli_num_rows($result)>0)
                    {
                      while ($row = mysqli_fetch_assoc($result) )
                      {?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-products-box">
                                <div class="products-image child">
                                    <a href="product-type.php?id=<?PHP echo $row['fid']; ?>">
                                        <?PHP echo "<td> <img src='data:image;base64,".$row['fimg1']."' class='main-image' alt='image'/> </td>"; ?>
                                        <?PHP echo "<td> <img src='data:image;base64,".$row['fimg2']."' class='hover-image' alt='image'/> </td>"; ?>
                                        <!-- <img src="assets/img/products/img13.jpg" class="main-image" alt="image"> -->
                                        <!-- <img src="assets/img/products/img-hover13.jpg" class="hover-image" alt="image"> -->
                                    </a>

                                    <div class="products-button">
                                        <ul>
                                            <!-- <li>
                                                <div class="wishlist-btn">
                                                    <a href="#">
                                                        <i class='bx bx-heart'></i>
                                                        <span class="tooltip-label">Add to Wishlist</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="compare-btn">
                                                    <a href="#">
                                                        <i class='bx bx-refresh'></i>
                                                        <span class="tooltip-label">Compare</span>
                                                    </a>
                                                </div>
                                            </li> -->
                                            <li>
                                                <div class="quick-view-btn">
                                                    <a href="product-type.php?id=<?PHP echo $row['fid']; ?>" data-toggle="modal" data-target="#productsQuickView">
                                                        <i class='bx bx-search-alt'></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="products-content">
                                    <h3><a href="product-type.php?id=<?PHP echo $row['fid']; ?>"><?PHP echo $row['fsubCat'].'-'.$row['ftype'].'('.$row['fbrand'].')' ; ?></a></h3>
                                    <div class="price">
                                        <span class="new-price"><?PHP echo 'Available'; ?></span>
                                        <!-- <span class="old-price">$321</span>
                                        <span class="new-price">$250</span> -->
                                    </div>
                                    <!-- <div class="star-rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div> -->
                                    <a href="#" class="add-to-cart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <?PHP
                      }
                    }
                      ?>

                  </div>
                </div>
              </section>

              <?PHP

            break;

            case 'Bride':
              ?>
              <!-- Start Products Area -->
              <section class="products-area pb-70">
                <div class="container">
                  <div class="section-title">
                    <span class="sub-title">See Our Collection</span>
                    <h2> Bride Fashion Store</h2>
                  </div>

                  <div class="row">
                    <?PHP
                    $sql = "SELECT * FROM fproduct WHERE fcat='Bride'";
                    $result  = mysqli_query($con,$sql);
                    if(mysqli_num_rows($result)>0)
                    {
                      while ($row = mysqli_fetch_assoc($result) )
                      {?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-products-box">
                                <div class="products-image Bride">
                                    <a href="product-type.php?id=<?PHP echo $row['fid']; ?>">
                                        <?PHP echo "<td> <img src='data:image;base64,".$row['fimg1']."' class='main-image' alt='image'/> </td>"; ?>
                                        <?PHP echo "<td> <img src='data:image;base64,".$row['fimg2']."' class='hover-image' alt='image'/> </td>"; ?>
                                        <!-- <img src="assets/img/products/img13.jpg" class="main-image" alt="image"> -->
                                        <!-- <img src="assets/img/products/img-hover13.jpg" class="hover-image" alt="image"> -->
                                    </a>

                                    <div class="products-button">
                                        <ul>
                                            <!-- <li>
                                                <div class="wishlist-btn">
                                                    <a href="#">
                                                        <i class='bx bx-heart'></i>
                                                        <span class="tooltip-label">Add to Wishlist</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="compare-btn">
                                                    <a href="#">
                                                        <i class='bx bx-refresh'></i>
                                                        <span class="tooltip-label">Compare</span>
                                                    </a>
                                                </div>
                                            </li> -->
                                            <li>
                                                <div class="quick-view-btn">
                                                    <a href="product-type.php?id=<?PHP echo $row['fid']; ?>" data-toggle="modal" data-target="#productsQuickView">
                                                        <i class='bx bx-search-alt'></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="products-content">
                                    <h3><a href="product-type.php?id=<?PHP echo $row['fid']; ?>"><?PHP echo $row['fsubCat'].'-'.$row['ftype'].'('.$row['fbrand'].')' ; ?></a></h3>
                                    <div class="price">
                                        <span class="new-price"><?PHP echo 'Available'; ?></span>
                                        <!-- <span class="old-price">$321</span>
                                        <span class="new-price">$250</span> -->
                                    </div>
                                    <!-- <div class="star-rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div> -->
                                    <a href="#" class="add-to-cart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <?PHP
                      }
                    }
                      ?>

                  </div>
                </div>
              </section>

              <?PHP

            break;

            case 'Groom':
              ?>
              <!-- Start Products Area -->
              <section class="products-area pb-70">
                <div class="container">
                  <div class="section-title">
                    <span class="sub-title">See Our Collection</span>
                    <h2> Groom Fashion Store</h2>
                  </div>

                  <div class="row">
                    <?PHP
                    $sql = "SELECT * FROM fproduct WHERE fcat='Groom'";
                    $result  = mysqli_query($con,$sql);
                    if(mysqli_num_rows($result)>0)
                    {
                      while ($row = mysqli_fetch_assoc($result) )
                      {?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-products-box">
                                <div class="products-image Groom">
                                    <a href="product-type.php?id=<?PHP echo $row['fid']; ?>">
                                        <?PHP echo "<td> <img src='data:image;base64,".$row['fimg1']."' class='main-image' alt='image'/> </td>"; ?>
                                        <?PHP echo "<td> <img src='data:image;base64,".$row['fimg2']."' class='hover-image' alt='image'/> </td>"; ?>
                                        <!-- <img src="assets/img/products/img13.jpg" class="main-image" alt="image"> -->
                                        <!-- <img src="assets/img/products/img-hover13.jpg" class="hover-image" alt="image"> -->
                                    </a>

                                    <div class="products-button">
                                        <ul>
                                            <!-- <li>
                                                <div class="wishlist-btn">
                                                    <a href="#">
                                                        <i class='bx bx-heart'></i>
                                                        <span class="tooltip-label">Add to Wishlist</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="compare-btn">
                                                    <a href="#">
                                                        <i class='bx bx-refresh'></i>
                                                        <span class="tooltip-label">Compare</span>
                                                    </a>
                                                </div>
                                            </li> -->
                                            <li>
                                                <div class="quick-view-btn">
                                                    <a href="product-type.php?id=<?PHP echo $row['fid']; ?>" data-toggle="modal" data-target="#productsQuickView">
                                                        <i class='bx bx-search-alt'></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="products-content">
                                    <h3><a href="product-type.php?id=<?PHP echo $row['fid']; ?>"><?PHP echo $row['fsubCat'].'-'.$row['ftype'].'('.$row['fbrand'].')' ; ?></a></h3>
                                    <div class="price">
                                        <span class="new-price"><?PHP echo 'Available'; ?></span>
                                        <!-- <span class="old-price">$321</span>
                                        <span class="new-price">$250</span> -->
                                    </div>
                                    <!-- <div class="star-rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div> -->
                                    <a href="#" class="add-to-cart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <?PHP
                      }
                    }
                      ?>

                  </div>
                </div>
              </section>

              <?PHP
            break;

            // Safety Section


            case 'Wash':
              ?>
              <!-- Start Products Area -->
              <section class="products-area pb-70">
                <div class="container">
                  <div class="section-title">
                    <span class="sub-title">See Our Collection</span>
                    <h2> Handwash Safety Store</h2>
                  </div>

                  <div class="row">
                    <?PHP
                    $sql = "SELECT * FROM sproduct WHERE stype='Hand Wash'";
                    $result  = mysqli_query($con,$sql);
                    if(mysqli_num_rows($result)>0)
                    {
                      while ($row = mysqli_fetch_assoc($result) )
                      {?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-products-box">
                                <div class="products-image sHand">
                                    <a href="product-type.php?id=<?PHP echo $row['sid']; ?>">
                                        <?PHP echo "<td> <img src='data:image;base64,".$row['simg']."' class='main-image' alt='image'/> </td>"; ?>
                                        <?PHP echo "<td> <img src='data:image;base64,".$row['simg']."' class='hover-image' alt='image'/> </td>"; ?>
                                        <!-- <img src="assets/img/products/img13.jpg" class="main-image" alt="image"> -->
                                        <!-- <img src="assets/img/products/img-hover13.jpg" class="hover-image" alt="image"> -->
                                    </a>

                                    <div class="products-button">
                                        <ul>
                                            <!-- <li>
                                                <div class="wishlist-btn">
                                                    <a href="#">
                                                        <i class='bx bx-heart'></i>
                                                        <span class="tooltip-label">Add to Wishlist</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="compare-btn">
                                                    <a href="#">
                                                        <i class='bx bx-refresh'></i>
                                                        <span class="tooltip-label">Compare</span>
                                                    </a>
                                                </div>
                                            </li> -->
                                            <li>
                                                <div class="quick-view-btn">
                                                    <a href="product-type.php?id=<?PHP echo $row['sid']; ?>" data-toggle="modal" data-target="#productsQuickView">
                                                        <i class='bx bx-search-alt'></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="products-content">
                                    <h3><a href="product-type.php?id=<?PHP echo $row['sid']; ?>"><?PHP echo $row['sbrand'].'('.$row['squantity'].')' ; ?></a></h3>
                                    <div class="price">
                                        <span class="new-price"><?PHP echo 'Available'; ?></span>
                                        <!-- <span class="old-price">$321</span>
                                        <span class="new-price">$250</span> -->
                                    </div>
                                    <!-- <div class="star-rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div> -->
                                    <a href="#" class="add-to-cart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <?PHP
                      }
                    }
                      ?>

                  </div>
                </div>
              </section>

              <?PHP
            break;


            case 'Senetiser':
              ?>
              <!-- Start Products Area -->
              <section class="products-area pb-70">
                <div class="container">
                  <div class="section-title">
                    <span class="sub-title">See Our Collection</span>
                    <h2> Hand Senetiser Store</h2>
                  </div>

                  <div class="row">
                    <?PHP
                    $sql = "SELECT * FROM sproduct WHERE stype='Hand Senetiser'";
                    $result  = mysqli_query($con,$sql);
                    if(mysqli_num_rows($result)>0)
                    {
                      while ($row = mysqli_fetch_assoc($result) )
                      {?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-products-box">
                                <div class="products-image sHand">
                                    <a href="product-type.php?id=<?PHP echo $row['sid']; ?>">
                                        <?PHP echo "<td> <img src='data:image;base64,".$row['simg']."' class='main-image' alt='image'/> </td>"; ?>
                                        <?PHP echo "<td> <img src='data:image;base64,".$row['simg']."' class='hover-image' alt='image'/> </td>"; ?>
                                        <!-- <img src="assets/img/products/img13.jpg" class="main-image" alt="image"> -->
                                        <!-- <img src="assets/img/products/img-hover13.jpg" class="hover-image" alt="image"> -->
                                    </a>

                                    <div class="products-button">
                                        <ul>
                                            <!-- <li>
                                                <div class="wishlist-btn">
                                                    <a href="#">
                                                        <i class='bx bx-heart'></i>
                                                        <span class="tooltip-label">Add to Wishlist</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="compare-btn">
                                                    <a href="#">
                                                        <i class='bx bx-refresh'></i>
                                                        <span class="tooltip-label">Compare</span>
                                                    </a>
                                                </div>
                                            </li> -->
                                            <li>
                                                <div class="quick-view-btn">
                                                    <a href="product-type.php?id=<?PHP echo $row['sid'];?>" data-toggle="modal" data-target="#productsQuickView">
                                                        <i class='bx bx-search-alt'></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="products-content">
                                    <h3><a href="product-type.php?id=<?PHP echo $row['sid']; ?>"><?PHP echo $row['sbrand'].'('.$row['squantity'].')' ; ?></a></h3>
                                    <div class="price">
                                        <span class="new-price"><?PHP echo 'Available'; ?></span>
                                        <!-- <span class="old-price">$321</span>
                                        <span class="new-price">$250</span> -->
                                    </div>
                                    <!-- <div class="star-rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div> -->
                                    <a href="#" class="add-to-cart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <?PHP
                      }
                    }
                      ?>

                  </div>
                </div>
              </section>

              <?PHP
            break;

            case 'Gloves':
              ?>
              <!-- Start Products Area -->
              <section class="products-area pb-70">
                <div class="container">
                  <div class="section-title">
                    <span class="sub-title">See Our Collection</span>
                    <h2> Gloves Store</h2>
                  </div>

                  <div class="row">
                    <?PHP
                    $sql = "SELECT * FROM sproduct WHERE stype='Gloves'";
                    $result  = mysqli_query($con,$sql);
                    if(mysqli_num_rows($result)>0)
                    {
                      while ($row = mysqli_fetch_assoc($result) )
                      {?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-products-box">
                                <div class="products-image sHand">
                                    <a href="product-type.php?id=<?PHP echo $row['sid']; ?>">
                                        <?PHP echo "<td> <img src='data:image;base64,".$row['simg']."' class='main-image' alt='image'/> </td>"; ?>
                                        <?PHP echo "<td> <img src='data:image;base64,".$row['simg']."' class='hover-image' alt='image'/> </td>"; ?>
                                        <!-- <img src="assets/img/products/img13.jpg" class="main-image" alt="image"> -->
                                        <!-- <img src="assets/img/products/img-hover13.jpg" class="hover-image" alt="image"> -->
                                    </a>

                                    <div class="products-button">
                                        <ul>
                                            <!-- <li>
                                                <div class="wishlist-btn">
                                                    <a href="#">
                                                        <i class='bx bx-heart'></i>
                                                        <span class="tooltip-label">Add to Wishlist</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="compare-btn">
                                                    <a href="#">
                                                        <i class='bx bx-refresh'></i>
                                                        <span class="tooltip-label">Compare</span>
                                                    </a>
                                                </div>
                                            </li> -->
                                            <li>
                                                <div class="quick-view-btn">
                                                    <a href="product-type.php?id=<?PHP echo $row['sid']; ?>" data-toggle="modal" data-target="#productsQuickView">
                                                        <i class='bx bx-search-alt'></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="products-content">
                                    <h3><a href="product-type.php?id=<?PHP echo $row['sid']; ?>"><?PHP echo $row['sbrand'].'('.$row['squantity'].')' ; ?></a></h3>
                                    <div class="price">
                                        <span class="new-price"><?PHP echo 'Available'; ?></span>
                                        <!-- <span class="old-price">$321</span>
                                        <span class="new-price">$250</span> -->
                                    </div>
                                    <!-- <div class="star-rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div> -->
                                    <a href="#" class="add-to-cart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <?PHP
                      }
                    }
                      ?>

                  </div>
                </div>
              </section>

              <?PHP
            break;

            case 'Masks':
              ?>
              <!-- Start Products Area -->
              <section class="products-area pb-70">
                <div class="container">
                  <div class="section-title">
                    <span class="sub-title">See Our Collection</span>
                    <h2> Face Masks Store</h2>
                  </div>

                  <div class="row">
                    <?PHP
                    $sql = "SELECT * FROM sproduct WHERE stype='Face Masks'";
                    $result  = mysqli_query($con,$sql);
                    if(mysqli_num_rows($result)>0)
                    {
                      while ($row = mysqli_fetch_assoc($result) )
                      {?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-products-box">
                                <div class="products-image sHand">
                                    <a href="product-type.php?id=<?PHP echo $row['sid']; ?>">
                                        <?PHP echo "<td> <img src='data:image;base64,".$row['simg']."' class='main-image' alt='image'/> </td>"; ?>
                                        <?PHP echo "<td> <img src='data:image;base64,".$row['simg']."' class='hover-image' alt='image'/> </td>"; ?>
                                        <!-- <img src="assets/img/products/img13.jpg" class="main-image" alt="image"> -->
                                        <!-- <img src="assets/img/products/img-hover13.jpg" class="hover-image" alt="image"> -->
                                    </a>

                                    <div class="products-button">
                                        <ul>
                                            <!-- <li>
                                                <div class="wishlist-btn">
                                                    <a href="#">
                                                        <i class='bx bx-heart'></i>
                                                        <span class="tooltip-label">Add to Wishlist</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="compare-btn">
                                                    <a href="#">
                                                        <i class='bx bx-refresh'></i>
                                                        <span class="tooltip-label">Compare</span>
                                                    </a>
                                                </div>
                                            </li> -->
                                            <li>
                                                <div class="quick-view-btn">
                                                    <a href="product-type.php?id=<?PHP echo $row['sid']; ?>" data-toggle="modal" data-target="#productsQuickView">
                                                        <i class='bx bx-search-alt'></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="products-content">
                                    <h3><a href="product-type.php?id=<?PHP echo $row['sid']; ?>"><?PHP echo $row['sbrand'].'('.$row['squantity'].')' ; ?></a></h3>
                                    <div class="price">
                                        <span class="new-price"><?PHP echo 'Available'; ?></span>
                                        <!-- <span class="old-price">$321</span>
                                        <span class="new-price">$250</span> -->
                                    </div>
                                    <!-- <div class="star-rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div> -->
                                    <a href="#" class="add-to-cart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <?PHP
                      }
                    }
                      ?>

                  </div>
                </div>
              </section>

              <?PHP
            break;

            case 'Shield':
              ?>
              <!-- Start Products Area -->
              <section class="products-area pb-70">
                <div class="container">
                  <div class="section-title">
                    <span class="sub-title">See Our Collection</span>
                    <h2> Face Shield Store</h2>
                  </div>

                  <div class="row">
                    <?PHP
                    $sql = "SELECT * FROM sproduct WHERE stype='Face Shield'";
                    $result  = mysqli_query($con,$sql);
                    if(mysqli_num_rows($result)>0)
                    {
                      while ($row = mysqli_fetch_assoc($result) )
                      {?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-products-box">
                                <div class="products-image sHand">
                                    <a href="product-type.php?id=<?PHP echo $row['sid']; ?>">
                                        <?PHP echo "<td> <img src='data:image;base64,".$row['simg']."' class='main-image' alt='image'/> </td>"; ?>
                                        <?PHP echo "<td> <img src='data:image;base64,".$row['simg']."' class='hover-image' alt='image'/> </td>"; ?>
                                        <!-- <img src="assets/img/products/img13.jpg" class="main-image" alt="image"> -->
                                        <!-- <img src="assets/img/products/img-hover13.jpg" class="hover-image" alt="image"> -->
                                    </a>

                                    <div class="products-button">
                                        <ul>
                                            <!-- <li>
                                                <div class="wishlist-btn">
                                                    <a href="#">
                                                        <i class='bx bx-heart'></i>
                                                        <span class="tooltip-label">Add to Wishlist</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="compare-btn">
                                                    <a href="#">
                                                        <i class='bx bx-refresh'></i>
                                                        <span class="tooltip-label">Compare</span>
                                                    </a>
                                                </div>
                                            </li> -->
                                            <li>
                                                <div class="quick-view-btn">
                                                    <a href="product-type.php?id=<?PHP echo $row['sid']; ?>" data-toggle="modal" data-target="#productsQuickView">
                                                        <i class='bx bx-search-alt'></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="products-content">
                                    <h3><a href="product-type.php?id=<?PHP echo $row['sid']; ?>"><?PHP echo $row['sbrand'].'('.$row['squantity'].')' ; ?></a></h3>
                                    <div class="price">
                                        <span class="new-price"><?PHP echo 'Available'; ?></span>
                                        <!-- <span class="old-price">$321</span>
                                        <span class="new-price">$250</span> -->
                                    </div>
                                    <!-- <div class="star-rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div> -->
                                    <a href="#" class="add-to-cart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <?PHP
                      }
                    }
                      ?>

                  </div>
                </div>
              </section>

              <?PHP
            break;


            default:
              echo "<script> location.href('index.php'); </script>";
              break;
          }

          include('footer.php');?>

          <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

          <!-- Links of JS files -->
          <script src="assets/js/jquery.min.js"></script>
          <script src="assets/js/popper.min.js"></script>
          <script src="assets/js/bootstrap.min.js"></script>
          <script src="assets/js/owl.carousel.min.js"></script>
          <script src="assets/js/magnific-popup.min.js"></script>
          <script src="assets/js/parallax.min.js"></script>
          <script src="assets/js/rangeSlider.min.js"></script>
          <script src="assets/js/nice-select.min.js"></script>
          <script src="assets/js/meanmenu.min.js"></script>
          <script src="assets/js/isotope.pkgd.min.js"></script>
          <script src="assets/js/slick.min.js"></script>
          <script src="assets/js/sticky-sidebar.min.js"></script>
          <script src="assets/js/wow.min.js"></script>
          <script src="assets/js/form-validator.min.js"></script>
          <script src="assets/js/contact-form-script.js"></script>
          <script src="assets/js/ajaxchimp.min.js"></script>
          <script src="assets/js/xton-map.js"></script>
          <script src="assets/js/main.js"></script>
      </body>
</html>
