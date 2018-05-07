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
  	<h1 style="border-bottom: solid 2px grey; padding-bottom:15px; padding-left:20px;">Register</h1>
  </div>
	
  <form method="post" action="register.php" class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-4">
			<?php include('errors.php'); ?>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-4">Username</label>
		<div class="col-sm-7">
			<input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
		</div>
  	</div>
	<div class="form-group">
		<label class="control-label col-sm-4">Email</label>
		<div class="col-sm-7">
			<input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-4">Password</label>
		<div class="col-sm-7">
			<input type="password" class="form-control" name="password_1">
		</div>
  	</div>
	<div class="form-group">
		<label class="control-label col-sm-4">Confirm password</label>
		<div class="col-sm-7">
			<input type="password" class="form-control" name="password_2">
		</div>
  	</div>
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-4">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
  	</div>
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-4">
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
		</div>
	</div>
  </form>
 </div>
</div>
</body>
</html>