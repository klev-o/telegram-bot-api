<?php

namespace Klev\TelegramBotApi;

use CURLFile;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Klev\TelegramBotApi\Methods\DeleteWebhook;
use Klev\TelegramBotApi\Methods\SendMessage;
use Klev\TelegramBotApi\Methods\SendPhoto;
use Klev\TelegramBotApi\Methods\SetWebhook;
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
        return new WebhookInfo($out['result']); //todo check?
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
        return new User($out['result']); //todo check?
    }

    public function sendMessage(SendMessage $message)
    {
        $message->preparation();
        $out = $this->request('sendMessage', (array)$message);
        return $out;
    }

    public function sendPhoto(SendPhoto $photo)
    {
        if (!filter_var($photo->getPhoto(), FILTER_VALIDATE_URL)) {
            $photo->setPhoto(new CURLFile(realpath($photo->getPhoto()))); //todo clone ???
        }
        return $this->request('sendPhoto', (array)$photo);
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