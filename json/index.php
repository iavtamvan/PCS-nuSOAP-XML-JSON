<?php
/**
 * Created by PhpStorm.
 * User: iav
 * Date: 12/15/2018
 * Time: 2:20 AM
 */
include '../conf/config.php';

$querryTzmpilData = mysqli_query($db, "Select * from tbl_kategori");
$arrayJson = array();
while ($ambilData = mysqli_fetch_assoc($querryTzmpilData)){
    $arrayJson[]= $ambilData;
}
echo json_encode($arrayJson);

?>