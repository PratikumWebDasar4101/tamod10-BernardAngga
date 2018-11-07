<?php
require_once("db.php");
session_start();

if (isset($_GET["cari"])) {
	$value = $_GET["cari"];
	$query = "SELECT * FROM mahasiswa WHERE nim like '%$value%'";
}else {
	$query = "SELECT * FROM mahasiswa";
}

$result = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<center><a href="profil.php?nim=<?php echo $_SESSION['nim'] ?>">Profil</a></center>
<table align="center" class="table table-sm">
	<tr>
		<tr>
		<td>
			<form action="dashboard.php" method="get">
				<input type="text" name="cari" placeholder="cari nama">
				<button type="submit" class="btn btn-primary">Cari</button>
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
	<?php if(mysqli_num_rows($result) > 0) : ?>
		<?php while($rows = mysqli_fetch_array($result)) { ?>
			<tr>
				<td><?php echo $rows["nim"] ?></td>
				<td><?php echo $rows["username"] ?></td>
				<td><?php echo $rows["nama"] ?></td>
				<td><?php echo $rows["kelas"] ?></td>
				<td><?php echo $rows["hobi"] ?></td>
				<td><?php echo $rows["genre"] ?></td>
				<td><?php echo $rows["wisata"] ?></td>
				<td><?php echo $rows["tanggal"] ?></td>
				<td><a href="form_edit.php?nim=<?php echo $rows['nim'] ?>">Edit</a> | <a href="delete.php?nim=<?php echo $rows['nim'] ?>">Hapus</a></td>
			</tr>
		
	<?php } endif ?>
</table>
</body>
</html>