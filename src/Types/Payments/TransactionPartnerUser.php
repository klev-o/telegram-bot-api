<?php

namespace Klev\TelegramBotApi\Types\Payments;

use Klev\TelegramBotApi\Types\PaidMedia;
use Klev\TelegramBotApi\Types\PaidMediaPhoto;
use Klev\TelegramBotApi\Types\PaidMediaPreview;
use Klev\TelegramBotApi\Types\PaidMediaVideo;
use Klev\TelegramBotApi\Types\Stickers\Gift;
use Klev\TelegramBotApi\Types\User;

/**
 * Describes a transaction with a user.
 *
 * @link https://core.telegram.org/bots/api#transactionpartneruser
 *
 * Class TransactionPartnerUser
 * @package Klev\TelegramBotApi\Types
 */
final class TransactionPartnerUser extends TransactionPartner
{
    /**
     * Type of the transaction partner, always “user”
     * @var string
     */
    public string $type = self::TYPE_USER;
    /**
     * Information about the user
     * @var User
     */
    public User $user;
    /**
     * Optional. Information about the affiliate that received a commission via this transaction
     * @var AffiliateInfo|null
     */
    public ?AffiliateInfo $affiliate;
    /**
     * Optional. Bot-specified invoice payload
     * @var string|null
     */
    public ?string $invoice_payload;
    /**
     * Optional. The duration of the paid subscription
     * @var int|null
     */
    public ?int $subscription_period;
    /**
     * Optional. Information about the paid media bought by the user
     * @var PaidMedia[]|null
     */
    public ?array $paid_media = null;
    /**
     * Optional. Bot-specified paid media payload
     * @var string|null
     */
    public ?string $paid_media_payload;
    /**
     * Optional. The gift sent to the user by the bot
     * @var Gift|null
     */
    public ?Gift $gift;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'user':
                return new User($data);
            case 'affiliate':
                return new AffiliateInfo($data);
            case 'paid_media':
                $result = [];
                foreach ($data as $entity) {
                    switch ($entity['type']) {
                        case PaidMedia::TYPE_PREVIEW:
                            $result[] = new PaidMediaPreview($entity);
                            break;
                        case PaidMedia::TYPE_PHOTO:
                            $result[] = new PaidMediaPhoto($entity);
                            break;
                        case PaidMedia::TYPE_VIDEO:
                            $result[] = new PaidMediaVideo($entity);
                            break;
                    }

                }
                return $result;
            case 'gift':
                return new Gift($data);
        }

        return null;
    }
}