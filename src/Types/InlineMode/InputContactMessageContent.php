<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


class InputContactMessageContent implements InputMessageContent
{
    public string $phone_number;
    public string $first_name;
    public ?string $last_name;
    public ?string $vcard;
}