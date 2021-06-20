<?php
    $mabaihat =$_POST["mabaihat"];
    include "connect.php";
    $str = "delete from baihat where MaBaiHat='$mabaihat'";
    $connect->query($str);
?>