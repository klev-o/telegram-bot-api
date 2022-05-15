<?php


namespace Klev\TelegramBotApi\Types\TelegramPassport;

/**
 * Represents an issue with the selfie with a document. The error is considered resolved when the file with the selfie
 * changes.
 *
 * @link https://core.telegram.org/bots/api#passportelementerrorselfie
 *
 * Class PassportElementErrorSelfie
 * @package Klev\TelegramBotApi\Types\TelegramPassport
 */
class PassportElementErrorSelfie implements PassportElementError
{
    /**
     * Error source, must be selfie
     * @var string
     */
    public string $source = 'selfie';
    /**
     * The section of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”,
     * “identity_card”, “internal_passport”
     * @var string
     */
    public string $type;
    /**
     * Base64-encoded hash of the file with the selfie
     * @var string
     */
    public string $file_hash;
    /**
     * Error message
     * @var string
     */
    public string $message;
}