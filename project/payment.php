<?php

require './include/connection.php';

if (isset($_POST['pay_id']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['contact']) && isset($_POST['address']) && isset($_POST['amount']) && isset($_POST['orderid'])) {


    if (isset($_SESSION['id'])) {
        $user_id = $_SESSION['id'];
    }

    $pay_id = $_POST['pay_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $amount = $_POST['amount'];
    $orderid = $_POST['orderid'];
    $status = "Payment_Done";

    $_SESSION['payer_email'] = $email;

    // echo "<script>alert($pay_id,$fname,$lname,$email,$contact,$address,$amount,$orderid,$status)</script>";

    $payments = $conn->query("INSERT INTO `tbl_order`(`user_id`, `fname`, `lname`, `amount`, `transaction_id`, `order_id`, `payer_email`, `contact_no`, `address`, `payment_date`, `status`) VALUES ('$user_id','$fname','$lname','$amount','$pay_id','$orderid','$email','$contact','$address',now(),'$status')");
    // include 'invoice.php';
    $delete_cart = $conn->query("DELETE FROM tbl_cart where user_id='$user_id'");
}
