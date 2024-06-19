<?php
Require_once"../config.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA_Compatible" content="ie=edge">
    <title> ورود مدیریت سایت</title>
    <link rel="stylesheet" href="node_modules/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/custom.css">
</head>
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
      
        </div>
      </div>
    </nav>
    </div>

  </header>
<!--container-->
<div class="row">
<div class="col-12 col-sm-6 col-md-12" style="background-image:url('../img/b/12.jpg')">
  <div style="text-align:center"><p style="font-size:30px">ورود مدیر</p></div><br>
  <div style="display: flex;align-content:center;align-items:center;">
  <form acton="adlogin.php" method="post" class="form-group" style="margin:0 auto" >
    <input type="text" name="email" class="form-control" placeholder="نام کاربری مدیر...." style="width:400px"><br>
    <input type="password" name="pass" class="form-control" placeholder="گذرواژه مدیر..." style="width:400px"><br>
</div>
<div style="text-align:center">
    <input type="submit" value="ورود" name="btnlogin"class="btn btn-success">
    <input type="reset" value="انصراف" class="btn btn-danger">
    <br><br>
</form>
</div>
</div>
</div>

    </div>
</body>
</html>
<?php
if(isset($_POST['btnlogin'])){
  $user=$_POST['email'];
  $pass=$_POST['pass'];
  if($user==ADMINUSER AND $pass==PASSWORD){
    $_SESSION['ADMIN']=$user;
    ?>

    
    <script type="text/javascript">
    window.location.href="adindex.php";
    </script>
    <?php
  }
    
    else{
    echo"<script> alert('ایمیل یا گذرواژه به درستی وارد نشده است')</script>";
  }
}
?>