<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tambah data</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<img src="rl.png" width="28px" alt="">
	<P>REFAELSINAGA | TUTORIAL CRUD | MD5</P>
	<fieldset>
		<form action="update.php" method="post">
		<?php
		 	include 'conn.php';
		 	$id = $_GET['id'];
		 	$query = mysql_query("SELECT * FROM admin WHERE id=$id") or die(mysql_error());
		 	while ($dt = mysql_fetch_array($query)){
		?>
		<table>
			<a href="view.php" title="">Batal</a>
			<tbody>
				<tr>
					<th>username</th>
					<th>:</th>
					<th><input type="hidden" name="id" value="<?php echo $dt['id']; ?>" required="">
						<input type="text" name="username" value="<?php echo $dt['username']; ?>" required=""></th>
				</tr>
				<tr>
					<th>Password</th>
					<th>:</th>
					<th><input type="password" name="password" placeholder="*wajib di isi" required=""></th>
				</tr>
				<tr>
					<th>Level</th>
					<th>:</th>
					<th>
						<select name="level" alue="<?php echo $dt['level']; ?>" required="">
							<option value="admin">Admin</option>
							<option value="member">Member</option>
						</select>
					</th>
				</tr>
				<tr>
					<th>username</th>
					<th>:</th>
					<th><input type="Submit" name="input_submit" value="Simpan"></th>
				</tr>
			</tbody>
		</table>
		<?php } ?>
	</form>
	</fieldset>
</body>
</html>