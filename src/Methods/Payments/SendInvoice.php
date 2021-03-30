<?php


namespace Klev\TelegramBotApi\Methods\Payments;


use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;
use Klev\TelegramBotApi\Types\Payments\LabeledPrice;

class SendInvoice extends BaseMethod
{
    public int $chat_id;
    public string $title;
    public string $description;
    public string $payload;
    public string $provider_token;
    public string $start_parameter;
    public string $currency;
    /**
     * @var LabeledPrice[]|string
     */
    public $prices = '';
    public ?string $provider_data = null;
    public ?string $photo_url = null;
    public ?int $photo_size = null;
    public ?int $photo_width = null;
    public ?int $photo_height = null;
    public ?bool $need_name = null;
    public ?bool $need_phone_number = null;
    public ?bool $need_email = null;
    public ?bool $need_shipping_address = null;
    public ?bool $send_phone_number_to_provider = null;
    public ?bool $send_email_to_provider = null;
    public ?bool $is_flexible = null;
    public ?bool $disable_notification = null;
    public ?int $reply_to_message_id = null;
    public ?bool $allow_sending_without_reply = null;
    /**
     * A JSON-serialized object for an inline keyboard. If empty, one 'Pay total price' button will be shown.
     * If not empty, the first button must be a Pay button.
     * @var InlineKeyboardMarkup|string|null
     */
    public $reply_markup = '';
}