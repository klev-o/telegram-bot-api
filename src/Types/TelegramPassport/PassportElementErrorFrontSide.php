<?php


namespace Klev\TelegramBotApi\Types\TelegramPassport;


class PassportElementErrorFrontSide implements PassportElementError
{
    public string $source = 'front_side';
    public string $type;
    public string $file_hash;
    public string $message;
}