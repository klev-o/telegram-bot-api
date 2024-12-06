<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 *
 * Class MessageEntity
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#messageentity
 */
class MessageEntity extends BaseType
{
    /**
     * Type of the entity. Currently, can be “mention” (@username), “hashtag” (#hashtag or #hashtag@chatusername),
     * “cashtag” ($USD or $USD@chatusername), “bot_command” (/start@jobs_bot), “url” (https://telegram.org), “email”
     * (do-not-reply@telegram.org), “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (italic text),
     * “underline” (underlined text), “strikethrough” (strikethrough text), “spoiler” (spoiler message), “blockquote”
     * (block quotation), “expandable_blockquote” (collapsed-by-default block quotation), “code” (monowidth string),
     * “pre” (monowidth block), “text_link” (for clickable text URLs), “text_mention” (for users without usernames),
     * “custom_emoji” (for inline custom emoji stickers)
     *
     * @link https://telegram.org/blog/edit#new-mentions
     *
     * @var string
     */
    public string $type;
    /**
     * Offset in UTF-16 code units to the start of the entity
     * @var int
     */
    public int $offset;
    /**
     * Length of the entity in UTF-16 code units
     * @var int
     */
    public int $length;
    /**
     * Optional. For “text_link” only, url that will be opened after user taps on the text
     * @var string|null
     */
    public ?string $url = null;
    /**
     * Optional. For “text_mention” only, the mentioned user
     * @var User|null
     */
    public ?User $user = null;
    /**
     * Optional. For “pre” only, the programming language of the entity text
     * @var string|null
     */
    public ?string $language = null;
    /**
     * Optional. For “custom_emoji” only, unique identifier of the custom emoji. Use getCustomEmojiStickers to get
     * full information about the sticker
     * @var string|null
     */
    public ?string $custom_emoji_id = null;

    protected function bindObjects($key, $data): ?object
    {
        switch ($key) {
            case 'user':
                return new User($data);
        }

        return null;
    }
}