<?php

require './include/connection.php';
if (isset($_SESSION['id'])) {
    $user_id = $_SESSION['id'];
    if (isset($_POST['productid']) && isset($_POST['quantity'])) {
        // $user_id = isset( $_SESSION['user_id'] ) ?  $_SESSION['user_id'] : 1;
        if (isset($_SESSION['id'])) {
            $user_id = $_SESSION['id'];
        }

        $pid = $_POST['productid'];
        $pname = $_POST['name'];
        $pprice = $_POST['price'];
        $img1 = $_POST['img1'];
        $pqty = $_POST['quantity'];
        $color = $_POST['color'];
        $size = $_POST['size'];
        $total_price = $pprice * $pqty;
        // echo "<script>alert($pqty)</script>";


        $check_prod = "SELECT * FROM tbl_cart WHERE product_id = $pid";
        $check_prod_result = mysqli_query($conn, $check_prod);
        if (mysqli_num_rows($check_prod_result) < 1) {
            $cartitem = "INSERT INTO tbl_cart (user_id, product_id, size, color, quantity) VALUES ('$user_id','$pid','$size','$color','$pqty')";
            $cartitem_row = mysqli_query($conn, $cartitem);


            echo '<div class="alert alert-success alert-dismissible mt-2">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <center>   <strong>Item added to your cart!</strong></center>
                            </div>';
        } else {

            $cartupdate = "UPDATE tbl_cart SET quantity=quantity+$pqty WHERE product_id=$pid";
            $cartupdate_row = mysqli_query($conn, $cartupdate);

            echo '<div class="alert alert-success alert-dismissible mt-2">
                                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                                  <strong>Item added to your cart!</strong>
                                </div>';
        }
        $response = "Product added to cart successfully!";
    } else {
        $response = "Invalid request!";
    }
} else {
    echo '<div class="alert alert-danger alert-dismissible mt-2">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
   <center> <strong>Please Log In to the Website</strong></center>
  </div>';
}
