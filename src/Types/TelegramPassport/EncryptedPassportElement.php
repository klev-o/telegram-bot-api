<?php


namespace Klev\TelegramBotApi\Types\TelegramPassport;


use Klev\TelegramBotApi\Types\BaseType;

/**
 * Contains information about documents or other Telegram Passport elements shared with the bot by the user.
 *
 * @link https://core.telegram.org/bots/api#encryptedpassportelement
 *
 * Class EncryptedPassportElement
 * @package Klev\TelegramBotApi\Types\TelegramPassport
 */
class EncryptedPassportElement extends BaseType
{
    /**
     * Element type. One of “personal_details”, “passport”, “driver_license”, “identity_card”,
     * “internal_passport”, “address”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”,
     * “temporary_registration”, “phone_number”, “email”.
     * @var string
     */
    public string $type;
    /**
     * Optional. Base64-encoded encrypted Telegram Passport element data provided by the user, available for
     * “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport” and “address” types.
     * Can be decrypted and verified using the accompanying EncryptedCredentials.
     * @var string|null
     */
    public ?string $data;
    /**
     * Optional. User's verified phone number, available only for “phone_number” type
     * @var string|null
     */
    public ?string $phone_number;
    /**
     * Optional. User's verified email address, available only for “email” type
     * @var string|null
     */
    public ?string $email;
    /**
     * Optional. Array of encrypted files with documents provided by the user, available for “utility_bill”,
     * “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types.
     * Files can be decrypted and verified using the accompanying EncryptedCredentials.
     * @var PassportFile[]
     */
    public ?array $files;
    /**
     * Optional. Encrypted file with the front side of the document, provided by the user. Available for “passport”,
     * “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the
     * accompanying EncryptedCredentials.
     * @var PassportFile|null
     */
    public ?PassportFile $front_side;
    /**
     * Optional. Encrypted file with the reverse side of the document, provided by the user. Available for
     * “driver_license” and “identity_card”. The file can be decrypted and verified using the accompanying
     * EncryptedCredentials.
     * @var PassportFile|null
     */
    public ?PassportFile $reverse_side;
    /**
     * Optional. Encrypted file with the selfie of the user holding a document, provided by the user; available for
     * “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified
     * using the accompanying EncryptedCredentials.
     * @var PassportFile|null
     */
    public ?PassportFile $selfie;
    /**
     * Optional. Array of encrypted files with translated versions of documents provided by the user. Available if
     * requested for “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”,
     * “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types.
     * Files can be decrypted and verified using the accompanying EncryptedCredentials.
     * @var PassportFile[]
     */
    public ?array $translation;
    /**
     * @var string|null
     */
    public ?string $hash;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'files':
            case 'translation':
                $result = [];
                foreach ($data as $entity) {
                    $result[] = new PassportFile($entity);
                }
                return $result;
            case 'front_side':
            case 'reverse_side':
            case 'selfie':
                return new PassportFile($data);
        }

        return null;
    }
}