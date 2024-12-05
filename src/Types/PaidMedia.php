<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object describes paid media. Currently, it can be one of
 *
 * PaidMediaPreview
 * PaidMediaPhoto
 * PaidMediaVideo
 *
 * @link https://core.telegram.org/bots/api#paidmedia
 *
 * Class PaidMedia
 * @package Klev\TelegramBotApi\Types
 */
abstract class PaidMedia extends BaseType
{
    public const TYPE_PREVIEW = 'preview';
    public const TYPE_PHOTO = 'photo';
    public const TYPE_VIDEO = 'video';
    /**
     * Type of the paid media
     * @var string
     */
    protected string $type;
}