<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object is received when messages are deleted from a connected business account.
 *
 * Class BusinessMessagesDeleted
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#businessmessagesdeleted
 */
class BusinessMessagesDeleted extends BaseType
{
    /**
     * Unique identifier of the business connection
     * @var string
     */
    public string $business_connection_id;
    /**
     * Information about a chat in the business account. The bot may not have access to the chat or the corresponding
     * user.
     * @var Chat
     */
    public Chat $chat;
    /**
     * The list of identifiers of deleted messages in the chat of the business account
     * @var int[]
     */
    public array $user_chat_id;
}