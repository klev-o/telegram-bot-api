<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;

/**
 * Represents a contact with a phone number. By default, this contact will be sent by the user. Alternatively, you can
 * use input_message_content to send a message with the specified content instead of the contact.
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultcontact
 *
 * Class InlineQueryResultContact
 * @package Klev\TelegramBotApi\Types\InlineMode
 */
class InlineQueryResultContact implements InlineQueryResult
{
    /**
     * Type of the result, must be contact
     * @var string
     */
    public string $type = 'contact';
    /**
     * Unique identifier for this result, 1-64 Bytes
     * @var string
     */
    public string $id;
    /**
     * 	Contact's phone number
     * @var string
     */
    public string $phone_number;
    /**
     * 	Contact's first name
     * @var string
     */
    public string $first_name;
    /**
     * Optional. Contact's last name
     * @var string|null
     */
    public ?string $last_name;
    /**
     * Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
     * @var string|null
     */
    public ?string $vcard;
    /**
     * Optional. Inline keyboard attached to the message
     * @var InlineKeyboardMarkup|null
     */
    public ?InlineKeyboardMarkup $reply_markup;
    /**
     * 	Optional. Content of the message to be sent instead of the contact
     * @var InputMessageContent|null
     */
    public ?InputMessageContent $input_message_content;
    /**
     * Optional. Url of the thumbnail for the result
     * @var string|null
     */
    public ?string $thumbnail_url;
    /**
     * Optional. Thumbnail width
     * @var int|null
     */
    public ?int $thumbnail_width;
    /**
     * 	Optional. Thumbnail height
     * @var int|null
     */
    public ?int $thumbnail_height;

    public function __construct(string $id, string $phone_number, string $first_name)
    {
        $this->id = $id;
        $this->phone_number = $phone_number;
        $this->first_name = $first_name;
    }
}