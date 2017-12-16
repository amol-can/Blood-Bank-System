<?php
    include("../include/config.php");

        
if (isset($_POST['registration']))
    {
        $name=$_POST['name'];
        $group=$_POST['bgroup'];
        $email=$_POST['email'];
        $pincode=$_POST['pincode'];
        $mobile=$_POST['mobile'];
        $pass=$_POST['pass'];

        
        if($email == ''){echo "<script>alert('Please enter email id')</script>>";exit();}
        else
        {
            $query="insert into receiver_login(name,blood_group,email,pincode,mobile,password) values('$name','$group','$email','$pincode','$mobile','$pass')";
                
            if(mysqli_query($db,$query))
            {
                header("location: ../index.php");
                echo "<script>alert('Register Sucessfully')</script>";
            }
        }
}    
mysqli_close($db);
?>
