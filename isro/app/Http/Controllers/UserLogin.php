<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// include "vendor\gidkom\php-openfire-restapi\src\Gidkom\OpenFireRestApi";
 include "vendor/autoload.php";

class UserLogin extends Controller
{

public function userlogin(){
$api = new Gidkom\OpenFireRestApi\OpenFireRestApi;
$api->secret = "X7K0TWG16qh8dQ5d";
$api->host = "jabber.myserver.com";
$api->port = "9090"; 

print_r('hello');
die;

$api->useSSL = false;
$api->plugin = "/plugins/restapi/v1";  // plugin 

$result = $api->addUser('karan','baasa', 'Karanveersingh Bhati', 'karan@gmail.com', array('Group 1'));
    
 
    
}

}
