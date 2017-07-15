<?php 
 
// Get the PHP helper library from twilio.com/docs/php/install 
include('./vendor/autoload.php');
use Twilio\Rest\Client; // Loads the library 

 
$account_sid = 'ACa5c42458932f16ad6b54ee91f307db12'; 
$auth_token = '469fcbb65a8f7a223da5fdf31918297f'; 
$client = new Client($account_sid, $auth_token); 

$user = '+919542898742';
/*$user = '+918790687180';*/
$TwilioNumber = '+19546211229';
$Body = "Welcome to Twilio Session !";
 
try {
        // Initiate a new outbound call
        $call = $client->account->calls->create(
            // Change the 'To' number below to whatever number you'd like 
            // to call.
            $user,

            // Change the 'From' number below to be a valid Twilio number 
            // that you've purchased or verified with Twilio.
            $TwilioNumber,

            //  Set the URL Twilio will request when the call is answered.
            array("url" => "http://a029c32c.ngrok.io/basicCallResponse.php")
        );
        echo "Started call: " . $call->sid;

    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }