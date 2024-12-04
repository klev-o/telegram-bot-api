<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object contains information about the chat whose identifier was shared with the bot using a
 * KeyboardButtonRequestChat button.
 *
 * Class ChatShared
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#chatshared
 */
class ChatShared extends BaseType
{
    /**
     * Identifier of the request
     * @var int
     */
    public int $request_id;
    /**
     * Identifier of the shared chat. This number may have more than 32 significant bits and some programming languages
     * may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit
     * integer or double-precision float type are safe for storing this identifier. The bot may not have access to the
     * chat and could be unable to use this identifier, unless the chat is already known to the bot by some other means.
     * @var int
     */
    public int $chat_id;
    /**
     * Optional. Title of the chat, if the title was requested by the bot.
     * @var string|null
     */
    public ?string $title = null;
    /**
     * Optional. Username of the chat, if the username was requested by the bot and available.
     * @var string|null
     */
    public ?string $username = null;
    /**
     * Optional. Available sizes of the chat photo, if the photo was requested by the bot
     * @var PhotoSize[]|null
     */
    public ?array $photo = null;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'photo':
                $result = [];
                foreach ($data as $entity) {
                    $result[] = new PhotoSize($entity);
                }
                return $result;
        }

        return null;
    }
}