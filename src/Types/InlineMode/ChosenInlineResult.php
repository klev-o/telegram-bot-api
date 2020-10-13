<?php

namespace Klev\TelegramBotApi\Types\InlineMode;

use Klev\TelegramBotApi\Types\BaseType;
use Klev\TelegramBotApi\Types\Location;
use Klev\TelegramBotApi\Types\User;

/**
 * Represents a result of an inline query that was chosen by the user and sent to their chat partner.
 *
 * @see https://core.telegram.org/bots/api#choseninlineresult
 *
 * Class ChosenInlineResult
 * @package Klev\TelegramBotApi\Types\InlineMode
 */
class ChosenInlineResult extends BaseType
{
    /**
     * The unique identifier for the result that was chosen
     * @var string
     */
    public string $result_id;
    /**
     * The user that chose the result
     * @var User
     */
    public User $from;
    /**
     * Optional. Sender location, only for bots that require user location
     * @var Location|null
     */
    public ?Location $location;
    /**
     * Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the
     * message. Will be also received in callback queries and can be used to edit the message.
     * @var string|null
     */
    public ?string $inline_message_id;
    /**
     * The query that was used to obtain the result
     * @var string
     */
    public string $query;

    protected function bindObjects($key, $data): ?object
    {
        switch ($key) {
            case 'from':
                return new User($data);
            case 'location':
                return new Location($data);
        }

        return null;
    }
}