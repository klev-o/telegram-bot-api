<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;

class InlineQueryResultContact implements InlineQueryResult
{
    public string $type = 'contact';
    public string $id;
    public string $phone_number;
    public string $first_name;
    public ?string $last_name;
    public ?string $vcard;
    public ?InlineKeyboardMarkup $reply_markup;
    public ?InputMessageContent $input_message_content;
    public ?string $thumb_url;
    public ?int $thumb_width;
    public ?int $thumb_height;
}