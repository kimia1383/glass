<?php
Require_once "../config.php";
$db=mysqli_connect("localhost","root","","kimiyaseyedi");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پروفایل مدیر سایت</title>
    <link rel="stylesheet" href="node_modules/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/custom.css">
</head>
<body dir="rtl">
    

<div class="main-pro">
        <div class="bg-form col-5 col-sm-5 col-md-5">
        <form method="post" action="product.php" class=""enctype="multipart/form-data">
                        <label for="chk" aria-hidden="true">  محصول</label>
                        
                        <input type="text" name="nam-pro" placeholder="نام محصول..." required="" class="form-control">
                        
                        <div class="icon-log">
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <br>
                        <input type="text" name="price" placeholder="قیمت محصول.." required="" class="form-control">
                        <div class="icon-log2">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <br>
                        <textarea name="dec" placeholder="توضیحات..." required="" class="form-control"></textarea>
                        <div class="icon-log3">
                            <i class="fa-solid fa-key"></i>
                        </div>
                        <br>
                        <input type="file" name="pimg" placeholder="عکس محصول.." required="" class="form-control">
                        <div class="icon-log6">
                            <i class="fa-solid fa-key"></i>
                        </div>
                        <br>
                        <input type="submit" value=" اضافه کردن محصول" name="save" class="form-control">
                       
                    </form>
        </div>
    </div>
</body>


<?php

if(isset($_POST['save'])){
    $pname=$_POST['nam-pro'];
    $pprice=$_POST['price'];
    $pdesc=$_POST['dec'];
    $file=$_FILES['pimg'];

    if($file['error'] !== UPLOAD_ERR_OK){
        echo" <script> alert('رخداد خطا در هنگام آپلود فایل.لطفا مجددا تلاش کنید.') </script>";
        return;
    }

    $extension=pathinfo($file['name'],PATHINFO_EXTENSION);

    $valid_extension=array('jpg','png','jpeg','gif');

    if(false==in_array($extension,$valid_extension)){
        echo"<script> alert('پسوند فایل انتخاب شده غیر مجاز است.') </script>";
        return;
    }

    $destination='../assets/img/product/';
    $filename=basename($file['name']);
    $c=$destination . $filename;
    if(file_exists($c)){
      echo"<script> alert('ببخشید!عکس با این نام موجود لست.') </script>";
      return;
    }

    move_uploaded_file($file['tmp_name'] , $destination.$filename);

    echo "<script> alert('آپلود فایل با موفقیت به انجام رسید.') </script>";

    
    $add=mysqli_query($db,"insert into prudact (product_name, product_price, product_img, product_desc)
                           values ('$pname','$pprice','$c','$pdesc')");

    if($add){
      echo"<script> alert('محصول با موفقیت اضافه شد.') </script>";
    }
    else{
      echo"<script> alert('خطایی رخ داد لطفا مجددا تلاش نمایید!') </script>";
    }

}

?>