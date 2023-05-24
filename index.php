<?php
include("connection.php");

if (isset($_POST['toggle_LED'])) {
	$sql = "SELECT * FROM LEDS;";
	$result   = mysqli_query($conn, $sql);
	$row  = mysqli_fetch_assoc($result);
	
	if($row['estado'] == 0){
		$update = mysqli_query($conn, "UPDATE LEDS SET estado = 1 WHERE id = 1;");		
	}		
	else{
		$update = mysqli_query($conn, "UPDATE LEDS SET estado = 0 WHERE id = 1;");		
	}
}



$sql = "SELECT * FROM LEDS;";
$result   = mysqli_query($conn, $sql);
$row  = mysqli_fetch_assoc($result);	

?>


<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js" type="text/javascript"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<div class="wrapper" id="refresh">
		<div class="col_3">
		</div>

		<div class="col_3" >
			
			<div class="main_title" >NOOBIX CONTROL</div>
			
			<div class="col_3">
			</div>
			
			<div class="col_3" style="text-align: center;">
			
				
			<?php /*?><script type="text/javascript">
			$(document).ready (function () {
				var updater = setTimeout (function () {
					$('div#refresh').load ('index.php', 'update=true');
				}, 1000);
			});
			</script><?php */?>
			<br>
			<br>
			<?php
				if($row['estado'] == 0){?>
				<form action="index.php" method="post" id="LED" enctype="multipart/form-data">			
					<input style="background-color: green;" id="submit_button" type="submit" name="toggle_LED" value="TOGGLE ON" />
				</form>
				<div class="bold_text" >Noobix is now</div>
				<div class="led_img">
					<img id="bulb_img" src="led_off.png" width="100%" height="100%">
				</div>
			<?php	
				}
				else{ ?>
				<form action="index.php" method="post" id="LED" enctype="multipart/form-data">			
					<input style="background-color: red;" id="submit_button" type="submit" name="toggle_LED" value="TOGGLE OFF" />
				</form>
				<div class="bold_text" >Noobix is now</div>
				<div class="led_img">
					<img id="bulb_img" src="led_on.png" width="100%" height="100%">
				</div>
			<?php
				}
			?>
			
				
				
				
			</div>
				
			<div class="col_3">
			</div>
		</div>

		<div class="col_3">
		</div>
	</div>
</body>
</html>

</html>
