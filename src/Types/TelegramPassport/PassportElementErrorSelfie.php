<?php


namespace Klev\TelegramBotApi\Types\TelegramPassport;


class PassportElementErrorSelfie implements PassportElementError
{
    public string $source = 'selfie';
    public string $type;
    public string $file_hash;
    public string $message;
}