<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a phone contact.
 *
 * Class Contact
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#contact
 */
class Contact extends BaseType
{
    /**
     * Contact's phone number
     * @var string
     */
    public string $phone_number;
    /**
     * Contact's first name
     * @var string
     */
    public string $first_name;
    /**
     * Optional. Contact's last name
     * @var string
     */
    public ?string $last_name;
    /**
     * Optional. Contact's user identifier in Telegram
     * @var int
     */
    public ?int $user_id;
    /**
     * Optional. Additional data about the contact in the form of a vCard
     * @var string
     */
    public ?string $vcard;
}