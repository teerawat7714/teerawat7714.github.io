<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./script/style.css" />
</head>
<body class="bg"> 
<?php
    include "navbar.php";
    ?>
   <h1>register</h1>
   <form action="reg_insert.php" method="post" enctype="multipart/form-data">
    first name <input type="text" name="firstname" /> <br/>
    last name  <input type="text" name="lastname" /> <br/>
    email <input type="email" name="email" /> <br />
    password <input type="" name="password" /><br />
    Address<textarea rows="5" cols="50" name="address"></textarea> <br/>
    <input type="submit" value="ลงทะเบียน" />
    

   </form>
</body>
</html> 