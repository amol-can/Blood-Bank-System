<?php require '../session/create_session.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Wel Come to hospital dashboard</title>
	<meta charset=utf-8>
	<meta name=description content="Add Blood Information ">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- Navigation bar for hospital -->
	<nav class="navbar navbar-default nav-tabs">
		<div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="../index.php">Blood Bank</a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
		      <li><a data-toggle="tab" href="#menu1">Add Details</a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		    	<li><a href="../session/logout_session.php" class="glyphicon glyphicon-log-out">Logout</a></li>
		    </ul>
		</div>
	</nav>

	<!-- Tab content -->
	<div class="tab-content">
	    <div id="home" class="container tab-pane fade in active">
	      <h3>HOME</h3>
	      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	    </div>

	    <!-- Add detail tab content -->
	    <div id="menu1" class="container tab-pane fade">
	    	<form class="form-horizontal" action='registration.php' method="post">
		    	<fieldset>
		    		<div id="tab2_legend">
			    		<legend class="text-center">Add Blood Information</legend>
			    	</div>
			    	<div class="form-group">
		                <label for="blood_group" class="col-sm-3 control-label text-center">Blood Group</label>
		                <div class="col-sm-9">
		                    <select name="bgroup" id="blood_group" class="form-control">
		                    	<option value="A+">A+</option>
		                    	<option value="O+">O+</option>
		                    	<option value="B+">B+</option>
		                    	<option value="AB+">AB+</option>
		                    	<option value="A-">A-</option>
		                    	<option value="O-">O-</option>
		                    	<option value="B-">B-</option>
		                    	<option value="AB-">AB-</option>
		                    </select>
		                </div>
	            	</div>
	            	<div class="form-group">
	            		<label for="number_of_unit" class="col-sm-3 control-label text-center">Unit Quantity</label>
	            		<div class="col-sm-9">
	            		<input type="number" name="units" id="number_of_unit" placeholder="Number of unit received" class="form-control">
	            		</div>
	            	</div>
	            	<!-- <div class="form-group">
		                <label for="blood_source" class="col-sm-3 control-label text-center">Blood Source</label>
		                <div class="col-sm-9">
		                    <input type="text" id="blood_source" name="source" placeholder="Blood Source" class="form-control">
		                </div>
	            	</div>
	            	<div class="form-group">
	            		<label for="comment" class="col-sm-3 control-label text-center">Additional Comment</label>
		                <div class="col-sm-9">
		                    <textarea type="text" id="comment" name="comment" placeholder="Any additional details regarding blood units" class="form-control"></textarea>
		                </div>
	            	</div> -->
	            	<div class="form-group">
				      <div class="controls text-center">
				        <button type="submit" name="add_blood_info" class="btn btn-success">Submit</button>
				      </div>
				    </div>
		    	</fieldset>
	    	</form>
	    </div>
	</div>

</body>
</html>