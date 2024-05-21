<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footwear shop management system</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Ion Icon Fonts-->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Date Picker -->
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="colorlib-loader"></div>

    <div id="page">
        <?php include 'header.php'; ?>
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="bread"><span><a href="index.php">Home</a></span> / <span>Cart</span></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row row-pb-lg">
                <div class="col-sm-10 offset-md-1">
                    <div class="process-wrap">
                        <a href="cart.php">
                            <div class="process text-center active">
                                <p><span>01</span></p>
                                <h3>Shopping Cart</h3>
                            </div>
                        </a>
                        <a href="check-out.php">
                            <div class="process text-center">
                                <p><span>02</span></p>
                                <h3>Checkout</h3>
                            </div>
                        </a>
                        <div class="process text-center">
                            <p><span>03</span></p>
                            <h3>Order Complete</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-pb-lg">
                <div class="col-md-12">
                    <div class="product-name d-flex">
                        <div class="one-forth text-left px-4">
                            <?php
                            // $user_id = $_SESSION['id'];
                            // echo $user_id;
                            ?>
                            <span>Product Details</span>
                        </div>
                        <div class="one-eight text-center">
                            <span>Size</span>
                        </div>
                        <div class="one-eight text-center">
                            <span>Color</span>
                        </div>
                        <div class="one-eight text-center">
                            <span>Price</span>
                        </div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="one-eight text-center">
                            <span>Quantity</span>
                        </div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="one-eight text-center">
                            <span>Total</span>
                        </div>
                        <div class="one-eight text-center px-4">
                            <span>Remove</span>
                        </div>
                    </div>


                    <?php
                    if (isset($_SESSION['email'])) {
                        $email = $_SESSION['email'];
                        if (isset($_SESSION['id'])) {
                            $uid = $_SESSION['id'];
                        }

                        if (isset($_GET['id'])) {
                            $cid = $_GET['id'];
                            $delete = $conn->query("DELETE  FROM `tbl_cart` where id=$cid");
                        }
                        $cartproducts = $conn->query("SELECT tbl_cart.id, tbl_cart.quantity, tbl_cart.size, tbl_cart.color,tbl_products.name,tbl_products.description,tbl_products.price,tbl_products.img1 FROM tbl_cart inner join tbl_products on tbl_products.product_id = tbl_cart.product_id where user_id=$uid");
                        $grand_total = 0;

                    ?>
                        <?php
                        while ($row = $cartproducts->fetch_assoc()) :
                            $cart_product_id = $row['id'];
                        ?>
                            <div class="product-cart d-flex">

                                <div class="one-forth">
                                    <div class="product-img">
                                        <img src="./admin/<?php echo $row['img1'] ?>" alt="" width="100px">
                                    </div>
                                    <div class="display-tc">
                                        <h3><?php echo $row['name'];
                                            ?></h3>
                                    </div>
                                </div>
                                <div class="one-eight text-center">
                                    <div class="display-tc">
                                        <?php
                                        $sid = $row['size'];
                                        $city_name = "SELECT * FROM tbl_size WHERE id = $sid";
                                        $city_result = $conn->query($city_name);
                                        if (mysqli_num_rows($city_result) > 0) {
                                            $city_row = mysqli_fetch_array($city_result);
                                            $size = $city_row["size"];
                                        }
                                        ?>
                                        <span class="price"><?php echo $size;
                                                            ?></span>
                                    </div>
                                </div>
                                <div class="one-eight text-center">
                                    <div class="display-tc">
                                        <?php
                                        $coid = $row['color'];
                                        $color_name = "SELECT * FROM tbl_color WHERE id = $coid";
                                        $color_result = $conn->query($color_name);
                                        if (mysqli_num_rows($color_result) > 0) {
                                            $color_row = mysqli_fetch_array($color_result);
                                            $color = $color_row["color_name"];
                                        }
                                        ?>
                                        <span class="price"><?php echo $color;
                                                            ?></span>
                                    </div>
                                </div>
                                <div class="one-eight text-center">
                                    <div class="display-tc">
                                        <span class="price"><?php echo $row['price'];
                                                            ?></span>
                                    </div>
                                </div>

                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="one-eight text-center">
                                    <div class="display-tc">
                                        <?php
                                        $pqty = $row['quantity'];
                                        ?>
                                        <a href="update_qty_minus.php?id=<?php echo $cart_product_id; ?>">
                                            <button type="button" name="remove"><i class="icon-minus"></i></button></a>
                                        &nbsp;&nbsp;<?php echo $pqty; ?>&nbsp;&nbsp;
                                        <a href="update_qty_plus.php?id=<?php echo $cart_product_id; ?>"><button type="button"><i class="icon-plus2"></i></button></a>
                                    </div>
                                </div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                <?php
                                $price = $row['price'];
                                $qty = $row['quantity'];
                                $subtotal = $price * $qty;
                                ?>

                                <div class="one-eight text-center">
                                    <div class="display-tc">
                                        <span class="price"><?php echo $subtotal;
                                                            ?></span>
                                    </div>
                                </div>
                                <div class="one-eight text-center">
                                    <div class="display-tc">
                                        <a href="cart.php?id=<?php echo $row['id'] ?>" class="closed"></a>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $grand_total += $subtotal;
                            ?>

                        <?php endwhile; ?>
                </div>
            </div>


            <div class="row row-pb-lg">
                <div class="col-md-12">
                    <div class="total-wrap">
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- <form action="#">
                                        <div class="row form-group">
                                            <div class="col-sm-9">
                                                <input type="text" name="quantity" class="form-control input-number" placeholder="Your Coupon Number...">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="submit" value="Apply Coupon" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </form> -->
                            </div>
                            <div class="col-sm-6 text-center">
                                <div class="total">
                                    <div class="grand-total">
                                        <p><span><strong>Subtotal :</strong></span> <span><?php echo $grand_total; ?></span></p>
                                    </div>
                                    <hr>
                                    <div class="grand-total">
                                        <?php
                                        if (isset($_SESSION['email'])) {
                                            echo '<p><span><strong>Total Amount:</strong></span> <span> ' . $grand_total . '</span></p>';
                                        }



                                        ?>


                                    </div>
                                </div>
                                <br>
                                <div class="col-md-12 text-center">
                                    <p><a href="index.php" class="btn btn-secondary"><i class="icon-shopping-cart"></i> &nbsp;Continue Purchasing</a></p>
                                </div>
                                <div class="col-md-12 text-center">
                                    <p><a href="check-out.php" class="btn btn-success"><i class="icon-shopping-cart"></i>&nbsp;Proceed To Checkout</a></p>
                                </div>
                                <div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <?php include 'footer.php'; ?>

        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
        </div>
        <!-- Addd or Minus Cart quantity -->

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- popper -->
        <script src="js/popper.min.js"></script>
        <!-- bootstrap 4.1 -->
        <script src="js/bootstrap.min.js"></script>
        <!-- jQuery easing -->
        <script src="js/jquery.easing.1.3.js"></script>
        <!-- Waypoints -->
        <script src="js/jquery.waypoints.min.js"></script>
        <!-- Flexslider -->
        <script src="js/jquery.flexslider-min.js"></script>
        <!-- Owl carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Magnific Popup -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <!-- Date Picker -->
        <script src="js/bootstrap-datepicker.js"></script>
        <!-- Stellar Parallax -->
        <script src="js/jquery.stellar.min.js"></script>
        <!-- Main -->
        <script src="js/main.js"></script>

</body>

</html>
<?php
                    } else {
                        echo '<div class="alert alert-danger alert-dismissible mt-2">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
   <center> <strong>Please Log In to the Website</strong></center>
  </div>';
                    }
?>