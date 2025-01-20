<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\Types\ChatAdministratorRights;

/**
 * Changes the emoji status for a given user that previously allowed the bot to manage their emoji status via the
 * Mini App method requestEmojiStatusAccess. Returns True on success.
 *
 * @link https://core.telegram.org/bots/api#setuseremojistatus
 *
 * Class SetUserEmojiStatus
 * @package Klev\TelegramBotApi\Methods
 */
class SetUserEmojiStatus extends BaseMethod
{
    /**
     * Unique identifier of the target user
     * @var int
     */
    public int $user_id;
    /**
     * Custom emoji identifier of the emoji status to set. Pass an empty string to remove the status.
     * @var string|null
     */
    public ?string $emoji_status_custom_emoji_id;
    /**
     * Expiration date of the emoji status, if any
     * @var int|null
     */
    public ?int $emoji_status_expiration_date;
}