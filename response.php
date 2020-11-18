<?php
require_once "vendor/autoload.php";
use Twilio\TwiML\MessagingResponse;

// Set the content-type to XML to send back TwiML from the PHP Helper Library
header("content-type: text/xml");

$response = new MessagingResponse();
$response->message(
    "Thank you for your message. I will get back to you as soon as i can!"
);

echo $response;

?>