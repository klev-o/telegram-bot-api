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
     * @var string
     */
    public string $file_id;
    /**
     * @var string
     */
    public string $file_unique_id;
    /**
     * @var int
     */
    public int $duration;
    /**
     * @var string|null
     */
    public ?string $performer;
    /**
     * @var string|null
     */
    public ?string $title;
    /**
     * @var string|null
     */
    public ?string $mime_type;
    /**
     * @var int|null
     */
    public ?int $file_size;
    /**
     * @var PhotoSize|null
     */
    public ?PhotoSize $thumb;
}