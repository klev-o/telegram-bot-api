<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents an inline button that switches the current user to inline mode in a chosen chat, with an
 * optional default inline query.
 *
 * @link https://core.telegram.org/bots/api#switchinlinequerychosenchat
 *
 * Class SwitchInlineQueryChosenChat
 * @package Klev\TelegramBotApi\Types
 */
class SwitchInlineQueryChosenChat extends BaseType
{
    /**
     * Optional. The default inline query to be inserted in the input field. If left empty, only the bot's username
     * will be inserted
     * @var string|null
     */
    public ?string $query;
    /**
     * Optional. True, if private chats with users can be chosen
     * @var bool|null
     */
    public ?bool $allow_user_chats;
    /**
     * Optional. True, if private chats with bots can be chosen
     * @var bool|null
     */
    public ?bool $allow_bot_chats;
    /**
     * Optional. True, if group and supergroup chats can be chosen
     * @var bool|null
     */
    public ?bool $allow_group_chats;
    /**
     * Optional. True, if channel chats can be chosen
     * @var bool|null
     */
    public ?bool $allow_channel_chats;
}