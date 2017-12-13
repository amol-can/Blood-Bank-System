<?php
    include("../include/config.php");
        
if (isset($_POST['hRegistration']))
    {
        $hospital_name=$_POST['name'];
        $email=$_POST['email'];
        $pincode=$_POST['pincode'];
        $mobile=$_POST['mobile'];
        $person=$_POST['person'];
        $pass=$_POST['pass'];

        
        if($pass == ''){echo "<script>alert('Please enter email id')</script>>";exit();}
        else
        {
            $query="insert into hospital_login(name,email,pincode,mobile_number,contact_person,password) values('$hospital_name','$email','$pincode','$mobile','$person','$pass')";
                
            if(mysqli_query($db,$query))
            {
                header("location: hospital_registration.php");
                echo "<script>alert('Register Sucessfully')</script>";
            }
        }
}    
mysqli_close($db);
?>
