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
  <title>Data Baru</title>
</head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>
  <h2>Data Baru</h2>
  <form action="edit.php" method="post">
    <table cellpadding="10">
      <tr>
        <td><input type="text" name="nama" value="<?php echo $row['nama'] ?>" placeholder="Nama"></td>
      </tr>
      <tr>
        <td><input type="text" name="kelas" value="<?php echo $row['kelas'] ?>" placeholder="Kelas"></td>
      </tr>
      <tr>
        <td>Hobi</td>
        <td>
          <input type="checkbox" name="hobi[]" value="Menulis" <?php echo (in_array('Menulis', $hobi))?'checked':'' ?>>Menulis
          <input type="checkbox" name="hobi[]" value="Membaca" <?php echo (in_array('Membaca', $hobi))?'checked':'' ?>>Membaca
          <input type="checkbox" name="hobi[]" value="Nonton" <?php echo (in_array('Nonton', $hobi))?'checked':'' ?>>Nonton
        </td>
      </tr>
      <tr>
        <td>Genre</td>
        <td>
          <input type="checkbox" name="genre[]" value="Horor" <?php echo (in_array('Horor', $genre))?'checked':'' ?>>Horor
          <input type="checkbox" name="genre[]" value="Action" <?php echo (in_array('Action', $genre))?'checked':'' ?>>Action
          <input type="checkbox" name="genre[]" value="Comedy" <?php echo (in_array('Comedy', $genre))?'checked':'' ?>>Comedy
        </td>
      </tr>
      <tr>
        <td>Wisata</td>
        <td>
          <input type="checkbox" name="wisata[]" value="Tebing Keraton, Bandung" <?php echo (in_array('Tebing Keraton, Bandung', $wisata))?'checked':'' ?>>Tebing Keraton, Bandung
          <input type="checkbox" name="wisata[]" value="Puncak Lawang, Bukittinggi" <?php echo (in_array('Puncak Lawang, Bukittinggi', $wisata))?'checked':'' ?>>Puncak Lawang, Bukittinggi
          <input type="checkbox" name="wisata[]" value="Kawah Putih, Bandung" <?php echo (in_array('Kawah Putih, Bandung', $wisata))?'checked':'' ?>>Kawah Putih, Bandung
        </td>
      </tr>
      <tr>
        <td><input type="date" name="tanggal" value="<?php echo $row['tanggal'] ?>" placeholder="Tanggal"></td>
      </tr>
      <tr>
        <td><input type="submit" name="submit" value="Register"></td>
      </tr>
    </table>
  </form>
</body>
</html>
