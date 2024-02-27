<?php

namespace Klev\TelegramBotApi\Types;

/**
 * The reaction is based on an emoji.
 *
 * Class ReactionTypeEmoji
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#reactiontypeemoji
 */
final class ReactionTypeEmoji extends BaseType implements ReactionType
{
    /**
     * Type of the reaction, always “emoji”
     * @var string
     */
    public string $type = 'emoji';
    /**
     * Reaction emoji. Currently, it can be one of "👍", "👎", "❤", "🔥", "🥰", "👏", "😁", "🤔", "🤯", "😱", "🤬",
     * "😢", "🎉", "🤩", "🤮", "💩", "🙏", "👌", "🕊", "🤡", "🥱", "🥴", "😍", "🐳", "❤‍🔥", "🌚", "🌭", "💯", "🤣",
     * "⚡", "🍌", "🏆", "💔", "🤨", "😐", "🍓", "🍾", "💋", "🖕", "😈", "😴", "😭", "🤓", "👻", "👨‍💻", "👀", "🎃",
     * "🙈", "😇", "😨", "🤝", "✍", "🤗", "🫡", "🎅", "🎄", "☃", "💅", "🤪", "🗿", "🆒", "💘", "🙉", "🦄", "😘",
     * "💊", "🙊", "😎", "👾", "🤷‍♂", "🤷", "🤷‍♀", "😡"
     * @var string
     */
    public string $emoji;
}