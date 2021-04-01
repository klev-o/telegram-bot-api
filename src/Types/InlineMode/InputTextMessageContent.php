<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\MessageEntity;

class InputTextMessageContent implements InputMessageContent
{
    public string $message_text;
    public ?string $parse_mode = 'html';
    /**
     * @var MessageEntity[]|null
     */
    public ?array $entities;
    public ?bool $disable_web_page_preview;
}