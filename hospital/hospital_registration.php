<!DOCTYPE html>
<html>
<head>
	<title>Hospital Registration</title>
	<meta charset=utf-8>
	<meta name=description content="New Hospital Registration">
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
	
	<!-- HOSPITAL REGISTRATION FORM -->
	<div class="container">

		<!-- Form content -->
		<form class="form-horizontal" action='registration.php' method="post">
		  <fieldset>
		    <div id="legend">
		      <legend class="text-center">Hospital Registration</legend>
		    </div>
		    <div class="form-group">
                <label for="hname" class="col-sm-3 control-label">Hospital name</label>
                <div class="col-sm-9">
                    <input type="text" id="hname" name="name" placeholder="Hospital Name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="hemail" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" id="hemail" name="email" placeholder="Hospital email id" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="hpincode" class="col-sm-3 control-label">Pin Code</label>
                <div class="col-sm-9">
                    <input type="number" id="hpincode" name="pincode" placeholder="Enter 6 digit hospital area pin code" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="hmobile" class="col-sm-3 control-label">Mobile Number</label>
                <div class="col-sm-9">
                    <input type="number" id="hmobile" name="mobile" placeholder="Enter 10 digit mobile number" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="hperson" class="col-sm-3 control-label">Contact Person</label>
                <div class="col-sm-9">
                    <input type="text" id="hperson" name="person" placeholder="Contact person name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="hpass" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-9">
                    <input type="password" id="hpass" name="pass" placeholder="Create account password" class="form-control">
                </div>
            </div>
		 
		    <div class="form-group">
		      <!-- Button -->
		      <div class="controls text-center">
		        <button type="submit" name="hRegistration" class="btn btn-success">Register</button>
		      </div>
		    </div>
		  </fieldset>
		</form>
	</div>

</body>
</html>