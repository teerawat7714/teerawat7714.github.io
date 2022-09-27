<?php
include "connect.php";

$sql = "INSERT INTO tbl_products (name, stock, price, description,cat_name )
        VALUES ('$_POST[name]', '$_POST[stock]', '$_POST[price]', '$_POST[description]', '$_POST[cat_name]')";

if (mysqli_query($conn, $sql)) {
  echo "บันทึกเรียบร้อย";
 // header("location: ./cat_select.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>