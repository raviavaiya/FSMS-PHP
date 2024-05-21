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
                        <p class="bread"><span><a href="index.php">Home</a></span> / <span>Product Details</span></p>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $id = "";
        if (isset($_GET['id'])) {
            $pid = $_GET['id'];
        }

        $view_products = $conn->query("SELECT * FROM tbl_products where product_id=$pid and status=1");

        ?>

        <div class="colorlib-product">
            <div class="container">
                <div id="cart-message"></div>
                <div class="row row-pb-lg product-detail-wrap">
                    <?php
                    while ($fetch = $view_products->fetch_array()) {
                    ?>
                        <div class="col-sm-6">
                            <!-- <div class="owl-carousel"> -->
                            <div class="item">
                                <div class="product-entry border">
                                    <!-- <a href="#" class="prod-img"> -->
                                    <img src="./admin/<?php echo $fetch['img1'] ?>" class="img-fluid">
                                    <!-- </a> -->
                                </div>
                            </div>

                            <!-- </div> -->

                        </div>
                        <div class="col-sm-4">
                            <div class="product-desc">
                                <h2><?php echo $fetch['name']; ?></h2>
                                <p class="price">
                                    <span><?php echo $fetch['price']; ?>.00</span>
                                </p>
                                <p><?php echo $fetch['description']; ?></p>
                                <form method="post" class="cartform">
                                    <div class="size-wrap">
                                        <div class="block-26 mb-2">
                                            <h4>Size</h4>
                                            <ul>
                                                <!-- <li><a href="#">7.5</a></li> -->
                                                <select class="custom-select custom-select-lg mb-3" id="size" name="size" required>
                                                    <?php
                                                    $size_sql = "SELECT * FROM tbl_size";
                                                    $size_result = mysqli_query($conn, $size_sql);
                                                    echo "<option value=''>-- Select a Size --</option>";
                                                    while ($row = mysqli_fetch_assoc($size_result)) {
                                                        echo "<option class='' value='" . $row['id'] . "'>" . $row['size'] . "</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </ul>
                                        </div>
                                        <div class="block-26 mb-2">
                                            <h4>Color</h4>
                                            <ul>
                                                <select class="custom-select custom-select-lg mb-3" id="color" name="color" required>
                                                    <?php
                                                    $color_sql = "SELECT * FROM tbl_color";
                                                    $color_result = mysqli_query($conn, $color_sql);
                                                    echo "<option value=''>-- Select a color --</option>";
                                                    while ($row = mysqli_fetch_assoc($color_result)) {
                                                        echo "<option class='' value='" . $row['id'] . "'>" . $row['color_name'] . "</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="input-group mb-4">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn" id="minus" data-type="minus">
                                                <i class="icon-minus2"></i>
                                            </button>
                                        </span>
                                        <input type="number" id="qty" name="quantity" class="form-control input-number pqty" step="1" value="1" min="1" max="100">
                                        <span class="input-group-btn ml-1">
                                            <button type="button" class="quantity-right-plus btn" id="add" data-type="plus">
                                                <i class="icon-plus2"></i>
                                            </button>
                                        </span>
                                    </div>
                                    <div class="row">
                                        <input type="hidden" class="productid" value="<?= $fetch['product_id'] ?>">
                                        <input type="hidden" class="name" value="<?= $fetch['name'] ?>">
                                        <input type="hidden" class="price" value="<?= $fetch['price'] ?>">
                                        <input type="hidden" class="img1" value="<?= $fetch['img1'] ?>">
                                        <input type="hidden" class="added_on" value="<?= $fetch['added_on'] ?>">
                                        <div class="col-md-4 text-center">
                                            <p><button type="button" class="btn btn-success btn-addtocart" id="addtocart" data-product_id="<?php echo $pid; ?>"><i class="icon-shopping-cart">&nbsp;Add to Cart</i> </button></p>
                                        </div>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <div class="col-md-4 text-center">
                                            <button type="button" class="btn btn-danger btn-addtocart" id="addtowishlist" data-product_id="<?php echo $pid; ?>"><i class="fa fa-heart" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-md-12 pills">
                                <div class="bd-example bd-example-tabs">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Description</a>
                                        </li>


                                    </ul>

                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane border fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                                            <p>
                                                <?php echo $fetch['description'] ?>
                                            </p>

                                        </div>

                                    <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
    </div>

    <script>
        $(function() {
            $('#add').click(function(e) {
                e.preventDefault();
                var quantity = $('#qty').val();
                quantity++;
                $('#qty').val(quantity);
            });
            $('#minus').click(function(e) {
                e.preventDefault();
                var quantity = $('#qty').val();
                if (quantity > 1) {
                    quantity--;
                }
                $('#qty').val(quantity);
            });
        });
    </script>


    <script type="text/javascript">
        $(document).ready(function() {
            $("#addtocart").click(function() {
                var $form = $(this).closest(".cartform");
                var productid = $(this).data("productid");
                var productid = $form.find(".productid").val();
                var quantity = $form.find(".pqty").val();
                var name = $form.find(".name").val();
                var price = $form.find(".price").val();
                var img1 = $form.find(".img1").val();
                var size = $("#size").val();
                var color = $("#color").val();
                // var added_on = $form.find(".added_on").val();
                // var size = $form.find("#size").val();
                // var color = $from.find("#color").val();
                var action = 'add_to_cart';
                var quantity = $("#qty").val(); // Get the selected quantity



                $.ajax({
                    type: "POST",
                    url: "add_to_cart.php", // Create a new PHP file to handle the cart update
                    data: {
                        productid: productid,
                        name: name,
                        price: price,
                        quantity: quantity,
                        color: color,
                        size: size,
                        img1: img1,
                        // added_on: added_on,
                        action: action,
                    },
                    success: function(response) {
                        // Display the cart message in the designated container
                        $("#cart-message").html(response);
                    }
                });
            });
            $("#addtowishlist").click(function() {
                var $form = $(this).closest(".cartform");
                var productid = $(this).data("productid");
                var productid = $form.find(".productid").val();
                var size = $("#size").val();
                var color = $("#color").val();
                // var size = $form.find("#size").val();
                // var color = $from.find("#color").val();
                // Get the selected quantity

                $.ajax({
                    type: "POST",
                    url: "add_to_wishlist.php", // Create a new PHP file to handle the cart update
                    data: {
                        productid: productid,
                        // action: action,
                    },
                    success: function(response) {
                        console.log(response)
                        // Display the cart message in the designated container
                        $("#cart-message").html(response);
                    }
                });
            });
        });




        // $(document).ready(function() {
        //     $("#addtocart").click(function() {
        //         e.preventDefault();
        //         var $form = $(this).closest(".addtocart_from");
        //         var productid = $form.find(".productid").val();
        //         var quantity = $form.find(".quantity").val();
        //         var name = $form.find(".name").val();
        //         var price = $form.find(".price").val();
        //         // var img1 = $form.find(".img1").val();
        //         var size = $form.find(".size").val();
        //         var color = $form.find(".color").val();
        //         var added_on = $form.find(".added_on").val();
        //         var action = 'add_to_cart';

        //         $.ajax({
        //             url: 'add_to_cart.php',
        //             method: 'post',
        //             data: {
        //                 productid: productid,
        //                 name: name,
        //                 price: price,
        //                 quantity: quantity,
        //                 // img1: img1,
        //                 size: size,
        //                 color: color,
        //                 added_on: added_on,
        //                 action: action,
        //             },
        //             success: function(response) {
        //                 $("#message").html(response);
        //                 window.scrollTo(0, 0);
        //                 load_cart_item_number();
        //             }
        //         });
        //     });

        // Load total no.of items added in the cart and display in the navbar
        // load_cart_item_number();

        // function load_cart_item_number() {
        //     $.ajax({
        //         url: 'add_to_cart.php',
        //         method: 'get',
        //         data: {
        //             cartItem: "cart_item"
        //         },
        //         success: function(response) {
        //             $("#cart-item").html(response);
        //         }
        //     });
        // }
        // });
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