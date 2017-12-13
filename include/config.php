<?php


$db = mysqli_connect("localhost","root","","blood_bank");
	if ($db->connect_error) {
    	die("Connection failed: " . $db->connect_error);
    }
#$db = mysqli_connect("localhost","ijreatco_amol","Amol@143","ijreatco_skala") ;
?>