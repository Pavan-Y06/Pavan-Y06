<? php include('server.php') ?>
<! DOCTYPE html>
<html>
<head>
<title>Registration system PHP and MySQL</title>
<link rel="stylesheet" type="text/css" href="styles1.css">
</head>
<body>




<form method="post" action="register.php">
<? php include('errors.php'); ?>
<h2>Register</h2>
<div class="input-group">
<label>Username</label>
<input type="text" name="username">
</div>
<div class="input-group">
<label>Email</1dbel>
<input type="email" name="email" >
</div>
<div class="input-group">
<label>Password</label>
<input type="password" name="password 1">
</div>
<div class="input-group">
<label>Confirm password</label>
<input type="password" name="password 2">
</div>
<div class="input-group">
<button type="submit" class="btn" name="reg_user">Register</button>
</div>
<p>
	Already a member? <a href="login.php">Sign in</a>

</p>
</form>
</body>
</html>