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
     * Information about users shared with the bot
     * @var SharedUser[]
     */
    public array $users;
}