<?php

namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to set a custom title for an administrator in a supergroup promoted by the bot. Returns True on
 * success.
 *
 * Class SetChatAdministratorCustomTitle
 * @package Klev\TelegramBotApi\Methods
 *
 * @see https://core.telegram.org/bots/api#setchatadministratorcustomtitle
 */
class SetChatAdministratorCustomTitle extends BaseMethod
{
    /**
     * Unique identifier for the target group or username of the target supergroup or channel
     * (in the format @channelusername)
     * @var string
     */
    public string $chat_id;
    /**
     * Unique identifier of the target user
     * @var int
     */
    public int $user_id;
    /**
     * New custom title for the administrator; 0-16 characters, emoji are not allowed
     * @var string
     */
    public string $custom_title;

    public function __construct($chat_id, $user_id, $custom_title)
    {
        $this->chat_id = $chat_id;
        $this->user_id = $user_id;
        $this->custom_title = $custom_title;
    }
}