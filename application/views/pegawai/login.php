<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<?php echo form_open("pegawai/login"); ?>
	<form>
		<input type="text" name="username">
		<input type="password" name="password">
		<input type="submit" name="submit" value="LOGIN">
	</form>
</body>
</html>