<?php 
   $k = "";
   if(!empty($_POST['fruit'])){ //处理空
    foreach($_POST['fruit'] as $i){
        $k .= $i.",";
       }
   }else{
        echo "未选中任何东西";
   }
    echo $k;
?>