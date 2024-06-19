<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ارتباط با ما</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">   
    <link rel="stylesheet" href="assets/css/custom.css">  
</head>
<body dir="rtl" style="background-color:#f1eee9;">
<div id="carouselExampleSlidesOnly" class="carousel slide w-100" data-bs-ride="carousel" data-bs-interval="2000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/slider/05.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img/slider/06.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img/slider/07.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      <img src="assets/img/shredded-paper-bottom.svg" width="100%" class="bottom-slider" alt="">
    </div>
      <div class="cont" style="background-color:#f1eee9;text-align: center; "><br>
            <div class="form" style="background-color:#e0aaff;text-align: center; width: 800px;height: 500px; position: relative; right:200px; align-items: center;border-radius: 10px;">
        
            <h1 style="color:#fff;">ارتباط با ما </h1><br>
            <h4 style="color:#fff;"> پیشنهاد و انتقاد های خود را از طریق فرم زیر ارسال نمایید </h4><br><br>
              <form action="call.php" method="post">
                <input type="text" name="nam" placeholder="نام" id="" style="width: 300px;height: 35px;margin-bottom: 10px;"><br>
                <input type="email" name="email"  placeholder="ایمیل" id="" style="width: 300px;height: 35px;margin-bottom: 10px;"><br>
                <textarea id="" name="txt" placeholder="پیغام" required style="width:300px;height: 100px;margin-bottom: 10px;"></textarea>
                <br><br>
                <input type="submit" value=" ثبت" class="btn btn-success" name="btns" style=" bottom:30px;background-color:#ec994b;border-color:#ec994b;">
              </form>
            </div>
            <br><br><br>
      
</div>
      
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
            <a href="call.php" class="d-block mt-3">تماس باما</a>

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
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
if(isset($_POST['btns'])){
    if(
       isset($_POST['nam'])&& !empty($_POST['nam'])&&
       isset($_POST['email'])&& !empty($_POST['email'])&&
       isset($_POST['txt'])&& !empty($_POST['txt'])
     )
     {
       $nam=$_POST["nam"];
       $email=$_POST["email"];
       $txt=($_POST["txt"]);
     }
   else{
    echo "<script>alert('برخی از فیلد ها مقدار دهی نشده است')</script>";
      }
    if(mysqli_connect_errno())
           exit("خطایی با شرح زیر رخ داده است".mysqli_connect_errno());
        
         else{
            $query="INSERT INTO contact(nam,email,txt) VALUES ('$nam','$email','$txt')";
        }
        if(mysqli_query($db,$query)==true)
        echo "<script>alert('پیام با موفقیت ارسال شد')</script>";
    
          else
        echo "<script>alert('پیام با موفقیت ارسال نشد')</script>";

   }
?>
