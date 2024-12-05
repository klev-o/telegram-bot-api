<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a chat background.
 *
 * Class ChatBackground
 * @package Klev\TelegramBotApi\Methods
 *
 * @link https://core.telegram.org/bots/api#chatbackground
 */
final class ChatBackground extends BaseType
{
    /**
     * Type of the background
     * @var BackgroundType
     */
    public BackgroundType $type;

    protected function bindObjects($key, $data)
    {
        if ($key == 'type') {
            switch ($data['type']) {
                case BackgroundType::TYPE_FILL:
                    return new BackgroundTypeFill($data);
                case BackgroundType::TYPE_WALLPAPER:
                    return new BackgroundTypeWallpaper($data);
                case BackgroundType::TYPE_PATTERN:
                    return new BackgroundTypePattern($data);
                case BackgroundType::TYPE_CHAT_THEME:
                    return new BackgroundTypeChatTheme($data);
            }
        }

        return parent::bindObjects($key, $data);
    }
}