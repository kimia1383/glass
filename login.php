<?php
Require_once 'config.php ';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ورود کاربر</title>
    <link rel="stylesheet" href="node_modules/line-awesome/dist/line-awesome/css/line-awesome.min.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  
</head>
<body dir="rtl">
        <!--container-->
        <div class="row">
  <div class="col-5 col-sm-5 col-md-5 box-right">
    <br>

  <div>
<form action="login.php"  method="post" class="form-group justify-content-cente">
  <label for="">ایمیل</label>
  <br>
  <input type="text" class="form-control" name="email" placeholder="ایمیل..."><br>
  <br> 
  <label for="">رمزعبور</label>
  <br>
  <input type="password" class="form-control" name="pass" placeholder="رمزعبور..."><br>  
  </div>
  <div>
   
  <input type="submit" value="ورود" class="btn-login btn" name="btnlogin">
  <br><br>
  
  <input type="reset" value="انصراف" class="btn-reset btn">
  <br><br>
  <a href="register.php">آیاحساب کاربری ندارید؟برای ساخت حساب کاربری اینجارو کلیک کنید</a>
</form>
</div>
</div>
<div class="box-right col-5 col-sm-5 col-md-5">
  <img src="assets/img/46155.jpg" width="100%">
</div>
</div>

    </div>
   
</body>
</html>
<?php
if(isset($_POST['btnlogin'])){
 $email=$_POST['email'];
 $pass=($_POST['pass']);
 $check=mysqli_query($db,"SELECT * from users where email='$email' and password1='$pass'");
 if(mysqli_num_rows($check)>0){
    $_SESSION['user']=$email;
    header("location:index.php");
 }
 else{
    echo"<script>alert('ایمیل یا رمزعبور به درستی وارد نشده است و یا ثبت نام نکردید')</script>";
 }
}
?>
