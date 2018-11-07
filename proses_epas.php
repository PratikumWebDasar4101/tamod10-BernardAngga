<?php
session_start();
require_once("db.php");

$nim = $_SESSION["nim"];
$passwordl = $_POST["passwordl"];
$passwordb = $_POST["passwordb"];

$query = "UPDATE mahasiswa SET password='$passwordb'  WHERE nim=$nim";

if(mysqli_query($conn,$query)){
	header("location: dashboard.php");

}else{
echo mysqli_error($conn);	
}
?>