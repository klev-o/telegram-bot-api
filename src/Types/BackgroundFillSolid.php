<?php

namespace Klev\TelegramBotApi\Types;

/**
 * The background is filled using the selected color.
 *
 * @link https://core.telegram.org/bots/api#backgroundfillsolid
 *
 * Class BackgroundFillSolid
 * @package Klev\TelegramBotApi\Types
 */
final class BackgroundFillSolid extends BackgroundFill
{
    /**
     * Type of the background fill, always “solid”
     * @var string
     */
    public string $type = self::TYPE_SOLID;
    /**
     * The color of the background fill in the RGB24 format
     * @var int
     */
    public int $color;
}