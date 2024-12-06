<?php

namespace Klev\TelegramBotApi\Types;

/**
 * The reaction is paid.
 *
 * Class ReactionTypePaid
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#reactiontypepaid
 */
final class ReactionTypePaid extends ReactionType
{
    /**
     * Type of the reaction, always “custom_emoji”
     * @var string
     */
    public string $type = self::TYPE_PAID;
}