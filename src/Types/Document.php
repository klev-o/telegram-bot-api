<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 *
 * Class Document
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#document
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
     * @var PhotoSize|null
     */
    public ?PhotoSize $thumb = null;
    /**
     * Optional. Original filename as defined by sender
     * @var string|null
     */
    public ?string $file_name = null;
    /**
     * Optional. MIME type of the file as defined by sender
     * @var string|null
     */
    public ?string $mime_type = null;
    /**
     * Optional. File size
     * @var float|null
     */
    public ?float $file_size = null;

    protected function bindObjects($key, $data): ?object
    {
        switch ($key) {
            case 'thumb':
                return new PhotoSize($data);
        }

        return null;
    }
}