<?php 

include('./vendor/autoload.php');
use Twilio\Rest\Client;


$account_sid='ACa5c42458932f16ad6b54ee91f307db12';
$auth_key='469fcbb65a8f7a223da5fdf31918297f';

$client = new Client($account_sid,$auth_key);

$client->account->messages->create('+919542898742',array(
   'from'=>'+19546211229',
   'body'=>'Welcome to Twilio session'
));

echo "your message has been sent successfully";
?>