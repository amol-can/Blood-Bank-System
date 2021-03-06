<?php require '../session/create_session.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Receiver Page</title>
	<meta charset=utf-8>
	<meta name=description content="Receiver can request the blood samples from this system">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<style type="text/css">
		.colorRank2{
			background: #A5F1C3;
		}
	</style>
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
		      <li class="active"><a data-toggle="tab" href="#home">Receiver Home</a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		    	<li></li>
		    	<li><a href="../session/logout_session.php" class="glyphicon glyphicon-log-out">Logout <?php echo $_SESSION['active_user']; ?></a></li>
		    </ul>
		</div>
	</nav>

	<div class="container" id="show_blood_avail">
				<h4 class="text-center">BLOOD AVALIBILITY STATUS</h4>
		        <table class="table table-striped table-bordered" id="table1">
		            <thead>
		                <tr>
		                	<th width="10%">Hospital ID</th>
		                    <th width="20%">Hospital Name</th>
		                    <th width="20%">Hospital Email</th>
		                    <th width="10%">Blood Group</th>
		                    <th width="20%">Units(Quantity)</th>
		                    <th width="30%">Action</th>  
		                </tr>  
		            </thead>
		            <tbody>                                                
		            </tbody>                                                 
		        </table>
		        <!-- Get login user blood Id -->
		        <script type="text/javascript">var user_blood = "<?php echo $_SESSION['blood_group']; ?>"; </script>
		        <script src="http://localhost/blood/custom/available_blood.js"></script>  

		    </div>

</body>
</html>