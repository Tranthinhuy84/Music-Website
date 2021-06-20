<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script>
       function lietke(mabomon)
       {
           //alert("test");
           var xmlhttp;
            if (window.XMLHttpRequest)
            {//code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            }
            else
            {// code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                document.getElementById("iddiv").innerHTML=xmlhttp.responseText;
                }
            }
            var mabomon=document.getElementById('mabm').value;
            xmlhttp.open("POST","lietkegv_post.php",true);
            xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            xmlhttp.send("mabm="+mabomon); 
        }
        </script>
    </head>
    <body>
        <?php
        include "connect.php";
        $str="select * from bomon";
        $rs=mysql_query($str,$conn);
        echo "<form method='POST'>";
        echo "<select id='mabm' onchange='lietke(this.value)'>";
        while($row=  mysql_fetch_row($rs))
        {
            echo "<option value='$row[0]'>".$row[1]."</option>";
            
        }
        echo "</select>";
        echo "</form>";
        ?>
        <div id="iddiv">
    <body>
</html>
