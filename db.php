<?php
$conn = mysqli_connect("localhost","root","","ta8");

if(!$conn){
	die("gagal terhubung".mysqli_error($conn));
}
?>
