<?php
// Includs client to get $client object
include 'lib/client.php';

/**
* Calling the "getAll" method by "__soapCall" from SOAP SERVER 
* $client: object of SOAP CLIENT
* @params: null
*/
$result = $client->__soapCall("getAll", array());

?>
<!DOCTYPE html>
<html>
<head>
	<title>Data List</title>
</head>
<body>
	<div style="width: 500px; margin: 20px auto;">
		<a href="create.php">Create New</a>
		<table width="100%" cellpadding="5" cellspacing="1" border="1">
			<tr>
				<td>Name</td>
				<td>Email</td>
				<td>Address</td>
				<td>Action</td>
			</tr>
			<?php foreach($result as $row) {?>
			<tr>
				<td><?php echo $row['id_katadasar'];?></td>
				<td><?php echo $row['katadasar'];?></td>
				<td><?php echo $row['tipe_katadasar'];?></td>
				<td>
					<a href="update.php?id=<?php echo $row['id_katadasar'];?>">Edit</a> | 
					<a href="delete.php?id=<?php echo $row['id_katadasar'];?>" onclick="return confirm('Are you sure?');">Delete</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>