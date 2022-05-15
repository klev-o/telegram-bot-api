<?php

namespace Klev\TelegramBotApi\Types;

/**
 * Contains information about a Web App.
 *
 * @link https://core.telegram.org/bots/api#webappinfo
 *
 * Class WebAppInfo
 * @package Klev\TelegramBotApi\Types
 */
class WebAppInfo extends BaseType
{
    /**
     * An HTTPS URL of a Web App to be opened with additional data as specified in Initializing Web Apps
     * @var string
     */
    public string $url;
}