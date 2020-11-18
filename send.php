<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

if(isset($_POST['send']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $twilio_number = $_POST['phone'];
    $body = $_POST['body'];


    $account_sid = 'AC34efa220639b55d12b8c14ad3170c23a';
    $auth_token = '16c2e4454d6dff063627ccf72a80cfcf';

    $twilio_number = "+13158608969";

    $client = new Client($account_sid, $auth_token);
    $client->messages->create(
    // Number to send message to
    '+13158608969',
    array(
        'from' => $twilio_number,
        'email' => $email,
        'name' => $name,
        'body' => $body,
    )
);
}

echo "Your text has been sent successfully";

?>