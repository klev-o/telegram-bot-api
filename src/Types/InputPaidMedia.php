<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object describes the paid media to be sent. Currently, it can be one of
 *
 * InputPaidMediaPhoto
 * InputPaidMediaVideo
 *
 * @link https://core.telegram.org/bots/api#inputpaidmedia
 *
 * Class InputPaidMedia
 * @package Klev\TelegramBotApi\Types
 */
abstract class InputPaidMedia extends BaseType
{
    public const TYPE_PHOTO = 'photo';
    public const TYPE_VIDEO = 'video';
    /**
     * Type of the media
     * @var string
     */
    protected string $type;
}