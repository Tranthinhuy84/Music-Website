<html>
<head>
    <meta charset="UTF-8">
<script src="jquery.js"></script>
<script>
$(document).ready(function(){
  $("#macasi").change(function(){
    var macasi=$("#macasi").val();  
    $.post("lietkealbum1.php",
    {
      ma:macasi
    },
    function(data,status){
      if(status=="success")
      {
        $("#iddiv").html(data);  
        $("#maalbum").change(function(){
            var maalbum=$("#maalbum").val();
            $.post("lietkebaihat1.php",
            {
                maalbum:maalbum 
            },
            function(data,status){
                $("#iddiv1").html(data); 
                $(".delete").click(function(){
                 var mabaihat=$(this).attr("mabaihat");
                 $(this).parent().parent().remove();
                 $.post("xoabaihat.php",
                 {
                        mabaihat:mabaihat 
                 },
                 function(data,status){
                        
                 });
               });
            })
        });
      }
    });
  });
});
</script>
</head>
<body>
    <?php
        include "connect.php";
        $str="select * from casi";
        $rs=$connect->query($str);
        echo "Ca sĩ:";
        echo "<select id='macasi'>"; 
        echo "<option>Chọn ca sĩ</option>";
        while($row= $rs->fetch_row())
        {
            echo "<option value='$row[0]'>".$row[1]."</option>";
        }
        echo "</select>";
   
    ?>
   <br>
   <div id="iddiv" style="margin-top:20px"></div><br><br>
   <div id="iddiv1"></div>
</body>
</html>
