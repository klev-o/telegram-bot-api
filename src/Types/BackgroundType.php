<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object describes the type of a background. Currently, it can be one of
 *
 * BackgroundTypeFill
 * BackgroundTypeWallpaper
 * BackgroundTypePattern
 * BackgroundTypeChatTheme
 *
 * @link https://core.telegram.org/bots/api#chatbackground
 *
 * Class BackgroundType
 * @package Klev\TelegramBotApi\Types
 */
abstract class BackgroundType extends BaseType
{
    public const TYPE_FILL = 'fill';
    public const TYPE_WALLPAPER = 'wallpaper';
    public const TYPE_PATTERN = 'pattern';
    public const TYPE_CHAT_THEME = 'chat_theme';
    /**
     * Type of the background
     * @var string
     */
    protected string $type;
}