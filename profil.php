<?php
require_once("db.php");
$nim=$_GET["nim"];

	$query = "SELECT * FROM mahasiswa where nim = $nim";

$result = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>
<table align="center" border="1">
	<tr>
		<tr>
		<td>
			<form action="dashboard.php" method="get">
				<input type="text" name="cari" placeholder="cari nama">
				<input type="submit">
			</form>
		</td>
	</tr>
		<tr>
			<th>NIM</th>
			<th>Username</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Hobi</th>
			<th>Genre</th>
			<th>Wisata</th>
			<th>Tanggal</th>
			<th>Aksi</th>
		</tr>

		<?php if($rows = mysqli_fetch_array($result)) { ?>
			<tr>
				<td><?php echo $rows["nim"] ?></td>
				<td><?php echo $rows["username"] ?></td>
				<td><?php echo $rows["nama"] ?></td>
				<td><?php echo $rows["kelas"] ?></td>
				<td><?php echo $rows["hobi"] ?></td>
				<td><?php echo $rows["genre"] ?></td>
				<td><?php echo $rows["wisata"] ?></td>
				<td><?php echo $rows["tanggal"] ?></td>
				<td><a href="edit_password.php?nim=<?php echo $rows['nim'] ?>">Edit Password</a></td>
			</tr>
		
	<?php }?>
</table>
</body>
</html>