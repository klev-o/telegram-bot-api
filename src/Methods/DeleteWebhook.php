<?php

namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to remove webhook integration if you decide to switch back to getUpdates. Returns True on success.
 *
 * Class DeleteWebhook
 * @package Klev\TelegramBotApi\Methods
 *
 * @link https://core.telegram.org/bots/api#deletewebhook
 */
class DeleteWebhook extends BaseMethod
{
    /**
     * Pass True to drop all pending updates
     * @var bool|null
     */
    public ?bool $drop_pending_updates;

    public function __construct(bool $drop_pending_updates = false)
    {
        $this->drop_pending_updates = $drop_pending_updates;
    }
}