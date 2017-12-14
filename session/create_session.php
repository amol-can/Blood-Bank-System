<?php
   include('../include/config.php');
   session_start();
   $check=$_SESSION['active_user'];
   if(!isset($check))
	{
	header("Location: ../index.php");
	}
?>