<?php

// this line loads the library require('/path/to/twilio-php/Services/Twilio.php');
include('./vendor/autoload.php');
use Twilio\Rest\Client;

$account_sid = 'ACa5c42458932f16ad6b54ee91f307db12';
$auth_token = '469fcbb65a8f7a223da5fdf31918297f';

$user = '+919542898742';
$TwilioNumber = '+19546211229';
$Body = "Welcome to Code for Good 2017 !Thank you";

$client = new Client($account_sid, $auth_token);

$sms = $client->account->messages->create(

    // the number we are sending to - Any phone number
    $user,

    array(
        // Change the 'From' number below to be a valid Twilio number 
        // that you've purchased
        'from' => $TwilioNumber, 
        // the sms body
        'body' => $Body
    )
);

echo "Message has been sent succesfully!";
?>