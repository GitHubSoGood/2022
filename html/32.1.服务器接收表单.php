<?php 

    // 发现在真实服务器环境下无法接收数据，被 nginx和chrome拦截掉

    $localhost1 = "in1.html";
    $localhost2 = "in2.html";
    $userName = $_POST['user'];
    
    
    if($userName == 1){
        header("Location:$localhost1");
    }elseif($userName == 2){
        header("Location:$localhost2");
    }elseif($userName == "百度"){
        header("Location:http://baidu.com/");
    }elseif($userName == "baidu"){
        header("Location:http://baidu.com/");
    }
    else{
        echo "接收到的是:".$userName;
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="http://www.baidu.com/"></a>
  
</body>
</html>
        
 




