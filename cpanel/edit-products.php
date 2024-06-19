<?php 
require_once '../config.php';
$id=$_GET['id'];
$query=mysqli_query($db,"select * from prudact where id='$id'");
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ویرایش محصول</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/boot/css/bootstrap.min.css">
</head>
<body dir="rtl">
<div class="navbar-meno row">
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
              <a class="nav-link item" href="#">افزودن محصول </a>
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
<div>  

    <form action="edit.php" method="POST" enctype="multipart/form-data">
<label>نام محصول</label><input type="text" name="pname" value="<?php echo $row['product_name']; ?>"> <br>
<label>قیمت محصول</label><input type="text" name="pprice" value="<?php echo $row['product_price']; ?>"> <br>
<label>توضیحات محصول</label> <textarea  rows="5" cols="160" name="pdesc"><?php echo $row['product_desc']; ?></textarea> <br>
<label>عکس محصول</label><input type="file" name="pimage" > <br>
<input type="hidden" value="<?php echo $row['id']; ?>" name="pid">
<input type="submit" name="edit" value="ویرایش محصول">
</form>
</div> 
</body>
</html>
