<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
require_once 'config.php';
if(!isset($_SESSION['user'])){
   ?>
   <script type="text/javascript">
window.location.href="login.php";
</script>
   <?php
    
}
$product_id=$_GET['product_id'];
$user_ip=$_SERVER['REMOTE_ADDR'];
$count=mysqli_query($db,"select * from cart where product_id='$product_id' and user_ip='$user_ip'");
$count1=mysqli_fetch_array($count);
$product_count=$count1['product_count'];
if(mysqli_num_rows($count)>0){
    $s=1;
    $s=$s+$product_count;
    $edit=mysqli_query($db,"update cart set product_count='$s' where  product_id='$product_id' and user_ip='$user_ip'");
    if($edit){
        header("location:cart.php");
    }
}
else{
    $add=mysqli_query($db,"insert into cart(user_ip,product_id,product_count)
    values ('$user_ip','$product_id','1')");
    if($add){
        header("location:cart.php");
    }
    else{
        echo "<script>alert('مشکلی پیش آمده لطفا مجدد تلاش کنید!')</script>";
    }
    }


