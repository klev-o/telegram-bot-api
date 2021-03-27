<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;

class InlineQueryResultGame implements InlineQueryResult
{
    public string $type = 'game';
    public string $id;
    public string $game_short_name;
    public ?InlineKeyboardMarkup $reply_markup;
}