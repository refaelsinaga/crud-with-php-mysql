<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tampil data</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<img src="rl.png" width="28px" alt="">
	<P>REFAELSINAGA | TUTORIAL CRUD | MD5</P>
	<hr>
	<?php 
	if (isset($_GET['pesan'])) {
		$pesan = $_GET['pesan'];
		if ($pesan == "update") 
		{
			echo "Update sukses";
		}
	}

	?>
	<table>
		<a href="input.php" title="">+ Tambah data</a>
		<thead>
			<tr>
				<th>No</th>
				<th>id</th>
				<th>username</th>
				<th>password</th>
				<th>Level</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				include 'conn.php';
				$no = 1;
				$query = mysql_query("SELECT * FROM admin") or die(mysql_error());
				while ($dt = mysql_fetch_array($query)) {
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $dt['id']; ?></td>
				<td><?php echo $dt['username']; ?></td>
				<td><?php echo $dt['password']; ?></td>
				<td><?php echo $dt['level']; ?></td>
				<td>
					<a href="hapus.php?id=<?php echo $dt['id'];?>" title="">HAPUS</a> ||
					<a href="edit.php?id=<?php echo $dt['id'];?>" title="">EDIT</a>
				</td>
			</tr>
			<?php 
 				}
			?>
		</tbody>
	</table>
</body>
</html>