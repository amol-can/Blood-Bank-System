<?php
   include("include/config.php");
   session_start();
   
   if(isset($_POST['hospital_login'])) {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM hospital_login WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);
      
      
      if($count==1) {
        
         $_SESSION['active_user'] = $myusername;
         $_SESSION['user_type'] = $row['user_type'];
         $_SESSION['user_id'] = $row['hospital_id'];

         /*echo "<script>alert('Login Sucessfully')</script>";*/
          header("location: hospital/add_blood_info.php");
         
      }
     else{
        echo '<script language="javascript">';
  
      echo 'alert("Wrong Username Or Password")';
      echo '</script>';
   }
   }
   elseif(isset($_POST['receiver_login'])) {
      // username and password sent from Modal form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM receiver_login WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);
      
      
      if($count==1) {
        
         $_SESSION['current_user'] = $myusername;
         $_SESSION['user_type'] = $row['user_type'];

          header("location: receiver/receiver_home.php");
         
      }
     else{
        echo '<script language="javascript">';
  
      echo 'alert("Wrong Username Or Password")';
      echo '</script>';
   }
   }
?>