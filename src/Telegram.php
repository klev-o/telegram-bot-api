<?php

namespace Klev\TelegramBotApi;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Klev\TelegramBotApi\Methods\BaseMethod;
use Klev\TelegramBotApi\Methods\CopyMessage;
use Klev\TelegramBotApi\Methods\DeleteWebhook;
use Klev\TelegramBotApi\Methods\ForwardMessage;
use Klev\TelegramBotApi\Methods\SendAnimation;
use Klev\TelegramBotApi\Methods\SendAudio;
use Klev\TelegramBotApi\Methods\SendDocument;
use Klev\TelegramBotApi\Methods\SendMessage;
use Klev\TelegramBotApi\Methods\SendPhoto;
use Klev\TelegramBotApi\Methods\SendVideo;
use Klev\TelegramBotApi\Methods\SetWebhook;
use Klev\TelegramBotApi\Types\Message;
use Klev\TelegramBotApi\Types\MessageId;
use Klev\TelegramBotApi\Types\Update;
use Klev\TelegramBotApi\Types\User;
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


    public function getToken()
    {
        return $this->token;
    }

    public function setApiEndpoint(string $url)
    {
        $this->apiEndpoint = $url;
    }


    /**
     * @param $method
     * @param array $data
     * @return mixed
     * @throws TelegramException
     * @throws GuzzleException
     */
    private function request($method, $data = [])
    {
        $uri = $this->apiEndpoint . $this->token .  '/' . $method;

        $response = $this->apiClient->post($uri, $data);
        $body = (string)$response->getBody();
        $out = json_decode($body,true);

        if (isset($out['ok']) && $out['ok'] === true) {
            return $out;
        }

        throw new TelegramException('Unexpected  response: ' . $body);
    }
}