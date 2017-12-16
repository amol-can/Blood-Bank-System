<!DOCTYPE html>
<html>
<head>
	<title>Receiver Registration</title>
	<meta charset=utf-8>
	<meta name=description content="New Receiver Registration">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="../index.php">Blood Bank</a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li class="active"><a href="#">Home</a></li>
		    </ul>
		</div>
	</nav>
	<div class="container">
		<!-- RECEIVER REGISTRATION FORM -->
		<form class="form-horizontal" action='r_registration.php' method="post">
		  <fieldset>
		    <div id="legend">
		      <legend class="text-center">Receiver Registration</legend>
		    </div>
		    <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Name</label>
                <div class="col-sm-9">
                    <input type="text" id="name" name="name" placeholder="Name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="blood_group" class="col-sm-3 control-label">Blood Group</label>
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
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" id="email" name="email" placeholder="Your email id" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="pincode" class="col-sm-3 control-label">Pin Code</label>
                <div class="col-sm-9">
                    <input type="number" id="pincode" name="pincode" placeholder="Enter 6 digit area pin code" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="mobile" class="col-sm-3 control-label">Mobile Number</label>
                <div class="col-sm-9">
                    <input type="number" id="mobile" name="mobile" placeholder="Enter 10 digit mobile number" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="pass" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-9">
                    <input type="password" id="pass" name="pass" placeholder="Create account password" class="form-control">
                </div>
            </div>
		 
		    <div class="form-group">
		      <!-- Button -->
		      <div class="controls text-center">
		        <button type="submit" name="registration" class="btn btn-success">Register</button>
		      </div>
		    </div>
		  </fieldset>
		</form>
		<!-- //END OF HOSPITAL REGISTRATION FORM -->
	</div>

</body>
</html>