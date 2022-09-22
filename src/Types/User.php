<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a Telegram user or bot.
 *
 * Class User
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#user
 */
class User extends BaseType
{
    /**
     * Unique identifier for this user or bot
     * @var int
     */
    public int $id;
    /**
     * True, if this user is a bot
     * @var bool
     */
    public bool $is_bot;
    /**
     * User's or bot's first name
     * @var string
     */
    public string $first_name;
    /**
     * Optional. User's or bot's last name
     * @var string|null
     */
    public ?string $last_name = null;
    /**
     * Optional. User's or bot's username
     * @var string|null
     */
    public ?string $username = null;
    /**
     * Optional. IETF language tag of the user's language
     * @var string|null
     */
    public ?string $language_code = null;
    /**
     * Optional. True, if this user is a Telegram Premium user
     * @var bool|null
     */
    public ?bool $is_premium = null;
    /**
     * Optional. True, if the bot can be invited to groups. Returned only in getMe.
     * @var bool|null
     */
    public ?bool $can_join_groups = null;
    /**
     * Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
     * @var bool|null
     */
    public ?bool $can_read_all_group_messages = null;
    /**
     * Optional. True, if the bot supports inline queries. Returned only in getMe.
     * @var bool|null
     */
    public ?bool $supports_inline_queries = null;
}