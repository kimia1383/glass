<?php
require_once 'config.php';
$email=$_SESSION['user'];
$getUser=mysqli_query($db, "select * from users where email='$email'");
$user=mysqli_fetch_array($getUser);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه تغییر گذروازه</title>
    <link rel="stylesheet" href="node_modules/line-awesome/dist/line-awesome/css/line-awesome.min.css">
  <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>
    <div class="main">
        
        <div class="menu"">
            <ul>
                <li> <a href="chpass.php">تغییر گذروازه</a> </li>
                <br>
                <li> <a href="#">سفارشات</a> </li>
                <br>
                <li> <a href="logout.php"> خروج</a> </li>
            </ul>
        </div>
        <div>
            <form action="chpass.php" method="post" class="form-group">
                <input type="password" class="form-control" name="oldpass" placeholder="گذرواژه فعلی"><br>
                <input type="password" class="form-control" name="newpass" placeholder="گذرواژه جدید"><br>
                <input type="submit" value="ذخیره" class="btn btn-success" name="btnsave">
                <input type="reset" value="انصراف" class="btn btn-danger">
                
            </form>
        </div>
    </div>
</body>
</html>
<?php
if (isset($_POST['btnsave'])){
$id=$user['id'];
$oldpass=($_POST['oldpass']);
$newpass=($_POST['newpass']);
if ($oldpass==$user['password1']){
    mysqli_query($db, "update users set password1='$newpass' where id='$id' ");
    
}

}
