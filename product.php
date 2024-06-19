<?php
require_once 'config.php';
$query=mysqli_query($db,"SELECT * from prudact");
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
<div class="header">
      
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
        <br>
 
    <br>
    
 <div class="row">
        <?php
              while($row=mysqli_fetch_array($query)){
           ?>
            <div class="col-xl-3 col-lg-3">
       <div class="card" style="width: 19rem; box-shadow: 1px 1px 1px 1px rgba(48, 48, 48, 0.419);  position: relative; margin-right: 12px; margin-top: 5px; margin-bottom: 10px;">
          <img class="" src="<?php   $image=$row['product_img'];
                    $s=substr($image,3);
                    echo $s;  ?>" alt="<?php  $row['product_name']; ?>" style="width: 18.5rem; height: 350px; ">
          <div class="card-body">
             <h3 class="card-title" style="color: #000;"><?php echo $row['product_name']; ?></h3><br>
             <p class="card-text" style="color: #000;"><?php echo $row['product_price']; ?> تومان</p><br>
             <a href="product-desc.php?id=<?php echo $row['id']; ?>" style="position: absolute; left: 10px; bottom:10px; background-color: green; color:#fff;" class="btn">جزئیات...</a>
          </div>
            </div>
              </div>
        <?php } ?>
</div>






 <!--footer-->


<script src="asset/boot/js/jquery-2.1.1.min.js"></script>
    <script src="asset/boot/js/jquery.min.js"></script>
    <script src="asset/boot/js/bootstrap.min.js"></script>
    <script src="asset/boot/js/bootstrap.bundle.min.js"></script>
</body>
</html>