<?php

namespace Klev\TelegramBotApi;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Klev\TelegramBotApi\Events\Event;
use Klev\TelegramBotApi\Methods\AnswerCallbackQuery;
use Klev\TelegramBotApi\Methods\BanChatMember;
use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Methods\CloseForumTopic;
use Klev\TelegramBotApi\Methods\CopyMessage;
use Klev\TelegramBotApi\Methods\CopyMessages;
use Klev\TelegramBotApi\Methods\CreateChatInviteLink;
use Klev\TelegramBotApi\Methods\CreateForumTopic;
use Klev\TelegramBotApi\Methods\DeleteForumTopic;
use Klev\TelegramBotApi\Methods\DeleteMyCommands;
use Klev\TelegramBotApi\Methods\DeleteWebhook;
use Klev\TelegramBotApi\Methods\EditChatInviteLink;
use Klev\TelegramBotApi\Methods\EditForumTopic;
use Klev\TelegramBotApi\Methods\EditGeneralForumTopic;
use Klev\TelegramBotApi\Methods\EditMessageLiveLocation;
use Klev\TelegramBotApi\Methods\ForwardMessage;
use Klev\TelegramBotApi\Methods\ForwardMessages;
use Klev\TelegramBotApi\Methods\Games\SendGame;
use Klev\TelegramBotApi\Methods\Games\SetGameScore;
use Klev\TelegramBotApi\Methods\GetChatMember;
use Klev\TelegramBotApi\Methods\GetMyCommands;
use Klev\TelegramBotApi\Methods\GetUserProfilePhotos;
use Klev\TelegramBotApi\Methods\InlineMode\AnswerInlineQuery;
use Klev\TelegramBotApi\Methods\Payments\AnswerPreCheckoutQuery;
use Klev\TelegramBotApi\Methods\Payments\AnswerShippingQuery;
use Klev\TelegramBotApi\Methods\Payments\CreateInvoiceLink;
use Klev\TelegramBotApi\Methods\Payments\SendInvoice;
use Klev\TelegramBotApi\Methods\PinChatMessage;
use Klev\TelegramBotApi\Methods\PromoteChatMember;
use Klev\TelegramBotApi\Methods\ReopenForumTopic;
use Klev\TelegramBotApi\Methods\RestrictChatMember;
use Klev\TelegramBotApi\Methods\RevokeChatInviteLink;
use Klev\TelegramBotApi\Methods\SendAnimation;
use Klev\TelegramBotApi\Methods\SendAudio;
use Klev\TelegramBotApi\Methods\SendChatAction;
use Klev\TelegramBotApi\Methods\SendContact;
use Klev\TelegramBotApi\Methods\SendDice;
use Klev\TelegramBotApi\Methods\SendDocument;
use Klev\TelegramBotApi\Methods\SendLocation;
use Klev\TelegramBotApi\Methods\SendMediaGroup;
use Klev\TelegramBotApi\Methods\SendMessage;
use Klev\TelegramBotApi\Methods\SendPhoto;
use Klev\TelegramBotApi\Methods\SendPoll;
use Klev\TelegramBotApi\Methods\SendVenue;
use Klev\TelegramBotApi\Methods\SendVideo;
use Klev\TelegramBotApi\Methods\SendVideoNote;
use Klev\TelegramBotApi\Methods\SendVoice;
use Klev\TelegramBotApi\Methods\SetChatAdministratorCustomTitle;
use Klev\TelegramBotApi\Methods\SetChatDescription;
use Klev\TelegramBotApi\Methods\SetChatMenuButton;
use Klev\TelegramBotApi\Methods\SetChatPermissions;
use Klev\TelegramBotApi\Methods\SetChatPhoto;
use Klev\TelegramBotApi\Methods\SetChatStickerSet;
use Klev\TelegramBotApi\Methods\SetChatTitle;
use Klev\TelegramBotApi\Methods\SetMessageReaction;
use Klev\TelegramBotApi\Methods\SetMyCommands;
use Klev\TelegramBotApi\Methods\SetMyDefaultAdministratorRights;
use Klev\TelegramBotApi\Methods\SetWebhook;
use Klev\TelegramBotApi\Methods\Stickers\AddStickerToSet;
use Klev\TelegramBotApi\Methods\Stickers\CreateNewStickerSet;
use Klev\TelegramBotApi\Methods\Stickers\ReplaceStickerInSet;
use Klev\TelegramBotApi\Methods\Stickers\SendSticker;
use Klev\TelegramBotApi\Methods\Stickers\SetStickerEmojiList;
use Klev\TelegramBotApi\Methods\Stickers\SetStickerKeywords;
use Klev\TelegramBotApi\Methods\Stickers\SetStickerMaskPosition;
use Klev\TelegramBotApi\Methods\Stickers\SetStickerPositionInSet;
use Klev\TelegramBotApi\Methods\Stickers\SetStickerSetThumbnail;
use Klev\TelegramBotApi\Methods\Stickers\UploadStickerFile;
use Klev\TelegramBotApi\Methods\StopMessageLiveLocation;
use Klev\TelegramBotApi\Methods\TelegramPassport\SetPassportDataErrors;
use Klev\TelegramBotApi\Methods\UnbanChatMember;
use Klev\TelegramBotApi\Methods\UnpinAllForumTopicMessages;
use Klev\TelegramBotApi\Methods\UnpinChatMessage;
use Klev\TelegramBotApi\Methods\UpdatingMessages\DeleteMessage;
use Klev\TelegramBotApi\Methods\UpdatingMessages\EditMessageCaption;
use Klev\TelegramBotApi\Methods\UpdatingMessages\EditMessageMedia;
use Klev\TelegramBotApi\Methods\UpdatingMessages\EditMessageReplyMarkup;
use Klev\TelegramBotApi\Methods\UpdatingMessages\EditMessageText;
use Klev\TelegramBotApi\Methods\UpdatingMessages\StopPoll;
use Klev\TelegramBotApi\Types\BotCommand;
use Klev\TelegramBotApi\Types\BotDescription;
use Klev\TelegramBotApi\Types\BotName;
use Klev\TelegramBotApi\Types\BotShortDescription;
use Klev\TelegramBotApi\Types\BusinessConnection;
use Klev\TelegramBotApi\Types\Chat;
use Klev\TelegramBotApi\Types\ChatAdministratorRights;
use Klev\TelegramBotApi\Types\ChatFullInfo;
use Klev\TelegramBotApi\Types\ChatInviteLink;
use Klev\TelegramBotApi\Types\ChatMember;
use Klev\TelegramBotApi\Types\File;
use Klev\TelegramBotApi\Types\ForumTopic;
use Klev\TelegramBotApi\Types\Games\GameHighScore;
use Klev\TelegramBotApi\Types\MenuButton;
use Klev\TelegramBotApi\Types\MenuButtonCommands;
use Klev\TelegramBotApi\Types\MenuButtonDefault;
use Klev\TelegramBotApi\Types\MenuButtonWebApp;
use Klev\TelegramBotApi\Types\Message;
use Klev\TelegramBotApi\Types\MessageId;
use Klev\TelegramBotApi\Types\Payments\StarTransactions;
use Klev\TelegramBotApi\Types\Poll;
use Klev\TelegramBotApi\Types\Stickers\Sticker;
use Klev\TelegramBotApi\Types\Stickers\StickerSet;
use Klev\TelegramBotApi\Types\Update;
use Klev\TelegramBotApi\Types\User;
use Klev\TelegramBotApi\Types\UserChatBoosts;
use Klev\TelegramBotApi\Types\UserProfilePhotos;
use Klev\TelegramBotApi\Types\WebhookInfo;
use Psr\Http\Client\ClientInterface;

/**
 * The Bot API is an HTTP-based interface created for developers keen on building bots for Telegram.
 *
 * @link https://core.telegram.org/bots
 * @link https://core.telegram.org/bots/faq
 *
 * Class Telegram
 * @package Klev\TelegramBotApi
 */
class Telegram
{
    /**
     * The token of your bot created via https://t.me/botfather. The token is a string along
     * the lines of 110201543:AAHdqTcvCH1vGWJxfSeofSAs0K5PALDsaw that is required to authorize the bot and send
     * requests to the Bot API
     * @var string
     */
    private string $token;
    /**
     * Main api endpoint
     * @var string
     */
    private string $apiEndpoint = 'https://api.telegram.org/bot';
    /**
     * File endpoint
     * @var string
     */
    private string $fileApiEndpoint = 'https://api.telegram.org/file/bot';
    /**
     * Webhook request body (unparsed JSON string)
     * @var string|null
     */
    private ?string $webhookUpdatesRaw = null;
    /**
     * HTTP Client
     * @var ClientInterface|Client
     */
    private ClientInterface $apiClient;
    /**
     * Array of listeners for webhook updates
     * @var array
     */
    private array $listeners = [];
    /**
     * Enable events, disabled by default
     * @var bool
     */
    private bool $enableEvents = false;

    public function __construct(string $token, ?TelegramHttpClientInterface $client = null)
    {
        $this->token = $token;
        $this->apiClient = $client ?? new Client();
    }

    /**
     * @param SetWebhook $setWebhook
     * @return bool
     * @throws TelegramException
     */
    public function setWebhook(SetWebhook $setWebhook): bool
    {
        $data = BaseMethod::getDataForMultipart($setWebhook);
        $requestData = !empty($data) ? ['setWebhook' => $data] : ['json' =>(array)$setWebhook];

        $out = $this->request('setWebhook', $requestData);

        return $out['result'];
    }

    /**
     * @param DeleteWebhook $deleteWebhook
     * @return bool
     * @throws TelegramException
     */
    public function deleteWebhook(DeleteWebhook $deleteWebhook): bool
    {
        $out = $this->request('deleteWebhook', ['json' => (array)$deleteWebhook]);
        return $out['result'];
    }

    /**
     * @return WebhookInfo
     * @throws TelegramException
     */
    public function getWebhookInfo(): WebhookInfo
    {
        $out = $this->request('getWebhookInfo');
        return new WebhookInfo($out['result']);
    }

    /**
     * Getting webhook updates
     * @return Update|null
     * @throws TelegramException
     */
    public function getWebhookUpdates():? Update
    {
        $updates = null;
        if ($this->getWebhookUpdatesRaw()) {
            $data = json_decode($this->getWebhookUpdatesRaw(), true);
            $updates = $data ? new Update($data) : null;
            if ($updates && $this->isEnableEvents()) {
                $this->triggerEvents($updates);
            }
        }
        return $updates;
    }

    /**
     * Attach an event handler
     *
     * @param string $eventName
     * Event name, full class name is used
     *
     * @param callable $callback
     * Event handler. In the simplest case, it can be an anonymous function. Can also be an invocable object
     *
     * @return void
     */
    public function on(string $eventName, callable $callback)
    {
        $this->listeners[$eventName][] = $callback;
    }

    /**
     * Getting request body (unparsed JSON string)
     * @return string|null
     */
    public function getWebhookUpdatesRaw():? string
    {
        if (!$this->webhookUpdatesRaw) {
            $this->webhookUpdatesRaw = file_get_contents('php://input') ?: null;

        }
        return $this->webhookUpdatesRaw;
    }

    /**
     * @return User
     * @throws TelegramException
     */
    public function getMe(): User
    {
        $out = $this->request('getMe');
        return new User($out['result']);
    }

    /**
     * @return bool
     * @throws TelegramException
     */
    public function logOut(): bool
    {
        $out = $this->request('logOut');
        return $out['result'];
    }

    /**
     * @return bool
     * @throws TelegramException
     */
    public function close(): bool
    {
        $out = $this->request('close');
        return $out['result'];
    }

    /**
     * @param SendMessage $sendMessage
     * @return Message
     * @throws TelegramException
     */
    public function sendMessage(SendMessage $sendMessage): Message
    {
        $sendMessage->preparation();
        $out = $this->request('sendMessage', ['json' => (array)$sendMessage]);
        return new Message($out['result']);
    }

    /**
     * @param ForwardMessage $forwardMessage
     * @return Message
     * @throws TelegramException
     */
    public function forwardMessage(ForwardMessage $forwardMessage): Message
    {
        $out = $this->request('forwardMessage', ['json' => (array)$forwardMessage]);
        return new Message($out['result']);
    }

    /**
     * @param CopyMessage $copyMessage
     * @return MessageId
     * @throws TelegramException
     */
    public function copyMessage(CopyMessage $copyMessage): MessageId
    {
        $copyMessage->preparation();
        $out = $this->request('copyMessage', ['json' => (array)$copyMessage]);
        return new MessageId($out['result']);
    }

    /**
     * @param SendPhoto $sendPhoto
     * @return Message
     * @throws TelegramException
     */
    public function sendPhoto(SendPhoto $sendPhoto): Message
    {
        $sendPhoto->preparation();

        $data = BaseMethod::getDataForMultipart($sendPhoto);
        $requestData = !empty($data) ? ['multipart' => $data] : ['json' =>(array)$sendPhoto];

        $out = $this->request('sendPhoto', $requestData);

        return new Message($out['result']);
    }

    /**
     * @param SendAudio $sendAudio
     * @return Message
     * @throws TelegramException
     */
    public function sendAudio(SendAudio $sendAudio): Message
    {
        $sendAudio->preparation();

        $data = BaseMethod::getDataForMultipart($sendAudio);
        $requestData = !empty($data) ? ['multipart' => $data] : ['json' =>(array)$sendAudio];

        $out = $this->request('sendAudio', $requestData);

        return new Message($out['result']);
    }

    /**
     * @param SendDocument $sendDocument
     * @return Message
     * @throws TelegramException
     */
    public function sendDocument(SendDocument $sendDocument): Message
    {
        $sendDocument->preparation();

        $data = BaseMethod::getDataForMultipart($sendDocument);
        $requestData = !empty($data) ? ['multipart' => $data] : ['json' =>(array)$sendDocument];

        $out = $this->request('sendDocument', $requestData);

        return new Message($out['result']);
    }

    /**
     * @param SendVideo $sendVideo
     * @return Message
     * @throws TelegramException
     */
    public function sendVideo(SendVideo $sendVideo): Message
    {
        $sendVideo->preparation();

        $data = BaseMethod::getDataForMultipart($sendVideo);
        $requestData = !empty($data) ? ['multipart' => $data] : ['json' =>(array)$sendVideo];

        $out = $this->request('sendVideo', $requestData);

        return new Message($out['result']);
    }

    /**
     * @param SendAnimation $sendAnimation
     * @return Message
     * @throws TelegramException
     */
    public function sendAnimation(SendAnimation $sendAnimation): Message
    {
        $sendAnimation->preparation();

        $data = BaseMethod::getDataForMultipart($sendAnimation);
        $requestData = !empty($data) ? ['multipart' => $data] : ['json' =>(array)$sendAnimation];

        $out = $this->request('sendAnimation', $requestData);

        return new Message($out['result']);
    }

    /**
     * @param SendVoice $sendVoice
     * @return Message
     * @throws TelegramException
     */
    public function sendVoice(SendVoice $sendVoice): Message
    {
        $sendVoice->preparation();

        $data = BaseMethod::getDataForMultipart($sendVoice);
        $requestData = !empty($data) ? ['multipart' => $data] : ['json' =>(array)$sendVoice];

        $out = $this->request('sendVoice', $requestData);

        return new Message($out['result']);
    }

    /**
     * @param SendVideoNote $sendVideoNote
     * @return Message
     * @throws TelegramException
     */
    public function sendVideoNote(SendVideoNote $sendVideoNote): Message
    {
        $sendVideoNote->preparation();

        $data = BaseMethod::getDataForMultipart($sendVideoNote);
        $requestData = !empty($data) ? ['multipart' => $data] : ['json' =>(array)$sendVideoNote];

        $out = $this->request('sendVideoNote', $requestData);

        return new Message($out['result']);
    }

    /**
     * @param SendMediaGroup $sendMediaGroup
     * @return Message[]
     * @throws TelegramException
     */
    public function sendMediaGroup(SendMediaGroup $sendMediaGroup): array
    {
        $sendMediaGroup->validation();

        $data = BaseMethod::getDataForMediaGroup($sendMediaGroup);

        if (!empty($data)) {
            $requestData = ['multipart' => $data];
        } else {
            $sendMediaGroup->preparation();
            $requestData = ['json' =>(array)$sendMediaGroup];
        }

        $out = $this->request('sendMediaGroup', $requestData);

        $result = [];
        foreach ($out['result'] as $item) {
            $result[] = new Message($item);
        }

        return $result;
    }

    /**
     * @param SendLocation $sendLocation
     * @return Message
     * @throws TelegramException
     */
    public function sendLocation(SendLocation $sendLocation): Message
    {
        $sendLocation->preparation();
        $out = $this->request('sendLocation', ['json' => (array)$sendLocation]);
        return new Message($out['result']);
    }

    /**
     * @param EditMessageLiveLocation $editMessageLiveLocation
     * @return Message|bool
     * @throws TelegramException
     */
    public function editMessageLiveLocation(EditMessageLiveLocation $editMessageLiveLocation)
    {
        $editMessageLiveLocation->preparation();
        $out = $this->request('editMessageLiveLocation', ['json' => (array)$editMessageLiveLocation]);
        if ($editMessageLiveLocation->inline_message_id === null) {
            return new Message($out['result']);
        } else {
            return $out['result'];
        }
    }

    /**
     * @param StopMessageLiveLocation $stopMessageLiveLocation
     * @return Message|bool
     * @throws TelegramException
     */
    public function stopMessageLiveLocation(StopMessageLiveLocation $stopMessageLiveLocation)
    {
        $stopMessageLiveLocation->preparation();
        $out = $this->request('stopMessageLiveLocation', ['json' => (array)$stopMessageLiveLocation]);
        if ($stopMessageLiveLocation->inline_message_id === null) {
            return new Message($out['result']);
        } else {
            return $out['result'];
        }
    }

    /**
     * @param SendVenue $sendVenue
     * @return Message
     * @throws TelegramException
     */
    public function sendVenue(SendVenue $sendVenue): Message
    {
        $sendVenue->preparation();
        $out = $this->request('sendVenue', ['json' => (array)$sendVenue]);
        return new Message($out['result']);
    }

    /**
     * @param SendContact $sendContact
     * @return Message
     * @throws TelegramException
     */
    public function sendContact(SendContact $sendContact): Message
    {
        $sendContact->preparation();
        $out = $this->request('sendContact', ['json' => (array)$sendContact]);
        return new Message($out['result']);
    }

    /**
     * @param SendPoll $sendPoll
     * @return Message
     * @throws TelegramException
     */
    public function sendPoll(SendPoll $sendPoll): Message
    {
        $sendPoll->preparation();
        $out = $this->request('sendPoll', ['json' => (array)$sendPoll]);
        return new Message($out['result']);
    }

    /**
     * @param SendDice $sendDice
     * @return Message
     * @throws TelegramException
     */
    public function sendDice(SendDice $sendDice): Message
    {
        $sendDice->preparation();
        $out = $this->request('sendDice', ['json' => (array)$sendDice]);
        return new Message($out['result']);
    }

    /**
     * @param SendChatAction $sendChatAction
     * @return bool
     * @throws TelegramException
     */
    public function sendChatAction(SendChatAction $sendChatAction): bool
    {
        $out = $this->request('sendChatAction', ['json' => (array)$sendChatAction]);
        return $out['result'];
    }

    /**
     * @param GetUserProfilePhotos $getUserProfilePhotos
     * @return UserProfilePhotos
     * @throws TelegramException
     */
    public function getUserProfilePhotos(GetUserProfilePhotos $getUserProfilePhotos)
    {
        $out = $this->request('getUserProfilePhotos', ['json' => (array)$getUserProfilePhotos]);
        return new UserProfilePhotos($out['result']);
    }

    /**
     * Use this method to get basic info about a file and prepare it for downloading. For the moment, bots can download
     * files of up to 20MB in size. On success, a File object is returned. The file can then be downloaded via the
     * link https://api.telegram.org/file/bot<token>/<file_path>, where <file_path> is taken from the response.
     * It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be
     * requested by calling getFile again.
     *
     * @param string $file_id
     * @return File
     * @throws TelegramException
     */
    public function getFile(string $file_id)
    {
        $out = $this->request('getFile', ['json' => ['file_id' => $file_id]]);
        return new File($out['result']);
    }

    /**
     * @param $fileIdOrPath
     * @param $savePath
     * @throws TelegramException
     */
    public function downloadFile($fileIdOrPath, $savePath)
    {
        $path = $fileIdOrPath;
        if (!filter_var($fileIdOrPath, FILTER_VALIDATE_URL)) {
            $file = $this->getFile($fileIdOrPath);
            $path = $file->file_path;
        }
        $this->requestForDownload($path, ['sink' => $savePath]);
    }

    /**
     * @param BanChatMember $banChatMember
     * @return bool
     * @throws TelegramException
     */
    public function banChatMember(BanChatMember $banChatMember): bool
    {
        $out = $this->request('banChatMember', ['json' => (array)$banChatMember]);
        return $out['result'];
    }

    /**
     * @param UnbanChatMember $unbanChatMember
     * @return bool
     * @throws TelegramException
     */
    public function unbanChatMember(UnbanChatMember $unbanChatMember): bool
    {
        $out = $this->request('unbanChatMember', ['json' => (array)$unbanChatMember]);
        return $out['result'];
    }

    /**
     * @param RestrictChatMember $restrictChatMember
     * @return bool
     * @throws TelegramException
     */
    public function restrictChatMember(RestrictChatMember $restrictChatMember): bool
    {
        $out = $this->request('restrictChatMember', ['json' => (array)$restrictChatMember]);
        return $out['result'];
    }

    /**
     * @param PromoteChatMember $promoteChatMember
     * @return bool
     * @throws TelegramException
     */
    public function promoteChatMember(PromoteChatMember $promoteChatMember): bool
    {
        $out = $this->request('promoteChatMember', ['json' => (array)$promoteChatMember]);
        return $out['result'];
    }

    /**
     * @param SetChatAdministratorCustomTitle $setChatAdministratorCustomTitle
     * @return bool
     * @throws TelegramException
     */
    public function setChatAdministratorCustomTitle(SetChatAdministratorCustomTitle $setChatAdministratorCustomTitle): bool
    {
        $out = $this->request('setChatAdministratorCustomTitle', ['json' => (array)$setChatAdministratorCustomTitle]);
        return $out['result'];
    }

    /**
     * @param SetChatPermissions $setChatPermissions
     * @return bool
     * @throws TelegramException
     */
    public function setChatPermissions(SetChatPermissions $setChatPermissions): bool
    {
        $out = $this->request('setChatPermissions', ['json' => (array)$setChatPermissions]);
        return $out['result'];
    }

    /**
     * Use this method to generate a new invite link for a chat; any previously generated link is revoked. The bot must
     * be an administrator in the chat for this to work and must have the appropriate admin rights. Returns the new
     * invite link as String on success.
     *
     * @param string $chat_id
     * @return string
     * @throws TelegramException
     */
    public function exportChatInviteLink(string $chat_id): string
    {
        $out = $this->request('exportChatInviteLink', ['json' => ['chat_id' => $chat_id]]);
        return $out['result'];
    }

    /**
     * @param SetChatPhoto $setChatPhoto
     * @return bool
     * @throws TelegramException
     */
    public function setChatPhoto(SetChatPhoto $setChatPhoto): bool
    {
        $data = BaseMethod::getDataForMultipart($setChatPhoto);
        $out = $this->request('setChatPhoto',  ['multipart' => $data]);

        return $out['result'];
    }

    /**
     * Use this method to delete a chat photo. Photos can't be changed for private chats. The bot must be an
     * administrator in the chat for this to work and must have the appropriate admin rights. Returns True on success.
     *
     * @param string $chat_id - Unique identifier for the target chat or username of the target channel
     * (in the format @channelusername)
     *
     * @return bool
     * @throws TelegramException
     */
    public function deleteChatPhoto(string $chat_id): bool
    {
        $out = $this->request('deleteChatPhoto',  ['json' => ['chat_id' => $chat_id]]);
        return $out['result'];
    }

    /**
     * @param SetChatTitle $setChatTitle
     * @return bool
     * @throws TelegramException
     */
    public function setChatTitle(SetChatTitle $setChatTitle): bool
    {
        $out = $this->request('setChatTitle', ['json' => (array)$setChatTitle]);
        return $out['result'];
    }

    /**
     * @param SetChatDescription $setChatDescription
     * @return bool
     * @throws TelegramException
     */
    public function setChatDescription(SetChatDescription $setChatDescription): bool
    {
        $out = $this->request('setChatDescription', ['json' => (array)$setChatDescription]);
        return $out['result'];
    }

    /**
     * @param PinChatMessage $pinChatMessage
     * @return bool
     * @throws TelegramException
     */
    public function pinChatMessage(PinChatMessage $pinChatMessage): bool
    {
        $out = $this->request('pinChatMessage', ['json' => (array)$pinChatMessage]);
        return $out['result'];
    }

    /**
     * @param UnpinChatMessage $unpinChatMessage
     * @return bool
     * @throws TelegramException
     */
    public function unpinChatMessage(UnpinChatMessage $unpinChatMessage): bool
    {
        $out = $this->request('unpinChatMessage', ['json' => (array)$unpinChatMessage]);
        return $out['result'];
    }

    /**
     * Use this method to clear the list of pinned messages in a chat. If the chat is not a private chat, the bot must
     * be an administrator in the chat for this to work and must have the 'can_pin_messages' admin right in a supergroup
     * or 'can_edit_messages' admin right in a channel. Returns True on success.
     *
     * @param string $chat_id - Unique identifier for the target chat or username of the target channel
     * (in the format @channelusername)
     *
     * @return bool
     * @throws TelegramException
     *
     * @link https://core.telegram.org/bots/api#unpinchatmessage
     */
    public function unpinAllChatMessages(string $chat_id): bool
    {
        $out = $this->request('unpinAllChatMessages',  ['json' => ['chat_id' => $chat_id]]);
        return $out['result'];
    }

    /**
     * Use this method for your bot to leave a group, supergroup or channel. Returns True on success.
     *
     * @param string $chat_id
     * Unique identifier for the target chat or username of the target supergroup or channel
     * (in the format @channelusername)
     *
     * @link https://core.telegram.org/bots/api#leavechat
     *
     * @return bool
     * @throws TelegramException
     */
    public function leaveChat(string $chat_id): bool
    {
        $out = $this->request('leaveChat',  ['json' => ['chat_id' => $chat_id]]);
        return $out['result'];
    }

    /**
     * Use this method to get up to date information about the chat (current name of the user for one-on-one
     * conversations, current username of a user, group or channel, etc.). Returns a Chat object on success.
     *
     * @param string $chat_id
     * Unique identifier for the target chat or username of the target supergroup or channel
     * (in the format @channelusername)
     *
     * @link https://core.telegram.org/bots/api#getchat
     *
     * @return ChatFullInfo
     * @throws TelegramException
     */
    public function getChat(string $chat_id): ChatFullInfo
    {
        $out = $this->request('getChat',  ['json' => ['chat_id' => $chat_id]]);
        return new ChatFullInfo($out['result']);
    }

    /**
     * Use this method to get a list of administrators in a chat. On success, returns an Array of ChatMember objects
     * that contains information about all chat administrators except other bots. If the chat is a group or a
     * supergroup and no administrators were appointed, only the creator will be returned.
     *
     * @param string $chat_id
     * Unique identifier for the target chat or username of the target supergroup or channel
     * (in the format @channelusername)
     *
     * @link https://core.telegram.org/bots/api#getchatadministrators
     *
     * @return ChatMember[]
     * @throws TelegramException
     */
    public function getChatAdministrators(string $chat_id): array
    {
        $out = $this->request('getChatAdministrators',  ['json' => ['chat_id' => $chat_id]]);

        $result = [];
        foreach ($out['result'] as $member) {
            $result[] = TelegramHelper::getChatMember($member);
        }

        return $result;
    }

    /**
     * Use this method to get the number of members in a chat. Returns Int on success.
     *
     * @param string $chat_id
     * Unique identifier for the target chat or username of the target supergroup or channel
     * (in the format @channelusername)
     *
     * @link https://core.telegram.org/bots/api#getchatmemberscount
     *
     * @return int
     * @throws TelegramException
     */
    public function getChatMemberCount(string $chat_id): int
    {
        $out = $this->request('getChatMemberCount',  ['json' => ['chat_id' => $chat_id]]);
        return $out['result'];
    }

    /**
     * @param GetChatMember $getChatMember
     * @return ChatMember
     * @throws TelegramException
     */
    public function getChatMember(GetChatMember $getChatMember): ChatMember
    {
        $out = $this->request('getChatMember', ['json' => (array)$getChatMember]);
        return TelegramHelper::getChatMember($out['result']);
    }

    /**
     * @param SetChatStickerSet $setChatStickerSet
     * @return bool
     * @throws TelegramException
     */
    public function setChatStickerSet(SetChatStickerSet $setChatStickerSet): bool
    {
        $out = $this->request('setChatStickerSet', ['json' => (array)$setChatStickerSet]);
        return $out['result'];
    }

    /**
     * Use this method to delete a group sticker set from a supergroup. The bot must be an administrator in the chat
     * for this to work and must have the appropriate admin rights. Use the field can_set_sticker_set optionally
     * returned in getChat requests to check if the bot can use this method. Returns True on success.
     *
     * @param string $chat_id
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     *
     * @link https://core.telegram.org/bots/api#deletechatstickerset
     *
     * @return bool
     * @throws TelegramException
     */
    public function deleteChatStickerSet(string $chat_id): bool
    {
        $out = $this->request('deleteChatStickerSet',  ['json' => ['chat_id' => $chat_id]]);
        return $out['result'];
    }

    /**
     * @param AnswerCallbackQuery $answerCallbackQuery
     * @return bool
     * @throws TelegramException
     */
    public function answerCallbackQuery(AnswerCallbackQuery $answerCallbackQuery): bool
    {
        $out = $this->request('answerCallbackQuery', ['json' => (array)$answerCallbackQuery]);
        return $out['result'];
    }

    /**
     * @param SetMyCommands $setMyCommands
     * @return bool
     * @throws TelegramException
     */
    public function setMyCommands(SetMyCommands $setMyCommands): bool
    {
        $setMyCommands->preparation();
        $out = $this->request('setMyCommands',  ['json' => (array)$setMyCommands]);
        return $out['result'];
    }

    /**
     * @param GetMyCommands $getMyCommands
     * @return array
     * @throws TelegramException
     */
    public function getMyCommands(GetMyCommands $getMyCommands): array
    {
        $getMyCommands->preparation();
        $out = $this->request('getMyCommands', ['json' => (array)$getMyCommands]);

        $result = [];
        foreach ($out['result'] as $command) {
            $result[] = new BotCommand($command);
        }

        return $result;
    }

    public function deleteMyCommands(DeleteMyCommands $deleteMyCommands): bool
    {
        $deleteMyCommands->preparation();
        $out = $this->request('deleteMyCommands', ['json' => (array)$deleteMyCommands]);
        return $out['result'];
    }

    public function setChatMenuButton(SetChatMenuButton $setChatMenuButton): bool
    {
        $setChatMenuButton->preparation();
        $out = $this->request('setChatMenuButton', ['json' => (array)$setChatMenuButton]);
        return $out['result'];
    }

    /**
     * Use this method to get the current value of the bot's menu button in a private chat, or the default menu button.
     * Returns MenuButton on success.
     *
     * @link https://core.telegram.org/bots/api#setchatmenubutton
     *
     * @param int|null $chat_id
     * Unique identifier for the target private chat. If not specified, default bot's menu button will be returned
     *
     * @return MenuButton|null
     * @throws TelegramException
     */
    public function getChatMenuButton(?int $chat_id = null): ?MenuButton
    {
        $data = $chat_id ? ['json' => ['chat_id' => $chat_id]] : ['json' => []];
        $out = $this->request('getChatMenuButton', $data);
        switch ($out['result']['type']) {
            case MenuButton::TYPE_DEFAULT:
                return new MenuButtonDefault();
            case MenuButton::TYPE_COMMANDS:
                return new MenuButtonCommands();
            case MenuButton::TYPE_WEB_APP:
                return new MenuButtonWebApp($out['result']);
        }
        return null;
    }

    public function setMyDefaultAdministratorRights(SetMyDefaultAdministratorRights $setMyDefaultAdministratorRights): bool
    {
        $setMyDefaultAdministratorRights->preparation();
        $out = $this->request('setMyDefaultAdministratorRights', [
            'json' => (array)$setMyDefaultAdministratorRights
        ]);
        return $out['result'];
    }

    /**
     * Use this method to get the current default administrator rights of the bot.
     * Returns ChatAdministratorRights on success.
     *
     * @link https://core.telegram.org/bots/api#getmydefaultadministratorrights
     *
     * @param bool $for_channels
     * Pass True to get default administrator rights of the bot in channels. Otherwise, default administrator rights
     * of the bot for groups and supergroups will be returned.
     *
     * @return ChatAdministratorRights
     * @throws TelegramException
     */
    public function getMyDefaultAdministratorRights(bool $for_channels = false): ChatAdministratorRights
    {
        $out = $this->request('getMyDefaultAdministratorRights', ['json' => ['for_channels' => $for_channels]]);
        return new ChatAdministratorRights($out['result']);
    }

    /**
     * @param EditMessageText $editMessageText
     * @return Message|bool
     * @throws TelegramException
     */
    public function editMessageText(EditMessageText $editMessageText)
    {
        $editMessageText->preparation();
        $out = $this->request('editMessageText', ['json' => (array)$editMessageText]);
        if ($editMessageText->inline_message_id === null) {
            return new Message($out['result']);
        } else {
            return $out['result'];
        }
    }

    /**
     * @param EditMessageCaption $editMessageCaption
     * @return Message|mixed
     * @throws TelegramException
     */
    public function editMessageCaption(EditMessageCaption $editMessageCaption)
    {
        $editMessageCaption->preparation();
        $out = $this->request('editMessageCaption', ['json' => (array)$editMessageCaption]);
        if ($editMessageCaption->inline_message_id === null) {
            return new Message($out['result']);
        } else {
            return $out['result'];
        }
    }

    /**
     * @param EditMessageMedia $editMessageMedia
     * @return array
     * @throws TelegramException
     */
    public function editMessageMedia(EditMessageMedia $editMessageMedia): array
    {
        $data = BaseMethod::getDataForMediaGroup($editMessageMedia);

        if (!empty($data)) {
            $requestData = ['multipart' => $data];
        } else {
            $editMessageMedia->preparation();
            $requestData = ['json' =>(array)$editMessageMedia];
        }

        $out = $this->request('editMessageMedia', $requestData);

        return $out['result'];
    }

    /**
     * @param EditMessageReplyMarkup $editMessageReplyMarkup
     * @return Message|mixed
     * @throws TelegramException
     */
    public function editMessageReplyMarkup(EditMessageReplyMarkup $editMessageReplyMarkup)
    {
        $editMessageReplyMarkup->preparation();
        $out = $this->request('editMessageReplyMarkup', ['json' => (array)$editMessageReplyMarkup]);
        if ($editMessageReplyMarkup->inline_message_id === null) {
            return new Message($out['result']);
        } else {
            return $out['result'];
        }
    }

    /**
     * @param StopPoll $stopPoll
     * @return Poll
     * @throws TelegramException
     */
    public function stopPoll(StopPoll $stopPoll): Poll
    {
        $stopPoll->preparation();
        $out = $this->request('stopPoll', ['json' => (array)$stopPoll]);
        return new Poll($out['result']);
    }

    /**
     * @param DeleteMessage $deleteMessage
     * @return bool
     * @throws TelegramException
     */
    public function deleteMessage(DeleteMessage $deleteMessage): bool
    {
        $out = $this->request('deleteMessage', ['json' => (array)$deleteMessage]);
        return $out['result'];
    }

    /**
     * @param SendSticker $sendSticker
     * @return Message
     * @throws TelegramException
     */
    public function sendSticker(SendSticker $sendSticker): Message
    {
        $sendSticker->preparation();

        $data = BaseMethod::getDataForMultipart($sendSticker);
        $requestData = !empty($data) ? ['multipart' => $data] : ['json' =>(array)$sendSticker];

        $out = $this->request('sendSticker', $requestData);
        return new Message($out['result']);
    }

    /**
     * Use this method to get a sticker set. On success, a StickerSet object is returned.
     *
     * @param string $name
     * Name of the sticker set
     *
     * @link https://core.telegram.org/bots/api#getstickerset
     *
     * @return StickerSet
     * @throws TelegramException
     */
    public function getStickerSet(string $name): StickerSet
    {
        $out = $this->request('getStickerSet', ['json' => ['name' => $name]]);
        return new StickerSet($out['result']);
    }

    /**
     * Use this method to get information about custom emoji stickers by their identifiers.
     * Returns an Array of Sticker objects.
     *
     * @param string[] $custom_emoji_ids
     * List of custom emoji identifiers. At most 200 custom emoji identifiers can be specified.
     *
     * @link https://core.telegram.org/bots/api#getcustomemojistickers
     *
     * @return Sticker[]
     * @throws TelegramException
     */
    public function getCustomEmojiStickers(array $custom_emoji_ids): array
    {
        $out = $this->request('getCustomEmojiStickers', ['json' => ['custom_emoji_ids' => $custom_emoji_ids]]);
        $result = [];
        foreach ($out['result'] as $item) {
            $result[] = new Sticker($item);
        }
        return $result;
    }

    /**
     * @param CreateNewStickerSet $createNewStickerSet
     * @return bool
     * @throws TelegramException
     */
    public function createNewStickerSet(CreateNewStickerSet $createNewStickerSet): bool
    {
        $createNewStickerSet->validation();

        $data = BaseMethod::getDataForCreateNewSticker($createNewStickerSet);

        if (!empty($data)) {
            $requestData = ['multipart' => $data];
        } else {
            $createNewStickerSet->preparation();
            $requestData = ['json' =>(array)$createNewStickerSet];
        }

        $out = $this->request('createNewStickerSet', $requestData);
        return $out['result'];
    }

    /**
     * @param AddStickerToSet $addStickerToSet
     * @return bool
     * @throws TelegramException
     */
    public function addStickerToSet(AddStickerToSet $addStickerToSet): bool
    {
        $data = BaseMethod::getDataForAddStickerToSet($addStickerToSet);

        if (!empty($data)) {
            $requestData = ['multipart' => $data];
        } else {
            $addStickerToSet->preparation();
            $requestData = ['json' =>(array)$addStickerToSet];
        }

        $out = $this->request('addStickerToSet', $requestData);
        return $out['result'];
    }

    /**
     * @param SetStickerPositionInSet $setStickerPositionInSet
     * @return bool
     * @throws TelegramException
     */
    public function setStickerPositionInSet(SetStickerPositionInSet $setStickerPositionInSet): bool
    {
        $out = $this->request('setStickerPositionInSet', ['json' => (array)$setStickerPositionInSet]);
        return $out['result'];
    }

    /**
     * Use this method to delete a sticker from a set created by the bot. Returns True on success.
     *
     * @param string $sticker
     * File identifier of the sticker
     *
     * @link https://core.telegram.org/bots/api#deletestickerfromset
     *
     * @return bool
     * @throws TelegramException
     */
    public function deleteStickerFromSet(string $sticker): bool
    {
        $out = $this->request('deleteStickerFromSet', ['json' => ['sticker' => $sticker]]);
        return $out['result'];
    }

    /**
     * @param SetStickerSetThumbnail $setStickerSetThumbnail
     * @return bool
     * @throws TelegramException
     */
    public function setStickerSetThumbnail(SetStickerSetThumbnail $setStickerSetThumbnail): bool
    {
        $data = BaseMethod::getDataForMultipart($setStickerSetThumbnail);
        $requestData = !empty($data) ? ['multipart' => $data] : ['json' =>(array)$setStickerSetThumbnail];

        $out = $this->request('setStickerSetThumbnail', $requestData);
        return $out['result'];
    }

    /**
     * @param UploadStickerFile $uploadStickerFile
     * @return File
     * @throws TelegramException
     */
    public function uploadStickerFile(UploadStickerFile $uploadStickerFile): File
    {
        $data = BaseMethod::getDataForUploadStickerFile($uploadStickerFile);

        if (!empty($data)) {
            $requestData = ['multipart' => $data];
        } else {
            $uploadStickerFile->preparation();
            $requestData = ['json' =>(array)$uploadStickerFile];
        }

        $out = $this->request('uploadStickerFile', $requestData);
        return new File($out['result']);
    }

    /**
     * @param AnswerInlineQuery $answerInlineQuery
     * @return bool
     * @throws TelegramException
     */
    public function answerInlineQuery(AnswerInlineQuery $answerInlineQuery): bool
    {
        $answerInlineQuery->preparation();
        $out = $this->request('answerInlineQuery', ['json' => (array)$answerInlineQuery]);
        return $out['result'];
    }

    /**
     * @param SendInvoice $sendInvoice
     * @return Message
     * @throws TelegramException
     */
    public function sendInvoice(SendInvoice $sendInvoice): Message
    {
        $sendInvoice->preparation();

        $out = $this->request('sendInvoice', ['json' => (array)$sendInvoice]);
        return new Message($out['result']);
    }

    /**
     * @param CreateInvoiceLink $createInvoiceLink
     * @return string
     * @throws TelegramException
     */
    public function createInvoiceLink(CreateInvoiceLink $createInvoiceLink): string
    {
        $createInvoiceLink->preparation();

        $out = $this->request('createInvoiceLink', ['json' => (array)$createInvoiceLink]);
        return $out['result'];
    }

    /**
     * @param AnswerShippingQuery $answerShippingQuery
     * @return mixed
     * @throws TelegramException
     */
    public function answerShippingQuery(AnswerShippingQuery $answerShippingQuery): bool
    {
        $answerShippingQuery->preparation();

        $out = $this->request('answerShippingQuery', ['json' => (array)$answerShippingQuery]);
        return $out['result'];
    }

    /**
     * @param AnswerPreCheckoutQuery $answerPreCheckoutQuery
     * @return bool
     * @throws TelegramException
     */
    public function answerPreCheckoutQuery(AnswerPreCheckoutQuery $answerPreCheckoutQuery): bool
    {
        $answerPreCheckoutQuery->preparation();

        $out = $this->request('answerPreCheckoutQuery', ['json' => (array)$answerPreCheckoutQuery]);
        return $out['result'];
    }

    /**
     * @param SetPassportDataErrors $setPassportDataErrors
     * @return bool
     * @throws TelegramException
     */
    public function setPassportDataErrors(SetPassportDataErrors $setPassportDataErrors): bool
    {
        $setPassportDataErrors->preparation();

        $out = $this->request('setPassportDataErrors', ['json' => (array)$setPassportDataErrors]);
        return $out['result'];
    }

    /**
     * @param SendGame $sendGame
     * @return Message
     * @throws TelegramException
     */
    public function sendGame(SendGame $sendGame): Message
    {
        $sendGame->preparation();

        $out = $this->request('sendGame', ['json' => (array)$sendGame]);
        return new Message($out['result']);
    }

    /**
     * @param SetGameScore $setGameScore
     * @return array
     * @throws TelegramException
     */
    public function setGameScore(SetGameScore $setGameScore): array
    {
        $setGameScore->preparation();

        $out = $this->request('setGameScore', ['json' => (array)$setGameScore]);
        return $out['result'];
    }

    /**
     * @return GameHighScore[]
     * @throws TelegramException
     */
    public function getGameHighScores(): array
    {
        $out = $this->request('getGameHighScores');

        $result = [];
        foreach ($out['result'] as $item) {
            $result[] = new GameHighScore($item);
        }

        return $result;
    }

    /**
     * @param CreateChatInviteLink $createChatInviteLink
     * @return ChatInviteLink
     * @throws TelegramException
     */
    public function createChatInviteLink(CreateChatInviteLink $createChatInviteLink): ChatInviteLink
    {
        $out = $this->request('createChatInviteLink', ['json' => (array)$createChatInviteLink]);
        return new ChatInviteLink($out['result']);
    }

    /**
     * @param EditChatInviteLink $editChatInviteLink
     * @return ChatInviteLink
     * @throws TelegramException
     */
    public function editChatInviteLink(EditChatInviteLink $editChatInviteLink): ChatInviteLink
    {
        $out = $this->request('editChatInviteLink', ['json' => (array)$editChatInviteLink]);
        return new ChatInviteLink($out['result']);
    }

    /**
     * @param RevokeChatInviteLink $revokeChatInviteLink
     * @return ChatInviteLink
     * @throws TelegramException
     */
    public function revokeChatInviteLink(RevokeChatInviteLink $revokeChatInviteLink): ChatInviteLink
    {
        $out = $this->request('revokeChatInviteLink', ['json' => (array)$revokeChatInviteLink]);
        return new ChatInviteLink($out['result']);
    }

    /**
     * Use this method to approve a chat join request. The bot must be an administrator in the chat for this to work
     * and must have the can_invite_users administrator right. Returns True on success.
     *
     * @link https://core.telegram.org/bots/api#approvechatjoinrequest
     *
     * @param string $chat_id
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param int $user_id
     * Unique identifier of the target user
     *
     * @return bool
     * @throws TelegramException
     */
    public function approveChatJoinRequest(string $chat_id, int $user_id): bool
    {
        $out = $this->request('approveChatJoinRequest', ['json' => ['chat_id' => $chat_id, 'user_id' => $user_id]]);
        return $out['result'];
    }

    /**
     * Use this method to decline a chat join request. The bot must be an administrator in the chat for this to work
     * and must have the can_invite_users administrator right. Returns True on success.
     *
     * @link https://core.telegram.org/bots/api#declinechatjoinrequest
     *
     * @param string $chat_id
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param int $user_id
     * Unique identifier of the target user
     *
     * @return bool
     * @throws TelegramException
     */
    public function declineChatJoinRequest(string $chat_id, int $user_id): bool
    {
        $out = $this->request('declineChatJoinRequest', ['json' => ['chat_id' => $chat_id, 'user_id' => $user_id]]);
        return $out['result'];
    }

    /**
     * Use this method to ban a channel chat in a supergroup or a channel. Until the chat is unbanned, the owner of the
     * banned chat won't be able to send messages on behalf of any of their channels. The bot must be an administrator
     * in the supergroup or channel for this to work and must have the appropriate administrator rights.
     * Returns True on success.
     *
     * @link https://core.telegram.org/bots/api#banchatsenderchat
     *
     * @param string $chat_id
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param int $sender_chat_id
     * Unique identifier of the target sender chat
     *
     * @return bool
     * @throws TelegramException
     */
    public function banChatSenderChat(string $chat_id, int $sender_chat_id): bool
    {
        $out = $this->request('banChatSenderChat', [
            'json' => ['chat_id' => $chat_id, 'sender_chat_id' => $sender_chat_id]
        ]);
        return $out['result'];
    }

    /**
     * Use this method to unban a previously banned channel chat in a supergroup or channel. The bot must be an
     * administrator for this to work and must have the appropriate administrator rights. Returns True on success.
     *
     * @link https://core.telegram.org/bots/api#unbanchatsenderchat
     *
     * @param string $chat_id
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param int $sender_chat_id
     * Unique identifier of the target sender chat
     *
     * @return bool
     * @throws TelegramException
     */
    public function unbanChatSenderChat(string $chat_id, int $sender_chat_id): bool
    {
        $out = $this->request('banChatSenderChat', [
            'json' => ['chat_id' => $chat_id, 'sender_chat_id' => $sender_chat_id]
        ]);
        return $out['result'];
    }

    /**
     * Use this method to get custom emoji stickers, which can be used as a forum topic icon by any user.
     * Requires no parameters. Returns an Array of Sticker objects.
     *
     * @link https://core.telegram.org/bots/api#getforumtopiciconstickers
     *
     * @return Sticker[]
     * @throws TelegramException
     */
    public function getForumTopicIconStickers(): array
    {
        $out = $this->request('getForumTopicIconStickers');
        $result = [];
        foreach ($out['result'] as $item) {
            $result[] = new Sticker($item);
        }
        return $result;
    }

    /**
     * @param CreateForumTopic $createForumTopic
     * @return ForumTopic
     * @throws TelegramException
     */
    public function createForumTopic(CreateForumTopic $createForumTopic): ForumTopic
    {
        $out = $this->request('createForumTopic', ['json' => (array)$createForumTopic]);
        return new ForumTopic($out['result']);
    }

    /**
     * @param EditForumTopic $editForumTopic
     * @return bool
     * @throws TelegramException
     */
    public function editForumTopic(EditForumTopic $editForumTopic): bool
    {
        $out = $this->request('editForumTopic', ['json' => (array)$editForumTopic]);
        return $out['result'];
    }

    /**
     * @param CloseForumTopic $closeForumTopic
     * @return bool
     * @throws TelegramException
     */
    public function closeForumTopic(CloseForumTopic $closeForumTopic): bool
    {
        $out = $this->request('closeForumTopic', ['json' => (array)$closeForumTopic]);
        return $out['result'];
    }

    /**
     * @param ReopenForumTopic $reopenForumTopic
     * @return bool
     * @throws TelegramException
     */
    public function reopenForumTopic(ReopenForumTopic $reopenForumTopic): bool
    {
        $out = $this->request('reopenForumTopic', ['json' => (array)$reopenForumTopic]);
        return $out['result'];
    }

    /**
     * @param DeleteForumTopic $deleteForumTopic
     * @return bool
     * @throws TelegramException
     */
    public function deleteForumTopic(DeleteForumTopic $deleteForumTopic): bool
    {
        $out = $this->request('deleteForumTopic', ['json' => (array)$deleteForumTopic]);
        return $out['result'];
    }

    /**
     * @param UnpinAllForumTopicMessages $unpinAllForumTopicMessages
     * @return bool
     * @throws TelegramException
     */
    public function unpinAllForumTopicMessages(UnpinAllForumTopicMessages $unpinAllForumTopicMessages): bool
    {
        $out = $this->request('unpinAllForumTopicMessages', ['json' => (array)$unpinAllForumTopicMessages]);
        return $out['result'];
    }

    /**
     * @param EditGeneralForumTopic $editGeneralForumTopic
     * @return bool
     * @throws TelegramException
     */
    public function editGeneralForumTopic(EditGeneralForumTopic $editGeneralForumTopic): bool
    {
        $out = $this->request('editGeneralForumTopic', ['json' => (array)$editGeneralForumTopic]);
        return $out['result'];
    }

    /**
     * Use this method to close an open 'General' topic in a forum supergroup chat. The bot must be an administrator in
     * the chat for this to work and must have the can_manage_topics administrator rights. Returns True on success.
     *
     * @link https://core.telegram.org/bots/api#closegeneralforumtopic
     *
     * @param string $chat_id
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     *
     * @return bool
     * @throws TelegramException
     */
    public function closeGeneralForumTopic(string $chat_id): bool
    {
        $out = $this->request('closeGeneralForumTopic', ['json' => ['chat_id' => $chat_id]]);
        return $out['result'];
    }

    /**
     * Use this method to reopen a closed 'General' topic in a forum supergroup chat. The bot must be an administrator
     * in the chat for this to work and must have the can_manage_topics administrator rights. The topic will be
     * automatically unhidden if it was hidden. Returns True on success.
     *
     * @link https://core.telegram.org/bots/api#reopengeneralforumtopic
     *
     * @param string $chat_id
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     *
     * @return bool
     * @throws TelegramException
     */
    public function reopenGeneralForumTopic(string $chat_id): bool
    {
        $out = $this->request('reopenGeneralForumTopic', ['json' => ['chat_id' => $chat_id]]);
        return $out['result'];
    }

    /**
     * Use this method to hide the 'General' topic in a forum supergroup chat. The bot must be an administrator in the
     * chat for this to work and must have the can_manage_topics administrator rights. The topic will be automatically
     * closed if it was open. Returns True on success.
     *
     * @link https://core.telegram.org/bots/api#hidegeneralforumtopic
     *
     * @param string $chat_id
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     *
     * @return bool
     * @throws TelegramException
     */
    public function hideGeneralForumTopic(string $chat_id): bool
    {
        $out = $this->request('hideGeneralForumTopic', ['json' => ['chat_id' => $chat_id]]);
        return $out['result'];
    }

    /**
     * Use this method to unhide the 'General' topic in a forum supergroup chat. The bot must be an administrator in the
     * chat for this to work and must have the can_manage_topics administrator rights. Returns True on success.
     *
     * @link https://core.telegram.org/bots/api#unhidegeneralforumtopic
     *
     * @param string $chat_id
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     *
     * @return bool
     * @throws TelegramException
     */
    public function unhideGeneralForumTopic(string $chat_id): bool
    {
        $out = $this->request('unhideGeneralForumTopic', ['json' => ['chat_id' => $chat_id]]);
        return $out['result'];
    }

    /**
     * Use this method to change the bot's description, which is shown in the chat with the bot if the chat is empty.
     * Returns True on success.
     *
     * @link https://core.telegram.org/bots/api#setmydescription
     *
     * @param ?string $description
     * New bot description; 0-512 characters. Pass an empty string to remove the dedicated description for the given
     * language.
     *
     * @param ?string $language_code
     * A two-letter ISO 639-1 language code. If empty, the description will be applied to all users for whose language
     * there is no dedicated description.
     *
     * @return bool
     * @throws TelegramException
     */
    public function setMyDescription(?string $description, ?string $language_code): bool
    {
        $out = $this->request('setMyDescription', ['json' => [
            'description' => $description,
            'language_code' => $language_code,
        ]]);
        return $out['result'];
    }

    /**
     * Use this method to get the current bot description for the given user language.Returns BotDescription on success.
     *
     * @link https://core.telegram.org/bots/api#getmydescription
     *
     * @param ?string $language_code
     * A two-letter ISO 639-1 language code or an empty string
     *
     * @return BotDescription
     * @throws TelegramException
     */
    public function getMyDescription(?string $language_code): BotDescription
    {
        $out = $this->request('getMyDescription', ['json' => [
            'language_code' => $language_code,
        ]]);
        return new BotDescription($out['result']);
    }

    /**
     * Use this method to change the bot's short description, which is shown on the bot's profile page and is sent
     * together with the link when users share the bot. Returns True on success.
     *
     * @link https://core.telegram.org/bots/api#setmyshortdescription
     *
     * @param ?string $short_description
     * New short description for the bot; 0-120 characters. Pass an empty string to remove the dedicated short
     * description for the given language.
     *
     * @param ?string $language_code
     * A two-letter ISO 639-1 language code. If empty, the short description will be applied to all users for whose
     * language there is no dedicated short description.
     *
     * @return bool
     * @throws TelegramException
     */
    public function setMyShortDescription(?string $short_description, ?string $language_code): bool
    {
        $out = $this->request('setMyShortDescription', ['json' => [
            'short_description' => $short_description,
            'language_code' => $language_code,
        ]]);
        return $out['result'];
    }

    /**
     * Use this method to get the current bot short description for the given user language.
     * Returns BotShortDescription on success.
     *
     * @link A two-letter ISO 639-1 language code or an empty string
     *
     * @param ?string $language_code
     * A two-letter ISO 639-1 language code or an empty string
     *
     * @return BotShortDescription
     * @throws TelegramException
     */
    public function getMyShortDescription(?string $language_code): BotShortDescription
    {
        $out = $this->request('getMyShortDescription', ['json' => [
            'language_code' => $language_code,
        ]]);
        return new BotShortDescription($out['result']);
    }

    /**
     * Use this method to set the thumbnail of a custom emoji sticker set. Returns True on success.
     *
     * @link https://core.telegram.org/bots/api#setcustomemojistickersetthumbnail
     *
     * @param string $name
     * Sticker set name
     *
     * @param string|null $custom_emoji_id
     * Custom emoji identifier of a sticker from the sticker set; pass an empty string to drop the thumbnail and use
     * the first sticker as the thumbnail.
     *
     * @return bool
     * @throws TelegramException
     */
    public function setCustomEmojiStickerSetThumbnail(string $name, ?string $custom_emoji_id): bool
    {
        $out = $this->request('setCustomEmojiStickerSetThumbnail', ['json' => [
            'name' => $name,
            'custom_emoji_id' => $custom_emoji_id,
        ]]);
        return $out['result'];
    }

    /**
     * Use this method to set the title of a created sticker set. Returns True on success.
     *
     * @link https://core.telegram.org/bots/api#setstickersettitle
     *
     * @param string $name
     * Sticker set name
     *
     * @param string $title
     * Sticker set title, 1-64 characters
     *
     * @return bool
     * @throws TelegramException
     */
    public function setStickerSetTitle(string $name, string $title): bool
    {
        $out = $this->request('setStickerSetTitle', ['json' => [
            'name' => $name,
            'title' => $title,
        ]]);
        return $out['result'];
    }

    /**
     * Use this method to delete a sticker set that was created by the bot. Returns True on success.
     *
     * @link https://core.telegram.org/bots/api#deletestickerset
     *
     * @param string $name
     * Sticker set name
     *
     * @return bool
     * @throws TelegramException
     */
    public function deleteStickerSet(string $name): bool
    {
        $out = $this->request('deleteStickerSet', ['json' => [
            'name' => $name,
        ]]);
        return $out['result'];
    }

    /**
     * @param ReplaceStickerInSet $replaceStickerInSet
     * @return bool
     * @throws TelegramException
     */
    public function replaceStickerInSet(ReplaceStickerInSet $replaceStickerInSet): bool
    {
        $replaceStickerInSet->preparation();

        $out = $this->request('replaceStickerInSet', ['json' => (array)$replaceStickerInSet]);
        return $out['result'];
    }

    /**
     * @param SetStickerEmojiList $setStickerEmojiList
     * @return bool
     * @throws TelegramException
     */
    public function setStickerEmojiList(SetStickerEmojiList $setStickerEmojiList): bool
    {
        $setStickerEmojiList->preparation();

        $out = $this->request('setStickerEmojiList', ['json' => (array)$setStickerEmojiList]);
        return $out['result'];
    }

    /**
     * @param SetStickerKeywords $setStickerKeywords
     * @return bool
     * @throws TelegramException
     */
    public function setStickerKeywords(SetStickerKeywords $setStickerKeywords): bool
    {
        $setStickerKeywords->preparation();

        $out = $this->request('setStickerKeywords', ['json' => (array)$setStickerKeywords]);
        return $out['result'];
    }

    /**
     * @param SetStickerMaskPosition $setStickerMaskPosition
     * @return bool
     * @throws TelegramException
     */
    public function setStickerMaskPosition(SetStickerMaskPosition $setStickerMaskPosition): bool
    {
        $setStickerMaskPosition->preparation();

        $out = $this->request('setStickerMaskPosition', ['json' => (array)$setStickerMaskPosition]);
        return $out['result'];
    }

    /**
     * Use this method to change the bot's name. Returns True on success.
     *
     * @link https://core.telegram.org/bots/api#setmyname
     *
     * @param string|null $name
     * New bot name; 0-64 characters. Pass an empty string to remove the dedicated name for the given language.
     *
     * @param string|null $language_code
     * A two-letter ISO 639-1 language code. If empty, the name will be shown to all users for whose language there is
     * no dedicated name.
     *
     * @return bool
     * @throws TelegramException
     */
    public function setMyName(?string $name, ?string $language_code): bool
    {
        $out = $this->request('setMyName', ['json' => [
            'name' => $name,
            'language_code' => $language_code,
        ]]);
        return $out['result'];
    }

    /**
     * Use this method to get the current bot name for the given user language. Returns BotName on success.
     *
     * @link https://core.telegram.org/bots/api#getmyname
     *
     * @param string|null $language_code
     * A two-letter ISO 639-1 language code or an empty string
     *
     * @return BotName
     * @throws TelegramException
     */
    public function getMyName(?string $language_code): BotName
    {
        $out = $this->request('getMyName', ['json' => [
            'language_code' => $language_code,
        ]]);
        return new BotName($out['result']);
    }

    /**
     * Use this method to clear the list of pinned messages in a General forum topic. The bot must be an administrator
     * in the chat for this to work and must have the can_pin_messages administrator right in the supergroup.
     * Returns True on success.
     *
     * @link https://core.telegram.org/bots/api#unpinallgeneralforumtopicmessages
     *
     * @param string $chat_id
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     *
     * @return bool
     * @throws TelegramException
     */
    public function unpinAllGeneralForumTopicMessages(string $chat_id): bool
    {
        $out = $this->request('unpinAllGeneralForumTopicMessages', ['json' => [
            'chat_id' => $chat_id,
        ]]);
        return $out['result'];
    }

    public function setMessageReaction(SetMessageReaction $setMessageReaction): bool
    {
        $setMessageReaction->preparation();

        $out = $this->request('setMessageReaction', ['json' => (array)$setMessageReaction]);
        return $out['result'];
    }

    /**
     * Use this method to delete multiple messages simultaneously. If some of the specified messages can't be found,
     * they are skipped. Returns True on success.
     *
     * @param string $chat_id
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param int[] $message_ids
     * Identifiers of 1-100 messages to delete. See deleteMessage for limitations on which messages can be deleted
     *
     * @return bool
     * @throws TelegramException
     *
     * @link https://core.telegram.org/bots/api#deletemessages
     */
    public function deleteMessages(string $chat_id, array $message_ids): bool
    {
        $out = $this->request('deleteMessages', ['json' => [
            'chat_id' => $chat_id,
            'message_ids' => $message_ids,
        ]]);
        return $out['result'];
    }

    /**
     * @param ForwardMessages $forwardMessages
     * @return Message
     * @throws TelegramException
     */
    public function forwardMessages(ForwardMessages $forwardMessages): Message
    {
        $out = $this->request('forwardMessages', ['json' => (array)$forwardMessages]);
        return new Message($out['result']);
    }

    /**
     * @param CopyMessages $copyMessages
     * @return MessageId[]
     * @throws TelegramException
     */
    public function copyMessages(CopyMessages $copyMessages): array
    {
        $out = $this->request('copyMessages', ['json' => (array)$copyMessages]);
        $result = [];
        foreach ($out['result'] as $item) {
            $result[] = new MessageId($item);
        }
        return $result;
    }

    /**
     * Use this method to get the list of boosts added to a chat by a user. Requires administrator rights in the chat.
     * Returns a UserChatBoosts object.
     *
     * @param string $chat_id
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param int $user_id
     * Unique identifier of the target user
     *
     * @return UserChatBoosts
     * @throws TelegramException
     *
     * @link https://core.telegram.org/bots/api#getuserchatboosts
     */
    public function getUserChatBoosts(string $chat_id, int $user_id): UserChatBoosts
    {
        $out = $this->request('getUserChatBoosts', ['json' => [
            'chat_id' => $chat_id,
            'user_id' => $user_id,
        ]]);
        return new UserChatBoosts($out['result']);
    }

    /**
     * Use this method to get information about the connection of the bot with a business account.
     * Returns a BusinessConnection object on success.
     *
     * @param string $business_connection_id
     * Unique identifier of the business connection
     *
     * @return BusinessConnection
     * @throws TelegramException
     *
     * @link https://core.telegram.org/bots/api#getbusinessconnection
     */
    public function getBusinessConnection(string $business_connection_id): BusinessConnection
    {
        $out = $this->request('getBusinessConnection', ['json' => [
            'business_connection_id' => $business_connection_id,
        ]]);
        return new BusinessConnection($out['result']);
    }

    /**
     * Refunds a successful payment in Telegram Stars. Returns True on success.
     *
     * @param int $user_id
     * Identifier of the user whose payment will be refunded
     *
     * @param string $telegram_payment_charge_id
     * Telegram payment identifier
     *
     * @return bool
     * @throws TelegramException
     *
     * @link https://core.telegram.org/bots/api#refundstarpayment
     */
    public function refundStarPayment(int $user_id, string $telegram_payment_charge_id): bool
    {
        $out = $this->request('refundStarPayment', ['json' => [
            'user_id' => $user_id,
            'telegram_payment_charge_id' => $telegram_payment_charge_id,
        ]]);
        return $out['result'];
    }

    /**
     * Returns the bot's Telegram Star transactions in chronological order. On success, returns a StarTransactions object
     *
     * @param int|null $offset
     * Number of transactions to skip in the response
     *
     * @param int|null $limit
     * The maximum number of transactions to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     *
     * @return StarTransactions
     * @throws TelegramException
     *
     * @link https://core.telegram.org/bots/api#getstartransactions
     */
    public function getStarTransactions(?int $offset = null, ?int $limit = null): StarTransactions
    {
        $out = $this->request('getStarTransactions', ['json' => [
            'offset' => $offset,
            'limit' => $limit,
        ]]);
        return new StarTransactions($out['result']);
    }


    /**
     * Allows you to create a request manually. Can be used for unrealized features.
     * @param string $method
     * @param array $data
     * @return array
     * @throws TelegramException
     */
    public function makeRequest(string $method, array $data = []): array
    {
        return $this->request($method, ['json' => $data]);
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $url
     */
    public function setApiEndpoint(string $url): void
    {
        $this->apiEndpoint = $url;
    }

    /**
     * @param string $url
     */
    public function setFileApiEndpoint(string $url): void
    {
        $this->fileApiEndpoint = $url;
    }

    /**
     * @return bool
     */
    public function isEnableEvents(): bool
    {
        return $this->enableEvents;
    }

    /**
     * @param bool $enableEvents
     */
    public function setEnableEvents(bool $enableEvents): void
    {
        $this->enableEvents = $enableEvents;
    }

    /**
     * @param $method
     * @return string
     */
    private function getApiUri($method): string
    {
        return $this->apiEndpoint . $this->token . '/' . $method;
    }

    /**
     * @param $pathInfo
     * @return string
     */
    private function getFileApiUri($pathInfo): string
    {
        return $this->fileApiEndpoint . $this->token . '/' . $pathInfo;
    }

    /**
     * @param $method
     * @param array $data
     * @return array
     * @throws TelegramException
     */
    private function request($method, array $data = []): array
    {
        try {
            $uri = $this->getApiUri($method);

            $response = $this->apiClient->post($uri, $data);
            $body = (string)$response->getBody();

            $out = json_decode($body,true, 512, JSON_THROW_ON_ERROR);

            if (isset($out['ok']) && $out['ok'] === true && isset($out['result'])) {
                return $out;
            }

            throw new TelegramException('Unexpected response: ' . $body);
        } catch (GuzzleException $e) {
            throw new TelegramException('GuzzleException: ' . $e->getMessage());
        } catch (\Exception $e) {
            throw new TelegramException($e->getMessage());
        }
    }

    /**
     * @param $pathInfo
     * @param array $data
     * @throws TelegramException
     */
    private function requestForDownload($pathInfo, array $data = [])
    {
        try {
            $uri = $this->getFileApiUri($pathInfo);
            $this->apiClient->get($uri, $data);
        } catch (GuzzleException $e) {
            throw new TelegramException('GuzzleException: ' . $e->getMessage());
        } catch (\Exception $e) {
            throw new TelegramException($e->getMessage());
        }
    }

    private function dispatch(Event $event): void
    {
        $eventClass = get_class($event);

        if (isset($this->listeners[$eventClass])) {
            foreach ($this->listeners[$eventClass] as $listener) {
                $listener($event);
            }
        }
    }

    /**
     * @param Update $updates
     * @return void
     * @throws TelegramException
     */
    private function triggerEvents(Update $updates)
    {
        $options = array_filter(get_object_vars($updates), static function($v) {
            return is_object($v);
        });
        if (count($options) === 1) {
            $fieldName = key($options);
            $update_id = $updates->update_id;
            $eventClassName = str_replace(
                    ' ',
                    '',
                    ucwords(str_replace('_', ' ', $fieldName))
                ) . 'Event';

            if (class_exists($class = Event::getNamespace() . '\\' .  $eventClassName)) {
                $this->dispatch(new $class($update_id, $updates->$fieldName));
            } else {
                throw new TelegramException($class . ' does not exist');
            }
        } else {
            throw new TelegramException('Update object from webhook contains more than one optional field');
        }
    }
}