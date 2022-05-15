<?php


namespace Klev\TelegramBotApi\Types;


/**
 * This object represent a user's profile pictures.
 *
 * @link https://core.telegram.org/bots/api#userprofilephotos
 *
 * Class UserProfilePhotos
 * @package Klev\TelegramBotApi\Types
 */
class UserProfilePhotos extends BaseType
{
    /**
     * Total number of profile pictures the target user has
     * @var int
     */
    public int $total_count;
    /**
     * Requested profile pictures (in up to 4 sizes each)
     * @var PhotoSize[][]
     */
    public array $photos;

    /**
     * @param $key
     * @param $data
     * @return array|null
     */
    protected function bindObjects($key, $data): ?array
    {
        switch ($key) {
            case 'photos':
                $result = [];
                foreach ($data as $entity) {
                    $inner = [];
                    foreach ($entity as $item) {
                        $inner[] = new PhotoSize($item);
                    }
                    $result[] = $inner;
                }
                return $result;
        }

        return null;
    }
}