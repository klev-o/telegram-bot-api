<?php

namespace Klev\TelegramBotApi\Types;

/**
 * The paid media is a photo.
 *
 * @link https://core.telegram.org/bots/api#paidmediaphoto
 *
 * Class PaidMediaPhoto
 * @package Klev\TelegramBotApi\Types
 */
final class PaidMediaPhoto extends PaidMedia
{
    /**
     * Type of the paid media, always “photo”
     * @var string
     */
    public string $type = self::TYPE_PHOTO;
    /**
     * Optional. Media width as defined by the sender
     * @var PhotoSize[]
     */
    public array $photo;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'photo':
                $result = [];
                foreach ($data as $entity) {
                    $result[] = new PhotoSize($entity);
                }
                return $result;
        }

        return null;
    }
}
