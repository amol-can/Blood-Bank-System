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
		    $query = "SELECT inventry_id,blood_group,blood_quantity,update_time FROM blood_inventry";
		}
		$result = $db->query($query);

		//initialize the array to store the processed data
		$jsonArray = array();

		if ($result->num_rows > 0) {
		  //Converting the results into an associative array
		  while($row = $result->fetch_assoc()) {
		    $jsonArrayItem = array();
		    $jsonArrayItem['id'] = $row['inventry_id'];
		    $jsonArrayItem['b_group'] = $row['blood_group'];
		    $jsonArrayItem['b_quantity'] = $row['blood_quantity'];
		    $jsonArrayItem['update_time'] = $row['update_time'];

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