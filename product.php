<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เกี่ยวกับเรา</title>
    <link rel="stylesheet"  href="./script/style.css" />

</head>
<body class="bg">

    <?php
    include "navbar.php";
    ?>
    <form action="product_insert.php" method="post" enctype="multipart/form-data">

ชื่่อสินค้า <input type="text" name="name" /> <br />
สินค้าคงเหลือ <input type="text" name="stock" /> <br />
ราคา <input type="text" name="price" /> <br />
ชื่อกลุ่มสินค้า <input type="text" name="cat_name" /><br />
รายละเอียดสินค้า<textarea rows="5" cols="50" name="description"></textarea> <br />
<input type="submit" name="บันทึกช้อมูล" />

</form>
   
   
    <img src="./images/ประชานิเวศน์3-1.jpg" height="200px"/>
    <img src="./images/ประชานิเวศน์3-2.jpg" height="200px"/>
    <img src="./images/เชียงใหม่1.jpg" height="200px"/>
    <img src="./images/เชียงใหม่2.jpg" height="200px"/>
    <img src="./images/สุรนารี1.jpg" height="200px"/>
    <img src="./images/สุรนารี2.jpg" height="200px"/>
    <img src="./images/บัวทอง1.jpg" height="200px"/>
    <img src="./images/บัวทอง2.jpg" height="200px"/>
    <img src="./images/มอกรุงเทพ1.jpg" height="200px"/>
    <img src="./images/มอกรุงเทพ2.jpg" height="200px"/>
</body>
</html>