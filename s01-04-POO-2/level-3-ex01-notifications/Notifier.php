<?php

    interface Notifier {
        public function notify(string $message): void;
    }