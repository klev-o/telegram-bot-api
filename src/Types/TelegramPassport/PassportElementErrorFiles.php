<?php


namespace Klev\TelegramBotApi\Types\TelegramPassport;

/**
 * Represents an issue with a list of scans. The error is considered resolved when the list of files containing the
 * scans changes.
 *
 * @see https://core.telegram.org/bots/api#passportelementerrorfiles
 *
 * Class PassportElementErrorFiles
 * @package Klev\TelegramBotApi\Types\TelegramPassport
 */
class PassportElementErrorFiles implements PassportElementError
{
    /**
     * Error source, must be files
     * @var string
     */
    public string $source = 'files';
    /**
     * The section of the user's Telegram Passport which has the issue, one of “utility_bill”, “bank_statement”,
     * “rental_agreement”, “passport_registration”, “temporary_registration”
     * @var string
     */
    public string $type;
    /**
     * List of base64-encoded file hashes
     * @var string[]
     */
    public array $file_hashes;
    /**
     * Error message
     * @var string
     */
    public string $message;
}