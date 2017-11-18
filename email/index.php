<?php
require("vendor/autoload.php");
// include('./MailChimp.php'); 
require("vendor\drewm\mailchimp-api\src\MailChimp.php");
use \DrewM\MailChimp\MailChimp;

$MailChimp = new MailChimp('abc123abc123abc123abc123abc123-us1');

$result = $MailChimp->get('lists');

print_r($result);

$list_id = 'b1234346';

$result = $MailChimp->post("lists/$list_id/members", [
				'email_address' => 'bishnoirajesh209@gmail.com',
				'status'        => 'subscribed',
			]);

print_r($result);


?>