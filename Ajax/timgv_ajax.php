<?php
    include "connect.php";
    $ten=$_GET['tengv'];
    $str="select * from giaovien where TENGIAOVIEN='$ten'";
    $rs=mysql_query($str,$conn);
    if(mysql_num_rows($rs)>0)
        echo "Tìm thấy";
    else
        echo "Không tìm thấy";
?>
