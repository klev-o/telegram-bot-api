<?php

namespace Klev\TelegramBotApi\Types;

use Klev\TelegramBotApi\Types\Games\Game;
use Klev\TelegramBotApi\Types\Payments\SuccessfulPayment;
use Klev\TelegramBotApi\Types\TelegramPassport\PassportData;

/**
 * This object represents a message.
 *
 * Class Message
 * @package Klev\TelegramBotApi\Types
 *
 * @see https://core.telegram.org/bots/api#message
 */
class Message extends BaseType
{
    /**
     * Unique message identifier inside this chat
     * @var int
     */
    public int $message_id;
    /**
     * Optional. Sender, empty for messages sent to channels
     * @var User|null
     */
    public ?User $from;
    /**
     * Date the message was sent in Unix time
     * @var int
     */
    public int $date;
    /**
     * Conversation the message belongs to
     * @var Chat
     */
    public Chat $chat;
    /**
     * Optional. For forwarded messages, sender of the original message
     * @var User|null
     */
    public ?User $forward_from;
    /**
     * Optional. For messages forwarded from channels, information about the original channel
     * @var Chat|null
     */
    public ?Chat $forward_from_chat;
    /**
     * Optional. For messages forwarded from channels, identifier of the original message in the channel
     * @var int
     */
    public ?int $forward_from_message_id;
    /**
     * Optional. For messages forwarded from channels, signature of the post author if present
     * @var string
     */
    public ?string $forward_signature;
    /**
     * Optional. Sender's name for messages forwarded from users who disallow adding a link to their account in
     * forwarded messages
     * @var string
     */
    public ?string $forward_sender_name;
    /**
     * Optional. For forwarded messages, date the original message was sent in Unix time
     * @var int
     */
    public ?int $forward_date;
    /**
     * Optional. For replies, the original message. Note that the Message object in this field will not contain
     * further reply_to_message fields even if it itself is a reply.
     * @var Message|null
     */
    public ?Message $reply_to_message;
    /**
     * Optional. Bot through which the message was sent
     * @var User|null
     */
    public ?User $via_bot; //todo new
    /**
     * Optional. Date the message was last edited in Unix time
     * @var int
     */
    public ?int $edit_date;
    /**
     * Optional. The unique identifier of a media message group this message belongs to
     * @var string|null
     */
    public ?string $media_group_id;
    /**
     * Optional. Signature of the post author for messages in channels
     * @var string|null
     */
    public ?string $author_signature;
    /**
     * Optional. For text messages, the actual UTF-8 text of the message, 0-4096 characters
     * @var string|null
     */
    public ?string $text;
    /**
     * Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     * @var MessageEntity[]
     */
    public ?array $entities;
    /**
     * Optional. Message is an animation, information about the animation. For backward compatibility, when this
     * field is set, the document field will also be set
     * @var Animation|null
     */
    public ?Animation $animation;
    /**
     * Optional. Message is an audio file, information about the file
     * @var Audio|null
     */
    public ?Audio $audio;
    /**
     * Optional. Message is a general file, information about the file
     * @var Document|null
     */
    public ?Document $document;
    /**
     * Optional. Message is a photo, available sizes of the photo
     * @var PhotoSize[]|null
     */
    public ?array $photo;
    /**
     * Optional. Message is a sticker, information about the sticker
     * @var Sticker|null
     */
    public ?Sticker $sticker;
    /**
     * Optional. Message is a video, information about the video
     * @var Video|null
     */
    public ?Video $video;
    /**
     * Optional. Message is a video note, information about the video message
     * @var VideoNote|null
     */
    public ?VideoNote $video_note;
    /**
     * Optional. Message is a voice message, information about the file
     * @var Voice|null
     */
    public ?Voice $voice;
    /**
     * Optional. Caption for the animation, audio, document, photo, video or voice, 0-1024 characters
     * @var string|null
     */
    public ?string $caption;
    /**
     * Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc.
     * that appear in the caption
     * @var MessageEntity[]|null
     */
    public ?array $caption_entities;
    /**
     * Optional. Message is a shared contact, information about the contact
     * @var Contact|null
     */
    public ?Contact $contact;
    /**
     * Optional. Message is a dice with random value from 1 to 6
     * @var Dice|null
     */
    public ?Dice $dice;
    /**
     * Optional. Message is a game, information about the game. More about games >
     * @see https://core.telegram.org/bots/api#games
     * @var Game|null
     */
    public ?Game $game;
    /**
     * Optional. Message is a native poll, information about the poll
     * @var Poll|null
     */
    public ?Poll $poll;
    /**
     * Optional. Message is a venue, information about the venue. For backward compatibility, when this field
     * is set, the location field will also be set
     * @var Venue|null
     */
    public ?Venue $venue;
    /**
     * Optional. Message is a shared location, information about the location
     * @var Location|null
     */
    public ?Location $location;
    /**
     * Optional. New members that were added to the group or supergroup and information about them
     * (the bot itself may be one of these members)
     * @var User[]|null
     */
    public ?array $new_chat_members;
    /**
     * Optional. A member was removed from the group, information about them (this member may be the bot itself)
     * @var user|null
     */
    public ?user $left_chat_member;
    /**
     * Optional. A chat title was changed to this value
     * @var string|null
     */
    public ?string $new_chat_title;
    /**
     * Optional. A chat photo was change to this value
     * @var PhotoSize[]|null
     */
    public ?array $new_chat_photo;
    /**
     * Optional. Service message: the chat photo was deleted
     * @var bool|null
     */
    public ?bool $delete_chat_photo;
    /**
     * 	Optional. Service message: the group has been created
     * @var bool|null
     */
    public ?bool $group_chat_created;
    /**
     * Optional. Service message: the supergroup has been created. This field can't be received in a message
     * coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found
     * in reply_to_message if someone replies to a very first message in a directly created supergroup.
     * @var bool|null
     */
    public ?bool $supergroup_chat_created;
    /**
     * Optional. Service message: the channel has been created. This field can't be received in a message coming
     * through updates, because bot can't be a member of a channel when it is created. It can only be found in
     * reply_to_message if someone replies to a very first message in a channel.
     * @var bool|null
     */
    public ?bool $channel_chat_created;
    /**
     * Optional. The group has been migrated to a supergroup with the specified identifier. This number may be greater
     * than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is
     * smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this
     * identifier.
     * @var int|null
     */
    public ?int $migrate_to_chat_id;
    /**
     * Optional. The supergroup has been migrated from a group with the specified identifier. This number may be
     * greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing
     * this identifier.
     * @var int|null
     */
    public ?int $migrate_from_chat_id;
    /**
     * Optional. Specified message was pinned. Note that the Message object in this field will not contain further
     * reply_to_message fields even if it is itself a reply.
     * @var Message|null
     */
    public ?Message $pinned_message;
    /**
     * Optional. Message is an invoice for a payment, information about the invoice. More about payments »
     * @see https://core.telegram.org/bots/api#payments
     * @var Invoice|null
     */
    public ?Invoice $invoice;
    /**
     * Optional. Message is a service message about a successful payment, information about the payment.
     * More about payments »
     * @see https://core.telegram.org/bots/api#payments
     * @var SuccessfulPayment|null
     */
    public ?SuccessfulPayment $successful_payment;
    /**
     * Optional. The domain name of the website on which the user has logged in. More about Telegram Login »
     * @see https://core.telegram.org/widgets/login
     * @var string|null
     */
    public ?string $connected_website;
    /**
     * Optional. Telegram Passport data
     * @var PassportData|null
     */
    public ?PassportData $passport_data;
    /**
     * Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
     * @var InlineKeyboardMarkup|null
     */
    public ?InlineKeyboardMarkup $reply_markup;

    /**
     * @param $key
     * @param $data
     * @return array|Audio|Chat|Contact|Game|Invoice|Poll|Sticker|PassportData|User|Venue|Video|VideoNote|Voice|object|null
     */
    protected function bindObjects($key, $data)
    {
        //todo InlineKeyboardMarkup ???
        switch ($key) {
            case 'from':
            case 'forward_from':
            case 'via_bot':
            case 'left_chat_member':
                return new User($data);
            case 'chat':
            case 'forward_from_chat':
                return new Chat($data);
            case 'reply_to_message':
            case 'pinned_message':
                return new self($data);
            case 'animation':
                return new Animation($data);
            case 'audio':
                return new Audio($data);
            case 'sticker':
                return new Sticker($data);
            case 'video':
                return new Video($data);
            case 'video_note':
                return new VideoNote($data);
            case 'voice':
                return new Voice($data);
            case 'document':
                return new Document($data);
            case 'contact':
                return new Contact($data);
            case 'dice':
                return new Dice($data);
            case 'game':
                return new Game($data);
            case 'poll':
                return new Poll($data);
            case 'venue':
                return new Venue($data);
            case 'location':
                return new Location($data);
            case 'invoice':
                return new Invoice($data);
            case 'successful_payment':
                return new SuccessfulPayment($data);
            case 'passport_data':
                return new PassportData($data);
            case 'new_chat_members':
                $result = [];
                foreach ($data as $entity) {
                    $result[] = new User($entity);
                }
                return $result;
            case 'photo':
            case 'new_chat_photo':
                $result = [];
                foreach ($data as $entity) {
                    $result[] = new PhotoSize($entity);
                }
                return $result;
            case 'entities':
            case 'caption_entities':
                $result = [];
                foreach ($data as $entity) {
                    $result[] = new MessageEntity($entity);
                }
                return $result;
        }

        return null;
    }
}