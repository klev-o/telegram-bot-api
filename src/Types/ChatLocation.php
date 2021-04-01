<?php

namespace Klev\TelegramBotApi\Types;

/**
 * Represents a location to which a chat is connected.
 *
 * Class ChatLocation
 * @package Klev\TelegramBotApi\Types
 *
 * @see https://core.telegram.org/bots/api#chatlocation
 */
class ChatLocation extends BaseType
{
    /**
     * The location to which the supergroup is connected. Can't be a live location.
     * @var Location
     */
    public Location $location;
    /**
     * Location address; 1-64 characters, as defined by the chat owner
     * @var string
     */
    public string $address;

    /**
     * @param $key
     * @param $data
     * @return array|Location|object|null
     */
    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'location':
                return new Location($data);
        }

        return null;
    }
}