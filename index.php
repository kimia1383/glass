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
<div class="container-fluid">
      <?php
        if(isset($_SESSION['user'])){
          ?>
          <div class="row">
            <div class="col" style="height: 60px;">
           <p style="text-align: right;padding-top: 15px;">
           کاربر گرامی <?php echo $_SESSION['user'];?> خوش آمدید
           <a href="profile.php"  style="float:left;" class="btn btn-primary">نمایش پروفایل</a>
           </p>
            </div>
          </div>
          
        <?php
        }
        ?>
  <header>
    <div class="top-header">
      <div class="container">
        <div class="d-flex justify-content-between">
          <ul class="top-header-right">
            <li><a href="aboutus.php">درباره ما</a></li>
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
        <div class="about-icon-container row mt-5 justify-content-center">
          <div class="col-lg-3 col-md3 col-xl-3 col-sm-3">
            <i class="icon las la-chalkboard-teacher"></i>
            <span class="d-block number-about">44</span>
            <span class="d-block text-about">بروز ترین برند خارجی</span>
          </div>
          <div class="col-lg-3 col-md3 col-xl-3 col-sm-3">
            <i class="icon las la-user-check"></i>
            <span class="d-block number-about">60</span>
            <span class="d-block text-about"> بهترین متخصصان چشم</span>
          </div>
          <div class="col-lg-3 col-md3 col-xl-3 col-sm-3">
            <i class="icon las la-thumbs-up"></i>
            <span class="d-block number-about">200</span>
            <span class="d-block text-about">    دستگاه   تخصصی  </span>
          </div>
          <div class="col-lg-3 col-md3 col-xl-3 col-sm-3">
            <i class="icon las la-user-graduate"></i>
            <span class="d-block number-about">1800</span>
            <span class="d-block text-about"> همراهان مرکز تا به امروز</span>
          </div>
        </div>

      </div>
    </section>
    <section class="book">
      <img src="assets/img/shredded-paper-top.svg" width="100%" class="top-slider" alt="">
      <div class="text-header mt-5 text-center">
        <h3>  محصولات طبی</h3>
        <p>لورم ایپسوم متن ساختگی با تولید ساخنگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
      </div>

      <div class="container">
        <div class="row book-content mt-4 mb-5">

          <div class="box-style col-lg-2 col-md-2 col-xl-2 col-sm-2">
            <figure>
              <img src="assets/img/4book.jpg" alt="دوره ی آموزشی ویژه بزرگسالان" width="60%">
            </figure>
            <div class="content">
              <h3 class="title">      عینک دیور مدل 724 </h3>
              <p class="text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد....</p>
              <div class="text-end"><a class="btn-more-book" href="#" title="" tabindex="0">ادامه مطلب</a></div>
            </div>
          </div>
          <div class="box-style col-lg-2 col-md-2 col-xl-2 col-sm-2">
            <figure>
              <img src="assets/img/IMG_8343.jpeg" alt="دوره ی آموزشی ویژه بزرگسالان" width="80%">
            </figure>
            <div class="content">
              <h3 class="title">  عینک گوچی مدل 767  </h3>
              <p class="text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد....</p>
              <div class="text-end"><a class="btn-more-book" href="#" title="" tabindex="0">ادامه مطلب</a></div>
            </div>
          </div>
          <div class="box-style col-lg-2 col-md-2 col-xl-2 col-sm-2">
            <figure>
              <img src="assets/img/1book.jpg" alt="دوره ی آموزشی ویژه بزرگسالان" width="60%">
            </figure>
            <div class="content">
              <h3 class="title"> عینک دیور مدل 725   </h3>
              <p class="text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                 از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد....</p>
              <div class="text-end"><a class="btn-more-book" href="#" title="" tabindex="0">ادامه مطلب</a></div>
            </div>
          </div>

          <div class="box-style col-lg-2 col-md-2 col-xl-2 col-sm-2">
            <figure>
              <img src="assets/img/3bookjpg.jpg" alt="دوره ی آموزشی ویژه بزرگسالان" width="60%">
            </figure>
            <div class="content">
              <h3 class="title">عینک گوچی مدل768  </h3>
              <p class="text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد....</p>
              <div class="text-end"><a class="btn-more-book" href="#" title="" tabindex="0">ادامه مطلب</a></div>
            </div>
          </div>


          <div class="box-style col-lg-3 col-md-2 col-xl-3 col-sm-2">
            <figure>
              <img src="assets/img/IMG_8352.jpeg" alt="دوره ی آموزشی ویژه بزرگسالان" width="60%">
            </figure>
            <div class="content">
              <h3 class="title">    عینک گوچی مدل 860</h3>
              <p class="text"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                 از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد....</p>
              <div class="text-end"><a class="btn-more-book" href="#" title="" tabindex="0">ادامه مطلب</a></div>
            </div>
          </div>
          <div class="box-style col-lg-3 col-md-2 col-xl-3 col-sm-2">
            <figure>
              <img src="assets/img/IMG_8350.jpeg" alt="دوره ی آموزشی ویژه بزرگسالان" width=45%">
            </figure>
            <div class="content">
              <h3 class="title"> عینک گوچی مدل 890   </h3>
              <p class="text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده 
                از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد...</p>
              <div class="text-end"><a class="btn-more-book" href="#" title="" tabindex="0">ادامه مطلب</a></div>
            </div>
          </div>

          

          
        </div>

      </div>

      </div>
      <a href="product.php" class="btn-book">محصولات  بیشتر</a>
      <img src="assets/img/shredded-paper-bottom.svg" width="100%" class="bottom-book" alt="">
    </section>
    <section class="department">
      <div class="container">
        <div class="text-depsartment text-center">
          <h3>
           بیمه های تحت قرارداد
          </h3>
          <p>دراین قسمت بیمه های تحت قرارداد  را مشاهده میکنید</p>
        </div>
        <div class="row">
          <div class="box-department col-lg-4 col-xl-4 col-sm-6 col-md-6">
            <div class="bg-deparment">
              <span> بیمه ایران</span>
            </div>
            <img src="assets/img/iran bimeh.png" alt="" width="85%">

          </div>
          <div class="box-department col-lg-4 col-xl-4 col-sm-6 col-md-6">
            <div class="bg-deparment">
              <span>بیمه آسیا </span>
            </div>
            <img src="assets/img/asia bimeh.jpg" alt="" width="85%">

          </div>
          <div class="box-department col-lg-4 col-xl-4 col-sm-6 col-md-6">
            <div class="bg-deparment">
              <span> بیمه دانا</span>
            </div>
            <img src="assets/img/dana bimeh.png" alt="" width="85%">

          </div>
        </div>
      </div>
    </section>
    <section class="team">
      <div class="team-text text-center mt-5">
        <h2>
            متخصصان چشم
        </h2>
        <span>دراین قسمت تیم  متخصصان چشم رو مشاهده می کنید</span>
      </div>
      <div class="container">
        <div class="team-box mt-5">
          <div class="person-box col-lg-2 col-md-2 col-xl-2 col-sm-2">
            <figure>
              <img src="assets/img/user.jpg" width="100%" alt="">
            </figure>
            <h3>آقای دکتر مددی</h3>
            <span class="d-block">متخصص بینایی سنجی   </span>
            <i class="lab la-instagram social-icon"></i>
            <i class="lab la-facebook-square social-icon"></i>
          </div>
          <div class="person-box col-lg-2 col-md-2 col-xl-2 col-sm-2">
            <figure>
              <img src="assets/img/user.jpg" width="100%" alt="">
            </figure>
            <h3>آقای دکتر مددی</h3>
            <span class="d-block">متخصص بینایی سنجی   </span>
            <i class="lab la-instagram social-icon"></i>
            <i class="lab la-facebook-square social-icon"></i>
          </div>
          <div class="person-box col-lg-2 col-md-2 col-xl-2 col-sm-2">
            <figure>
              <img src="assets/img/user.jpg" width="100%" alt="">
            </figure>
            <h3>آقای دکتر مددی</h3>
            <span class="d-block">متخصص بینایی سنجی   </span>
            <i class="lab la-instagram social-icon"></i>
            <i class="lab la-facebook-square social-icon"></i>
          </div>
          <div class="person-box col-lg-2 col-md-2 col-xl-2 col-sm-2">
            <figure>
              <img src="assets/img/user.jpg" width="100%" alt="">
            </figure>
            <h3>آقای دکتر مددی</h3>
            <span class="d-block">متخصص بینایی سنجی   </span>
            <i class="lab la-instagram social-icon"></i>
            <i class="lab la-facebook-square social-icon"></i>
          </div>

          <div class="person-box col-lg-2 col-md-2 col-xl-2 col-sm-2">
            <figure>
              <img src="assets/img/user.jpg" width="100%" alt="">
            </figure>
            <h3>آقای دکتر مددی</h3>
            <span class="d-block">متخصص بینایی سنجی   </span>
            <i class="lab la-instagram social-icon"></i>
            <i class="lab la-facebook-square social-icon"></i>
          </div>
          <div class="person-box col-lg-2 col-md-2 col-xl-2 col-sm-2">
            <figure>
              <img src="assets/img/user.jpg" width="100%" alt="">
            </figure>
            <h3>آقای دکتر مددی</h3>
            <span class="d-block">متخصص بینایی سنجی   </span>
            <i class="lab la-instagram social-icon"></i>
            <i class="lab la-facebook-square social-icon"></i>
          </div>
          <div class="person-box col-lg-2 col-md-2 col-xl-2 col-sm-2">
            <figure>
              <img src="assets/img/user.jpg" width="100%" alt="">
            </figure>
            <h3>آقای دکتر مددی</h3>
            <span class="d-block">متخصص بینایی سنجی   </span>
            <i class="lab la-instagram social-icon"></i>
            <i class="lab la-facebook-square social-icon"></i>
          </div>
          <div class="person-box col-lg-2 col-md-2 col-xl-2 col-sm-2">
            <figure>
              <img src="assets/img/user.jpg" width="100%" alt="">
            </figure>
            <h3>آقای دکتر مددی</h3>
            <span class="d-block">متخصص بینایی سنجی   </span>
            <i class="lab la-instagram social-icon"></i>
            <i class="lab la-facebook-square social-icon"></i>
          </div>

        </div>
      </div>
      <div class="bg"></div>
    </section>
    <sction class="student">
      <div class="student-text text-center">
        <h2>
          نظرات بیماران کلینیک  
        </h2>
        <span>دراین قسمت نظرات      بیماران کیلینیک رو مشاهده می کنید </span>
      </div>
      <div class="container">
        <div class="student-slider mt-5">
          <div class="box-student">
            <img src="assets/img/user.jpg" class="rounded-circle" width="20%" alt="">
            <h3>سلام و خسته نباشید</h3>
            <p> چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برنیاز، و کاربردهای متناصلی، و
              جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
            <h5 class="text-center">کیمیا سیدی</h5>
            <span class="text-center"> بیمار</span>
          </div>
          <div class="box-student">
            <img src="assets/img/user.jpg" class="rounded-circle" width="20%" alt="">
            <h3>سلام و خسته نباشید</h3>
            <p> چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برنیاز، و کاربردهای متناصلی، و
              جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
            <h5 class="text-center">کیمیا سیدی</h5>
            <span class="text-center"> بیمار</span>
          </div>
          <div class="box-student">
            <img src="assets/img/user.jpg" class="rounded-circle" width="20%" alt="">
            <h3>سلام و خسته نباشید</h3>
            <p> چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برنیاز، و کاربردهای متناصلی، و
              جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
            <h5 class="text-center">کیمیا سیدی</h5>
            <span class="text-center"> بیمار</span>
          </div>
          <div class="box-student">
            <img src="assets/img/user.jpg" class="rounded-circle" width="20%" alt="">
            <h3>سلام و خسته نباشید</h3>
            <p> چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برنیاز، و کاربردهای متناصلی، و
              جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
            <h5 class="text-center">کیمیا سیدی</h5>
            <span class="text-center"> بیمار</span>
          </div>
          <div class="box-student">
            <img src="assets/img/user.jpg" class="rounded-circle" width="20%" alt="">
            <h3>سلام و خسته نباشید</h3>
            <p> چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برنیاز، و کاربردهای متناصلی، و
              جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
            <h5 class="text-center">کیمیا سیدی</h5>
            <span class="text-center"> بیمار</span>
          </div>
          <div class="box-student">
            <img src="assets/img/user.jpg" class="rounded-circle" width="20%" alt="">
            <h3>سلام و خسته نباشید</h3>
            <p> چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برنیاز، و کاربردهای متناصلی، و
              جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
            <h5 class="text-center">کیمیا سیدی</h5>
            <span class="text-center"> بیمار</span>
          </div>
        </div>
    </sction>
    <section class="cantact mt-5">
      <div class="container">
        <div class="content">
          <div class="row">
            <div class="col-md-6">
              <span class="text-right">برای بهترین شدن با بهترین ها در ارتباط باش</span>
            </div>
            <div class="col-md-6 text-end">
              <a href="#" class="text-end ">مشاوره رایگان</a>
            </div>
          </div>
        </div>
      </div>

    </section>
    <section class="news mt-5">
      <div class="news-text text-center">
        <h2>
            تخفیف های داغ امروز
        </h2>
        <span>دراین قسمت       تخفیفات   روز را مشاهده می کنید </span>
      </div>
      <div class="container">
        <div class="news-box-r mt-5">
          <div class="news-box ">
            <figure>
              <div class="hot-offer">
                <span>30%</span>
                <span>تخفیف</span>
              </div>
              <img src="assets/img/2 (1).jpg" width="100%" alt="">
            </figure>
            <span class="event">جدید</span>
            <h6 class="h6-news">        عینک دیور 735</h6>
            <p> چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برنیاز، و کاربردهای متناصلی، و
              جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
            <div class="text-end">
              <a href="#">ادامه مطالب</a>
            </div>
          </div>
          <div class="news-box ">
            <figure>
              <div class="hot-offer">
                <span>30%</span>
                <span>تخفیف</span>
              </div>
              <img src="assets/img/2 (1).jpg" width="100%" alt="">
            </figure>
            <span class="event">جدید</span>
            <h6 class="h6-news">        عینک دیور 735</h6>
            <p> چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برنیاز، و کاربردهای متناصلی، و
              جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
            <div class="text-end">
              <a href="#">ادامه مطالب</a>
            </div>
          </div>
          <div class="news-box ">
            <figure>
              <div class="hot-offer">
                <span>30%</span>
                <span>تخفیف</span>
              </div>
              <img src="assets/img/2 (1).jpg" width="100%" alt="">
            </figure>
            <span class="event">جدید</span>
            <h6 class="h6-news">        عینک دیور 735</h6>
            <p> چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برنیاز، و کاربردهای متناصلی، و
              جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
            <div class="text-end">
              <a href="#">ادامه مطالب</a>
            </div>
          </div>
          <div class="news-box ">
            <figure>
              <div class="hot-offer">
                <span>30%</span>
                <span>تخفیف</span>
              </div>
              <img src="assets/img/2 (1).jpg" width="100%" alt="">
            </figure>
            <span class="event">جدید</span>
            <h6 class="h6-news">        عینک دیور 735</h6>
            <p> چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برنیاز، و کاربردهای متناصلی، و
              جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
            <div class="text-end">
              <a href="#">ادامه مطالب</a>
            </div>
          </div>
        </div>
    </section>
    <section class="download">
      <div class="download-text text-center mt-5">
        <h2>
          دانلود اپلیکیشن رزرو نوب
        </h2>
        <span>دراین قسمت اپلیکیش های رزرو نوبت   رو مشاهده می کنید</span>
      </div>
      <div class="teacher text-center mt-5">
        <h4>
          نسخه دکتران
        </h4>
        <div class="container">
          <img src="assets/img/bazar.png" width="200px" alt="">
          <img src="assets/img/sibirani.png" width="200px" alt="">
        </div>
      </div>
      <div class="student text-center mt-5">
        <h4>
          نسخه  بیماران
        </h4>
        <div class="container">
          <img src="assets/img/bazar.png" width="200px" alt="">
          <img src="assets/img/sibirani.png" width="200px" alt="">
        </div>
      </div>

    </section>
  </main>


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

  <button class="phone">
    <span class="la la-phone"></span>
  </button>
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/slick-carousel/slick/slick.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/javascript.js"></script>
</body>

</html>