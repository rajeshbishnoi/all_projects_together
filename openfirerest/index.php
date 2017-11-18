<?php

include "vendor/autoload.php";

// Create the Openfire Rest api object
$api = new Gidkom\OpenFireRestApi\OpenFireRestApi;

// Set the required config parameters
$api->secret = "TP2vO8gY20H6g8Ge";
$api->host = "192.168.1.11";
$api->port = "9090";  // default 9090

// Optional parameters (showing default values)

$api->useSSL = false;
$api->plugin = "/plugins/restapi/v1";  // plugin 

// Add a new user to OpenFire and add to a group
$result = $api->addUser('Hey', 'This is ', 'Working', 'bishnoirajesh209@gmail.com', array('Group 1'));

// Check result if command is succesful
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