<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 *
 * Class Document
 * @package Klev\TelegramBotApi\Types
 *
 * @see https://core.telegram.org/bots/api#document
 */
class Document extends BaseType
{
    /**
     * Identifier for this file, which can be used to download or reuse the file
     * @var string
     */
    public string $file_id;
    /**
     * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be
     * used to download or reuse the file.
     * @var string
     */
    public string $file_unique_id;
    /**
     * Optional. Document thumbnail as defined by sender
     * @var PhotoSize
     */
    public ?PhotoSize $thumb;
    /**
     * Optional. Original filename as defined by sender
     * @var string
     */
    public ?string $file_name;
    /**
     * Optional. MIME type of the file as defined by sender
     * @var string
     */
    public ?string $mime_type;
    /**
     * Optional. File size
     * @var int
     */
    public ?int $file_size;
}