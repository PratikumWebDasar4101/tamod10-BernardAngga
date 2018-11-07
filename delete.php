<?php
session_start();
require_once("db.php");

$nim = $_GET["nim"];

$sql = "DELETE FROM mahasiswa WHERE nim=$nim";

if(mysqli_query($conn,$sql)){
	header("location: dashboard.php");

}else{
echo mysqli_error($conn);	
}

?>