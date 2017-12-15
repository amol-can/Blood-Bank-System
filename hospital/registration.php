<?php
    session_start();
    include("../include/config.php");

    /* For registration of hospital*/        
    if (isset($_POST['hRegistration']))
        {
            $hospital_name=$_POST['name'];
            $email=$_POST['email'];
            $pincode=$_POST['pincode'];
            $mobile=$_POST['mobile'];
            $person=$_POST['person'];
            $pass=$_POST['pass'];

            
            if($email == ''){echo "<script>alert('Please enter email id')</script>";exit();}
            else
            {
                $query="insert into hospital_login(name,email,pincode,mobile_number,contact_person,password) values('$hospital_name','$email','$pincode','$mobile','$person','$pass')";
                    
                if(mysqli_query($db,$query))
                {
                    header("location: hospital_registration.php");
                    echo "<script>alert('Succefully Registered')</script>";
                }
            }
    }    

    /* For storing new Blood related data*/
    elseif (isset($_POST['add_blood_info']))
        {
            $blood_group=$_POST['bgroup'];
            $units=$_POST['units'];

            /* Storing user id of user through SESSION*/
            $hid=$_SESSION['user_id'];

            
            if($hid == ''){echo "<script>alert('Session issue')</script>";exit();}
            else
            {
                $query="insert into blood_inventry(blood_group,blood_quantity,hospital_id) values('$blood_group','$units','$hid')";
                    
                if(mysqli_query($db,$query))
                {
                    header("location: add_blood_info.php");
                    echo "<script>alert('Succefully entered blood data')</script>";
                }
            }
    }    

    mysqli_close($db);
?>
