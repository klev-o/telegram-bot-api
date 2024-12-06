<?php


namespace Klev\TelegramBotApi\Methods\Payments;


use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;
use Klev\TelegramBotApi\Types\Payments\LabeledPrice;
use Klev\TelegramBotApi\Types\ReplyParameters;

/**
 * Use this method to send invoices. On success, the sent Message is returned.
 *
 * @link https://core.telegram.org/bots/api#sendinvoice
 *
 * Class SendInvoice
 * @package Klev\TelegramBotApi\Methods\Payments
 */
class SendInvoice extends BaseMethod
{
    /**
     * Unique identifier for the target private chat
     * @var int
     */
    public int $chat_id;
    /**
     * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var int|null
     */
    public ?int $message_thread_id = null;
    /**
     * Product name, 1-32 characters
     * @var string
     */
    public string $title;
    /**
     * Product description, 1-255 characters
     * @var string
     */
    public string $description;
    /**
     * Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use for your internal processes.
     * @var string
     */
    public string $payload;
    /**
     * Payment provider token, obtained via @BotFather. Pass an empty string for payments in Telegram Stars.
     * @var string|null
     */
    public ?string $provider_token;
    /**
     * Three-letter ISO 4217 currency code, see more on currencies. Pass “XTR” for payments in Telegram Stars.
     * @var string
     */
    public string $currency;
    /**
     * Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost,
     * delivery tax, bonus, etc.). Must contain exactly one item for payments in Telegram Stars.
     * @var LabeledPrice[]|string
     */
    public $prices = '';
    /**
     * The maximum accepted amount for tips in the smallest units of the currency (integer, not float/double).
     * For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp parameter in currencies.json,
     * it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     * Defaults to 0. Not supported for payments in Telegram Stars.
     * @var int|null
     */
    public ?int $max_tip_amount = 0;
    /**
     * A JSON-serialized array of suggested amounts of tips in the smallest units of the currency (integer,
     * not float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive,
     * passed in a strictly increased order and must not exceed max_tip_amount.
     * @var int[]|string
     */
    public $suggested_tip_amounts = '';
    /**
     * Unique deep-linking parameter that can be used to generate this invoice when used as a start parameter
     * @var string|null
     */
    public ?string $start_parameter = null;
    /**
     * A JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed description
     * of required fields should be provided by the payment provider.
     * @var string|null
     */
    public ?string $provider_data = null;
    /**
     * URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
     * People like it better when they see what they are paying for.
     * @var string|null
     */
    public ?string $photo_url = null;
    /**
     * Photo size
     * @var int|null
     */
    public ?int $photo_size = null;
    /**
     * Photo width
     * @var int|null
     */
    public ?int $photo_width = null;
    /**
     * Photo height
     * @var int|null
     */
    public ?int $photo_height = null;
    /**
     * Pass True, if you require the user's full name to complete the order. Ignored for payments in Telegram Stars.
     * @var bool|null
     */
    public ?bool $need_name = null;
    /**
     * Pass True, if you require the user's phone number to complete the order. Ignored for payments in Telegram Stars.
     * @var bool|null
     */
    public ?bool $need_phone_number = null;
    /**
     * Pass True, if you require the user's email address to complete the order. Ignored for payments in Telegram Stars.
     * @var bool|null
     */
    public ?bool $need_email = null;
    /**
     * Pass True, if you require the user's shipping address to complete the order. Ignored for payments in Telegram Stars.
     * @var bool|null
     */
    public ?bool $need_shipping_address = null;
    /**
     * Pass True, if user's phone number should be sent to provider. Ignored for payments in Telegram Stars.
     * @var bool|null
     */
    public ?bool $send_phone_number_to_provider = null;
    /**
     * Pass True, if user's email address should be sent to provider. Ignored for payments in Telegram Stars.
     * @var bool|null
     */
    public ?bool $send_email_to_provider = null;
    /**
     * Pass True, if the final price depends on the shipping method. Ignored for payments in Telegram Stars.
     * @var bool|null
     */
    public ?bool $is_flexible = null;
    /**
     * Sends the message silently. Users will receive a notification with no sound.
     * @var bool|null
     */
    public ?bool $disable_notification = null;
    /**
     * Protects the contents of the sent message from forwarding and saving
     * @var bool|null
     */
    public ?bool $protect_content = null;
    /**
     * Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars
     * per message. The relevant Stars will be withdrawn from the bot's balance
     * @var bool|null
     */
    public ?bool $allow_paid_broadcast = null;
    /**
     * Unique identifier of the message effect to be added to the message; for private chats only
     * @var string|null
     */
    public ?string $message_effect_id = null;
    /**
     * Description of the message to reply to
     * @var ReplyParameters|null
     */
    public ?ReplyParameters $reply_parameters = null;
    /**
     * A JSON-serialized object for an inline keyboard. If empty, one 'Pay total price' button will be shown.
     * If not empty, the first button must be a Pay button.
     * @var InlineKeyboardMarkup|string|null
     */
    public $reply_markup = '';

    public function __construct(
        int $chat_id,
        string $title,
        string $description,
        string $payload,
        string $provider_token,
        string $currency,
        array $prices
    ){
        $this->chat_id = $chat_id;
        $this->title = $title;
        $this->description = $description;
        $this->payload = $payload;
        $this->provider_token = $provider_token;
        $this->currency = $currency;
        $this->prices = $prices;
    }
}