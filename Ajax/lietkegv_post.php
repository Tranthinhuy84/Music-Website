<?php
$ma=$_POST['mabm'];
include "connect.php";
$str="select * from giaovien where MABOMON='$ma'";
$rs=mysql_query($str,$conn);
echo "<table border='1'>";
while($row=  mysql_fetch_row($rs))
{
    echo "<tr>";
    echo "<td>".$row[1]."</td>";
    echo "</tr>";
    
}
echo "</table>";

//echo $ma; 
?>
