<?php


namespace Klev\TelegramBotApi\Methods;


use Klev\TelegramBotApi\Types\KeyboardInterface;

/**
 * Use this method to send phone contacts. On success, the sent Message is returned.
 *
 * @link https://core.telegram.org/bots/api#sendcontact
 *
 * Class SendContact
 * @package Klev\TelegramBotApi\Methods
 */
class SendContact extends BaseMethod
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @var string|int
     */
    public string $chat_id;
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
     * Contact's last name
     * @var string|null
     */
    public ?string $last_name;
    /**
     * Additional data about the contact in the form of a vCard, 0-2048 bytes
     * @var string|null
     */
    public ?string $vcard;
    /**
     * Sends the message silently. Users will receive a notification with no sound.
     * @var bool|null
     */
    public ?bool $disable_notification;
    /**
     * Protects the contents of the sent message from forwarding and saving
     * @var bool|null
     */
    public ?bool $protect_content = null;
    /**
     * If the message is a reply, ID of the original message
     * @var int|null
     */
    public ?int $reply_to_message_id;
    /**
     * Pass True, if the message should be sent even if the specified replied-to message is not found
     * @var bool|null
     */
    public ?bool $allow_sending_without_reply;
    /**
     * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to remove keyboard or to force a reply from the user.
     * @var KeyboardInterface|string
     */
    public $reply_markup = '';

    public function __construct(string $chat_id, string $phone_number, string $first_name)
    {
        $this->chat_id = $chat_id;
        $this->phone_number = $phone_number;
        $this->first_name = $first_name;
    }
}