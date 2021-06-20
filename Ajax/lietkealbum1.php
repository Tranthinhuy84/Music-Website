<?php
include "connect.php";
//Lấy dữ liệu trong biến “ma”
$macasi=$_POST['ma'];
$str="select * from album where MaCaSi='$macasi'";
$rs=$connect->query($str);
echo "Album:";
echo "<select id='maalbum'>";
echo "<option>Chọn</option>";
while($row=$rs->fetch_row())
{
    echo "<option value='$row[0]'>".$row[1];
    echo "</option>";
}
echo "</select>"; 
?>
