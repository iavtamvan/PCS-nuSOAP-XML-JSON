<?php
$message = ""; // initial message 
if( isset($_POST['submit_data']) ){

	// Includs client to get $client object
	include 'lib/client.php';

	// Gets the data from post
	$katadasar = $_POST['katadasar'];
	$tipe_katadasar = $_POST['tipe_katadasar'];

	/**
	* Calling the "insert" method by "__soapCall" from SOAP SERVER 
	* $client: object of SOAP CLIENT
	* @params: $name, $email, $address
	*/
	if( $client->__soapCall("insert", array($katadasar, $tipe_katadasar)) ){
		$message = "Data is inserted successfully.";
	}else{
		$message = "Sorry, Data is not inserted.";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Data</title>
</head>
<body>
	<div style="width: 500px; margin: 20px auto;">

		<!-- showing the message here-->
		<div><?php echo $message;?></div>

		<table width="100%" cellpadding="5" cellspacing="1" border="1">
			<form action="create.php" method="post">
			<tr>
				<td>Katadasar:</td>
				<td><input name="katadasar" type="text"></td>
			</tr>
			<tr>
				<td>Tipe Katadasar:</td>
				<td><input name="tipe_katadasar" type="text"></td>
			</tr>
			<tr>
				<td><a href="index.php">See Data</a></td>
				<td><input name="submit_data" type="submit" value="Insert Data"></td>
			</tr>
			</form>
		</table>
	</div>
</body>
</html>