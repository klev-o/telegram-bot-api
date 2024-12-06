<?php


namespace Klev\TelegramBotApi\Types;

/**
 * This object describes the type of a reaction. Currently, it can be one of
 *
 * ReactionTypeEmoji
 * ReactionTypeCustomEmoji
 * ReactionTypePaid
 *
 * @link https://core.telegram.org/bots/api#reactiontype
 *
 * class ReactionType
 * @package Klev\TelegramBotApi\Types
 */
abstract class ReactionType extends BaseType
{
    public const TYPE_EMOJI = 'emoji';
    public const TYPE_CUSTOM_EMOJI = 'custom_emoji';
    public const TYPE_PAID = 'paid';
    /**
     * Type of the reaction
     * @var string
     */
    protected string $type;
}