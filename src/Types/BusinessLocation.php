<?php

namespace Klev\TelegramBotApi\Types;

/**
 * Contains information about the location of a Telegram Business account.
 *
 * Class BusinessLocation
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#businesslocation
 */
class BusinessLocation extends BaseType
{
    /**
     * Address of the business
     * @var string
     */
    public string $address;
    /**
     * Optional. Location of the business
     * @var Location|null
     */
    public ?Location $location = null;
}