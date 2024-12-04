<?php

namespace Klev\TelegramBotApi\Types;


/**
 * Describes the birthdate of a user.
 *
 * Class Birthdate
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#birthdate
 */
class Birthdate extends BaseType
{
    /**
     * Day of the user's birth; 1-31
     * @var int
     */
    public int $day;
    /**
     * Month of the user's birth; 1-12
     * @var int
     */
    public int $month;
    /**
     * Optional. Year of the user's birth
     * @var int|null
     */
    public ?int $year = null;
}