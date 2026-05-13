<?php
    
    require_once "Notifier.php";
    require_once "EmailNotification.php";
    require_once "SmsNotification.php";
    require_once "OrdinaryMailNotification.php";

$emailNotification = new EmailNotification;
$smsNotification = new SmsNotification;
$ordinaryMailNotification = new OrdinaryMailNotification;

$message = "Your order has been shipped!";

$emailNotification->notify($message);
$smsNotification->notify($message);
$ordinaryMailNotification->notify($message);