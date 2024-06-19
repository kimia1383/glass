<?php 
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="node_modules/line-awesome/dist/line-awesome/css/line-awesome.min.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <title>Document</title>
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
  <main>
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
    <section class="about-us">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-lg-5 col-xl-5">
            <figure>
              <div class="img-box">
              </div>
              <img class="student-img mt-5" src="assets/img/graduates.jpg" width="95%" alt="">

            </figure>

          </div>
          <div class="col-md-7 col-lg-7 col-xl-7">
            <div class="about-us-p mt-5">
              <h1 class="title mb-4">عینک میا بینا</h1>
              <p class="text-p">
              لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون
               و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، 
              و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد،
               کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان
               جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان
              
            رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، 
              در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و
               شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی،
               و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
              </p>
              <p class="text-bold">چشم انداز</p>
              <p class="text-p">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
              <p class="text-p">چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
              <p class="text-p">برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
              <p class="text-p">کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان رامیطلبد/p>
              <p class="text-p">با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان </p>
              <p class="text-p">استفاده گسترده از تکنولوژی آموزشی</p>
              <p class="text-p">در این صورت می توان امید داشت که تمام و دشواری موجود </p>
              <p class="text-p">مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
            </div>
          </div>

        </div>
        <body>