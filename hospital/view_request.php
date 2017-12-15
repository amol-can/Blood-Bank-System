<?php
		
		require '../include/config.php';
		header('Access-Control-Allow-Origin: *');
		//checking if there were any error during the last connection attempt
		if ($db->connect_error) {
		  die("Connection failed: " . $db->connect_error);
		}
		//the SQL query to be executed
		
		if (!isset($_GET) || empty($_GET))
		{
		    $query = "SELECT req_blood_group,receiver_id,receiver_email,req_time FROM blood_sample_request ";
		}
		$result = $db->query($query);

		//initialize the array to store the processed data
		$jsonArray = array();

		if ($result->num_rows > 0) {
		  //Converting the results into an associative array
		  while($row = $result->fetch_assoc()) {
		    $jsonArrayItem = array();
		    $jsonArrayItem['blood_group'] = $row['req_blood_group'];
		    $jsonArrayItem['receiver_id'] = $row['receiver_id'];
		    $jsonArrayItem['email'] = $row['receiver_email'];
		    $jsonArrayItem['update_time'] = $row['req_time'];

		    //append the above created object into the main array.
		    array_push($jsonArray, $jsonArrayItem);
		  }
		}

		$db->close();

		//set the response content type as JSON
		header('Content-type: application/json');

		/* Output the return value of json encode using the echo function. */
		echo json_encode($jsonArray);
		
?>