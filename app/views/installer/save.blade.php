<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Success!</title>
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
		    <h3 class="panel-title">Installation Success!</h3>
		  </div>
		  <div class="panel-body">

		    Welcome to your new Dar blog installation!<br/>
		    <b>Remember to turn of the Install mode of the application by setting the "install" settings in app/config/dar.php to FALSE.</b><br/>
		    {{ link_to('admin','Log-in') }}  to the Admin with the credentials you had provided earlier.

		  </div>
		</div>		
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>
</html>