<?php
require_once 'config.php';
if(!isset($_SESSION['user'])){
    header("location:login.php");
}
$query=mysqli_query($db,"select * from prudact");
$user_ip=$_SERVER['REMOTE_ADDR'];
$cart=mysqli_query($db,"select * from cart where user_ip='$user_ip'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="node_modules/line-awesome/dist/line-awesome/css/line-awesome.min.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="stylesheet" href="assets/css/style.css">
    <title>سبد خرید</title>
        
</head>
<body dir="rtl">
    <div class="container-fluid">
      <?php
      if(isset($_SESSION['user'])){
        ?>
        <div class="row">
          <div class="col" style="height:60px;">
          <p style="text-align:right;padding-top:15px;">کاربر گرامی<?php echo $_SESSION['user'];?>خوش آمدید
          <a href="profile.php" style="float:left;" class="btn btn-primary">نمایش پروفایل</a>
      </p>
      </div>
      </div>
      <?php
      }
      ?>
       
        <!--container-->
        <div class="row" style="...">
  <?php
  if(mysqli_num_rows($cart)==0){
?>
<h2 style="text-align:center;">سبد خرید شما خالی است </h2>
<?php
}
if(mysqli_num_rows($cart)>0){
?>
<table class="table table-striped" style="text-align:right;">
<thead>
  <tr>
    <th>نام محصول</th>
    <th>قیمت محصول</th>
    <th>تعداد </th>
    <th>حذف محصول</th>
</tr>
</thead>
<tbody>
  
<?php
while($get_name=mysqli_fetch_array($cart)){
$id=$get_name['product_id'];
$product_name=mysqli_query($db,"select * from prudact where id='$id'");
$name=mysqli_fetch_array($product_name);
?>
  <tr>
<td><?php echo $name['product_name']; ?> </td>
<td><?php echo $name['product_price']; ?> </td>
<td><?php 
$product_count=mysqli_query($db,"select * from cart where product_id='$id'");
$count=mysqli_fetch_array($product_count);
echo $count['product_count'];
?> </td>
<td><a href="delete-cart.php?product-id=<?php echo $count['product_id'];?>">حذف محصول</a></td>
</tr>
</tbody>
<?php
}
}

?>
</table>
</div>


 
</div>
    </div>
    <!--footer-->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>