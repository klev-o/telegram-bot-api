<?php


namespace Klev\TelegramBotApi\Methods\Games;


use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;

class SendGame extends BaseMethod
{
    public int $chat_id;
    public string $game_short_name;
    public ?bool $disable_notification = null;
    public ?int $reply_to_message_id = null;
    public ?bool $allow_sending_without_reply = null;
    /**
     * @var InlineKeyboardMarkup|string
     */
    public string $reply_markup = '';
}