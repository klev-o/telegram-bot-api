<?php


namespace Klev\TelegramBotApi\Types\TelegramPassport;


use Klev\TelegramBotApi\Types\BaseType;

/**
 * Contains information about documents or other Telegram Passport elements shared with the bot by the user.
 *
 * @see https://core.telegram.org/bots/api#encryptedpassportelement
 *
 * Class EncryptedPassportElement
 * @package Klev\TelegramBotApi\Types\TelegramPassport
 */
class EncryptedPassportElement extends BaseType
{
    public string $type;
    public ?string $data;
    public ?string $phone_number;
    public ?string $email;
    /**
     * @var PassportFile[]
     */
    public ?array $files;
    public ?PassportFile $front_side;
    public ?PassportFile $reverse_side;
    public ?PassportFile $selfie;
    /**
     * @var PassportFile[]
     */
    public ?array $translation;
    public ?string $hash;
}