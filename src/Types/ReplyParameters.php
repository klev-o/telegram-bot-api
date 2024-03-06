<?php

namespace Klev\TelegramBotApi\Types;

/**
 * Describes reply parameters for the message that is being sent.
 *
 * Class ReplyParameters
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#replyparameters
 */
final class ReplyParameters extends BaseType
{
    /**
     * Identifier of the message that will be replied to in the current chat, or in the chat chat_id if it is specified
     * @var int
     */
    public int $message_id = 0;
    /**
     * Optional. If the message to be replied to is from a different chat, unique identifier for the chat or username
     * of the channel (in the format @channelusername)
     * @var string|null
     */
    public ?string $chat_id = '';
    /**
     * Optional. Pass True if the message should be sent even if the specified message to be replied to is not found;
     * can be used only for replies in the same chat and forum topic.
     * @var bool|null
     */
    public ?bool $allow_sending_without_reply = true;
    /**
     * Optional. Quoted part of the message to be replied to; 0-1024 characters after entities parsing. The quote must
     * be an exact substring of the message to be replied to, including bold, italic, underline, strikethrough, spoiler,
     * and custom_emoji entities. The message will fail to send if the quote isn't found in the original message.
     * @var string|null
     */
    public ?string $quote = '';
    /**
     * Optional. Mode for parsing entities in the quote. See formatting options for more details.
     * @var string|null
     */
    public ?string $quote_parse_mode = '';
    /**
     * Optional. A JSON-serialized list of special entities that appear in the quote. It can be specified instead of
     * quote_parse_mode.
     * @var MessageEntity[]|null
     */
    public ?array $quote_entities = null;
    /**
     * Optional. Position of the quote in the original message in UTF-16 code units
     * @var int|null
     */
    public ?int $quote_position = 0;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'quote_entities':
                $result = [];
                foreach ($data as $entity) {
                    $result[] = new MessageEntity($entity);
                }
                return $result;
        }

        return null;
    }
}