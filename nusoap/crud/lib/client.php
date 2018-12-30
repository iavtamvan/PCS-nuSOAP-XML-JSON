<?php
$client = new SoapClient(null, array(
      'location' => "http://localhost/local/xmljson/nusoap/crud/lib/server.php",
      'uri'      => "http://localhost/local/xmljson/nusoap/crud/lib/server.php",
      'trace'    => 1 
    )
);
?>