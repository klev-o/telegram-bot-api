<?php

namespace Klev\TelegramBotApi\Types;

/**
 * The paid media to send is a photo.
 *
 * @link https://core.telegram.org/bots/api#inputpaidmediaphoto
 *
 * Class InputPaidMediaPhoto
 * @package Klev\TelegramBotApi\Types
 */
final class InputPaidMediaPhoto extends PaidMedia
{
    /**
     * Type of the media, must be video
     * @var string
     */
    public string $type = self::TYPE_PHOTO;
    /**
     * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL
     * for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using
     * multipart/form-data under <file_attach_name> name. More information on Sending Files »
     * @var string
     */
    public string $media;
}