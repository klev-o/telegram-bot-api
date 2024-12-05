<?php

namespace Klev\TelegramBotApi\Types;

/**
 * The background is taken directly from a built-in chat theme.
 *
 * https://core.telegram.org/bots/api#backgroundtypechattheme
 *
 * Class BackgroundTypeChatTheme
 * @package Klev\TelegramBotApi\Types
 */
final class BackgroundTypeChatTheme extends BackgroundType
{
    /**
     * Type of the background, always “chat_theme”
     * @var string
     */
    public string $type = self::TYPE_CHAT_THEME;

    /**
     * Name of the chat theme, which is usually an emoji
     * @var string
     */
    public string $theme_name;
}