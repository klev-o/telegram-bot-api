<?php

namespace Klev\TelegramBotApi\Types;

/**
 * The background is automatically filled based on the selected colors.
 *
 * https://core.telegram.org/bots/api#backgroundtypefill
 *
 * Class BackgroundTypeFill
 * @package Klev\TelegramBotApi\Types
 */
final class BackgroundTypeFill extends BackgroundType
{
    /**
     * Type of the background, always “fill”
     * @var string
     */
    public string $type = self::TYPE_FILL;
    /**
     * The background fill
     * @var BackgroundFill
     */
    public BackgroundFill $fill;
    /**
     * Dimming of the background in dark themes, as a percentage; 0-100
     * @var int
     */
    public int $dark_theme_dimming;


    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'fill':
                switch ($data['type']) {
                    case BackgroundFill::TYPE_SOLID:
                        return new BackgroundFillSolid($data);
                    case BackgroundFill::TYPE_GRADIENT:
                        return new BackgroundFillGradient($data);
                    case BackgroundFill::TYPE_FREEFORM_GRADIENT:
                        return new BackgroundFillFreeformGradient($data);
                }
        }

        return null;
    }
}