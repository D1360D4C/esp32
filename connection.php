<?php

/*$servername = "db5000264470.hosting-data.io";
$dBUsername = "dbu431816";
$dBPassword = "Brodway99!";
$dBName = "dbs258099";*/


$servername = "localhost";
$dBUsername = "id20779728_diegocallamullo";
$dBPassword = "E5p32arduino$";
$dBName = "id20779728_esp32";



$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

?>