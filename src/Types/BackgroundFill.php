<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object describes the way a background is filled based on the selected colors. Currently, it can be one of
 *
 * BackgroundFillSolid
 * BackgroundFillGradient
 * BackgroundFillFreeformGradient
 *
 * @link https://core.telegram.org/bots/api#backgroundfill
 *
 * Class BackgroundFill
 * @package Klev\TelegramBotApi\Types
 */
abstract class BackgroundFill extends BaseType
{
    public const TYPE_SOLID = 'solid';
    public const TYPE_GRADIENT = 'gradient';
    public const TYPE_FREEFORM_GRADIENT = 'freeform_gradient';
    /**
     * Type of the background fill
     * @var string
     */
    protected string $type;
}