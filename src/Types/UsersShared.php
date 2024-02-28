<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object contains information about the user whose identifier was shared with the bot using a
 * KeyboardButtonRequestUser button.
 *
 * Class UsersShared
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#usersshared
 */
class UsersShared extends BaseType
{
    /**
     * Identifier of the request
     * @var int
     */
    public int $request_id;
    /**
     * Identifiers of the shared users. These numbers may have more than 32 significant bits and some programming
     * languages may have difficulty/silent defects in interpreting them. But they have at most 52 significant bits,
     * so 64-bit integers or double-precision float types are safe for storing these identifiers. The bot may not have
     * access to the users and could be unable to use these identifiers, unless the users are already known to the bot
     * by some other means.
     * @var int[]
     */
    public array $user_ids;
}