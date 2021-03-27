<?php


namespace Klev\TelegramBotApi\Methods\Games;


use Klev\TelegramBotApi\Methods\BaseMethod;

class SetGameScore extends BaseMethod
{
    public int $user_id;
    public int $score;
    public ?bool $force = null;
    public ?bool $disable_edit_message = null;
    public ?int $chat_id = null;
    public ?int $message_id = null;
    public ?string $inline_message_id = null;
}