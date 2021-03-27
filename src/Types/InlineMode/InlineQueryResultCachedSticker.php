<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;

class InlineQueryResultCachedSticker implements InlineQueryResult
{
    public string $type = 'sticker';
    public string $id;
    public string $sticker_file_id;
    public ?InlineKeyboardMarkup $reply_markup;
    public ?InputMessageContent $input_message_content;
}