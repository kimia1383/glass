<?php
Require_once 'config.php ';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ثبت نام کاربر</title>
  <link rel="stylesheet" href="node_modules/line-awesome/dist/line-awesome/css/line-awesome.min.css">
  <link rel="stylesheet" href="assets/css/custom.css">

</head>

<body dir="rtl">
<header>
    <div class="top-header">
      <div class="container">
        <div class="d-flex justify-content-between">
          <ul class="top-header-right">
            <li><a href="#">درباره ما</a></li>
            <li><a href="#">همکاری با ما</a></li>
            <li><a href="#">تماس با ما</a></li>
            <li><a href="#">قوانین و مقررات</a></li>
          </ul>
          <ul class="top-header-left">
            <li><a href="#"><span class="la la-shopping-cart"></span></a></li>
            <li><a href="login.php"><span class="la la-user"></span></a></li>
    
          </ul>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-white header-shadow" dir="rtl">
      <div class="container">
  
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">خانه</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">فروشگاه</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">وبلاگ</a>
            </li>
          </ul>
          
          <a  class="btn btn-header btn-primary" href="cpanel/adlogin.php">    پنجره مدیریت</a>
        </div>
      </div>
    </nav>
    </div>

  </header>
  
  <!--container-->


  <div class="box-right">
    <div class="row">
      <div>
        <p>ثبت نام کاربر</p>
      </div><br>
      <div>

        <div class="col-5 col-sm-5 col-md-5">
          <form action="register.php" method="post" class="form-group">
            <input type="text" class="form-control" name="email" placeholder="ایمیل..."><br>
            <input type="password" class="form-control" name="pass" placeholder="رمزعبور..."><br>
            <input type="password" class="form-control" name="tpass" placeholder="تکرار رمز عبور..."><br> <br>



            <input type="submit" value="ثبت نام" class="btn-login btn" name="btns">
            <br><br>
            <input type="reset" value="انصراف" class="btn-reset btn">

          </form>
        </div>

      </div>
    </div>



  </div>

</body>

</html>


<?php
if(isset($_POST["btns"])){
$email=$_POST["email"];
$pass=($_POST["pass"]);
$tpass=($_POST["tpass"]);
if($pass!=$tpass){
  echo "<script>alert('رمز عبور با تکرار آن یکسان نیست')</script>";
}
else{
  $add=mysqli_query($db, "INSERT into users(email,password1) values('$email','$pass')");
}
if($add){
  echo "<script>alert('عضویت شما با موفقیت انجام شد')</script>";
}

}
?>