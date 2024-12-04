<?php

namespace Klev\TelegramBotApi\Types;

/**
 * Describes the opening hours of a business.
 *
 * Class BusinessOpeningHours
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#businessopeninghours
 */
class BusinessOpeningHours extends BaseType
{
    /**
     * Unique name of the time zone for which the opening hours are defined
     * @var string
     */
    public string $time_zone_name;
    /**
     * List of time intervals describing business opening hours
     * @var BusinessOpeningHoursInterval[]
     */
    public array $opening_hours;
}