<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank System</title>
	<meta charset=utf-8>
	<meta name=description content="Designed a simple ‘Blood Bank System’ web application">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<!-- This block is for Navigation Bar of Index page -->
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
		    <ul class="nav navbar-nav navbar-right">
		    	<li>
		    		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Login
				    <span class="caret"></span></a>
				    <ul class="dropdown-menu">
				    	<!-- Direction to Login Modal -->
				       	<li><a href="#" data-toggle="modal" data-target="#hospital_login">Hospital</a></li>
				        <li><a href="#" data-toggle="modal" data-target="#receiver_login">Receiver</a></li>
				    </ul>
		    	</li>

		    	<li class="dropdown">
			      	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Register
				    <span class="caret"></span></a>
				    <ul class="dropdown-menu">
				       	<li><a href="hospital/hospital_registration.php">New Hospital</a></li>
				        <li><a href="receiver/receiver_registration.php">New Receiver</a></li>
				    </ul>
			   </li>
		    </ul>
	  </div>
	</nav>

	<!-- Hospital login Modal -->
	<div id="hospital_login" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Hospital Login</h4>
	      </div>

	      <form class="form-group" action="index_login.php" method="post">
			<div class="modal-body">
			  <div class="form-group">
			  	<label for="login_email" class="text-center col-sm-4">Email Id</label>
			         <input type="email" id="login_email" name="username" class="form-group" placeholder="User id">			  
			     </div>
			     <div class="form-group">
			     	<label for="login_pass" class="text-center col-sm-4">Password</label>
			     	<input type="password" id="login_pass" name="password" class="form-group" placeholder="Enter Password">
			     </div>
			     <div class="form-group text-center">
			     	<button type="submit" name="hospital_login" id="hlogin" class="btn btn-info">Login</button>
			     </div>
			</div>
	      </form>

	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>
	

	<!-- Receiver login Modal -->
	<div id="receiver_login" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Receiver Login</h4>
	      </div>

	      <form class="form-group" action="index_login.php" method="post">
			<div class="modal-body">
			  <div class="form-group">
			  	<label for="rec_email" class="text-center col-sm-4">Email Id</label>
			         <input type="email" id="rec_email" name="username" class="form-group" placeholder="User id">			  
			     </div>
			     <div class="form-group">
			     	<label for="rec_pass" class="text-center col-sm-4">Password</label>
			     	<input type="password" id="rec_pass" name="password" class="form-group" placeholder="Enter Password">
			     </div>
			     <div class="form-group text-center">
			     	<button type="submit" name="receiver_login" id="rlogin" class="btn btn-info">Login</button>
			     </div>
			</div>
	      </form>

	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>

</body>
</html>