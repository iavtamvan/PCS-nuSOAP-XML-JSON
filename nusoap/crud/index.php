<?php
// Includs client to get $client object
include 'lib/client.php';

/**
* Calling the "getAll" method by "__soapCall" from SOAP SERVER 
* $client: object of SOAP CLIENT
* @params: null
*/
$result = $client->__soapCall("getAll", array());
$message = "";
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
		$message = "Sukses Tambah Data";
	}else{
		$message = "Gagal Tambah Data";
	}
}
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
<legend>KBBI (Kamu Besar Bahasa Indonesia)</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="client-name">Kata Dasar</label>  
  <div class="col-md-4">
  <input id="client-name" name="katadasar" type="text" placeholder="Masukan Kata Dasar" class="form-control input-md">
  <span class="help-block">Ex. Dia</span>  
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="client-name">Tipe Kata Dasar</label>  
  <div class="col-md-4">
  <input id="client-name" name="tipe_katadasar" type="text" placeholder="Masukan Tipe Kata Dasar" class="form-control input-md">
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

</fieldset>
</form>


	   </div> 
	    



<!-- LIST -->
<div class=col-md-12>
    
    <form id="form-list-client">
            <legend>Kamu Besar Bahasa Indonesia Limit 100 Data</legend>
    
    <div class="pull-right">
        <a class="btn btn-default-btn-xs btn-primary" href="table.php"><i class="glyphicon glyphicon-refresh"></i> Refresh</a>
        <!-- <a class="btn btn-default-btn-xs btn-success"><i class="glyphicon glyphicon-plus"></i> New</a> -->
    </div>
    <table class="table table-bordered table-condensed table-hover">
        <thead>
            <tr>
                <td>#ID</td>
                <th>Katadasar</th>
                <th>Tipe Kata Dasar</th>
                <th>Actions</th>
            </tr>
                
        </thead>
        <tbody id="form-list-client-body">
        <?php foreach($result as $row) {?>
            <tr>
                <td><?php echo $row['id_katadasar'];?></td>
                <td><?php echo $row['katadasar'];?></td>
                <td><?php echo $row['tipe_katadasar'];?></td>
                
                <td>
                    <!-- <a title="view this user" class="btn btn-default btn-sm "> <i class="glyphicon glyphicon-eye-open text-primary"></i> </a> -->
                    <a title="edit this user" class="btn btn-default btn-sm " href="./update.php?id=<?php echo $row['id_katadasar'];?>"> <i class="glyphicon glyphicon-edit text-primary"></i> </a>
                    <a title="delete this user" class="btn btn-default btn-sm " href="./delete.php?id=<?php echo $row['id_katadasar'];?>"> <i class="glyphicon glyphicon-trash text-danger"></i> </a>
                    
                    <!-- <a title="check credit" class="btn btn-default btn-sm "> <i class="glyphicon glyphicon-duplicate text-danger"></i> </a>
                    <a title="generate invoice" class="btn btn-default btn-sm "> <i class="glyphicon glyphicon-level-up bg-success"></i> </a>
                    -->
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </form>

    
</div>
<br> 	    
	</div>
</div>
