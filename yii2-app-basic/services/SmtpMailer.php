<?php

namespace app\services;

use app\interfaces\MailerInterface;

class SmtpMailer implements MailerInterface
{
    public function send(string $to, string $subject, string $body): string
    {
        return "Email надіслано до {$to} з темою {$subject}\n";
    }
}