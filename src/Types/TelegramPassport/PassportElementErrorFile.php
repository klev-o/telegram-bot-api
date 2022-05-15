<?php


namespace Klev\TelegramBotApi\Types\TelegramPassport;

/**
 * Represents an issue with a document scan. The error is considered resolved when the file with the document scan
 * changes.
 *
 * @link https://core.telegram.org/bots/api#passportelementerrorfile
 *
 * Class PassportElementErrorFile
 * @package Klev\TelegramBotApi\Types\TelegramPassport
 */
class PassportElementErrorFile
{
    /**
     * Error source, must be file
     * @var string
     */
    public string $source = 'file';
    /**
     * The section of the user's Telegram Passport which has the issue, one of “utility_bill”, “bank_statement”,
     * “rental_agreement”, “passport_registration”, “temporary_registration”
     * @var string
     */
    public string $type;
    /**
     * Base64-encoded file hash
     * @var string
     */
    public string $file_hash;
    /**
     * Error message
     * @var string
     */
    public string $message;
}