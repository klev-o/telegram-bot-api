<?php


namespace Klev\TelegramBotApi\Types\InlineMode;

/**
 * Represents the content of a contact message to be sent as the result of an inline query.
 *
 * @link https://core.telegram.org/bots/api#inputcontactmessagecontent
 *
 * Class InputContactMessageContent
 * @package Klev\TelegramBotApi\Types\InlineMode
 */
class InputContactMessageContent implements InputMessageContent
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
     * 	Optional. Contact's last name
     * @var string|null
     */
    public ?string $last_name;
    /**
     * Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
     * @var string|null
     */
    public ?string $vcard;

    public function __construct(string $phone_number, string $first_name)
    {
        $this->phone_number = $phone_number;
        $this->first_name = $first_name;
    }
}