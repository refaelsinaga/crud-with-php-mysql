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
		<form action="simpan.php" method="post" accept-charset="utf-8">
		<table>
			<a href="view.php" title="">view data </a>
			<tbody>
				<tr>
					<th>username</th>
					<th>:</th>
					<th><input type="text" name="username" placeholder="Username" required=""></th>
				</tr>
				<tr>
					<th>Password</th>
					<th>:</th>
					<th><input type="password" name="password" placeholder="Password" required=""></th>
				</tr>
				<tr>
					<th>Level</th>
					<th>:</th>
					<th>
						<select name="level">
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
	</form>
	</fieldset>
</body>
</html>