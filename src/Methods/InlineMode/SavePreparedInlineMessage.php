<?php


namespace Klev\TelegramBotApi\Methods\InlineMode;


use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Types\InlineMode\InlineQueryResult;

/**
 * Stores a message that can be sent by a user of a Mini App. Returns a PreparedInlineMessage object.
 *
 * @link https://core.telegram.org/bots/api#savepreparedinlinemessage
 *
 * Class SavePreparedInlineMessage
 * @package Klev\TelegramBotApi\Methods\InlineMode
 */
class SavePreparedInlineMessage extends BaseMethod
{
    /**
     * Unique identifier of the target user that can use the prepared message
     * @var int
     */
    public int $user_id;
    /**
     * A JSON-serialized object describing the message to be sent
     * @var InlineQueryResult[]
     */
    public $results = '';
    /**
     * Pass True if the message can be sent to private chats with users
     * @var bool|null
     */
    public ?bool $allow_user_chats;
    /**
     * Pass True if the message can be sent to private chats with bots
     * @var bool|null
     */
    public ?bool $allow_bot_chats;
    /**
     * Pass True if the message can be sent to group and supergroup chats
     * @var bool|null
     */
    public ?bool $allow_group_chats;
    /**
     * Pass True if the message can be sent to channel chats
     * @var bool|null
     */
    public ?bool $allow_channel_chats;

    public function preparation(): void
    {
        if ($this->isPrepared()) {
            return;
        }

        if (!empty($this->results)) {
            $this->results = json_encode($this->results);
        }

        $this->setIsPrepared(true);
    }
}