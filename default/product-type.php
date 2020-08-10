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

        <title>Client Bazar - Products</title>

        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>
    <body>
        <!-- header start -->
        <?PHP include('header.php');
          require("db/config.php");
         ?>
        <!-- header stop -->

        <?PHP
          $id = $_GET['id'];

          if($id[0]=='G')
          {
            // gorcery section start
            $sql = "SELECT * FROM gproduct WHERE gpid='$id'";
            $result  = mysqli_query($con,$sql);
            if(mysqli_num_rows($result)>0)
            {
              while ($row = mysqli_fetch_assoc($result) )
              {
                ?>
                <!-- Start Page Title -->
                <div class="page-title-area">
                    <div class="container">
                        <div class="page-title-content">
                            <h2> <?PHP echo ' '.$row['gsubCategory'].' '.$row['gtype'].' '.$row['gbrand'] ; ?> </h2>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li>Products Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Page Title -->

                <!-- Start Product Details Area -->
                <section class="product-details-area pt-100 pb-70">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-12">
                                <div class="products-details-image">
                                    <ul class="products-details-image-slides">
                                        <!-- <li><img src="assets/img/products/img3.jpg" alt="image"></li> -->
                                        <li> <?PHP echo "<img src='data:image;base64,".$row['gimg']."' alt='image'/>"; ?> </li>
                                        <!-- <li><img src="assets/img/products/img4.jpg" alt="image"></li>
                                        <li><img src="assets/img/products/img-hover3.jpg" alt="image"></li>
                                        <li><img src="assets/img/products/img-hover4.jpg" alt="image"></li>
                                        <li><img src="assets/img/products/img7.jpg" alt="image"></li> -->
                                    </ul>

                                    <div class="slick-thumbs">
                                        <ul>
                                            <li> <?PHP echo "<img src='data:image;base64,".$row['gimg']."' alt='image'/>"; ?> </li>
                                            <!-- <li><img src="assets/img/products/img4.jpg" alt="image"></li>
                                            <li><img src="assets/img/products/img-hover3.jpg" alt="image"></li>
                                            <li><img src="assets/img/products/img-hover4.jpg" alt="image"></li>
                                            <li><img src="assets/img/products/img7.jpg" alt="image"></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-12">
                                <div class="products-details-desc">
                                    <h3><?PHP echo ' '.$row['gsubCategory'].' '.$row['gtype'].' ('.$row['gbrand'].')' ; ?></h3>

                                    <div class="price">
                                        <!-- <span class="new-price">$250.00</span>
                                        <span class="old-price">$321.00</span> -->
                                    </div>

                                    <div class="products-review">
                                        <!-- <div class="rating">
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                        </div> -->
                                        <!-- <a href="#" class="rating-count">3 reviews</a> -->
                                    </div>

                                    <ul class="products-info">
                                        <li><span>Vendor:</span> <a href="#">Client Investers</a></li>
                                        <li><span>Availability:</span> <a href="#">In stock </a></li>
                                        <li><span>Products Type:</span> <a href="#"><?PHP echo $row['gtype']; ?></a></li>
                                        <li><span>Brand:</span> <a href="#"><?PHP echo $row['gbrand']; ?></a></li>
                                    </ul>

                                    <!-- <div class="products-color-switch">
                                        <span>Color:</span>

                                        <ul>
                                            <li><a href="#" title="Black" class="color-black"></a></li>
                                            <li><a href="#" title="White" class="color-white"></a></li>
                                            <li class="active"><a href="#" title="Green" class="color-green"></a></li>
                                            <li><a href="#" title="Yellow Green" class="color-yellowgreen"></a></li>
                                            <li><a href="#" title="Teal" class="color-teal"></a></li>
                                        </ul>
                                    </div> -->

                                    <div class="products-size-wrapper">
                                        <span>Quantity:</span>

                                        <ul>
                                            <li class="active"><a href="#"><?PHP echo $row['gquantity']; ?></a></li>
                                            <!-- <li class="active"><a href="#">S</a></li>
                                            <li><a href="#">M</a></li>
                                            <li><a href="#">XL</a></li>
                                            <li><a href="#">XXL</a></li> -->
                                        </ul>
                                    </div>

                                    <div class="products-info-btn">
                                        <a href="#" data-toggle="modal" data-target="#sizeGuideModal"><i class='bx bx-crop'></i> Size guide</a>
                                        <a href="#" data-toggle="modal" data-target="#productsShippingModal"><i class='bx bxs-truck' ></i> Shipping</a>
                                        <a href="contact.php"><i class='bx bx-envelope'></i> Ask about this products</a>
                                    </div>

                                    <div class="products-add-to-cart">
                                        <div class="input-counter">
                                            <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                            <input type="text" value="1">
                                            <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                        </div>

                                        <button type="submit" class="default-btn"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                                    </div>

                                    <!-- <div class="wishlist-compare-btn">
                                        <a href="#" class="optional-btn"><i class='bx bx-heart'></i> Add to Wishlist</a>
                                        <a href="#" class="optional-btn"><i class='bx bx-refresh'></i> Add to Compare</a>
                                    </div> -->

                                    <div class="buy-checkbox-btn">
                                        <div class="item">
                                            <input class="inp-cbx" id="cbx" type="checkbox">
                                            <label class="cbx" for="cbx">
                                                <span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                </span>
                                                <span>Trusted Product by CLient Investers</span>
                                            </label>
                                        </div>

                                        <div class="item">
                                            <a href="#" class="default-btn">Buy it now!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab products-details-tab">
                            <ul class="tabs">
                                <li><a href="#">
                                    <div class="dot"></div> Description
                                </a></li>

                                <li><a href="#">
                                    <div class="dot"></div> Shipping
                                </a></li>

                                <li><a href="#">
                                    <div class="dot"></div> Why Buy From Us
                                </a></li>

                            </ul>

                            <div class="tab-content">
                                <div class="tabs-item">
                                    <div class="products-details-tab-content">
                                        <p><?PHP echo $row['gdesc']; ?></p>
                                    </div>
                                </div>

                                <div class="tabs-item">
                                    <div class="products-details-tab-content">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td>Shipping</td>
                                                        <td>This item Ship to USA</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Delivery</td>
                                                        <td>
                                                            Estimated between Wednesday 07/31/2020 and Monday 08/05/2020 <br>
                                                            Will usually ship within 1 bussiness day.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="tabs-item">
                                    <div class="products-details-tab-content">
                                        <p>Here are 5 more great reasons to buy from us:</p>

                                        <ol>
                                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</li>
                                            <li> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</li>
                                            <li>When an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
                                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                            <li>When an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
                                        </ol>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <!-- End Product Details Area -->

                <?PHP
                // echo $row['gbrand'];

              }
            }
            // gorcery section stop

          }

          elseif ($id[0]=='F')
          {
            // fashion section start
            $sql = "SELECT * FROM fproduct WHERE fid='$id'";
            $result  = mysqli_query($con,$sql);
            if(mysqli_num_rows($result)>0)
            {
              while ($row = mysqli_fetch_assoc($result) )
              {
                ?>
                <!-- Start Page Title -->
                <div class="page-title-area">
                    <div class="container">
                        <div class="page-title-content">
                            <h2> <?PHP echo ' '.$row['fcat'].' '.$row['fsubCat'].' '.$row['ftype'].' ('.$row['fbrand'].')' ; ?> </h2>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li>Products Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Page Title -->

                <!-- Start Product Details Area -->
                <section class="product-details-area pt-100 pb-70">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-12">
                                <div class="products-details-image">
                                    <ul class="products-details-image-slides">
                                        <!-- <li><img src="assets/img/products/img3.jpg" alt="image"></li> -->
                                        <li> <?PHP echo "<img src='data:image;base64,".$row['fimg1']."' alt='image'/>"; ?> </li>
                                        <li> <?PHP echo "<img src='data:image;base64,".$row['fimg2']."' alt='image'/>"; ?> </li>
                                        <li> <?PHP echo "<img src='data:image;base64,".$row['fimg3']."' alt='image'/>"; ?> </li>
                                    </ul>

                                    <div class="slick-thumbs">
                                        <ul>
                                            <li> <?PHP echo "<img src='data:image;base64,".$row['fimg1']."' alt='image'/>"; ?> </li>
                                            <li> <?PHP echo "<img src='data:image;base64,".$row['fimg2']."' alt='image'/>"; ?> </li>
                                            <li> <?PHP echo "<img src='data:image;base64,".$row['fimg3']."' alt='image'/>"; ?> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-12">
                                <div class="products-details-desc">
                                    <h3><?PHP echo ' '.$row['fcat'].' '.$row['fsubCat'].' '.$row['ftype'].' ('.$row['fbrand'].')' ; ?></h3>

                                    <div class="price">
                                        <!-- <span class="new-price">$250.00</span>
                                        <span class="old-price">$321.00</span> -->
                                    </div>

                                    <div class="products-review">
                                        <!-- <div class="rating">
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                        </div> -->
                                        <!-- <a href="#" class="rating-count">3 reviews</a> -->
                                    </div>

                                    <ul class="products-info">
                                        <li><span>Vendor:</span> <a href="#">Client Investers</a></li>
                                        <li><span>Availability:</span> <a href="#">In stock </a></li>
                                        <li><span>Products Type:</span> <a href="#"><?PHP echo $row['ftype']; ?></a></li>
                                        <li><span>Brand:</span> <a href="#"><?PHP echo $row['fbrand']; ?></a></li>
                                    </ul>

                                    <!-- <div class="products-color-switch">
                                        <span>Color:</span>

                                        <ul>
                                            <li><a href="#" title="Black" class="color-black"></a></li>
                                            <li><a href="#" title="White" class="color-white"></a></li>
                                            <li class="active"><a href="#" title="Green" class="color-green"></a></li>
                                            <li><a href="#" title="Yellow Green" class="color-yellowgreen"></a></li>
                                            <li><a href="#" title="Teal" class="color-teal"></a></li>
                                        </ul>
                                    </div> -->

                                    <div class="products-size-wrapper">
                                        <span>Quantity:</span>

                                        <ul>
                                            <li class="active"><a href="#"><?PHP echo $row['fsize']; ?></a></li>
                                            <!-- <li class="active"><a href="#">S</a></li>
                                            <li><a href="#">M</a></li>
                                            <li><a href="#">XL</a></li>
                                            <li><a href="#">XXL</a></li> -->
                                        </ul>
                                    </div>

                                    <div class="products-info-btn">
                                        <a href="#" data-toggle="modal" data-target="#sizeGuideModal"><i class='bx bx-crop'></i> Size guide</a>
                                        <a href="#" data-toggle="modal" data-target="#productsShippingModal"><i class='bx bxs-truck' ></i> Shipping</a>
                                        <a href="contact.php"><i class='bx bx-envelope'></i> Ask about this products</a>
                                    </div>

                                    <div class="products-add-to-cart">
                                        <div class="input-counter">
                                            <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                            <input type="text" value="1">
                                            <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                        </div>

                                        <button type="submit" class="default-btn"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                                    </div>

                                    <!-- <div class="wishlist-compare-btn">
                                        <a href="#" class="optional-btn"><i class='bx bx-heart'></i> Add to Wishlist</a>
                                        <a href="#" class="optional-btn"><i class='bx bx-refresh'></i> Add to Compare</a>
                                    </div> -->

                                    <div class="buy-checkbox-btn">
                                        <div class="item">
                                            <input class="inp-cbx" id="cbx" type="checkbox">
                                            <label class="cbx" for="cbx">
                                                <span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                </span>
                                                <span>Trusted Product by CLient Investers</span>
                                            </label>
                                        </div>

                                        <div class="item">
                                            <a href="#" class="default-btn">Buy it now!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab products-details-tab">
                            <ul class="tabs">
                                <li><a href="#">
                                    <div class="dot"></div> Description
                                </a></li>

                                <li><a href="#">
                                    <div class="dot"></div> Shipping
                                </a></li>

                                <li><a href="#">
                                    <div class="dot"></div> Why Buy From Us
                                </a></li>

                            </ul>

                            <div class="tab-content">
                                <div class="tabs-item">
                                    <div class="products-details-tab-content">
                                        <p><?PHP echo $row['fdesc']; ?></p>
                                    </div>
                                </div>

                                <div class="tabs-item">
                                    <div class="products-details-tab-content">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td>Shipping</td>
                                                        <td>This item Ship to USA</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Delivery</td>
                                                        <td>
                                                            Estimated between Wednesday 07/31/2020 and Monday 08/05/2020 <br>
                                                            Will usually ship within 1 bussiness day.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="tabs-item">
                                    <div class="products-details-tab-content">
                                        <p>Here are 5 more great reasons to buy from us:</p>

                                        <ol>
                                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</li>
                                            <li> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</li>
                                            <li>When an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
                                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                            <li>When an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
                                        </ol>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <!-- End Product Details Area -->

                <?PHP
              }
            }
            // fashion section start
          }

          elseif ($id[0]=='S')
          {
            // safety section start
            $sql = "SELECT * FROM sproduct WHERE sid='$id'";
            $result  = mysqli_query($con,$sql);
            if(mysqli_num_rows($result)>0)
            {
              while ($row = mysqli_fetch_assoc($result) )
              {
                ?>
                <!-- Start Page Title -->
                <div class="page-title-area">
                    <div class="container">
                        <div class="page-title-content">
                            <h2> <?PHP echo ' '.$row['scategory'].' '.$row['stype'].' ('.$row['sbrand'].')' ; ?> </h2>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li>Products Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Page Title -->

                <!-- Start Product Details Area -->
                <section class="product-details-area pt-100 pb-70">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-12">
                                <div class="products-details-image">
                                    <ul class="products-details-image-slides">
                                        <!-- <li><img src="assets/img/products/img3.jpg" alt="image"></li> -->
                                        <li> <?PHP echo "<img src='data:image;base64,".$row['simg']."' alt='image'/>"; ?> </li>

                                    </ul>

                                    <div class="slick-thumbs">
                                        <ul>
                                            <li> <?PHP echo "<img src='data:image;base64,".$row['simg']."' alt='image'/>"; ?> </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-12">
                                <div class="products-details-desc">
                                    <h3> <?PHP echo ' '.$row['scategory'].' '.$row['stype'].' ('.$row['sbrand'].')' ; ?> </h3>

                                    <div class="price">
                                        <!-- <span class="new-price">$250.00</span>
                                        <span class="old-price">$321.00</span> -->
                                    </div>

                                    <div class="products-review">
                                        <!-- <div class="rating">
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                        </div> -->
                                        <!-- <a href="#" class="rating-count">3 reviews</a> -->
                                    </div>

                                    <ul class="products-info">
                                        <li><span>Vendor:</span> <a href="#">Client Investers</a></li>
                                        <li><span>Availability:</span> <a href="#">In stock </a></li>
                                        <li><span>Products Type:</span> <a href="#"><?PHP echo $row['stype']; ?></a></li>
                                        <li><span>Brand:</span> <a href="#"><?PHP echo $row['sbrand']; ?></a></li>
                                    </ul>

                                    <!-- <div class="products-color-switch">
                                        <span>Color:</span>

                                        <ul>
                                            <li><a href="#" title="Black" class="color-black"></a></li>
                                            <li><a href="#" title="White" class="color-white"></a></li>
                                            <li class="active"><a href="#" title="Green" class="color-green"></a></li>
                                            <li><a href="#" title="Yellow Green" class="color-yellowgreen"></a></li>
                                            <li><a href="#" title="Teal" class="color-teal"></a></li>
                                        </ul>
                                    </div> -->

                                    <div class="products-size-wrapper">
                                        <span>Quantity:</span>

                                        <ul>
                                            <li class="active"><a href="#"><?PHP echo $row['squantity']; ?></a></li>
                                            <!-- <li class="active"><a href="#">S</a></li>
                                            <li><a href="#">M</a></li>
                                            <li><a href="#">XL</a></li>
                                            <li><a href="#">XXL</a></li> -->
                                        </ul>
                                    </div>

                                    <div class="products-info-btn">
                                        <!-- <a href="#" data-toggle="modal" data-target="#sizeGuideModal"><i class='bx bx-crop'></i> Size guide</a> -->
                                        <a href="#" data-toggle="modal" data-target="#productsShippingModal"><i class='bx bxs-truck' ></i> Shipping</a>
                                        <a href="contact.php"><i class='bx bx-envelope'></i> Ask about this products</a>
                                    </div>

                                    <div class="products-add-to-cart">
                                        <div class="input-counter">
                                            <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                            <input type="text" value="1">
                                            <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                        </div>

                                        <button type="submit" class="default-btn"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                                    </div>

                                    <!-- <div class="wishlist-compare-btn">
                                        <a href="#" class="optional-btn"><i class='bx bx-heart'></i> Add to Wishlist</a>
                                        <a href="#" class="optional-btn"><i class='bx bx-refresh'></i> Add to Compare</a>
                                    </div> -->

                                    <div class="buy-checkbox-btn">
                                        <div class="item">
                                            <input class="inp-cbx" id="cbx" type="checkbox">
                                            <label class="cbx" for="cbx">
                                                <span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                </span>
                                                <span>Trusted Product by CLient Investers</span>
                                            </label>
                                        </div>

                                        <div class="item">
                                            <a href="#" class="default-btn">Buy it now!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab products-details-tab">
                            <ul class="tabs">
                                <li><a href="#">
                                    <div class="dot"></div> Description
                                </a></li>

                                <li><a href="#">
                                    <div class="dot"></div> Shipping
                                </a></li>

                                <li><a href="#">
                                    <div class="dot"></div> Why Buy From Us
                                </a></li>

                            </ul>

                            <div class="tab-content">
                                <div class="tabs-item">
                                    <div class="products-details-tab-content">
                                        <p><?PHP echo $row['sdesc']; ?></p>
                                    </div>
                                </div>

                                <div class="tabs-item">
                                    <div class="products-details-tab-content">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td>Shipping</td>
                                                        <td>This item Ship to USA</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Delivery</td>
                                                        <td>
                                                            Estimated between Wednesday 07/31/2020 and Monday 08/05/2020 <br>
                                                            Will usually ship within 1 bussiness day.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="tabs-item">
                                    <div class="products-details-tab-content">
                                        <p>Here are 5 more great reasons to buy from us:</p>

                                        <ol>
                                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</li>
                                            <li> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</li>
                                            <li>When an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
                                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                            <li>When an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
                                        </ol>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <!-- End Product Details Area -->

                <?PHP

              }
            }
            // safety section stop
          }

          else
          {
            echo "<script> alert('Not an valid request...!'); </script>";
            echo "<script> location.href='index.php'; </script>";
          }

        ?>

        <!-- Start Facility Area -->
        <section class="facility-area pb-70">
            <div class="container">
                <div class="facility-slides owl-carousel owl-theme">
                    <div class="single-facility-box">
                        <div class="icon">
                            <i class='flaticon-tracking'></i>
                        </div>
                        <h3>Free Shipping Worldwide</h3>
                    </div>

                    <div class="single-facility-box">
                        <div class="icon">
                            <i class='flaticon-return'></i>
                        </div>
                        <h3>Easy Return Policy</h3>
                    </div>

                    <div class="single-facility-box">
                        <div class="icon">
                            <i class='flaticon-shuffle'></i>
                        </div>
                        <h3>7 Day Exchange Policy</h3>
                    </div>

                    <div class="single-facility-box">
                        <div class="icon">
                            <i class='flaticon-sale'></i>
                        </div>
                        <h3>Weekend Discount Coupon</h3>
                    </div>

                    <div class="single-facility-box">
                        <div class="icon">
                            <i class='flaticon-credit-card'></i>
                        </div>
                        <h3>Secure Payment Methods</h3>
                    </div>

                    <div class="single-facility-box">
                        <div class="icon">
                            <i class='flaticon-location'></i>
                        </div>
                        <h3>Track Your Package</h3>
                    </div>

                    <div class="single-facility-box">
                        <div class="icon">
                            <i class='flaticon-customer-service'></i>
                        </div>
                        <h3>24/7 Customer Support</h3>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Facility Area -->

        <!-- Start Footer Area -->
        <?PHP include('footer.php'); ?>
        <!-- End Footer Area -->

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
