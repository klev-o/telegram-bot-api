<?php

namespace Klev\TelegramBotApi\Types;

use Klev\TelegramBotApi\Types\Games\Game;
use Klev\TelegramBotApi\Types\Payments\Invoice;
use Klev\TelegramBotApi\Types\Payments\SuccessfulPayment;
use Klev\TelegramBotApi\Types\Stickers\Sticker;
use Klev\TelegramBotApi\Types\TelegramPassport\PassportData;

/**
 * This object represents a message.
 *
 * Class Message
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#message
 */
class Message extends BaseType
{
    /**
     * Unique message identifier inside this chat
     * @var int
     */
    public int $message_id;
    /**
     * Optional. Unique identifier of a message thread to which the message belongs; for supergroups only
     * @var int|null
     */
    public ?int $message_thread_id = null;
    /**
     * Optional. Sender, empty for messages sent to channels
     * @var User|null
     */
    public ?User $from = null;
    /**
     * Optional. Sender of the message, sent on behalf of a chat. The channel itself for channel messages.
     * The supergroup itself for messages from anonymous group administrators. The linked channel for messages
     * automatically forwarded to the discussion group
     * @var Chat|null
     */
    public ?Chat $sender_chat = null;
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
    public ?User $forward_from = null;
    /**
     * Optional. For messages forwarded from channels, information about the original channel
     * @var Chat|null
     */
    public ?Chat $forward_from_chat = null;
    /**
     * Optional. For messages forwarded from channels, identifier of the original message in the channel
     * @var int|null
     */
    public ?int $forward_from_message_id = null;
    /**
     * Optional. For messages forwarded from channels, signature of the post author if present
     * @var string|null
     */
    public ?string $forward_signature = null;
    /**
     * Optional. Sender's name for messages forwarded from users who disallow adding a link to their account in
     * forwarded messages
     * @var string|null
     */
    public ?string $forward_sender_name = null;
    /**
     * Optional. For forwarded messages, date the original message was sent in Unix time
     * @var int|null
     */
    public ?int $forward_date = null;
    /**
     * Optional. True, if the message is sent to a forum topic
     * @var bool|null
     */
    public ?bool $is_topic_message = null;
    /**
     * Optional. True, if the message is a channel post that was automatically forwarded to the connected discussion
     * group
     * @var bool|null
     */
    public ?bool $is_automatic_forward = null;
    /**
     * Optional. For replies, the original message. Note that the Message object in this field will not contain
     * further reply_to_message fields even if it itself is a reply.
     * @var Message|null
     */
    public ?Message $reply_to_message = null;
    /**
     * Optional. Information about the message that is being replied to, which may come from another chat or forum topic
     * @var ExternalReplyInfo|null
     */
    public ?ExternalReplyInfo $external_reply = null;
    /**
     * Optional. Bot through which the message was sent
     * @var User|null
     */
    public ?User $via_bot = null;
    /**
     * Optional. Date the message was last edited in Unix time
     * @var int|null
     */
    public ?int $edit_date = null;
    /**
     * Optional. True, if the message can't be forwarded
     * @var bool|null
     */
    public ?bool $has_protected_content = null;
    /**
     * Optional. The unique identifier of a media message group this message belongs to
     * @var string|null
     */
    public ?string $media_group_id = null;
    /**
     * Optional. Signature of the post author for messages in channels
     * @var string|null
     */
    public ?string $author_signature = null;
    /**
     * Optional. For text messages, the actual UTF-8 text of the message, 0-4096 characters
     * @var string|null
     */
    public ?string $text = null;
    /**
     * Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     * @var MessageEntity[]
     */
    public ?array $entities = null;
    /**
     * Optional. Message is an animation, information about the animation. For backward compatibility, when this
     * field is set, the document field will also be set
     * @var Animation|null
     */
    public ?Animation $animation = null;
    /**
     * Optional. Message is an audio file, information about the file
     * @var Audio|null
     */
    public ?Audio $audio = null;
    /**
     * Optional. Message is a general file, information about the file
     * @var Document|null
     */
    public ?Document $document = null;
    /**
     * Optional. Message is a photo, available sizes of the photo
     * @var PhotoSize[]|null
     */
    public ?array $photo = null;
    /**
     * Optional. Message is a sticker, information about the sticker
     * @var Sticker|null
     */
    public ?Sticker $sticker = null;
    /**
     * Optional. Message is a forwarded story
     * @var Story|null
     */
    public ?Story $story = null;
    /**
     * Optional. Message is a video, information about the video
     * @var Video|null
     */
    public ?Video $video = null;
    /**
     * Optional. Message is a video note, information about the video message
     * @var VideoNote|null
     */
    public ?VideoNote $video_note = null;
    /**
     * Optional. Message is a voice message, information about the file
     * @var Voice|null
     */
    public ?Voice $voice = null;
    /**
     * Optional. Caption for the animation, audio, document, photo, video or voice, 0-1024 characters
     * @var string|null
     */
    public ?string $caption = null;
    /**
     * Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc.
     * that appear in the caption
     * @var MessageEntity[]|null
     */
    public ?array $caption_entities = null;
    /**
     * Optional. True, if the message media is covered by a spoiler animation
     * @var bool|null
     */
    public ?bool $has_media_spoiler = null;
    /**
     * Optional. Message is a shared contact, information about the contact
     * @var Contact|null
     */
    public ?Contact $contact = null;
    /**
     * Optional. Message is a dice with random value from 1 to 6
     * @var Dice|null
     */
    public ?Dice $dice = null;
    /**
     * Optional. Message is a game, information about the game. More about games >
     * @link https://core.telegram.org/bots/api#games
     * @var Game|null
     */
    public ?Game $game = null;
    /**
     * Optional. Message is a native poll, information about the poll
     * @var Poll|null
     */
    public ?Poll $poll = null;
    /**
     * Optional. Message is a venue, information about the venue. For backward compatibility, when this field
     * is set, the location field will also be set
     * @var Venue|null
     */
    public ?Venue $venue = null;
    /**
     * Optional. Message is a shared location, information about the location
     * @var Location|null
     */
    public ?Location $location = null;
    /**
     * Optional. New members that were added to the group or supergroup and information about them
     * (the bot itself may be one of these members)
     * @var User[]|null
     */
    public ?array $new_chat_members = null;
    /**
     * Optional. A member was removed from the group, information about them (this member may be the bot itself)
     * @var user|null
     */
    public ?user $left_chat_member = null;
    /**
     * Optional. A chat title was changed to this value
     * @var string|null
     */
    public ?string $new_chat_title = null;
    /**
     * Optional. A chat photo was change to this value
     * @var PhotoSize[]|null
     */
    public ?array $new_chat_photo = null;
    /**
     * Optional. Service message: the chat photo was deleted
     * @var bool|null
     */
    public ?bool $delete_chat_photo = null;
    /**
     * 	Optional. Service message: the group has been created
     * @var bool|null
     */
    public ?bool $group_chat_created = null;
    /**
     * Optional. Service message: the supergroup has been created. This field can't be received in a message
     * coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found
     * in reply_to_message if someone replies to a very first message in a directly created supergroup.
     * @var bool|null
     */
    public ?bool $supergroup_chat_created = null;
    /**
     * Optional. Service message: the channel has been created. This field can't be received in a message coming
     * through updates, because bot can't be a member of a channel when it is created. It can only be found in
     * reply_to_message if someone replies to a very first message in a channel.
     * @var bool|null
     */
    public ?bool $channel_chat_created = null;
    /**
     * Optional. Service message: auto-delete timer settings changed in the chat
     * @var MessageAutoDeleteTimerChanged|null
     */
    public ?MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed = null;
    /**
     * Optional. The group has been migrated to a supergroup with the specified identifier. This number may be greater
     * than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is
     * smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this
     * identifier.
     * @var int|null
     */
    public ?int $migrate_to_chat_id = null;
    /**
     * Optional. The supergroup has been migrated from a group with the specified identifier. This number may be
     * greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing
     * this identifier.
     * @var int|null
     */
    public ?int $migrate_from_chat_id = null;
    /**
     * Optional. Specified message was pinned. Note that the Message object in this field will not contain further
     * reply_to_message fields even if it is itself a reply.
     * @var Message|null
     */
    public ?Message $pinned_message = null;
    /**
     * Optional. Message is an invoice for a payment, information about the invoice. More about payments »
     * @link https://core.telegram.org/bots/api#payments
     * @var Invoice|null
     */
    public ?Invoice $invoice = null;
    /**
     * Optional. Message is a service message about a successful payment, information about the payment.
     * More about payments »
     * @link https://core.telegram.org/bots/api#payments
     * @var SuccessfulPayment|null
     */
    public ?SuccessfulPayment $successful_payment = null;
    /**
     * Optional. Service message: a user was shared with the bot
     * @var UserShared|null
     */
    public ?UserShared $user_shared = null;
    /**
     * Optional. Service message: a chat was shared with the bot
     * @var ChatShared|null
     */
    public ?ChatShared $chat_shared = null;
    /**
     * Optional. The domain name of the website on which the user has logged in. More about Telegram Login »
     * @link https://core.telegram.org/widgets/login
     * @var string|null
     */
    public ?string $connected_website = null;
    /**
     * Optional. Service message: the user allowed the bot added to the attachment menu to write messages
     * @var WriteAccessAllowed|null
     */
    public ?WriteAccessAllowed $write_access_allowed = null;
    /**
     * Optional. Telegram Passport data
     * @var PassportData|null
     */
    public ?PassportData $passport_data = null;
    /**
     * Optional. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location.
     * @var ProximityAlertTriggered|null
     */
    public ?ProximityAlertTriggered $proximity_alert_triggered = null;
    /**
     * Optional. Service message: forum topic created
     * @var ForumTopicCreated|null
     */
    public ?ForumTopicCreated $forum_topic_created = null;
    /**
     * Optional. Service message: forum topic edited
     * @var ForumTopicEdited|null
     */
    public ?ForumTopicEdited $forum_topic_edited = null;
    /**
     * Optional. Service message: forum topic closed
     * @var ForumTopicClosed|null
     */
    public ?ForumTopicClosed $forum_topic_closed = null;
    /**
     * Optional. Service message: forum topic reopened
     * @var ForumTopicReopened|null
     */
    public ?ForumTopicReopened $forum_topic_reopened = null;
    /**
     * Optional. Service message: the 'General' forum topic hidden
     * @var GeneralForumTopicHidden|null
     */
    public ?GeneralForumTopicHidden $general_forum_topic_hidden = null;
    /**
     * 	Optional. Service message: the 'General' forum topic unhidden
     * @var GeneralForumTopicUnhidden|null
     */
    public ?GeneralForumTopicUnhidden $general_forum_topic_unhidden = null;
    /**
     * TODO: delete after delete in telegram api
     * Optional. Service message: voice chat scheduled
     * @var VideoChatScheduled|null
     */
    public ?VideoChatScheduled $voice_chat_scheduled = null;
    /**
     * TODO: delete after delete in telegram api
     * Optional. Service message: voice chat started
     * @var VideoChatStarted|null
     */
    public ?VideoChatStarted $voice_chat_started = null;
    /**
     * TODO: delete after delete in telegram api
     * Optional. Service message: voice chat ended
     * @var VideoChatEnded|null
     */
    public ?VideoChatEnded $voice_chat_ended = null;
    /**
     * TODO: delete after delete in telegram api
     * Optional. Service message: new participants invited to a voice chat
     * @var VideoChatParticipantsInvited|null
     */
    public ?VideoChatParticipantsInvited $voice_chat_participants_invited = null;
    /**
     * Optional. Service message: video chat scheduled
     * @var VideoChatScheduled|null
     */
    public ?VideoChatScheduled $video_chat_scheduled = null;
    /**
     * Optional. Service message: video chat started
     * @var VideoChatStarted|null
     */
    public ?VideoChatStarted $video_chat_started = null;
    /**
     * Optional. Service message: video chat ended
     * @var VideoChatEnded|null
     */
    public ?VideoChatEnded $video_chat_ended = null;
    /**
     * Optional. Service message: new participants invited to a video chat
     * @var VideoChatParticipantsInvited|null
     */
    public ?VideoChatParticipantsInvited $video_chat_participants_invited = null;
    /**
     * Optional. Service message: data sent by a Web App
     * @var WebAppData|null
     */
    public ?WebAppData $web_app_data = null;
    /**
     * Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
     * @var InlineKeyboardMarkup|null
     */
    public ?InlineKeyboardMarkup $reply_markup = null;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'from':
            case 'forward_from':
            case 'via_bot':
            case 'left_chat_member':
                return new User($data);
            case 'chat':
            case 'forward_from_chat':
            case 'sender_chat':
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
            case 'voice_chat_scheduled':
            case 'video_chat_scheduled':
                return new VideoChatScheduled($data);
            case 'voice_chat_started':
            case 'video_chat_started':
                return new VideoChatStarted($data);
            case 'voice_chat_ended':
            case 'video_chat_ended':
                return new VideoChatEnded($data);
            case 'voice_chat_participants_invited':
            case 'video_chat_participants_invited':
                return new VideoChatParticipantsInvited($data);
            case 'message_auto_delete_timer_changed':
                return new MessageAutoDeleteTimerChanged($data);
            case 'web_app_data':
                return new WebAppData($data);
            case 'reply_markup':
                return new InlineKeyboardMarkup($data);
            case 'external_reply':
                return new ExternalReplyInfo($data);
        }

        return parent::bindObjects($key, $data);
    }
}