<?php

namespace Klev\TelegramBotApi\Types\Payments;

use Klev\TelegramBotApi\Types\BaseType;
use Klev\TelegramBotApi\Types\User;

/**
 * This object contains information about a paid media purchase.
 *
 * @link https://core.telegram.org/bots/api#paidmediapurchased
 *
 * Class PaidMediaPurchased
 * @package Klev\TelegramBotApi\Types\Payments
 */
class PaidMediaPurchased extends BaseType
{
    /**
     * User who purchased the media
     * @var User
     */
    public User $from;
    /**
     * Bot-specified paid media payload
     * @var string
     */
    public string $paid_media_payload;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'from':
                return new User($data);
        }

        return null;
    }
}