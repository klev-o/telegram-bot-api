<?php

namespace Klev\TelegramBotApi\Types;

/**
 * Describes the paid media added to a message.
 *
 * @link https://core.telegram.org/bots/api#paidmediainfo
 *
 * Class PaidMediaInfo
 * @package Klev\TelegramBotApi\Types
 */
final class PaidMediaInfo extends BaseType
{
    /**
     * The number of Telegram Stars that must be paid to buy access to the media
     * @var int
     */
    public int $star_count;
    /**
     * Information about the paid media
     * @var PaidMedia[]
     */
    public array $paid_media;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'paid_media':
                $result = [];
                foreach ($data as $entity) {
                    switch ($entity['type']) {
                        case PaidMedia::TYPE_PREVIEW:
                            $result[] = new PaidMediaPreview($entity);
                            break;
                        case PaidMedia::TYPE_PHOTO:
                            $result[] = new PaidMediaPhoto($entity);
                            break;
                        case PaidMedia::TYPE_VIDEO:
                            $result[] = new PaidMediaVideo($entity);
                            break;
                    }

                }
                return $result;
        }

        return null;
    }
}
