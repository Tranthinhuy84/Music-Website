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
       function Tim()
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
            tensv=document.getElementById("idten").value;
            xmlhttp.open("GET","timgv_ajax.php?tengv="+tensv,true);
            xmlhttp.send(); 
        }
        </script>
    </head>
    <body>
        Tên giáo viên: 
    <input type="text" id="idten" onBlur="Tim()"></input>    
    <br>
    <div id="iddiv">
    <body>
</html>
