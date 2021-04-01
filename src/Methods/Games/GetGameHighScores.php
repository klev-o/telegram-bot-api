<?php


namespace Klev\TelegramBotApi\Methods\Games;


use Klev\TelegramBotApi\Methods\BaseMethod;

class GetGameHighScores extends BaseMethod
{
    public int $user_id;
    public ?int $chat_id = null;
    public ?int $message_id = null;
    public ?string $inline_message_id = null;
}