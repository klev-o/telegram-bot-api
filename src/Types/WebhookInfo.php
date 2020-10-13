<?php

namespace Klev\TelegramBotApi\Types;

/**
 * Contains information about the current status of a webhook.
 *
 * @see https://core.telegram.org/bots/api#getwebhookinfo
 *
 * Class WebhookInfo
 * @package Klev\TelegramBotApi\Types
 */
class WebhookInfo extends BaseType
{
    /**
     * Webhook URL, may be empty if webhook is not set up
     * @var string
     */
    public string $url;
    /**
     * True, if a custom certificate was provided for webhook certificate checks
     * @var bool
     */
    public bool $has_custom_certificate;
    /**
     * Number of updates awaiting delivery
     * @var int
     */
    public int $pending_update_count;
    /**
     * Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook
     * @var int|null
     */
    public ?int $last_error_date;
    /**
     * Optional. Error message in human-readable format for the most recent error that happened when trying to deliver
     * an update via webhook
     * @var string|null
     */
    public ?string $last_error_message;
    /**
     * Optional. Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
     * @var int|null
     */
    public ?int $max_connections;
    /**
     * Optional. A list of update types the bot is subscribed to. Defaults to all update types
     * @var array|null
     */
    public ?array $allowed_updates;
}