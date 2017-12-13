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
		      <a class="navbar-brand" href="#">Blood Bank</a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li class="active"><a href="#">Home</a></li>
		      <li><a href="#">Page 1</a></li>
		      <li><a href="#">Page 2</a></li>
		      <li><a href="#">Page 3</a></li>
		    </ul>
		</div>
	</nav>
	<div class="container">
		<form class="form-horizontal" action='' method="POST">
		  <fieldset>
		    <div id="legend">
		      <legend class="text-center">Hospital Registration</legend>
		    </div>
		    <div class="form-group">
                <label for="hname" class="col-sm-3 control-label">Hospital Name</label>
                <div class="col-sm-9">
                    <input type="text" id="hname" placeholder="Hospital Name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="hemail" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" id="hemail" placeholder="Hospital Email Id" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="hpincode" class="col-sm-3 control-label">Pin Code</label>
                <div class="col-sm-9">
                    <input type="text" id="hpincode" placeholder="Hospital Area Pin Code" class="form-control">
                </div>
            </div>
		 
		    <div class="form-group">
		      <!-- Button -->
		      <div class="controls">
		        <button class="btn btn-success">Register</button>
		      </div>
		    </div>
		  </fieldset>
		</form>
	</div>

</body>
</html>