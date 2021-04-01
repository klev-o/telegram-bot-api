<?php


namespace Klev\TelegramBotApi\Types\TelegramPassport;


class PassportElementErrorReverseSide implements PassportElementError
{
    public string $source = 'reverse_side';
    public string $type;
    public string $file_hash;
    public string $message;
}