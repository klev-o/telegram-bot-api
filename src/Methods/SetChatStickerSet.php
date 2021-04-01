<?php


namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to set a new group sticker set for a supergroup. The bot must be an administrator in the chat for
 * this to work and must have the appropriate admin rights. Use the field can_set_sticker_set optionally returned in
 * getChat requests to check if the bot can use this method. Returns True on success.
 *
 * @see https://core.telegram.org/bots/api#setchatstickerset
 *
 * Class SetChatStickerSet
 * @package Klev\TelegramBotApi\Methods
 */
class SetChatStickerSet extends BaseMethod
{
    /**
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @var string
     */
    public string $chat_id;
    /**
     * Name of the sticker set to be set as the group sticker set
     * @var string
     */
    public string $sticker_set_name;

    public function __construct($chat_id, string $sticker_set_name)
    {
        $this->chat_id = $chat_id;
        $this->sticker_set_name = $sticker_set_name;
    }
}