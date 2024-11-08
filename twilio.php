<?php
require 'path/to/twilio-php-main/src/Twilio/autoload.php';
use Twilio\Rest\Client;

// Your Twilio credentials
$sid = 'your_account_sid';
$token = 'your_auth_token';
$twilio = new Client($sid, $token);

// Send an SMS
$message = $twilio->messages->create(
    '+1234567890', // to
    [
        'from' => 'your_twilio_phone_number',
        'body' => 'Hello from Twilio!'
    ]
);

echo "Message sent!";
?>
