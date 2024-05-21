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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-
validate/1.19.5/jquery.validate.min.js" integrity="sha512-
rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr0
4hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="colorlib-loader"></div>

    <div id="page">
        <?php include 'header.php';
        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email']; ?>

            <div class="breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <p class="bread"><span><a href="index.php">Home</a></span> / <span>CheckOut</span></p>
                        </div>
                    </div>
                </div>
            </div>



            <div id="page">


                <!-- <div class="colorlib-product"> -->
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
                                    <div class="process text-center active">
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


                    <form method="post" class="colorlib-form paymentform" id="checkout">
                        <div class="row">
                            <div class="col-lg-6">


                                <h2>Billing Details</h2>
                                <div class="row">


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fname">First Name</label>
                                            <input type="text" id="fname" name="fname" class="form-control" placeholder="Your First Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lname">Last Name</label>
                                            <input type="text" id="lname" name="lname" class="form-control" placeholder="Your Last Name">
                                        </div>
                                    </div>





                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">E-mail Address</label>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="Payer Email">
                                        </div>
                                    </div>






                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Phone">Contact Number</label>
                                            <input type="text" id="contact" name="contact" class="form-control" placeholder="Enter Contact Number">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Address :</label>
                                            <textarea name="address" id="address" cols="70" rows="20" class="form-control" placeholder="Enter Your Full Delivery Address"></textarea>
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="cart-detail">

                                            <h2>Order Product Details</h2>
                                            <ul><?php

                                                if (isset($_SESSION['id'])) {
                                                    $user_id = $_SESSION['id'];
                                                }



                                                // $view_order = $conn->query("SELECT * FROM tbl_order_item where user_id='$user_id' and status = 1");
                                                $view_order = $conn->query("SELECT tbl_cart.id, tbl_cart.quantity, tbl_cart.size, tbl_cart.color,tbl_products.name,tbl_products.description,tbl_products.price,tbl_products.img1 FROM tbl_cart inner join tbl_products on tbl_products.product_id = tbl_cart.product_id where user_id=$user_id");
                                                $grand_total = 0;
                                                ?>
                                                <?php
                                                while ($fetch = $view_order->fetch_array()) :
                                                    $orderid = rand(111111111, 999999999);
                                                    $qty = $fetch['quantity'];
                                                    $price = $fetch['price'];
                                                    $subtotal = $price * $qty;
                                                ?>

                                                    <li>
                                                        <span><?php echo $fetch['name']; ?></span> <span><?php echo "$price*$qty"; ?></span>
                                                    </li>
                                                    <?php
                                                    $grand_total += $subtotal;
                                                    ?>
                                                <?php
                                                endwhile;
                                                ?>



                                                <li>
                                                    <span>Subtotal</span><span><?php echo $grand_total; ?> .00</span>
                                                </li>


                                                <li><span>Order Total</span> <span><?php echo $grand_total; ?> .00</span></li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="w-100"></div>

                                    <div class="col-md-12">
                                        <div class="cart-detail">
                                            <h2>Payment Method</h2>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <div class="radio">
                                                        <label> Net Banking , Card , UPI</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <input type="text" name="orderid" id="orderid" class="orderid" value="<?php echo $orderid; ?>" hidden>
                                <input type="text" name="amount" class="amount" id="amonut" value="<?php echo $grand_total;  ?>" hidden>

                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button type="button" name="place_order" onclick="makepayment()" id="rzp-button1" class="btn btn-primary">Place an order</button>
                                    </div>
                                </div>

                            </div>
                    </form>
                </div>

            </div>


    </div>

<?php

            include 'footer.php';
        } ?>

</div>
<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
</div>


<script>
    $('#checkout').validate({
        rules: {
            'fname': {
                'required': true,
            },
            'fname': {
                'required': true,
            },
            'email': {
                'required': true,
                'email': true,
            },
            'contact': {
                'number': true,
                'max': 10
            }
        },
        messages: {
            'fname': {
                'required': "First Name is Required!!",
            },
            'fname': {
                'required': "Last Name is Required!!",
            },
            'email': {
                'required': "Email is Required!!",
                'email': "giv in proper format",
            },
            'contact': {
                'number': "contact is Required!!",
                'max': 10
            }
        }

    })
</script>


<script>
    function makepayment() {
        var fname = $('#fname').val();
        var lname = $('#lname').val();
        var email = $('#email').val();
        var contact = $('#contact').val();
        var address = $('#address').val();
        var orderid = $('.orderid').val();
        var amount = $('.amount').val();



        var options = {
            "key": "rzp_test_RDgIqkrk0C5Nar", // Enter the Key ID generated from the Dashboard
            "amount": amount * 100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "name": "Footwear Shop Management System", //your business name
            "description": "Test Transaction",
            "image": "https://i.pinimg.com/originals/50/98/0c/50980c03b2e1238431c084e4001dcf57.jpg",
            // "order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
            // "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
            // "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
            //     "name": "Gaurav Kumar", //your customer's name
            //     "email": "gaurav.kumar@example.com",
            //     "contact": "9000090000" //Provide the customer's phone number for better conversion rates 
            // },
            "handler": function(response) {
                // alert(response.razorpay_payment_id);
                // alert(response.razorpay_order_id);
                // alert(response.razorpay_signature)
                jQuery.ajax({
                    type: "POST",
                    url: "payment.php",
                    data: "pay_id=" + response.razorpay_payment_id + "&fname=" + fname + "&lname=" + lname + "&email=" + email + "&contact=" + contact + "&address=" + address + "&amount=" + amount + "&orderid=" + orderid,
                    success: function(result) {
                        window.location.href = "place_order.php";
                    }
                });
            },
            "theme": {
                "color": "#3399cc"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();

    }
</script>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

</script>


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
<!-- <script>
		function myFunction() {
		   var element = document.body;
		   element.classList.toggle("dark-mode");
		}
		</script> -->
</body>

</html>