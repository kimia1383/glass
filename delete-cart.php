<?php
require_once 'config.php';
$product_id = $_GET['product-id'];
$user_ip = $_SERVER['REMOTE_ADDR'];
$del = mysqli_query($db, "DELETE FROM cart WHERE product_id = '$product_id' AND user_ip = '$user_ip'");

if ($del) {
    header("location: cart.php");
    exit;
}
?>
