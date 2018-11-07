<?php
session_start();
require_once("db.php");

$nim = $_POST["nim"];
$username = $_POST["username"];
$password = $_POST["password"];

$query = "INSERT INTO mahasiswa values('$nim','$username','$password','','','','','','')";

if(mysqli_query($conn,$query)){
	header("location: login.php");

}else{
echo mysqli_error($conn);	
}
?>