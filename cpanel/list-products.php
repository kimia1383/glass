<?php require_once '../config.php';
$query=mysqli_query($db,"select * from prudact");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="node_modules/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" href="../assets/css/style.css">
   
    
    <title>پروفایل مدیرسایت</title>
</head>
<body dir="rtl">
<!-- <div class="navbar-meno row">
    <div class="col">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link item" href="#">لیست کاربران</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link item" href="list-products.php">لیست محصولات</a>
            </li>     
            <li class="nav-item ">
              <a class="nav-link item" href="product.php">افزودن محصول </a>
            </li> 
            <li class="nav-item ">
              <a class="nav-link item" href="#">لیست نظرات</a>
            </li> 
            <li class="nav-item ">
              <a class="nav-link item" href="#">سفارش ها</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link item" href="adminlogout.php">خروج</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
   </div>
<div>   -->

     
    <div class="list">
  
        <center>
<table class="d-black" >
<br><br>
<tr>
	<td>كد كالا</td>
	<td>نام كالا</td>
	<td>قيمت كالا</td>
	<td>تصوير كالا</td>
	<td>ابزار مديريتي</td>
</tr>

<?php
while ($row = mysqli_fetch_array($query)) {
?>
<tr>
	<td><?php echo $row['id']; ?></td>
	<td><?php echo $row['product_name']; ?></td>
	<td><?php echo $row['product_price']; ?>&nbsp; تومان</td>
	<td><img src="<?php echo $row['product_img'];?>" width="200px" height="110px" /></td>
	<td>
     <b><a href="delete-products.php?id=<?php echo $row['id']; ?>" style="text-decoration: none;">حذف</a></b>    
     &nbsp;|&nbsp;
    <b><a href="edit-products.php?id=<?php echo $row['id']; ?>" style="text-decoration: none;">ويرايش</a></b>    
    </td>
</tr>
<?php
} //while
?>

</table>
</center>


    </div>
    
</body>
</html>