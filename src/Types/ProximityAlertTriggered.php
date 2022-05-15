<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents the content of a service message, sent whenever a user in the chat triggers a proximity
 * alert set by another user.
 *
 * Class ProximityAlertTriggered
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#proximityalerttriggered
 */
class ProximityAlertTriggered extends BaseType
{
    /**
     * User that triggered the alert
     * @var User
     */
    public User $traveler;
    /**
     * User that set the alert
     * @var User
     */
    public User $watcher;
    /**
     * The distance between the users
     * @var int
     */
    public int $distance;

    /**
     * @param $key
     * @param $data
     * @return object|null
     */
    protected function bindObjects($key, $data): ?object
    {
        switch ($key) {
            case '$traveler':
            case 'watcher':
                return new User($data);
        }

        return null;
    }
}