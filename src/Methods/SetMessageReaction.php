<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\Types\ReactionType;

/**
 * Use this method to change the chosen reactions on a message. Service messages can't be reacted to. Automatically
 * forwarded messages from a channel to its discussion group have the same available reactions as messages
 * in the channel. Returns True on success.
 *
 * Class SetMessageReaction
 * @package Klev\TelegramBotApi\Methods
 *
 * https://core.telegram.org/bots/api#setmessagereaction
 */
class SetMessageReaction extends BaseMethod
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @var string
     */
    public string $chat_id;
    /**
     * Identifier of the target message. If the message belongs to a media group, the reaction is set to the
     * first non-deleted message in the group instead.
     * @var int
     */
    public int $message_id;
    /**
     * New list of reaction types to set on the message. Currently, as non-premium users, bots can set up to one
     * reaction per message. A custom emoji reaction can be used if it is either already present on the message or
     * explicitly allowed by chat administrators.
     * @var ReactionType[]|string
     */
    public $reaction = '';
    /**
     * Identifier of the target message. If the message belongs to a media group, the reaction is set to the
     * first non-deleted message in the group instead.
     * @var bool|null
     */
    public ?bool $is_big = null;

    public function __construct(string $chat_id, int $message_id)
    {
        $this->chat_id = $chat_id;
        $this->message_id = $message_id;
    }

    public function preparation(): void
    {
        if ($this->isPrepared()) {
            return;
        }

        if (!empty($this->reaction) && is_array($this->reaction)) {
            $this->reaction = json_encode($this->reaction);
        }

        $this->setIsPrepared(true);
    }
}