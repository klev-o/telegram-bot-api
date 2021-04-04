<?php


namespace Klev\TelegramBotApi\Types\TelegramPassport;

/**
 * Represents an issue with the translated version of a document. The error is considered resolved when a file with the
 * document translation change.
 *
 * @see https://core.telegram.org/bots/api#passportelementerrortranslationfiles
 *
 * Class PassportElementErrorTranslationFiles
 * @package Klev\TelegramBotApi\Types\TelegramPassport
 */
class PassportElementErrorTranslationFiles implements PassportElementError
{
    /**
     * Error source, must be translation_files
     * @var string
     */
    public string $source = 'translation_files';
    /**
     * Type of element of the user's Telegram Passport which has the issue, one of “passport”,
     * “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”,
     * “passport_registration”, “temporary_registration”
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