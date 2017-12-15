<?php
    session_start();
    include("../include/config.php");

    /* For registration of hospital*/        
    if (isset($_GET['hospitalId']) && isset($_GET['bloodGroup']))
        {
            $hospital_id=$_GET['hospitalId'];
            $blood_group=$_GET['bloodGroup'];
            $receiver_id=$_SESSION['user_id'];
            $receiver_name=$_SESSION['active_user'];
            echo $receiver_name;


            
            if($hospital_id == ''){echo "<script>alert('Not getting Hospital Id')</script>";exit();}
            else
            {
                $query="insert into blood_sample_request(req_hospital_id,req_blood_group,receiver_id,receiver_email) values('$hospital_id','$blood_group','$receiver_id','$receiver_name')";
                    
                if(mysqli_query($db,$query))
                {
                    header("location: receiver_home.php");
                    echo "<script>alert('Succefully Registered')</script>";
                }
            }
    }  
    mysqli_close($db);
?>
