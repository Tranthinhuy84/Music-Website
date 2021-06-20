<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<script>
	function ajax(macs)
	{
		//alert(macs);
		var xmlHttp;
       if (window.XMLHttpRequest)
       {
             // code for IE7+, Firefox, Chrome, Opera, Safari
           xmlHttp=new XMLHttpRequest();

      	}
      	else
      	{
                    // code for IE6, IE5
           xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
      	}
		xmlHttp.onreadystatechange=function()
       {
       		if (xmlHttp.readyState==4)
			{
              if (xmlHttp.status == 200) 
				{
		document.getElementById('iddiv').innerHTML=xmlHttp.responseText;
          		}
              else {
                            // Có lỗi! Thông báo ngay!
                            alert('Lỗi!!!');
               }
            }
	   }
       var url='lietkealbum_ajax1.php';
		url=url+"?macasi="+macs;
       xmlHttp.open("GET",url,true);
		xmlHttp.send(null);
            
	}
</script>
</head>
<body>
<?php
 include "connect.php";
 $str="select * from casi";
 $rs=mysql_query($str,$conn ); 
 echo "Chọn tên ca sỉ:";
 echo "<select id='idmacs' onChange='ajax(this.value)'>";
 while($row=mysql_fetch_row($rs))
 {
	 echo "<option value='$row[0]'>".$row[1]."</option>";
 }
 echo "</select >";
 echo "<div id='iddiv'>";
?>
</body>
</html>