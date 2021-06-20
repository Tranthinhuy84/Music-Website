<?php
    $tencasi=$_GET['ten'];
    include "connect.php";
    $str="select * from casi where TenCaSi LIKE '$tencasi%'";
    $rs= $connect->query($str);  
    echo "<table border='1'>";
    echo "<tr><th>Mã Ca sĩ</th>";
    echo "<th>Tên Ca sĩ</th></tr>";
    if($rs->num_rows>0)
    {
        while($row= $rs->fetch_row())
        {
            echo "<tr>"."<td>".$row[0]."</td>";
            echo "<td>".$row[1]."</td>";
            echo "</tr>";
        }
    }
    echo "</border>";
?>
