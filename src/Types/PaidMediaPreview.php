<?php

namespace Klev\TelegramBotApi\Types;

/**
 * The paid media isn't available before the payment.
 *
 * @link https://core.telegram.org/bots/api#paidmediapreview
 *
 * Class PaidMediaPreview
 * @package Klev\TelegramBotApi\Types
 */
final class PaidMediaPreview extends PaidMedia
{
    /**
     * Type of the paid media, always “preview”
     * @var string
     */
    public string $type = self::TYPE_PREVIEW;
    /**
     * Optional. Media width as defined by the sender
     * @var int|null
     */
    public ?int $width = null;
    /**
     * Optional. Media height as defined by the sender
     * @var int|null
     */
    public ?int $height = null;
    /**
     * Optional. Duration of the media in seconds as defined by the sender
     * @var int|null
     */
    public ?int $duration = null;
}