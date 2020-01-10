<?php
 $connection = mysqli_connect("localhost","root","");
if (!$connection) {
	die("connection failed :".mysqli_connect_error());
}

mysqli_select_db($connection,"cs2018g2");


?>