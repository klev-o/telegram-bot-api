<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\MessageEntity;

/**
 * Represents the content of a text message to be sent as the result of an inline query.
 *
 * @link https://core.telegram.org/bots/api#inputtextmessagecontent
 *
 * Class InputTextMessageContent
 * @package Klev\TelegramBotApi\Types\InlineMode
 */
class InputTextMessageContent implements InputMessageContent
{
    /**
     * Text of the message to be sent, 1-4096 characters
     * @var string
     */
    public string $message_text;
    /**
     * Optional. Mode for parsing entities in the message text. See formatting options for more details.
     * @var string|null
     */
    public ?string $parse_mode = 'html';
    /**
     * Optional. List of special entities that appear in message text, which can be specified instead of parse_mode
     * @var MessageEntity[]|null
     */
    public ?array $entities;
    /**
     * Optional. Disables link previews for links in the sent message
     * @var bool|null
     */
    public ?bool $disable_web_page_preview;

    public function __construct(string $message_text)
    {
        $this->message_text = $message_text;
    }
}