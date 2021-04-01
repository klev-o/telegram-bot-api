<?php


namespace Klev\TelegramBotApi\Types\TelegramPassport;


class PassportElementErrorFile
{
    public string $source = 'file';
    public string $type;
    public string $file_hash;
    public string $message;
}