<?php

namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to send phone contacts. On success, the sent Message is returned.
 *
 * Class SendContact
 * @package Klev\TelegramBotApi\Methods
 *
 * @see https://core.telegram.org/bots/api#sendcontact
 */
class SendContact extends BaseMethod
{
    public string $chat_id;
    public string $phone_number;
    public string $first_name;
    public ?string $last_name;
    public ?string $vcard;
    public ?bool $disable_notification;
    public ?int $reply_to_message_id;
    public ?bool $allow_sending_without_reply;
    public  $reply_markup = '';

    public function __construct($chat_id, $phone_number, $first_name)
    {
        $this->chat_id = $chat_id;
        $this->phone_number = $phone_number;
        $this->first_name = $first_name;
    }
}