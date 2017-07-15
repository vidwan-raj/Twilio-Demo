<?php


include('./vendor/autoload.php');
use Twilio\Rest\Client;




 
$account_sid = 'ACa5c42458932f16ad6b54ee91f307db12'; 
$auth_token = '469fcbb65a8f7a223da5fdf31918297f'; 


$client = new Client($account_sid, $auth_token); 
 


$client->accounts->messages->create('+919542898742',array(
	'From'=>'1+9546211229',
	 'Body'=>'hi welcome to twilio session'
	))

 ?>