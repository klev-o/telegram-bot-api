<?php

namespace Klev\TelegramBotApi\Types;

/**
 * The background is a wallpaper in the JPEG format.
 *
 * https://core.telegram.org/bots/api#backgroundtypewallpaper
 *
 * Class BackgroundTypeWallpaper
 * @package Klev\TelegramBotApi\Types
 */
final class BackgroundTypeWallpaper extends BackgroundType
{
    /**
     * Type of the background, always “wallpaper”
     * @var string
     */
    public string $type = self::TYPE_WALLPAPER;
    /**
     * Document with the wallpaper
     * @var Document
     */
    public Document $document;
    /**
     * Dimming of the background in dark themes, as a percentage; 0-100
     * @var int
     */
    public int $dark_theme_dimming;
    /**
     * Optional. True, if the wallpaper is downscaled to fit in a 450x450 square and then box-blurred with radius 12
     * @var bool|null
     */
    public ?bool $is_blurred = null;
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
        }

        return null;
    }
}