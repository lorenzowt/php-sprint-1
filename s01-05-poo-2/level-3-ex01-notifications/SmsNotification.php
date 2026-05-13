<?php
require_once "Notifier.php";

class SmsNotification implements Notifier {
    
    public function notify(string $message): void {
        echo "\nSending SMS: " . $message;
    }

}