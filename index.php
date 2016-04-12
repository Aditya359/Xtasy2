<?php
	if(getenv('OPENSHIFT_MYSQL_DB_HOST'))
		require_once($_SERVER['DOCUMENT_ROOT'].'/portal/loggedin.php');
	else
	//	require_once($_SERVER['DOCUMENT_ROOT'].'/xtasy/portal/loggedin.php');
		require_once($_SERVER['DOCUMENT_ROOT'].'/livextasy/xtasy/portal/loggedin.php');


?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<?php

    <!-- GOOGLE FONTS -->

						<link href='assets/css/googlefonts.css' rel='stylesheet' type='text/css'>
						<link href="assets/css/bootstrap.css" rel="stylesheet">
						<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
     				<script type="text/javascript" src="assets/js/jquery-1.11.0.min.js"></script>
	</head>


		<!--HEADER-->
	  	<div class="header header-hide">
			<div class="container-fluid">
				<nav class="navbar navbar-default" role="navigation">
				   <div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse"
						 data-target="#example-navbar-collapse">
						 <span class="sr-only">Toggle navigation</span>
						 <span class="icon-bar"></span>
						 <span class="icon-bar"></span>
						 <span class="icon-bar"></span>
					  </button>
						<a class="navbar-brand" data-scroll href="#sec_1"><img src="assets/img/logo-text.png" alt="logo"/></a>
					 </div>
				   <div class="collapse navbar-collapse" id="example-navbar-collapse">
					  <ul class="nav navbar-nav">
						<?php if(loggedin()){
						  //$name=getuserfield('first_name');
						 	echo "<li><a href=\"users/index.php\">Profile</a></li>";
							echo "<li><a href=\"users/logout.php\">Logout</a></li>";
						}else{
						  echo "<li><a href=\"users/login.php\">Login</a></li>";
						  echo "<li><a href=\"users/register.php\">Register</a></li>";
						}?>
						<li class="hidden"><a href="#sec_1">Home</a></li>
					  </ul>
				   </div>
				</nav>
			</div>
		</div>
		<!--/HEADER-->	</body>
</html>
