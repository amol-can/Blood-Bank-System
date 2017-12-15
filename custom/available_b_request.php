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
		    $query = "SELECT hospital_login.name,hospital_login.email,blood_inventry.hospital_id,blood_inventry.blood_group,blood_inventry.blood_quantity from blood_inventry INNER JOIN hospital_login ON blood_inventry.hospital_id = hospital_login.hospital_id";
		}
		$result = $db->query($query);

		//initialize the array to store the processed data
		$jsonArray = array();

		if ($result->num_rows > 0) {
		  //Converting the results into an associative array
		  while($row = $result->fetch_assoc()) {
		    $jsonArrayItem = array();
		    $jsonArrayItem['name'] = $row['name'];
		    $jsonArrayItem['email'] = $row['email'];
		    $jsonArrayItem['h_id'] = $row['hospital_id'];
		    $jsonArrayItem['blood_group'] = $row['blood_group'];
		    $jsonArrayItem['blood_quantity'] = $row['blood_quantity'];		    

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