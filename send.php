<?php
    require __DIR__ . '/vendor/autoload.php';
    use Twilio\Rest\Client;
    use SecureEnvPHP\SecureEnvPHP;

    (new SecureEnvPHP())->parse('.env.enc', '.env.key');
    
    // API Credentials
    $account_sid = getenv('TWILIO_SID');
    $auth_token = getenv('TWILIO_AUTH_TOKEN'); 
    $twilio_number = getenv('TWILIO_NUMBER');
        
    if(isset($_POST['send'])){
        //Form variables
        $name = $_POST['name'];
        $phone_no = $_POST['phone'];
        $message = $_POST['body'];

        $client = new Client($account_sid, $auth_token);
        $response = $client->messages->create(
            $phone_no,
            array(
                'from' => $twilio_number,
                'body' => $message . '  From: '.$name,
                "statusCallback" => "http://postb.in/1234abcd"
            )
        );
        header("Location:confirmation.php?sent=true");
    }
