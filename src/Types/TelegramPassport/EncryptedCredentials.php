<?php


namespace Klev\TelegramBotApi\Types\TelegramPassport;


use Klev\TelegramBotApi\Types\BaseType;

/**
 * Contains data required for decrypting and authenticating EncryptedPassportElement. See the Telegram Passport
 * Documentation for a complete description of the data decryption and authentication processes.
 *
 * @see https://core.telegram.org/bots/api#encryptedcredentials
 *
 * Class EncryptedCredentials
 * @package Klev\TelegramBotApi\Types\TelegramPassport
 */
class EncryptedCredentials extends BaseType
{
    public string $data;
    public string $hash;
    public string $secret;
}