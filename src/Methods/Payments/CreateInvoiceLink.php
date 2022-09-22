<?php

namespace Klev\TelegramBotApi\Methods\Payments;

use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Types\Payments\LabeledPrice;

/**
 * Use this method to create a link for an invoice. Returns the created invoice link as String on success.
 *
 * @link https://core.telegram.org/bots/api#createinvoicelink
 *
 * Class CreateInvoiceLink
 * @package Klev\TelegramBotApi\Methods\Payments
 */
final class CreateInvoiceLink extends BaseMethod
{
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
     * Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user,
     * use for your internal processes.
     * @var string
     */
    public string $payload;
    /**
     * Payment provider token, obtained via BotFather
     * @var string
     */
    public string $provider_token;
    /**
     * Three-letter ISO 4217 currency code, see more on currencies
     * @var string
     */
    public string $currency;
    /**
     * Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost,
     * delivery tax, bonus, etc.)
     * @var LabeledPrice[]|string
     */
    public $prices = '';
    /**
     * The maximum accepted amount for tips in the smallest units of the currency (integer, not float/double).
     * For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp parameter in currencies.json,
     * it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     * Defaults to 0
     * @var int|null
     */
    public ?int $max_tip_amount = 0;
    /**
     * A JSON-serialized array of suggested amounts of tips in the smallest units of the currency
     * (integer, not float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be
     * positive, passed in a strictly increased order and must not exceed max_tip_amount.
     * @var int[]|null
     */
    public $suggested_tip_amounts = '';
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
     * Pass True, if you require the user's full name to complete the order
     * @var bool|null
     */
    public ?bool $need_name = null;
    /**
     * Pass True, if you require the user's phone number to complete the order
     * @var bool|null
     */
    public ?bool $need_phone_number = null;
    /**
     * Pass True, if you require the user's email address to complete the order
     * @var bool|null
     */
    public ?bool $need_email = null;
    /**
     * Pass True, if you require the user's shipping address to complete the order
     * @var bool|null
     */
    public ?bool $need_shipping_address = null;
    /**
     * Pass True, if user's phone number should be sent to provider
     * @var bool|null
     */
    public ?bool $send_phone_number_to_provider = null;
    /**
     * Pass True, if user's email address should be sent to provider
     * @var bool|null
     */
    public ?bool $send_email_to_provider = null;
    /**
     * Pass True, if the final price depends on the shipping method
     * @var bool|null
     */
    public ?bool $is_flexible = null;

    public function __construct(
        string $title,
        string $description,
        string $payload,
        string $provider_token,
        string $currency,
        array $prices
    ){
        $this->title = $title;
        $this->description = $description;
        $this->payload = $payload;
        $this->provider_token = $provider_token;
        $this->currency = $currency;
        $this->prices = $prices;
    }
}