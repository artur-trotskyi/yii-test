<?php

namespace app\interfaces;

interface MailerInterface
{
    public function send(string $to, string $subject, string $body): string;
}