<?php

namespace Klev\TelegramBotApi\Types;

/**
 * The background is a gradient fill.
 *
 * @link https://core.telegram.org/bots/api#backgroundfillgradient
 *
 * Class BackgroundFillGradient
 * @package Klev\TelegramBotApi\Types
 */
final class BackgroundFillGradient extends BackgroundFill
{
    /**
     * Type of the background fill, always “gradient”
     * @var string
     */
    public string $type = self::TYPE_GRADIENT;
    /**
     * Top color of the gradient in the RGB24 format
     * @var int
     */
    public int $top_color;
    /**
     * Bottom color of the gradient in the RGB24 format
     * @var int
     */
    public int $bottom_color;
    /**
     * Clockwise rotation angle of the background fill in degrees; 0-359
     * @var int
     */
    public int $rotation_angle;
}