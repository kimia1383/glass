<?php
require_once 'config.php';
$id=$_GET['id'];
$query=mysqli_query($db,"SELECT * from prudact where id='$id'");
$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body dir="rtl"> 

<!--منو بالا صفحه-->
<div class="nav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">     
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link item" href="index.php">خانه</a>
                </li>
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle item" href="product.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    محصولات
                  </a>
                
                </li>
                <li class="nav-item">
                    <a class="nav-link item" href="rigester.php">ارتباط با ما</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link item" href="#">تماس با ما</a>
                  </li>
                  
                  
                  <?php if(isset($_SESSION['user'])){ 
                    ?>
                      <li>
                    <?php
                    echo("<script>alert('".$_SESSION['user']. " عزیز خوش آمدید') </script>");
                       
                    ?>
                    <a href="profile.php" class="nav-link item bt-profil">پنل کاربری<?php $_SESSION['user'] ?></a>
                  </li>
                  <?php
                }
                ?>
              </ul>            
            </div>
          </nav>
          <button class="btn1"><a href="rigester.php">ورود/ثبت نام </a></button>
        </div>
            </div>
        <br>






<div class="row">
    <div class="col-lg-6 col-sm pro-desc" style="text-align: center;">
        <div class="box-pro">
              <img class="" src="<?php   $image=$row['product_img'];
                    $s=substr($image,3);
                    echo $s;  ?>" alt="<?php  $row['product_name']; ?>" style="width: 450px; height: 500px; ">
        </div>
    </div>
    <div class="col-lg-6 col-sm">
             <h3 class="card-title" style="color: #000;"><?php echo $row['product_name']; ?></h3><br>
             <p class="card-text" style="color: #000;"><?php echo $row['product_desc']; ?> </p><br>
             <p class="card-text" style="color: #000;"><?php echo $row['product_price']; ?> تومان</p><br>
             <a href="product-desc.php?id=<?php echo $row['id']; ?>" class="btn "><img src="asset/img/cart.png" alt=""></a>
             <a href="product-desc.php?id=<?php echo $row['id']; ?>" class="btn "><img src="asset/img/heart.png" alt=""></a>
              <?php echo $row['product_desc'];?><br>
             <a href="add-to-cart.php?product_id=<?php echo $row['id'];?>">افزودن به سبد خرید</a>
    </div>
   
</div>


<br><br>

<footer class="text-center text-lg-start">
    <img src="assets/img/shredded-paper-top.svg" width="100%" class="bottom-footer" alt="">


    <section>
      <div class="container text-center text-md-start mt-5">

        <div class="row mt-3">
          <div class="col-md-4 col-lg-4 col-xl-4 icon-contant">

            <h5 class="mb-4 fw-bold contact-us-f">ارتباط با ما</h5>
            <h6 class="fw-bold"><i class="las la-home me-3 text-secondary"></i>آدرس:<span class="fw-light"> 
                 کاشان_بلوار نارنجستان</span></h6>
            <h6 class="fw-bold mt-4"><i class="las la-phone me-3 text-secondary"></i>تلفن:<span
                class="fw-light mt-4">55441233</span></h6>
            <h6 class="fw-bold mt-4"><i class="las la-phone me-3 text-secondary"></i>همراه:<span
                class="fw-light mt-4">09135339668</span></h6>
            <h6 class="fw-bold mt-4"><i class="las la-phone me-3 text-secondary"></i>کدپستی:<span
                class="fw-light mt-4">1234567</span></h6>
            <h6 class="fw-bold mt-4"><i class="las la-phone me-3 text-secondary"></i>ایمیل:<span
                class="fw-light">kimiyasadat@gmail.com<span></h6>
          </div>
          <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">

            <h6 class="text-uppercase fw-bold mb-4">
              دسترسی سریع
            </h6>
            <a href="#" class="d-block">خانه</a>
            <a href="#" class="d-block mt-3">محصولات</a>
            <a href="#" class="d-block mt-3">درباره</a>
            
          </div>
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">


            <a href="#" class="d-block">بلاگ</a>
            <a href="#" class="d-block mt-3">تماس باما</a>

          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 namad">

            <h6 class="text-uppercase text-center fw-bold mb-4">
              نمادها
            </h6>

            <a href="#!" class="text-reset"><img src="assets/img/namad1.png" width="45%" alt=""></a>
            <a href="#!" class="text-reset"><img src="assets/img/namad2.png" width="45%" alt=""></a>
          </div>


        </div>

      </div>
    </section>
    <section class="b-footer container border-top">
      <div class="row">
        <div class="p-4 col-lg-8">
          <p> بلکه روزنامه و مجله در ستون و <span class="fw-bold"> چاپگرها و متون </span> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم          </p>
        </div>
        <div class="social text-end col-lg-4 mt-4">
          <i class="la la-whatsapp"></i>
          <i class="la la-telegram"></i>
          <i class="la la-instagram"></i>
        </div>
      </div>

    </section>
   
  </footer>
       











    <script src="asset/boot/js/jquery-2.1.1.min.js"></script>
    <script src="asset/boot/js/jquery.min.js"></script>
    <script src="asset/boot/js/bootstrap.min.js"></script>
    <script src="asset/boot/js/bootstrap.bundle.min.js"></script>
  </body>
</html>