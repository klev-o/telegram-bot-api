<?php

namespace Klev\TelegramBotApi\Types;

/**
 * Represents a photo to be sent.
 *
 * Class InputMediaPhoto
 * @package Klev\TelegramBotApi\Types
 *
 * @see https://core.telegram.org/bots/api#inputmediaphoto
 */
class InputMediaPhoto implements InputMedia
{
    /**
     * Type of the result, must be photo
     * @var string
     */
    public string $type = 'photo';
    /**
     * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP
     * URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one
     * using multipart/form-data under <file_attach_name> name. More info on Sending Files »
     * @var string
     */
    public $media;
    /**
     * Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing
     * @var string|null
     */
    public ?string $caption = '';
    /**
     * Optional. Mode for parsing entities in the photo caption. See formatting options for more details.
     * @var string|null
     */
    public ?string $parse_mode = 'html';
    /**
     * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @var array|null
     */
    public ?array $caption_entities = null;

    public function __construct(string $media)
    {
        $this->media = $media;
    }
}