<?php

namespace Klev\TelegramBotApi\Types;

/**
 * Describes the connection of the bot with a business account.
 *
 * Class BusinessConnection
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#businessconnection
 */
class BusinessConnection extends BaseType
{
    /**
     * The Unique identifier of the business connection
     * @var string
     */
    public string $id;
    /**
     * Business account user that created the business connection
     * @var User
     */
    public User $user;
    /**
     * Identifier of a private chat with the user who created the business connection. This number may have more than
     * 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for
     * storing this identifier.
     * @var int
     */
    public int $user_chat_id;
    /**
     * Date the connection was established in Unix time
     * @var int
     */
    public int $date;
    /**
     * True, if the bot can act on behalf of the business account in chats that were active in the last 24 hours
     * @var bool
     */
    public bool $can_reply;
    /**
     * True, if the connection is active
     * @var bool
     */
    public bool $is_enabled;
}