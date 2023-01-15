<?php 
  $name_ = $_POST['name'];
  

  $age_ = $_POST['age'];
  $course_ = $_POST['course'];
  $number_11_ = $_POST['number_11'];
  $city_ = $_POST['city'];
  $city2_ = $_POST['city2'];
  $address_ = $_POST['address'];
  $notes_ = $_POST['notes'];



    // echo  $name_. $sex_.$age_. $course_.$number_11_. $city_.$city2_.$address_.$notes_;




/// php文件中包含html代码，如何把html中的value值和php的变量拼接在一起呢？答案如下
/// echo ' 姓名：* <input type="text" name="name" value= "   '.$name_.'    " />   ' ;
      


  echo ' 姓名：* <input type="text" name="name" value= "   '.$name_.'    " />    <br>' ;

   
  if(!empty($_POST['sex'])){
    
    
    if($_POST['$sex'] =="1"){
      
      echo ' 性别：* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
        <input type="radio" \checked />男 ';
  
      
    }
  
    
    if($_POST['$sex'] =="0"){
      
      echo ' 性别：* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
        <input type="radio" \checked />女';
   
      
    }
  }   
  
       
        
     
   echo '年龄：* <input type="text" name="name" value= "   '.$age_.'    " />    <br>' ;
        
   echo '     选择课程：*&nbsp;&nbsp;
        <input type="checkbox" name="course" value=" '.$course_.'">英语
        <input type="checkbox" name="course" value="'.$course_.'" checked>数学
        <input type="checkbox" name="course" value="'.$course_.'" checked>音乐
        <br> 
      ';

      //  <!-- // <input type="tel">有些浏览器对tel不支持，并不会做判断，还是使用text再自己正则 -->
      //   手机号码：*<input type="text" name="number-11" size="26"  pattern="[0-9]{11}"/>

      //   <br><br>
      //   所在城市：*

      //   <select name="city" >
      //       <option value="shanx">山西</option>
      //       <option value="anh">安徽</option>
      //       <option value="hun">湖南</option>
      //       <option value="jiangs">江苏</option>
           
      //   </select>
        
      //   <select name="city2" >
      //               <option value="beij">北京</option>
      //               <option value="shangh">上海</option>
      //               <option value="guangz">广州</option>
      //               <option value="shenz">深圳</option>
                   
      //   </select>
      //   <br><br>

      //   住址：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="address" size="26" /> 
      //       <br><br>

      //   简短附言(备注)：<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      //                           <!-- resize:none;不允许用户自己调整输入框的大小 -->
      //                           <!-- 允许输入的最少/最多字符数 maxlength="10" minlength="6" -->
      //   <textarea name="notes" style="height:80px;width: 200px; resize: none;" 
      //   maxlength="10" minlength="6" >请输入..</textarea>

       
?>