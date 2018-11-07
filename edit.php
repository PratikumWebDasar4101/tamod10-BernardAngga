<?php
session_start();
require_once("db.php");

$nim = $_SESSION["nim"];
$nama = $_POST["nama"];
$kelas = $_POST["kelas"];
$hobi = implode(",",$_POST["hobi"]);
$genre = implode(",",$_POST["genre"]);
$wisata = implode(";",$_POST["wisata"]);
$tanggal = $_POST["tanggal"];

$query = "UPDATE mahasiswa SET nama='$nama', kelas='$kelas', hobi='$hobi', genre='$genre', wisata='$wisata', tanggal='$tanggal' WHERE nim=$nim";

if(mysqli_query($conn,$query)){
	header("location: dashboard.php");

}else{
echo mysqli_error($conn);	
}
?>