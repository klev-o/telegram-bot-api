<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object defines the criteria used to request a suitable chat. The identifier of the selected chat will be shared
 * with the bot when the corresponding button is pressed.
 *
 * Class KeyboardButtonRequestChat
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#keyboardbuttonrequestchat
 */
class KeyboardButtonRequestChat
{
    /**
     * Signed 32-bit identifier of the request, which will be received back in the ChatShared object. Must be unique
     * within the message
     * @var int
     */
    public int $request_id;
    /**
     * Pass True to request a channel chat, pass False to request a group or a supergroup chat.
     * @var bool
     */
    public bool $chat_is_channel;
    /**
     * Optional. Pass True to request a forum supergroup, pass False to request a non-forum chat.
     * If not specified, no additional restrictions are applied.
     * @var bool|null
     */
    public ?bool $chat_is_forum;
    /**
     * Optional. Pass True to request a supergroup or a channel with a username, pass False to request a chat without a
     * username. If not specified, no additional restrictions are applied.
     * @var bool|null
     */
    public ?bool $chat_has_username;
    /**
     * Optional. Pass True to request a chat owned by the user. Otherwise, no additional restrictions are applied.
     * @var bool|null
     */
    public ?bool $chat_is_created;
    /**
     * Optional. A JSON-serialized object listing the required administrator rights of the user in the chat.
     * The rights must be a superset of bot_administrator_rights. If not specified, no additional restrictions
     * are applied.
     * @var ChatAdministratorRights|string
     */
    public $user_administrator_rights = '';
    /**
     * Optional. A JSON-serialized object listing the required administrator rights of the bot in the chat. The rights
     * must be a subset of user_administrator_rights. If not specified, no additional restrictions are applied.
     * @var ChatAdministratorRights|string
     */
    public $bot_administrator_rights = '';
    /**
     * Optional.Pass True to request a chat with the bot as a member. Otherwise, no additional restrictions are applied.
     * @var bool|null
     */
    public ?bool $bot_is_member;
}