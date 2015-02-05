<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Install Dar Blogging Platform</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->	 
<body>
	 <div class="container">

	 	<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Install Dar Blog Platform</h3>
		  </div>
		  <div class="panel-body">
		   {{ Form::open(array('url' => 'install_save', 'role'=> 'form')) }}		  
		  <div class="form-group">
		    <label for="txtSiteName">Site Name</label>
		    <input type="text" class="form-control" id="txtSiteName" name="txtSiteName" placeholder="ex. My First Dar Blog Site">
		  </div>		 
		  <div class="form-group">
		    <label for="txtAdminUser">Admin Username</label>
		    <input type="text" class="form-control" id="txtAdminUser" name="txtAdminUser" placeholder="admin" value="admin">
		  </div>
		  <div class="form-group">
		    <label for="txtAdminPassword">Admin Password</label>
		    <input type="text" class="form-control" id="txtAdminPassword" name="txtAdminPassword" placeholder="admin" value="admin">
		  </div>
		  <div class="form-group">
		    <label for="txtAdminEmail">Email</label>
		    <input type="text" class="form-control" id="txtAdminEmail" name="txtAdminEmail" placeholder="enter email">
		  </div>			  
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
		  </div>
		</div>		
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>
</html>