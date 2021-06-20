<?php
$mabomon=$_POST['mabm'];
include "connect.php";
$str="select * from giaovien where MABOMON='$mabomon'";
$rs=mysql_query($str,$conn);
echo "<h3>Danh sách giáo viên</h3>";
echo "<table border='1'>";
echo "<tr><th>Mã giáo viên</th>";
echo "<th>Tên giáo viên</th>";
echo "<th>Giới tính </th></tr>";
while($row= mysql_fetch_row($rs))
{
    echo "<tr><td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td>";
    if($row[2]==1)
        echo "Nam";
    else
        echo "Nữ";
    echo"</td></tr>";
}
echo "</table>";
?>
