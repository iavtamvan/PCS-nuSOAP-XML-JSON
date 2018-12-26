<?php
/**
 * Created by PhpStorm.
 * User: iav
 * Date: 12/15/2018
 * Time: 2:20 AM
 */
include '../conf/config.php';
error_reporting(0);

if ($_GET) {
    $choose = $_GET['choose'];
    switch ($choose) {
        case 'q':
        $querry = $_GET['q'];
        $querryTzmpilData = mysqli_query($db, "Select * from tb_katadasar where katadasar = "."'".$querry."';");
        $arrayJson = array();
        while ($ambilData = mysqli_fetch_assoc($querryTzmpilData)){
        $arrayJson[]= $ambilData;
    }
        echo json_encode($arrayJson);
    break;
    case 'limit':
        $limit = $_GET['limit'];
        $querryTzmpilData = mysqli_query($db, "Select * from tb_katadasar limit ".$limit);
        $arrayJson = array();
        while ($ambilData = mysqli_fetch_assoc($querryTzmpilData)){
        $arrayJson[]= $ambilData;
        }
        echo json_encode($arrayJson);
    break;
        
    default:
        $querryTzmpilData = mysqli_query($db, "Select * from tb_katadasar limit 30000");
        $arrayJson = array();
        while ($ambilData = mysqli_fetch_assoc($querryTzmpilData)){
        $arrayJson[]= $ambilData;
        }
        echo json_encode($arrayJson);
    break;
    }
}
?>