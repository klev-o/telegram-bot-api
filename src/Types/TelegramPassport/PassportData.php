<?php


namespace Klev\TelegramBotApi\Types\TelegramPassport;

use Klev\TelegramBotApi\Types\BaseType;

/**
 * Contains information about Telegram Passport data shared with the bot by the user.
 *
 * @see https://core.telegram.org/bots/api#passportdata
 *
 * Class PassportData
 * @package Klev\TelegramBotApi\Types\TelegramPassport
 */
class PassportData extends BaseType
{
    /**
     * Array with information about documents and other Telegram Passport elements that was shared with the bot
     * @var EncryptedPassportElement[]
     */
    public array $data;
    /**
     * Encrypted credentials required to decrypt the data
     * @var EncryptedCredentials
     */
    public EncryptedCredentials $credentials;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'data':
                $result = [];
                foreach ($data as $entity) {
                    $result[] = new EncryptedPassportElement($entity);
                }
                return $result;
            case 'credentials':
                return new EncryptedCredentials($data);
        }

        return null;
    }
}