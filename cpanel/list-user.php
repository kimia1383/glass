<?php
Require_once '../config.php ';
$query=mysqli_query($db,"SELECT * from users");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست کاربران </title>
    <link rel="stylesheet" href="../node_modules/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script>tinymce.init({selector:'textarea'})</script>
</head>
<body dir="rtl">
    <div class="main">
        <h1>لیست کاربران</h1>
        <hr>
        <div class="menu">
            <ul>
                <li> <a href="../index.php">نمایش فروشگاه</a> </li>
                <li> <a href="list-products.php">لیست محصولات</a> </li>
                <li> <a href="add-product.php">افزودن محصول</a> </li>
                <li> <a href="list-user.php">لیست کاربران</a> </li>
                <li> <a href="comments.php">لیست نظرات</a> </li>
                <li> <a href="#">سفارش ها</a> </li>
                <li> <a href="adlogout.php"> خروج</a> </li>
            </ul>
        </div>
        <div class="list">
            <table>
              <tr>
                <th>ایمیل </th>
                <th>پسوورد</th>
              </tr>
              <?php while($row=mysqli_fetch_array($query)){
             ?>
             <tr>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password1']; ?></td>
                <td><a href="delete-user.php?id=<?php echo $row['id']; ?>">حذف</a></td>
             </tr>
             <?php
             }
             ?>
             </table>

</body>