<?php

namespace Klev\TelegramBotApi\Types;

/**
 * The background is a PNG or TGV (gzipped subset of SVG with MIME type “application/x-tgwallpattern”) pattern to be
 * combined with the background fill chosen by the user
 *
 * https://core.telegram.org/bots/api#backgroundtypepattern
 *
 * Class BackgroundTypePattern
 * @package Klev\TelegramBotApi\Types
 */
final class BackgroundTypePattern extends BackgroundType
{
    /**
     * Type of the background, always “pattern”
     * @var string
     */
    public string $type = self::TYPE_PATTERN;
    /**
     * Document with the wallpaper
     * @var Document
     */
    public Document $document;
    /**
     * The background fill that is combined with the pattern
     * @var BackgroundFill
     */
    public BackgroundFill $fill;
    /**
     * Intensity of the pattern when it is shown above the filled background; 0-100
     * @var int
     */
    public int $intensity;
    /**
     * Optional. True, if the background fill must be applied only to the pattern itself. All other pixels are black
     * in this case. For dark themes only
     * @var bool|null
     */
    public ?bool $is_inverted = null;
    /**
     * Optional. True, if the background moves slightly when the device is tilted
     * @var bool|null
     */
    public ?bool $is_moving = null;


    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'document':
                return new Document($data);
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