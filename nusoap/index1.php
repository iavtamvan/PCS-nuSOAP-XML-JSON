<?php

$server = "localhost";
$user = "root";
$password = "";
//$password = "Ar14V@123";
$nama_database = "blog_perpus";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

$res = mysqli_query($db,'SELECT * FROM tbl_kategori');


$output[] = '<Users>';
while ($row = mysqli_fetch_assoc($res)) {
    $username = $row['id_kategori_buku'];
    $level = $row['kategori_buku'];
    $output[] = "<User ID=\"$username\">";
    $output[] = "<username>$username</username>";
//    header('Content-Type: application/xml');
//    $output = "<root><name>$username</name></root>";
//    print ($output);
//    $xml = new SimpleXMLElement('<root/>');
//    array_walk($username, array ($xml, 'addChild'));
//    print $xml->asXML();

    echo $output->asXML();


}
?>