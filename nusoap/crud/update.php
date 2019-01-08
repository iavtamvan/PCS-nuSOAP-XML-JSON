<?php
$message = "No Action"; // initial message 

// Includs client to get $client object
include 'lib/client.php';
$id = $_GET['id']; // id from url
// Updating the table row with submited data according to id once form is submited 
if( isset($_POST['submit_data']) ){

	// Gets the data from post
	$katadasar = $_POST['katadasar'];
	$tipe_katadasar = $_POST['tipe_katadasar'];

	/**
	* Calling the "update" method by "__soapCall" from SOAP SERVER 
	* $client: object of SOAP CLIENT
	* @params: $id, $name, $email, $address
	*/
	if( $client->__soapCall("update", array($id, $katadasar, $tipe_katadasar))  ){
		$message = " Action : Data Berhasil di Edit.";
	}else{
		$message = "Action : Data Gagal di Edit.";
	}
}

// $id = $_GET['id']; // id from url

/**
* Calling the "getById" method by "__soapCall" from SOAP SERVER 
* $client: object of SOAP CLIENT
* @params: $id
*/
$data = $client->__soapCall("getById", array($id));
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="container">
	<div class="row">
	    
	    
<link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet" media="screen">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">



<!-- FORM  -->	    
	   <div class="col-md-12">
	       
	    <form class="form-horizontal" id="form-edit-client" action="" method="post">
<fieldset>

<!-- Form Name -->
<legend>Edit KBBI</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="client-name">Kata Dasar</label>  
  <div class="col-md-4">
  <input id="client-name" name="katadasar" type="text" placeholder="Masukan Kata Dasar" class="form-control input-md" value="<?php echo $data['katadasar'];?>">
  <span class="help-block">Ex. Dia</span>  
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="client-name">Tipe Kata Dasar</label>  
  <div class="col-md-4">
  <input id="client-name" name="tipe_katadasar" type="text" placeholder="Masukan Tipe Kata Dasar" class="form-control input-md" value="<?php echo $data['tipe_katadasar'];?>">
  <span class="help-block">Ex. Nomina</span>  
  </div>
  <br>
  <br>
  <br>
  <br>
  <label class="col-md-4 control-label" for="client-name"><?php echo $message ?></label>  
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btn-save"></label>
  <div class="col-md-4">
    <button id="submit_data" name="submit_data" class="btn btn-success">Simpan</button>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="btn-save"></label>
  <div class="col-md-4">
    <button class="btn btn-success" ><a href="./index.php">Baca Data</button>
  </div>
</div>
</fieldset>
</form>


	   </div> 
<br> 	    
	</div>
</div>
