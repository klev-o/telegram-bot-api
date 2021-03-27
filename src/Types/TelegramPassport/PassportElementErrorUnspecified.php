<?php


namespace Klev\TelegramBotApi\Types\TelegramPassport;


class PassportElementErrorUnspecified implements PassportElementError
{
    public string $source = 'unspecified';
    public string $type;
    public string $element_hash;
    public string $message;
}