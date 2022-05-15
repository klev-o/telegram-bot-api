<?php


namespace Klev\TelegramBotApi\Types\TelegramPassport;


use Klev\TelegramBotApi\Types\BaseType;

/**
 * Contains data required for decrypting and authenticating EncryptedPassportElement. See the Telegram Passport
 * Documentation for a complete description of the data decryption and authentication processes.
 *
 * @link https://core.telegram.org/bots/api#encryptedcredentials
 *
 * Class EncryptedCredentials
 * @package Klev\TelegramBotApi\Types\TelegramPassport
 */
class EncryptedCredentials extends BaseType
{
    /**
     * Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for
     * EncryptedPassportElement decryption and authentication
     * @var string
     */
    public string $data;
    /**
     * Base64-encoded data hash for data authentication
     * @var string
     */
    public string $hash;
    /**
     * Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption
     * @var string
     */
    public string $secret;
}