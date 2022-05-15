<?php


namespace Klev\TelegramBotApi\Types\TelegramPassport;

/**
 * Represents an issue with the reverse side of a document. The error is considered resolved when the file with reverse
 * side of the document changes.
 *
 * @link https://core.telegram.org/bots/api#passportelementerrorreverseside
 *
 * Class PassportElementErrorReverseSide
 * @package Klev\TelegramBotApi\Types\TelegramPassport
 */
class PassportElementErrorReverseSide implements PassportElementError
{
    /**
     * Error source, must be reverse_side
     * @var string
     */
    public string $source = 'reverse_side';
    /**
     * The section of the user's Telegram Passport which has the issue, one of “driver_license”, “identity_card”
     * @var string
     */
    public string $type;
    /**
     * Base64-encoded hash of the file with the reverse side of the document
     * @var string
     */
    public string $file_hash;
    /**
     * Error message
     * @var string
     */
    public string $message;
}