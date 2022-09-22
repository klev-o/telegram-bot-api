<?php

namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to specify a url and receive incoming updates via an outgoing webhook.
 *
 * Class SetWebhook
 * @package Klev\TelegramBotApi\Methods
 *
 * @link https://core.telegram.org/bots/api#setwebhook
 */
class SetWebhook extends BaseMethod
{
    /**
     * HTTPS url to send updates to. Use an empty string to remove webhook integration
     * @var string
     */
    public string $url;
    /**
     * Upload your public key certificate so that the root certificate in use can be checked. See our self-signed guide
     * for details.
     * @var string|null
     */
    public ?string $certificate = null;
    /**
     * The fixed IP address which will be used to send webhook requests instead of the IP address resolved through DNS
     * @var string|null
     */
    public ?string $ip_address;
    /**
     * Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery, 1-100. Defaults to
     * 40. Use lower values to limit the load on your bot's server, and higher values to increase your bot's throughput.
     * @var int|null
     */
    public ?int $max_connections = null;
    /**
     * A JSON-serialized list of the update types you want your bot to receive. For example, specify [“message”,
     * “edited_channel_post”, “callback_query”] to only receive updates of these types. See Update for a complete list
     * of available update types. Specify an empty list to receive all updates regardless of type (default).
     * If not specified, the previous setting will be used.
     * Please note that this parameter doesn't affect updates created before the call to the setWebhook, so unwanted
     * updates may be received for a short period of time.
     *
     * @var string[]|null
     */
    public ?array $allowed_updates = null;
    /**
     * Pass True to drop all pending updates
     * @var bool|null
     */
    public ?bool $drop_pending_updates = null;
    /**
     * A secret token to be sent in a header “X-Telegram-Bot-Api-Secret-Token” in every webhook request,
     * 1-256 characters. Only characters A-Z, a-z, 0-9, _ and - are allowed. The header is useful to ensure that the
     * request comes from a webhook set by you.
     * @var string|null
     */
    public ?string $secret_token = null;

    /**
     * SetWebhook constructor.
     * @param string $url
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }
}