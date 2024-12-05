<?php

namespace Klev\TelegramBotApi\Types;

/**
 * The background is a freeform gradient that rotates after every message in the chat.
 *
 * @link https://core.telegram.org/bots/api#backgroundfillfreeformgradient
 *
 * Class BackgroundFillFreeformGradient
 * @package Klev\TelegramBotApi\Types
 */
final class BackgroundFillFreeformGradient extends BackgroundFill
{
    /**
     * Type of the background fill, always “freeform_gradient”
     * @var string
     */
    public string $type = self::TYPE_FREEFORM_GRADIENT;
    /**
     * A list of the 3 or 4 base colors that are used to generate the freeform gradient in the RGB24 format
     * @var int[]
     */
    public array $colors;
}