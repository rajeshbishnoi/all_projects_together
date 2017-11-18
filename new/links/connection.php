<?php
function connection(){
	$conn=mysqli_connect('localhost','root','','bishnoi');
	return $conn;
}
?>