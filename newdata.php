<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Baru</title>
</head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>
  <h2>Data Baru</h2>
  <form action="inputdata.php" method="post">
    <table cellpadding="10">
      <tr>
        <td><input type="text" name="nama" placeholder="Nama"></td>
      </tr>
      <tr>
        <td><input type="text" name="kelas" placeholder="Kelas"></td>
      </tr>
      <tr>
        <td>Hobi</td>
        <td>
          <input type="checkbox" name="hobi[]" value="Menulis">Menulis
          <input type="checkbox" name="hobi[]" value="Membaca">Membaca
          <input type="checkbox" name="hobi[]" value="Nonton">Nonton
        </td>
      </tr>
      <tr>
        <td>Genre</td>
        <td>
          <input type="checkbox" name="genre[]" value="Horor">Horor
          <input type="checkbox" name="genre[]" value="Action">Action
          <input type="checkbox" name="genre[]" value="Comedy">Comedy
        </td>
      </tr>
      <tr>
        <td>Wisata</td>
        <td>
          <input type="checkbox" name="wisata[]" value="Tebing Keraton, Bandung">Tebing Keraton, Bandung
          <input type="checkbox" name="wisata[]" value="Puncak Lawang, Bukittinggi">Puncak Lawang, Bukittinggi
          <input type="checkbox" name="wisata[]" value="Kawah Putih, Bandung">Kawah Putih, Bandung
        </td>
      </tr>
      <tr>
        <td><input type="date" name="tanggal" placeholder="Tanggal"></td>
      </tr>
      <tr>
        <td><input type="submit" name="submit" value="Register"></td>
      </tr>
    </table>
  </form>
</body>
</html>
