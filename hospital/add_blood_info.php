<?php require '../session/create_session.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Wel Come to hospital dashboard</title>
	<meta charset=utf-8>
	<meta name=description content="Add Blood Information ">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../custom/my_css.css">
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
		      <li class="active"><a data-toggle="tab" href="#home">Hospital Home</a></li>
		      <li><a data-toggle="tab" href="#menu1">Add Details</a></li>
		      <li><a data-toggle="tab" href="#menu2">View Request</a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		    	<li></li>
		    	<li><a href="../session/logout_session.php" class="glyphicon glyphicon-log-out">Logout <?php echo $_SESSION['active_user']; ?></a></li>
		    </ul>
		</div>
	</nav>

	<!-- Tab content -->
	<div class="tab-content">

		<!-- Available blood status of hospital -->
	    <div id="home" class="container tab-pane fade in active">
	    	<h4>Welcome 
	    	<?php 
	    		echo $_SESSION['active_user'];
	    	?>
	    	</h4>
	      <!-- Available Bood Samples  -->
			<div class="container" id="show_blood_avail">
				<h4 class="text-center">BLOOD AVALIBILITY STATUS</h4>
		        <table class="table table-striped table-bordered" id="table1">
		            <thead>
		                <tr>
		                	<th width="20%">Inventry Id</th>
		                    <th width="20%">Blood Group</th>
		                    <th width="20%">HBlood Quantity</th>
		                    <th width="30%">Last Update</th>
		                </tr>  
		            </thead>
		            <tbody>                                                
		            </tbody>                                                 
		        </table>
		        <script src="available_blood.js"></script>                                
		    </div>

		    <div class="cutom_footer">
		    	<p>Posted by:<a href="https://www.linkedin.com/in/amolpatilcan">Amol Patil</p>
		    	<p>Contact information: <a href="mailto:computer.warriors2020@gmail.com.com">  amol@bloodbank.com</a>.</p>
		    </div>
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
	            	<div class="form-group">
				      <div class="controls text-center">
				        <button type="submit" name="add_blood_info" class="btn btn-success">Submit</button>
				      </div>
				    </div>
		    	</fieldset>
	    	</form>
	    </div>

	    <!-- TAB3 View Blood Sample Request from Reciever  -->
	    <div id="menu2" class="container tab-pane fade">
			<div class="container">
				<table class="table table-striped table-bordered" id="table2">
		            <thead>
		                <tr>
		                	<th width="30%">Requested Blood Group</th>
		                    <th width="20%">Receiver Id</th>
		                    <th width="20%">Receiver Email</th>
		                    <th width="30%">Requested Time</th> 
		                </tr>  
		            </thead>
		            <tbody>                                                
		            </tbody>                                                 
		        </table>
		        <script src="http://localhost/blood/hospital/available_blood.js"></script> 
			</div>
		</div>
	</div>

</body>
</html>