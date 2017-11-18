<?php

include "vendor/autoload.php";

// Create the Openfire Rest api object
$api = new Gidkom\OpenFireRestApi\OpenFireRestApi;

// Set the required config parameters
$api->secret = "gEVbxi859dPJVu0h";
$api->host = "192.168.1.11";
$api->port = "9090";  // default 9090

// Optional parameters (showing default values)

$api->useSSL = false;
$api->plugin = "/plugins/restapi/v1";  // plugin 
	
$result = $api->addUser('t100', 't100', 'Rajesh Bishnoi', 'bishnoirajesh209@gmail.com', array('Group 1'));

if($result['status']) {
    // Display result, and check if it's an error or correct response
    echo 'Success: ';
    echo $result['message'];
} else {
    // Something went wrong, probably connection issues
    echo 'Error: ';
    echo $result['message'];
}


?>