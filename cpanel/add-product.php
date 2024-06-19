<?php
require_once '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/slider/swiper-bundle.min.css">
    <link rel="stylesheet" href="../asset/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/style.css">
    <!--<script src="../asset/tinymce/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'})</script>-->

  
</head>
<body dir="rtl">
<div class="nav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">     
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link item" href="../index.php">نمایش فروشگاه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link item" href="list-products.php"> لیست محصولات</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link item" href="add-product.php">افزودن محصول</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link item" href="list-users.php">لیست کاربران</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link item" href="#"> نظرات</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link item" href="#"> سفارش ها</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link item" href="#">  خروج از مدیریت</a>
                  </li>
              </ul>            
            </div>
          </nav>
</div>

<br><br>
<div class="main-pro bg-add">
        <div class="bg-form">
        <form method="post" action="add-product.php" class="form-pro" enctype="multipart/form-data">
                        <label for="chk" aria-hidden="true">  محصول</label>
                        <input type="text" name="nam-pro" placeholder="نام محصول..." required="" class="inp">
                        <div class="icon-log">
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <input type="text" name="price" placeholder="قیمت محصول.." required="" class="inp-log inp">
                        <div class="icon-log2">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <textarea name="dec" placeholder="توضیحات..." required="" class="inp-log form-control"></textarea>
                        <div class="icon-log3">
                            <i class="fa-solid fa-key"></i>
                        </div>
                        <input type="file" name="pimg"  required="" class="inp-log inp">
                        <div class="icon-log6">
                            <i class="fa-solid fa-key"></i>
                        </div>
                        <input type="submit" value=" اضافه کردن محصول" name="save" class="bt-lig">
                       
                    </form>
        </div>
    </div>
    <script src="../asset/boot/js/jquery-2.1.1.min.js"></script>
    <script src="../asset/boot/js/jquery.min.js"></script>
    <script src="../asset/boot/js/bootstrap.min.js"></script>
    <script src="../asset/boot/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php

if(isset($_POST['save'])){
    $product_name=$_POST['nam-pro'];
    $product_price=$_POST['price'];
    $product_img=$_FILES['pimg'];
    $product_desc=$_POST['dec'];
   

    //بررسی آپلود فایل
    if($file['error'] !== UPLOAD_ERR_OK){
        echo" <script> alert('رخداد خطا در هنگام آپلود فایل.لطفا مجددا تلاش کنید.') </script>";
        return;
    }
    //گرفتن پسوند فایل
    $extension=pathinfo($file['name'],PATHINFO_EXTENSION);
     
    //تعریف پسوند های مجاز
    $valid_extension=array('jpg','png','jpeg','gif');
    
    //بررسی پسوند فایل
    if(false==in_array($extension,$valid_extension)){
        echo"<script> alert('پسوند فایل انتخاب شده غیر مجاز است.') </script>";
        return;
    }
    
    //فایل به درستی آپلود شده و پسوند هم مجاز است
    $destination='../asset/img/product/';
    $filename=basename($file['name']);
    $c=$destination . $filename;
    if(file_exists($c)){
      echo"<script> alert('ببخشید!عکس با این نام موجود لست.') </script>";
      return;
    }
    
    //انتقایل فایل
    move_uploaded_file($file['tmp_name'] , $destination.$filename);
    
    //نمایش پیغام موفقیت آمیز
    echo "<script> alert('آپلود فایل با موفقیت به انجام رسید.') </script>";

    $add=mysqli_query($db,"INSERT INTO products(product_name,product_price,product_img,product_desc)
                           VALUES ('$product_name','$product_price','$product_img','$product_desc	')");

    if($add){
      echo"<script> alert('محصول با موفقیت اضافه شد.') </script>";
    }
    else{
      echo"<script> alert('خطایی رخ داد لطفا مجددا تلاش نمایید!') </script>";
    }

}

?>