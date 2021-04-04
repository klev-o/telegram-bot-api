<?php

namespace Klev\TelegramBotApi;

use GuzzleHttp\Client;
use Klev\TelegramBotApi\Methods\AnswerCallbackQuery;
use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Methods\CopyMessage;
use Klev\TelegramBotApi\Methods\CreateChatInviteLink;
use Klev\TelegramBotApi\Methods\DeleteWebhook;
use Klev\TelegramBotApi\Methods\EditChatInviteLink;
use Klev\TelegramBotApi\Methods\EditMessageLiveLocation;
use Klev\TelegramBotApi\Methods\ForwardMessage;
use Klev\TelegramBotApi\Methods\Games\SendGame;
use Klev\TelegramBotApi\Methods\Games\SetGameScore;
use Klev\TelegramBotApi\Methods\GetChatMember;
use Klev\TelegramBotApi\Methods\GetUserProfilePhotos;
use Klev\TelegramBotApi\Methods\InlineMode\AnswerInlineQuery;
use Klev\TelegramBotApi\Methods\KickChatMember;
use Klev\TelegramBotApi\Methods\Payments\AnswerPreCheckoutQuery;
use Klev\TelegramBotApi\Methods\Payments\AnswerShippingQuery;
use Klev\TelegramBotApi\Methods\Payments\SendInvoice;
use Klev\TelegramBotApi\Methods\PinChatMessage;
use Klev\TelegramBotApi\Methods\PromoteChatMember;
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
use Klev\TelegramBotApi\Methods\SetChatPermissions;
use Klev\TelegramBotApi\Methods\SetChatPhoto;
use Klev\TelegramBotApi\Methods\SetChatStickerSet;
use Klev\TelegramBotApi\Methods\SetChatTitle;
use Klev\TelegramBotApi\Methods\SetMyCommands;
use Klev\TelegramBotApi\Methods\SetWebhook;
use Klev\TelegramBotApi\Methods\Stickers\AddStickerToSet;
use Klev\TelegramBotApi\Methods\Stickers\CreateNewStickerSet;
use Klev\TelegramBotApi\Methods\Stickers\SendSticker;
use Klev\TelegramBotApi\Methods\Stickers\SetStickerPositionInSet;
use Klev\TelegramBotApi\Methods\Stickers\SetStickerSetThumb;
use Klev\TelegramBotApi\Methods\Stickers\UploadStickerFile;
use Klev\TelegramBotApi\Methods\StopMessageLiveLocation;
use Klev\TelegramBotApi\Methods\TelegramPassport\SetPassportDataErrors;
use Klev\TelegramBotApi\Methods\UnbanChatMember;
use Klev\TelegramBotApi\Methods\UnpinChatMessage;
use Klev\TelegramBotApi\Methods\UpdatingMessages\DeleteMessage;
use Klev\TelegramBotApi\Methods\UpdatingMessages\EditMessageCaption;
use Klev\TelegramBotApi\Methods\UpdatingMessages\EditMessageMedia;
use Klev\TelegramBotApi\Methods\UpdatingMessages\EditMessageReplyMarkup;
use Klev\TelegramBotApi\Methods\UpdatingMessages\EditMessageText;
use Klev\TelegramBotApi\Methods\UpdatingMessages\StopPoll;
use Klev\TelegramBotApi\Types\BotCommand;
use Klev\TelegramBotApi\Types\Chat;
use Klev\TelegramBotApi\Types\ChatInviteLink;
use Klev\TelegramBotApi\Types\ChatMember;
use Klev\TelegramBotApi\Types\File;
use Klev\TelegramBotApi\Types\Games\GameHighScore;
use Klev\TelegramBotApi\Types\Message;
use Klev\TelegramBotApi\Types\MessageId;
use Klev\TelegramBotApi\Types\Poll;
use Klev\TelegramBotApi\Types\Stickers\StickerSet;
use Klev\TelegramBotApi\Types\Update;
use Klev\TelegramBotApi\Types\User;
use Klev\TelegramBotApi\Types\UserProfilePhotos;
use Klev\TelegramBotApi\Types\WebhookInfo;
use Psr\Http\Client\ClientInterface;

/**
 * Class Telegram
 * @package Klev\TelegramBotApi
 */
class Telegram
{
    private string $token;
    private string $apiEndpoint = 'https://api.telegram.org/bot';
    private string $fileApiEndpoint = 'https://api.telegram.org/file/bot';
    private ?string $webhookUpdatesRaw = null;

    private ClientInterface $apiClient;

    public function __construct($token, ClientInterface $apiClient = null)
    {
        $this->token = $token;
        $this->apiClient = $apiClient ?? new Client();
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
     * @return Update|null
     */
    public function getWebhookUpdates():? Update
    {
        $this->webhookUpdatesRaw = file_get_contents('php://input');
        $data = json_decode($this->webhookUpdatesRaw, true);
        return $data ? new Update($data) : null;
    }

    /**
     * @return string|null
     */
    public function getWebhookUpdatesRaw():? string
    {
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
    public function sendPhoto(SendPhoto $sendPhoto)
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
    public function sendAudio(SendAudio $sendAudio)
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
    public function sendDocument(SendDocument $sendDocument)
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
    public function sendVideo(SendVideo $sendVideo)
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
    public function sendAnimation(SendAnimation $sendAnimation)
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
    public function sendVoice(SendVoice $sendVoice)
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
    public function sendVideoNote(SendVideoNote $sendVideoNote)
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
            return $out['result']; //todo true?
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
     * @param KickChatMember $kickChatMember
     * @return bool
     * @throws TelegramException
     */
    public function kickChatMember(KickChatMember $kickChatMember): bool
    {
        $out = $this->request('kickChatMember', ['json' => (array)$kickChatMember]);
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
     * @see https://core.telegram.org/bots/api#unpinchatmessage
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
     * @see https://core.telegram.org/bots/api#leavechat
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
     * @see https://core.telegram.org/bots/api#getchat
     *
     * @return Chat
     * @throws TelegramException
     */
    public function getChat(string $chat_id): Chat
    {
        $out = $this->request('getChat',  ['json' => ['chat_id' => $chat_id]]);
        return new Chat($out['result']);
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
     * @see https://core.telegram.org/bots/api#getchatadministrators
     *
     * @return ChatMember[]
     * @throws TelegramException
     */
    public function getChatAdministrators(string $chat_id): array
    {
        $out = $this->request('getChatAdministrators',  ['json' => ['chat_id' => $chat_id]]);

        $result = [];
        foreach ($out['result'] as $member) {
            $result[] = new ChatMember($member);
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
     * @see https://core.telegram.org/bots/api#getchatmemberscount
     *
     * @return int
     * @throws TelegramException
     */
    public function getChatMembersCount(string $chat_id): int
    {
        $out = $this->request('getChatMembersCount',  ['json' => ['chat_id' => $chat_id]]);
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
        return new ChatMember($out['result']);
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
     * @see https://core.telegram.org/bots/api#deletechatstickerset
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
     * @return array
     * @throws TelegramException
     */
    public function getMyCommands(): array
    {
        $out = $this->request('getMyCommands');

        $result = [];
        foreach ($out['result'] as $command) {
            $result[] = new BotCommand($command);
        }

        return $result;
    }

    /**
     * @param EditMessageText $editMessageText
     * @return Message|mixed
     * @throws TelegramException
     */
    public function editMessageText(EditMessageText $editMessageText)
    {
        $editMessageText->preparation();
        $out = $this->request('editMessageText', ['json' => (array)$editMessageText]);
        if ($editMessageText->inline_message_id === null) {
            return new Message($out['result']);
        } else {
            return $out['result']; //todo true?
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

        return $out['result']; //todo condition?
    }

    /**
     * @param EditMessageReplyMarkup $editMessageReplyMarkup
     * @return Message|mixed
     * @throws TelegramException
     */
    public function editMessageReplyMarkup(EditMessageReplyMarkup $editMessageReplyMarkup)
    {
        $editMessageReplyMarkup->preparation();
        $out = $this->request('editMessageText', ['json' => (array)$editMessageReplyMarkup]);
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
     * @see https://core.telegram.org/bots/api#getstickerset
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
     * @param CreateNewStickerSet $createNewStickerSet
     * @return bool
     * @throws TelegramException
     */
    public function createNewStickerSet(CreateNewStickerSet $createNewStickerSet): bool
    {
        $createNewStickerSet->preparation();

        $data = BaseMethod::getDataForMultipart($createNewStickerSet);
        $requestData = !empty($data) ? ['multipart' => $data] : ['json' =>(array)$createNewStickerSet];

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
        $addStickerToSet->preparation();

        $data = BaseMethod::getDataForMultipart($addStickerToSet);
        $requestData = !empty($data) ? ['multipart' => $data] : ['json' =>(array)$addStickerToSet];

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
     * @see https://core.telegram.org/bots/api#deletestickerfromset
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
     * @param SetStickerSetThumb $setStickerSetThumb
     * @return bool
     * @throws TelegramException
     */
    public function setStickerSetThumb(SetStickerSetThumb $setStickerSetThumb): bool
    {
        $data = BaseMethod::getDataForMultipart($setStickerSetThumb);
        $requestData = !empty($data) ? ['multipart' => $data] : ['json' =>(array)$setStickerSetThumb];

        $out = $this->request('setStickerSetThumb', $requestData);
        return $out['result'];
    }

    /**
     * @param UploadStickerFile $uploadStickerFile
     * @return File
     * @throws TelegramException
     */
    public function uploadStickerFile(UploadStickerFile $uploadStickerFile): File
    {
        $data = BaseMethod::getDataForMultipart($uploadStickerFile);
        $requestData = !empty($data) ? ['multipart' => $data] : ['json' =>(array)$uploadStickerFile];

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
    public function sendGame(SendGame $sendGame): Message //todo check
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
    public function setGameScore(SetGameScore $setGameScore): array //todo check, много условий и разные типы возвращаются
    {
        $setGameScore->preparation();

        $out = $this->request('setGameScore', ['json' => (array)$setGameScore]);
        return $out['result'];
    }

    /**
     * @return GameHighScore[]
     * @throws TelegramException
     */
    public function getGameHighScores(): array //todo check,
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
    public function createChatInviteLink(CreateChatInviteLink $createChatInviteLink): ChatInviteLink //todo check,
    {
        $out = $this->request('createChatInviteLink', ['json' => (array)$createChatInviteLink]);
        return new ChatInviteLink($out['result']);
    }

    /**
     * @param EditChatInviteLink $editChatInviteLink
     * @return ChatInviteLink
     * @throws TelegramException
     */
    public function editChatInviteLink(EditChatInviteLink $editChatInviteLink): ChatInviteLink //todo check,
    {
        $out = $this->request('editChatInviteLink', ['json' => (array)$editChatInviteLink]);
        return new ChatInviteLink($out['result']);
    }

    /**
     * @param RevokeChatInviteLink $revokeChatInviteLink
     * @return ChatInviteLink
     * @throws TelegramException
     */
    public function revokeChatInviteLink(RevokeChatInviteLink $revokeChatInviteLink): ChatInviteLink //todo check,
    {
        $out = $this->request('revokeChatInviteLink', ['json' => (array)$revokeChatInviteLink]);
        return new ChatInviteLink($out['result']);
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
     * @return mixed
     * @throws TelegramException
     */
    private function request($method, $data = []): array
    {
        try {
            $uri = $this->getApiUri($method);

            $response = $this->apiClient->post($uri, $data);
            $body = (string)$response->getBody();

            $out = json_decode($body,true, 512, JSON_THROW_ON_ERROR);

            if (isset($out['ok']) && $out['ok'] === true && isset($out['result'])) {
                return $out;
            }
            
            throw new \Exception('Unexpected response: ' . $body);
        } catch (\Exception $e) {
            throw new TelegramException($e->getMessage());
        }
    }

    /**
     * @param $pathInfo
     * @param array $data
     * @throws TelegramException
     */
    private function requestForDownload($pathInfo, $data = [])
    {
        try {
            $uri = $this->getFileApiUri($pathInfo);
            $this->apiClient->get($uri, $data);
        } catch (\Exception $e) {
            throw new TelegramException($e->getMessage());
        }
    }
}