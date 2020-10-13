<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represent a user's profile pictures.
 *
 * Class UserProfilePhotos
 * @package Klev\TelegramBotApi\Types
 *
 * @see https://core.telegram.org/bots/api#userprofilephotos
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
}