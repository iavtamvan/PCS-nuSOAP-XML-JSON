<?php
// Pull in the NuSOAP code
require_once('lib/nusoap.php');
// Create the server instance
$server = new soap_server();
// Initialize WSDL support
$server->configureWSDL('hellowsdl', 'urn:hellowsdl');
// Register the method to expose
$server->register('hello',                // method name
    array('name' => 'xsd:string'),        // input parameters
    array('return' => 'xsd:string'),      // output parameters
    'urn:hellowsdl',                      // namespace
    'urn:hellowsdl#hello',                // soapaction
    'rpc',                                // style
    'encoded',                            // use
    'Says hello to the caller'            // documentation
);
// Define the method as a PHP function
function hello($name) {

    $server   = "localhost"; // MySQL hostname
    $username = "blog_perpus"; // MySQL username
    $password = ""; // MySQL password
    $dbname   = "blog_perpus*"; // MySQL db name

    $db = mysqli_connect($server, $username, $password) or die(mysqli_error());
    mysqli_select_db($dbname) or die(mysqli_error());

//header('Content-type: application/xml');
// you need to return the error as xml as well
    $res = mysqli_query('SELECT * FROM tbl_kategori') or die('<error>'.mysqli_error().'</error>');



    $output[] = '<Users>';
    while($row = mysqli_fetch_assoc($res)){
        $username = $row['id_kategori_buku'];
        $level = $row['kategori_buku'];


        $output[] = "<User ID=\"$username\">";
        $output[] = "<username>$username</username>";
    }
    $output[] = '</Users>';

    return $output;
}
// Use the request to (try to) invoke the service
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>