<?php
require_once '../config.php';
$id=$_GET['id'];
$query=mysqli_query($db,"delete from users where id='$id'");
if($query){
    header("location: list_user.php");
}