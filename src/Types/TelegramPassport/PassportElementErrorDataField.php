<?php


namespace Klev\TelegramBotApi\Types\TelegramPassport;


class PassportElementErrorDataField implements PassportElementError
{
    public string $source = 'data';
    public string $type;
    public string $field_name;
    public string $data_hash;
    public string $message;
}