<?php

namespace Klev\TelegramBotApi\Types;

use Klev\TelegramBotApi\Types\Games\Game;
use Klev\TelegramBotApi\Types\Payments\Invoice;
use Klev\TelegramBotApi\Types\Stickers\Sticker;

/**
 * This object contains information about a message that is being replied to, which may come from another chat or
 * forum topic.
 *
 * Class ExternalReplyInfo
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#externalreplyinfo
 */
class ExternalReplyInfo extends BaseType
{
    /**
     * Origin of the message replied to by the given message
     * @var MessageOrigin
     */
    public MessageOrigin $origin;
    /**
     * Optional. Chat the original message belongs to. Available only if the chat is a supergroup or a channel.
     * @var Chat|null
     */
    public ?Chat $chat = null;
    /**
     * Optional. Unique message identifier inside the original chat. Available only if the original chat is a
     * supergroup or a channel.
     * @var int|null
     */
    public ?int $message_id = null;
    /**
     * Optional. Options used for link preview generation for the original message, if it is a text message
     * @var LinkPreviewOptions|null
     */
    public ?LinkPreviewOptions $link_preview_options = null;
    /**
     * Optional. Message is an animation, information about the animation
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
     * @var PhotoSize[] $photo
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
     * Optional. Message is a dice with random value
     * @var Dice|null
     */
    public ?Dice $dice = null;
    /**
     * Optional. Message is a game, information about the game.
     * @var Game|null
     */
    public ?Game $game = null;
    /**
     * Optional. Message is a scheduled giveaway, information about the giveaway
     * @var Giveaway|null
     */
    public ?Giveaway $giveaway = null;
    /**
     * Optional. A giveaway with public winners was completed
     * @var GiveawayWinners|null
     */
    public ?GiveawayWinners $giveaway_winners = null;
    /**
     * Optional. Message is an invoice for a payment, information about the invoice.
     * @var Invoice|null
     */
    public ?Invoice $invoice = null;
    /**
     * Optional. Message is a shared location, information about the location
     * @var Location|null
     */
    public ?Location $location = null;
    /**
     * Optional. Message is a native poll, information about the poll
     * @var Poll|null
     */
    public ?Poll $poll = null;
    /**
     * Optional. Message is a venue, information about the venue
     * @var Venue|null
     */
    public ?Venue $venue = null;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'origin':
                switch ($data['type']) {
                    case MessageOrigin::TYPE_USER:
                        return new MessageOriginUser($data);
                    case MessageOrigin::TYPE_HIDDEN_USER:
                        return new MessageOriginHiddenUser($data);
                    case MessageOrigin::TYPE_CHAT:
                        return new MessageOriginChat($data);
                    case MessageOrigin::TYPE_CHANNEL:
                        return new MessageOriginChannel($data);
                }
                break;
            case 'chat':
                return new Chat($data);
            case 'link_preview_options':
                return new LinkPreviewOptions($data);
            case 'animation':
                return new Animation($data);
            case 'audio':
                return new Audio($data);
            case 'document':
                return new Document($data);
            case 'photo':
                $result = [];
                foreach ($data as $entity) {
                    $result[] = new PhotoSize($entity);
                }
                return $result;
            case 'sticker':
                return new Sticker($data);
            case 'story':
                return new Story($data);
            case 'video':
                return new Video($data);
            case 'video_note':
                return new VideoNote($data);
            case 'voice':
                return new Voice($data);
            case 'contact':
                return new Contact($data);
            case 'dice':
                return new Dice($data);
            case 'game':
                return new Game($data);
            case 'giveaway':
                return new Giveaway($data);
            case 'giveaway_winners':
                return new GiveawayWinners($data);
            case 'invoice':
                return new Invoice($data);
            case 'location':
                return new Location($data);
            case 'poll':
                return new Poll($data);
            case 'venue':
                return new Venue($data);
        }

        return null;
    }

}