<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ویرایش محصول</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/boot/css/bootstrap.min.css">
</head>
<?php
require_once '../config.php';
if (isset($_POST['edit'])){
    $pid=$_POST['pid'];
    $pname=$_POST['pname'];
    $ppric=$_POST['pprice'];
    $file=$_FILES['pimage'];
    $pdesc=$_POST['pdesc'];
 
    //بررسی آپلود شدن فایل
    if($file['error']!== UPLOAD_ERR_OK ){
        echo "  <script> alert('فایل آپلود نشد') </script> ";
        return;
    }
    //گرفتن پسوند
    $extension = pathinfo($file['name'],PATHINFO_EXTENSION);

    //پسوند های مجاز
    $valid_extension=array('jpg','png','jpeg','gif');

    //بررسی پسوند
    if(false == in_array($extension,$valid_extension)){
        echo "  <script> alert('پسوند فایل انتخابی مجاز نیست') </script> ";
        return;
    }
    $destination = 'asset/img/products/';
    $filename = basename($file['name']);
    $imageaddres=$destination.$filename;
    if(file_exists($imageaddres)){
        echo "  <script> alert('عکسی با این نام موجود است') </script> ";
        return;
    }
    move_uploaded_file($file['tmp_name'], $destination.$filename);

    echo "  <script> alert('آپلود فایل با موفقیت انجام شد') </script> ";
    
    $edit=mysqli_query($db,"update prudact set product_name='$pname',product_price='$ppric',product_img='$imageaddres',product_desc='$pdesc' where id='$pid'");

    if($edit)
    {
        ?>
    <script type="text/javascript">
    window.location.href="list-products.php";
    </script>
    <?php
    }
    else
    echo "  <script> alert('محصول ویرایش نشد') </script> ";

}
?>


