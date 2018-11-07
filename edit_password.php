<?php
require_once("db.php");
session_start();

$nim = $_SESSION["nim"];
$sql = "SELECT * FROM mahasiswa WHERE nim=$nim";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$hobi = explode(",",$row["hobi"]);
$genre = explode(",",$row["genre"]);
$wisata = explode(";",$row["wisata"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ubah Password</title>
</head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>
  <h2>Ubah Password</h2>
  <form action="proses_epas.php" method="post">
    <table cellpadding="10">
      <tr>
        <td>Password Lama</td>
        <td><input type="password" name="passwordl"></td>
      </tr>
      <tr>
        <td>Password Baru</td>
        <td><input type="password" name="passwordb"></td>
      </tr>
      <tr>
        <td><input type="submit" name="submit" value="Ubah Password"></td>
      </tr>
    </table>
  </form>
</body>
</html>
