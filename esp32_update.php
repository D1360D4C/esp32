<?php

include("connection.php");

//Read the database
if (isset($_POST['check_LED_status'])) {
	$led_id = $_POST['check_LED_status'];	
//$sql = "SELECT CONCAT(led1, led2, led3, led4) AS nuevo_campo FROM prueba;";

	$sql = "SELECT * FROM LEDS WHERE ID = '$led_id';";
	$result   = mysqli_query($conn, $sql);
	$row  = mysqli_fetch_assoc($result);

	//echo $row['nuevo_campo'];
	
	if($row['estado'] == 0){
		echo "LED_is_off";
	}
	else{
		echo "LED_is_on";
	}	
}	

//Update the database
if (isset($_POST['toggle_LED'])) {
	$led_id = $_POST['toggle_LED'];	
	$sql = "SELECT * FROM LEDS WHERE ID = '$led_id';";
	$result   = mysqli_query($conn, $sql);
	$row  = mysqli_fetch_assoc($result);
	if($row['estado'] == 0){
		$update = mysqli_query($conn, "UPDATE LEDS SET estado = 1 WHERE id = 1;");
		echo "LED_is_on";
	}
	else{
		$update = mysqli_query($conn, "UPDATE LEDS SET estado = 0 WHERE id = 1;");
		echo "LED_is_off";
	}	
}	
?>