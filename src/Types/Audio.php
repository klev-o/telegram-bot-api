<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents an audio file to be treated as music by the Telegram clients.
 *
 * Class Audio
 * @package Klev\TelegramBotApi\Types
 *
 * @see https://core.telegram.org/bots/api#audio
 */
class Audio extends BaseType
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
     * Duration of the audio in seconds as defined by sender
     * @var int
     */
    public int $duration;
    /**
     * Optional. Performer of the audio as defined by sender or by audio tags
     * @var string|null
     */
    public ?string $performer;
    /**
     * Optional. Title of the audio as defined by sender or by audio tags
     * @var string|null
     */
    public ?string $title;
    /**
     * Optional. MIME type of the file as defined by sender
     * @var string|null
     */
    public ?string $mime_type;
    /**
     * Optional. File size
     * @var int|null
     */
    public ?int $file_size;
    /**
     * Optional. Thumbnail of the album cover to which the music file belongs
     * @var PhotoSize|null
     */
    public ?PhotoSize $thumb;

    protected function bindObjects($key, $data): ?object
    {
        switch ($key) {
            case 'thumb':
                return new PhotoSize($data);
        }

        return null;
    }
}