<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo base_url('daftar/simpan') ?>" method="POST">
		<input type="text" name="username">
		<input type="password" name="password">
		<input type="password" name="konforim_pwd">
		<button type="submit">Kirim</button>
	</form>
</body>
</html>