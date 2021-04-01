<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents an animated emoji that displays a random value.
 *
 * Class Dice
 * @package Klev\TelegramBotApi\Types
 *
 * @see https://core.telegram.org/bots/api#dice
 */
class Dice extends BaseType
{
    /**
     * Emoji on which the dice throw animation is based
     * @var string
     */
    public string $emoji;
    /**
     * Value of the dice, 1-6 for “🎲” and “🎯” base emoji, 1-5 for “🏀” base emoji
     * @var int
     */
    public int $value;
}