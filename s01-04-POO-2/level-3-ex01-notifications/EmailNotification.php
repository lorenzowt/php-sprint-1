<?php
require_once "Notifier.php";

class EmailNotification implements Notifier {
    
    public function notify(string $message): void {
        echo "\nSending EMAIL: " . $message;
    }
}