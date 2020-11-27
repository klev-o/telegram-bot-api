<?php

namespace Klev\TelegramBotApi;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Methods\CopyMessage;
use Klev\TelegramBotApi\Methods\DeleteWebhook;
use Klev\TelegramBotApi\Methods\EditMessageLiveLocation;
use Klev\TelegramBotApi\Methods\ForwardMessage;
use Klev\TelegramBotApi\Methods\GetUserProfilePhotos;
use Klev\TelegramBotApi\Methods\KickChatMember;
use Klev\TelegramBotApi\Methods\PromoteChatMember;
use Klev\TelegramBotApi\Methods\RestrictChatMember;
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
use Klev\TelegramBotApi\Methods\SetWebhook;
use Klev\TelegramBotApi\Methods\StopMessageLiveLocation;
use Klev\TelegramBotApi\Methods\UnbanChatMember;
use Klev\TelegramBotApi\Types\File;
use Klev\TelegramBotApi\Types\Message;
use Klev\TelegramBotApi\Types\MessageId;
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

    private ClientInterface $apiClient;

    public function __construct($token, ClientInterface $apiClient = null)
    {
        $this->token = $token;
        $this->apiClient = $apiClient ?? new Client();
    }

    /**
     * @param SetWebhook $setWebhook
     * @return array
     * @throws TelegramException
     * @throws GuzzleException
     */
    public function setWebhook(SetWebhook $setWebhook): array
    {
        //todo load certificate
        return $this->request('setWebhook', ['json' => (array)$setWebhook]);
    }

    /**
     * @param DeleteWebhook $deleteWebhook
     * @return array
     * @throws GuzzleException
     * @throws TelegramException
     */
    public function deleteWebhook(DeleteWebhook $deleteWebhook): array
    {
        return $this->request('deleteWebhook', (array)$deleteWebhook);
    }

    /**
     * @return WebhookInfo
     * @throws GuzzleException
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
        $data = json_decode(file_get_contents('php://input'), true);
        return $data ? new Update($data) : null;
    }

    /**
     * @return User
     * @throws GuzzleException
     * @throws TelegramException
     */
    public function getMe(): User
    {
        $out = $this->request('getMe');
        return new User($out['result']);
    }

    /**
     * @param SendMessage $sendMessage
     * @return Message
     * @throws GuzzleException
     * @throws TelegramException
     */
    public function sendMessage(SendMessage $sendMessage): Message
    {
        $sendMessage->preparation();
        $out = $this->request('sendMessage', (array)$sendMessage);
        return new Message($out['result']);
    }

    /**
     * @param ForwardMessage $forwardMessage
     * @return Message
     * @throws GuzzleException
     * @throws TelegramException
     */
    public function forwardMessage(ForwardMessage $forwardMessage): Message
    {
        $out = $this->request('forwardMessage', (array)$forwardMessage);
        return new Message($out['result']);
    }

    /**
     * @param CopyMessage $copyMessage
     * @return MessageId
     * @throws GuzzleException
     * @throws TelegramException
     */
    public function copyMessage(CopyMessage $copyMessage): MessageId
    {
        $copyMessage->preparation();
        $out = $this->request('copyMessage', (array)$copyMessage);
        return new MessageId($out['result']);
    }

    /**
     * @param SendPhoto $sendPhoto
     * @return Message
     *
     * @throws GuzzleException
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
     * @throws GuzzleException
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
     * @throws GuzzleException
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
     * @throws GuzzleException
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
     * @throws GuzzleException
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
     * @throws GuzzleException
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
     * @throws GuzzleException
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
     * @throws GuzzleException
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
     * @throws GuzzleException
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
     * @throws GuzzleException
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
     * @throws GuzzleException
     * @throws TelegramException
     */
    public function stopMessageLiveLocation(StopMessageLiveLocation $stopMessageLiveLocation)
    {
        $stopMessageLiveLocation->preparation();
        $out = $this->request('stopMessageLiveLocation', ['json' => (array)$stopMessageLiveLocation]);
        if ($stopMessageLiveLocation->inline_message_id === null) {
            return new Message($out['result']);
        } else {
            return $out['result']; //todo true?
        }
    }

    /**
     * @param SendVenue $sendVenue
     * @return Message
     * @throws GuzzleException
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
     * @throws GuzzleException
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
     * @throws GuzzleException
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
     * @throws GuzzleException
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
     * @throws GuzzleException
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
     * @throws GuzzleException
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
     * @throws GuzzleException
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
     * @throws GuzzleException
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
     * @throws GuzzleException
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
     * @throws GuzzleException
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
     * @throws GuzzleException
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
     * @throws GuzzleException
     * @throws TelegramException
     */
    public function promoteChatMember(PromoteChatMember $promoteChatMember): bool
    {
        $out = $this->request('promoteChatMember', ['json' => (array)$promoteChatMember]);
        return $out['result'];
    }





    public function getToken()
    {
        return $this->token;
    }

    public function setApiEndpoint(string $url)
    {
        $this->apiEndpoint = $url;
    }

    public function setFileApiEndpoint(string $url)
    {
        $this->fileApiEndpoint = $url;
    }


    private function getApiUri($method)
    {
        return $this->apiEndpoint . $this->token . '/' . $method;
    }

    private function getFileApiUri($pathInfo)
    {
        return $this->fileApiEndpoint . $this->token . '/' . $pathInfo;
    }

    /**
     * @param $method
     * @param array $data
     * @return mixed
     * @throws GuzzleException
     * @throws TelegramException
     */
    private function request($method, $data = [])
    {
        $uri = $this->getApiUri($method);

        $response = $this->apiClient->post($uri, $data);
        $body = (string)$response->getBody();
        $out = json_decode($body,true);

        if (isset($out['ok']) && $out['ok'] === true) {
            return $out;
        }

        throw new TelegramException('Unexpected  response: ' . $body);
    }

    /**
     * @param $pathInfo
     * @param array $data
     * @throws GuzzleException
     */
    private function requestForDownload($pathInfo, $data = [])
    {
        $uri = $this->getFileApiUri($pathInfo);
        $this->apiClient->get($uri, $data);
    }
}