<?php


namespace Klev\TelegramBotApi\Types\TelegramPassport;

/**
 * Represents an issue in an unspecified place. The error is considered resolved when new data is added.
 *
 * @link https://core.telegram.org/bots/api#passportelementerrorunspecified
 *
 * Class PassportElementErrorUnspecified
 * @package Klev\TelegramBotApi\Types\TelegramPassport
 */
class PassportElementErrorUnspecified implements PassportElementError
{
    /**
     * Error source, must be unspecified
     * @var string
     */
    public string $source = 'unspecified';
    /**
     * Type of element of the user's Telegram Passport which has the issue
     * @var string
     */
    public string $type;
    /**
     * Base64-encoded element hash
     * @var string
     */
    public string $element_hash;
    /**
     * Error message
     * @var string
     */
    public string $message;
}