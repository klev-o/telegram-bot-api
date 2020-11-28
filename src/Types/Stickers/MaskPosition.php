<?php

namespace Klev\TelegramBotApi\Types\Stickers;

use Klev\TelegramBotApi\Types\BaseType;

/**
 * This object describes the position on faces where a mask should be placed by default.
 *
 * Class MaskPosition
 * @package Klev\TelegramBotApi\Types\Stickers
 *
 * @see https://core.telegram.org/bots/api#maskposition
 */
class MaskPosition extends BaseType
{
    public string $point;
    public float $x_shift;
    public float $y_shift;
    public float $scale;
}