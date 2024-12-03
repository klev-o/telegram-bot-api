<?php


namespace Klev\TelegramBotApi\Methods;


use Klev\TelegramBotApi\Types\KeyboardInterface;
use Klev\TelegramBotApi\Types\ReplyParameters;

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
     * Unique identifier of the business connection on behalf of which the message will be sent
     * @var string|null
     */
    public ?string $business_connection_id = null;
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @var string|int
     */
    public string $chat_id;
    /**
     * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var int|null
     */
    public ?int $message_thread_id = null;
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
     * Description of the message to reply to
     * @var ReplyParameters|null
     */
    public ?ReplyParameters $reply_parameters = null;
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