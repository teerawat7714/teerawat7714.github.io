<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./script/style.css" />
</head>

<body>
    <?php
    include "navbar.php" ;
    ?>

    <form action="product_insert.php" method="post" enctype="multipart/form-data">

        ชื่่อสินค้า <input type="text" name="name" /> <br />
        สินค้าคงเหลือ <input type="text" name="stock" /> <br />
        ราคา <input type="email" name="price" /> <br />
        ชื่อกลุ่มสินค้า <input type="" name="cat_name" /><br />
        รายละเอียดสินค้า<textarea rows="5" cols="50" name="description"></textarea> <br />
        <input type="submit" name="บันทึกช้อมูล" />

    </form>

</body>

</html>