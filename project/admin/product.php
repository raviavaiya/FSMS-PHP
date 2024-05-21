<?php

require '../include/connection.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <title>Admin Panel</title>
    <link rel="apple-touch-icon" href="theme-assets/images/logo/logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/logo/logo.png">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <link rel="apple-touch-icon" href="theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/vendors/css/charts/chartist.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/pages/dashboard-ecommerce.css">
    <!-- Datatable JS -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <!-- Datatable CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.jqueryui.min.css" integrity="sha512-x2AeaPQ8YOMtmWeicVYULhggwMf73vuodGL7GwzRyrPDjOUSABKU7Rw9c3WNFRua9/BvX/ED1IK3VTSsISF6TQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />

    <!-- jQuery library file -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js">
    </script>

    <!-- Datatable plugin JS library file -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
    </script>
</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <?php
    include '../admin/navbar.php';
    ?>


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="#"><img class="brand-logo" alt="Chameleon admin logo" src="theme-assets/images/logo/logo.png" />
                        <h3 class="brand-text">Footwear Shop</h3>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
            </ul>
        </div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item"><a href="index.php"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
                </li>
                <li class=" nav-item"><a href="customer.php"><i class="ft-user"></i><span class="menu-title" data-i18n="">Customer</span></a>
                </li>
                <li class=" nav-item"><a href="category.php"><i class="ft-box"></i><span class="menu-title" data-i18n="">Category</span></a>
                </li>
                <li class=" nav-item"><a href="stock.php"><i class="ft-box"></i><span class="menu-title" data-i18n="">Stock</span></a>
                </li>
                <li class=" active"><a href="product.php"><i class="ft-maximize"></i><span class="menu-title" data-i18n="">Product</span></a>
                </li>
                <li class=" nav-item"><a href="order.php"><i class="ft-bookmark"></i><span class="menu-title" data-i18n="">Order</span></a>
                </li>
            </ul>
        </div>
        <div class="navigation-background"></div>
    </div>


    <div class="app-content content">
        <div class="content-wrapper">
            <br>
            <div class="content-body">
                <div class="row">
                    <div class="form-group">
                        <button type="button" class="btn btn-primary btn-min-width mr-1 mb-1" data-toggle="modal" data-target="#addproduct" data-whatever="@fat"><i class="ft ft-box"></i> Add Product</button>
                    </div>
                </div>
                <div class="row">
                    <div class="modal fade" id="addproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Enter Product Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="#" method="POST" id="addproduct_form" enctype="multipart/form-data">

                                        <div class="form-row">

                                            <label for="validationTooltip01">Category :</label>
                                            <select class="custom-select custom-select-lg mb-2" id="cat" name="cat">
                                                <?php
                                                $sql = "SELECT * FROM tbl_category";
                                                $result = mysqli_query($conn, $sql);
                                                echo "<option value=''>-- Select a Category --</option>";
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<option class='' value='" . $row['categoryid'] . "'>" . $row['cname'] . "</option>";
                                                }
                                                $catid = $_POST['categoryid'];
                                                ?>
                                            </select>


                                            <label for="validationTooltip01">Sub-Category :</label>
                                            <select class="custom-select custom-select-lg mb-2" id="subcat" name="subcat">
                                                <option>Select Sub-Category</option>
                                            </select>

                                            <label for="validationTooltip01">Brand :</label>
                                            <select class="custom-select custom-select-lg mb-2" id="brand" name="brand">
                                                <?php
                                                $sql = "SELECT * FROM tbl_brand";
                                                $result = mysqli_query($conn, $sql);
                                                echo "<option value=''>-- Select a Brand --</option>";
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<option class='' value='" . $row['id'] . "'>" . $row['brand_name'] . "</option>";
                                                }
                                                // $catid = $_POST['id'];
                                                ?>
                                            </select>

                                            <div class="col-md-6 mb-3">
                                                <label for="pname" class="col-form-label">Product Name :</label>
                                                <input type="text" class="form-control" id="pname" name="pname">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="modelno" class="col-form-label">Model No :</label>
                                                <input type="text" class="form-control" id="modelno" name="modelno">
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="modelno" class="col-form-label">Product Description :</label>
                                                <!-- <textarea class="from-control" id="Description" name="Description" row=100 cols=27></textarea> -->
                                                <input type="text-area" class="form-control" id="productdescriptiom" name="productdescriptiom">
                                            </div>


                                            <div class="col-md-6 mb-3">
                                                <label for="price" class="col-form-label">Product Price :</label>
                                                <input type="text" class="form-control" id="price" name="price">
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="price" class="col-form-label">Product Stock :</label>
                                                <input type="int" class="form-control" id="stock" name="stock">
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="image" class="col-form-label">Image-1 Upload Here :</label>
                                                <input type="file" class="form-control" id="file1" name="file1">
                                                <img>
                                            </div>



                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <!-- <input type="submit" name="register" value="Send OTP" class="btn btn-primary" data-toggle="modal" data-whatever="@fat"> -->
                                            <input type="submit" name="addproduct" value="Add Product" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    // $delete = $conn->query("DELETE  FROM `tbl_products` where product_id=$id");
                    $stmt = $conn->prepare("SELECT * FROM tbl_products where product_id=$id");
                    $stmt->execute();
                    $result = $stmt->get_result();
                }
                ?>
                <?php
                while ($row = $result->fetch_assoc()) :
                ?>

                    <div class="row">
                        <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel">Update Product Details</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" method="POST" id="editproduct" enctype="multipart/form-data">

                                            <div class="form-row">
                                                <input type="hidden" name="updateid" id="updateid">

                                                <label for="validationTooltip01">Category :</label>
                                                <select class="custom-select custom-select-lg mb-2" id="cat" name="cat">
                                                    <?php
                                                    $sql = "SELECT * FROM tbl_category";
                                                    $result = mysqli_query($conn, $sql);
                                                    echo "<option value=''>-- Select a Category --</option>";
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo "<option class='' value='" . $row['categoryid'] . "'>" . $row['cname'] . "</option>";
                                                    }
                                                    $catid = $_POST['categoryid'];
                                                    ?>
                                                </select>


                                                <label for="validationTooltip01">Sub-Category :</label>
                                                <select class="custom-select custom-select-lg mb-2" id="subcat" name="subcat">
                                                    <option>Select Sub-Category</option>
                                                </select>

                                                <label for="validationTooltip01">Brand :</label>
                                                <select class="custom-select custom-select-lg mb-2" id="brand" name="brand">
                                                    <?php
                                                    $sql = "SELECT * FROM tbl_brand";
                                                    $result = mysqli_query($conn, $sql);
                                                    echo "<option value=''>-- Select a Brand --</option>";
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo "<option class='' value='" . $row['id'] . "'>" . $row['brand_name'] . "</option>";
                                                    }
                                                    // $catid = $_POST['id'];
                                                    ?>
                                                </select>

                                                <div class="col-md-6 mb-3">
                                                    <label for="pname" class="col-form-label">Product Name :</label>
                                                    <input type="text" class="form-control" id="pname" name="pname" value="<?php echo $row['name']; ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="modelno" class="col-form-label">Model No :</label>
                                                    <input type="text" class="form-control" id="modelno" name="modelno" value="<?php echo $row['name']; ?>">
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="modelno" class="col-form-label">Product Description :</label>
                                                    <!-- <textarea class="from-control" id="Description" name="Description" row=100 cols=27></textarea> -->
                                                    <input type="text-area" class="form-control" id="productdescriptiom" name="productdescriptiom" value="<?php echo $row['name']; ?>">
                                                </div>


                                                <div class="col-md-6 mb-3">
                                                    <label for="price" class="col-form-label">Product Price :</label>
                                                    <input type="text" class="form-control" id="price" name="price" value="<?php echo $row['name']; ?>">
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="price" class="col-form-label">Product Stock :</label>
                                                    <input type="int" class="form-control" id="stock" name="stock" value="<?php echo $row['name']; ?>">
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="image" class="col-form-label">Image-1 Upload Here :</label>
                                                    <input type="file" class="form-control" id="file1" name="file1" value="<?php echo $row['name']; ?>">
                                                    <img>
                                                </div>
                                                <!-- <div class="col-md-6 mb-3">
                                                <label for="image" class="col-form-label">Image-2 Upload Here :</label>
                                                <input type="file" class="form-control" id="pimage" name="pimage" accept="image/*" onchange="loadfile(event)" required>
                                                <img id="output">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="image" class="col-form-label">Image-3 Upload Here :</label>
                                                <input type="file" class="form-control" id="pimage" name="pimage" accept="image/*" onchange="loadfile(event)" required>
                                                <img id="output">
                                            </div> -->


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <!-- <input type="submit" name="register" value="Send OTP" class="btn btn-primary" data-toggle="modal" data-whatever="@fat"> -->
                                                <input type="submit" name="updateproduct" value="Update Product" class="btn btn-primary" data-product="<?php echo $id; ?>">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

                <div class="row">
                    <table class="table align-middle mb-0 bg-white" id="tableID">
                        <thead class="bg-light">
                            <tr>

                                <th>Image</th>
                                <th>Name</th>

                                <th>Brand Name</th>
                                <th>Category</th>
                                <th>Price</th>

                                <th>Added On</th>
                                <th>Toggle</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $delete = $conn->query("DELETE  FROM `tbl_products` where product_id=$id");
                        }



                        $query = $conn->query("SELECT * FROM tbl_products");


                        ?>
                        <tbody>
                            <?php
                            while ($fetch = $query->fetch_array()) {
                            ?>

                                <tr>



                                    <td><img class="img-polaroid" src="<?php echo $fetch['img1'] ?>" height="70px" width="80px"></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <p class="text-muted mb-0"><?php echo $fetch['name']; ?></p>
                                        </div>
                                    </td>


                                    <td>
                                        <div class="d-flex align-items-center">
                                            <?php
                                            // $bid = $fetch['brandid'];
                                            // $brand_name = $conn->query("SELECT * FROM tbl_brand where id = $bid");
                                            // $brandname_result=$conn->query($brand_name);
                                            // if(mysqli_num_rows($brandname_result)> 0) {
                                            //    $brandname_row=mysqli_fetch_array($brandname_result);
                                            //    $bname = $brandname_row["brand_name"];
                                            // }

                                            $bid = $fetch['brandid'];
                                            $brand_name = "SELECT * FROM tbl_brand WHERE id = $bid";
                                            $bname_result = $conn->query($brand_name);
                                            if (mysqli_num_rows($bname_result) > 0) {
                                                $bname_row = mysqli_fetch_array($bname_result);
                                                $bname = $bname_row["brand_name"];
                                            }
                                            ?>

                                            <p class="text-muted mb-0"><?php echo $bname; ?></p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <?php
                                            $cid = $fetch['categoryid'];
                                            $category_name = "SELECT * FROM tbl_category WHERE categoryid = $cid";
                                            $cname_result = $conn->query($category_name);
                                            if (mysqli_num_rows($cname_result) > 0) {
                                                $cname_row = mysqli_fetch_array($cname_result);
                                                $cname = $cname_row["cname"];
                                            }
                                            ?>
                                            <p class="text-muted mb-0"><?php echo $cname ?></p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <p class="text-muted mb-0"><?php echo $fetch['price']; ?></p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <p class="text-muted mb-0"><?php echo $fetch['added_on']; ?></p>
                                        </div>
                                    </td>

                                    <td>
                                        <?php
                                        if ($fetch['status'] == "1")

                                            // if a course is active i.e. status is 1 
                                            // the toggle button must be able to deactivate 
                                            // we echo the hyperlink to the page "deactivate.php" 
                                            // in order to make it look like a button 
                                            // we use the appropriate css 
                                            // red-deactivate 
                                            // green- activate 
                                            echo
                                            "<a href=deactivate.php?id=" . $fetch['product_id'] . " <span class='badge badge-danger rounded-pill d-inline'>Deactivate</span></a>";
                                        else
                                            echo
                                            "<a href=activate.php?id=" . $fetch['product_id'] . " <span class='badge badge-success rounded-pill d-inline'>Activate</span></a>";
                                        ?>
                                    </td>
                                    <td>
                                        <a href="updateproduct.php?id=<?php echo $fetch['product_id'] ?>" class="table-link">
                                            <span class="fa-stack editbutton">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </a>
                                        <a href="product.php?id=<?php echo $fetch['product_id'] ?>" class="table-link danger">
                                            <span class="fa-stack">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.editbutton').on('click', function() {
                $('#editmodal').modal('show');
                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#cat').val(data[0]);
                $('#subcat').val(data[1]);
                $('#brand').val(data[2]);
                $('#pname').val(data[3]);
                $('#modelno').val(data[4]);
                $('#productdescriptiom').val(data[5]);
                $('#price').val(data[6]);
                $('#stock').val(data[7]);
                $('#file1').val(data[8]);
            });
        });
    </script>

    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2023 &copy; Copyright <a class="text-bold-800 grey darken-2" href="../admin/index.php" target="_blank">Footwear Shop </a></span>
            <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
                <li class="list-inline-item"><a class="my-1" href="#" target="_blank"> Support</a></li>
            </ul>
        </div>
    </footer>

    <script>
        // category Selection
        $("#cat").change(function() {
            var catid = $(this).val();
            if (catid === "") {
                $("#subcat").html("<option value=''>-- Select Category First --</option>");
                $("#subcat").prop("disabled", true);
            } else {
                $.ajax({
                    type: "POST",
                    url: "product.php",
                    data: {
                        categoryid: catid
                    },
                    success: function(response) {
                        $("#subcat").prop("disabled", false);
                        $("#subcat").html(response);
                    },
                });
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            // Initialize DataTable on your table
            var dataTable = $('#tableID').DataTable({
                "paging": true,
                "pageLength": 10,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>
    <!-- BEGIN VENDOR JS-->
    <script src="theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="theme-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="theme-assets/js/core/app-lite.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="theme-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
</body>


</html>

<?php
#sub category Selection
if (isset($catid)) {
    $sql = "SELECT * FROM tbl_subcategory WHERE categoryid = $catid";
    $result_subcat = $conn->query($sql);

    if ($result_subcat->num_rows > 0) {
        echo "<option value=''>-- Select a Subcategory --</option>";
        while ($row = $result_subcat->fetch_assoc()) {
            echo "<option value='" . $row['subcategoryid'] . "'>" . $row['sname'] . "</option>";
        }
    } else {
        echo "<option value=''>-- No Categories Found --</option>";
    }
}
?>

<?php
#Add-Product Code
if (isset($_POST['addproduct'])) {
    $category = $_POST['cat'];
    // echo $category;
    $subcategory = $_POST['subcat'];
    $brand = $_POST['brand'];
    // echo $subcategory;
    $pname = $_POST['pname'];
    $modelno = $_POST['modelno'];
    $description = $_POST['productdescriptiom'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $imageName = $_FILES['file1']['name'];
    $imageTmpName = $_FILES['file1']['tmp_name'];

    $targetedDir = 'uploads/';
    $image = $targetedDir . $imageName;



    if (move_uploaded_file($imageTmpName, $image)) {

        $_SESSION['cat'] = $category;
        $_SESSION['subcat'] = $subcategory;
        $_SESSION['pname'] = $pname;
        $_SESSION['brand'] = $brand;
        $_SESSION['modelno'] = $modelno;
        $_SESSION['productdescriptiom'] = $description;
        $_SESSION['price'] = $price;
        $_SESSION['stock'] = $stock;

        $add_productt = "INSERT INTO tbl_products(name, description, model_no, price, quantity, img1,brandid, categoryid, subcategoryid, added_on) VALUES ('$pname', '$description','$modelno', $price, $stock, '$image',$brand, $category, $subcategory, now() )";
        $add_product = mysqli_query($conn, $add_productt);
        // if ($add_product) {
        //     // $fetch_pid = $conn->query("SELECT * FROM tbl_products where name=$pname");
        //     // if (mysqli_num_rows($fetch_pid) > 0) {
        //     //     $pid_row = mysqli_fetch_array($fetch_pid);
        //     //     $productid = $pid_row['product_id'];
        //     //     $inesert_stock = $conn->query("INSERT INTO tbl_stock (productid, stock) values ($productid, $stock)");
        //     // }else{

        //     // }
        //     echo "<script>alert('Product Added successfully!')</script>";
        //     echo "<script>location.href='product.php'</script>";
        // } else {
        //     echo "Product added Failed";
        // }


        if ($result) {

            $fetch_pid = $conn->query("SELECT * FROM tbl_products where name='$pname'");
            if (mysqli_num_rows($fetch_pid) > 0) {
                $pid_row = mysqli_fetch_array($fetch_pid);
                $productid = $pid_row['product_id'];
                $insert_cart_stock = $conn->query("INSERT INTO tbl_stock (productid, stock) values ($productid, $stock)");
                echo "<script>alert('Product Added successfully!')</script>";
                echo "<script>location.href='product.php'</script>";
            } else {
                echo "<script>alert('stock is not added !!!!')</script>";
            }
        } else {
            echo "Product added Failed";
        }
    }
}
?>

<?php


if (isset($_POST['updateproduct'])) {
    $id = $_POST['update_id'];
    $category = $_POST['cat'];
    // echo $category;
    $subcategory = $_POST['subcat'];
    $brand = $_POST['brand'];
    // echo $subcategory;
    $pname = $_POST['pname'];
    $modelno = $_POST['modelno'];
    $description = $_POST['productdescriptiom'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $query = "UPDATE tbl_products SET name='$pname', description='$description', model_no='$modelno', price=' $price',quantity=' $stock',img1=' $$image',categoryid=' $category',subcategoryid=' $subcategory',brandid=' $brand' WHERE id='$id'  ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        echo '<script> alert("Data Updated"); </script>';
        header("Location:index.php");
    } else {
        echo '<script> alert("Data Not Updated"); </script>';
    }
}

?>