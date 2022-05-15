<?php


namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to get a list of profile pictures for a user. Returns a UserProfilePhotos object.
 *
 * @link https://core.telegram.org/bots/api#getuserprofilephotos
 *
 * Class GetUserProfilePhotos
 * @package Klev\TelegramBotApi\Methods
 */
class GetUserProfilePhotos extends BaseMethod
{
    /**
     * Unique identifier of the target user
     * @var string
     */
    public string $user_id;
    /**
     * Sequential number of the first photo to be returned. By default, all photos are returned.
     * @var int|null
     */
    public ?int $offset;
    /**
     * Limits the number of photos to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     * @var int|null
     */
    public ?int $limit;

    public function __construct($user_id)
    {
        $this->user_id = $user_id;
    }
}