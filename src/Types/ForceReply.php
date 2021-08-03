<?php


namespace Klev\TelegramBotApi\Types;

/**
 * Upon receiving a message with this object, Telegram clients will display a reply interface to the user (act as if
 * the user has selected the bot's message and tapped 'Reply'). This can be extremely useful if you want to create
 * user-friendly step-by-step interfaces without having to sacrifice privacy mode.
 *
 * Class ForceReply
 * @package Klev\TelegramBotApi\Types
 *
 * @see https://core.telegram.org/bots/api#forcereply
 */
class ForceReply extends BaseType implements KeyboardInterface
{
    /**
     * Shows reply interface to the user, as if they manually selected the bot's message and tapped 'Reply'
     * @var bool
     */
    public bool $force_reply = true;
    /**
     * Optional. The placeholder to be shown in the input field when the keyboard is active; 1-64 characters
     * @var string|null
     */
    public ?string $input_field_placeholder = '';
    /**
     * Optional. Use this parameter if you want to force reply from specific users only. Targets:
     * 1) users that are @mentioned in the text of the Message object;
     * 2) if the bot's message is a reply (has reply_to_message_id), sender of the original message.
     * @var bool|null
     */
    public ?bool $selective;
}