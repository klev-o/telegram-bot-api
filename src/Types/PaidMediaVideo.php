<?php

namespace Klev\TelegramBotApi\Types;

/**
 * The paid media is a video.
 *
 * @link https://core.telegram.org/bots/api#paidmediavideo
 *
 * Class PaidMediaVideo
 * @package Klev\TelegramBotApi\Types
 */
final class PaidMediaVideo extends PaidMedia
{
    /**
     * Type of the paid media, always “video”
     * @var string
     */
    public string $type = self::TYPE_VIDEO;
    /**
     * The video
     * @var Video
     */
    public Video $video;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'video':
                return new Video($data);
        }

        return null;
    }
}
