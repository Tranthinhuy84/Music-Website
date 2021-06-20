<?php
$maalbum=$_POST['maalbum'];
include "connect.php";
$str="select * from baihat where MaAlBum='$maalbum'";
$rs=$connect->query($str);
echo "<table border='1'>";
echo "<tr><th>Mã bài hát</th>";
echo "<th>Tên bài hát</th><th>Chức năng</th></tr>";
while($row= $rs->fetch_row())
{
    echo "<tr><td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td><button class='delete' mabaihat='$row[0]'>Delete</button></td>";
    echo "</tr>";
}
echo "</table>";
?>
