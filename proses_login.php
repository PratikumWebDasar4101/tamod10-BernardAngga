<?php
session_start();
require_once("db.php");

$username = $_POST["username"];
$password = $_POST["password"];

$query = "SELECT * FROM mahasiswa WHERE username='$username' and password='$password'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
if(mysqli_num_rows($result) == 1){
	$_SESSION["nim"] = $row["nim"];
    header("Location: newdata.php");
}else{
echo mysqli_error($conn);   
}
?>