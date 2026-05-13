<?php
require_once "Notifier.php";

class OrdinaryMailNotification implements Notifier {
    
    public function notify(string $message): void {
        echo "\nSending ORDINARY MAIL: " . $message;
    }
}