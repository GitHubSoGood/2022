<?php 
  $s = "";
  
 if(!empty($_POST['address'])){ //处理空
  foreach($_POST['address'] as $i){
    $s .= $i.",";
  }
 }

  echo "输入地址为：".$s."<br>";
  

?>