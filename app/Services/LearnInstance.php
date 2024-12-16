<?php

namespace App\Services;

class LearnInstance{
    private string $message;

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }
    public function getMessage(): string
    {
        return $this->message;
    }
}
