<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="margin-top:70px; padding-left:250px; padding-right:300px;">
<div class="main">
  <div class="header" style="margin-top:10px;">
  	<h2 style="border-bottom: solid 2px grey; padding-bottom:15px; padding-left:20px;">Login</h2>
  </div>
	 
  <form method="post" action="login.php" class="form-horizontal">
  <div class="form-group">
		<div class="col-sm-offset-4 col-sm-4">
			<?php include('errors.php'); ?>
		</div>
	</div>
	<div class="form-group">
  		<label class="control-label col-sm-4">Username</label>
		<div class="col-sm-7">
  		<input type="text" class="form-control" name="username" >
		</div>
  	</div>
	<div class="form-group">
  		<label class="control-label col-sm-4">Password</label>
		<div class="col-sm-7">
  		<input type="password" class="form-control" name="password">
		</div>
  	</div>
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-4">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
  	</div>
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-4">
  	<p>
  		<b>Not yet a member? <a href="register.php">Sign up</a></b>
  	</p>
	</div>
	</div>
  </form>
  </div>
 </div>
</body>
</html>