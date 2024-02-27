<?php

namespace Klev\TelegramBotApi\Types;

/**
 * The reaction is based on a custom emoji.
 *
 * Class ReactionTypeCustomEmoji
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#reactiontypecustomemoji
 */
final class ReactionTypeCustomEmoji extends BaseType implements ReactionType
{
    /**
     * Type of the reaction, always “custom_emoji”
     * @var string
     */
    public string $type = 'custom_emoji';
    /**
     * Custom emoji identifier
     * @var string
     */
    public string $custom_emoji_id;
}