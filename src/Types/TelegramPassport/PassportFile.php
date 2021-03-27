<?php


namespace Klev\TelegramBotApi\Types\TelegramPassport;


use Klev\TelegramBotApi\Types\BaseType;

/**
 * This object represents a file uploaded to Telegram Passport. Currently all Telegram Passport files are in JPEG
 * format when decrypted and don't exceed 10MB.
 *
 * @see https://core.telegram.org/bots/api#passportfile
 *
 * Class PassportFile
 * @package Klev\TelegramBotApi\Types\TelegramPassport
 */
class PassportFile extends BaseType
{
    public string $file_id;
    public string $file_unique_id;
    public int $file_size;
    public int $file_date;
}