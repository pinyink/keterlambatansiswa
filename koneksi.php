<?php
$conn = new mysqli("localhost","root","","keterlambatan");
if (!$conn) {
	die("connection failed".$conn->connect_error());
}
?>