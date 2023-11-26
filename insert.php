<?php

$LIST = $_POST['list'];
include "config.php";
mysqli_query($con, "INSERT INTO `tabeltodo`(`list`) VALUES ('$LIST')");

//menentukan halaman mana yg dituju setelah data dikirim
header("location:index.php");
?>