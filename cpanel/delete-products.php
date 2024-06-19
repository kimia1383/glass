<?php 
require_once '../config.php';
$id=$_GET['id'];
$query=mysqli_query($db,"DELETE from prudact where id='$id'");
if($query){
    header("location: list-products.php");
}
else
echo "dddd";
?>