<?php

namespace Klev\TelegramBotApi;

use CURLFile;
use Klev\TelegramBotApi\Methods\DeleteWebhook;
use Klev\TelegramBotApi\Methods\SendMessage;
use Klev\TelegramBotApi\Methods\SendPhoto;
use Klev\TelegramBotApi\Methods\SetWebhook;
use Klev\TelegramBotApi\Types\Update;
use Klev\TelegramBotApi\Types\WebhookInfo;

/**
 * Class Telegram
 * @package Klev\TelegramBotApi
 */
class Telegram
{
    const BOT_API_URL = 'https://api.telegram.org/bot';

    private string $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * @param SetWebhook $setWebhook
     * @return array
     * @throws TelegramException
     */
    public function setWebhook(SetWebhook $setWebhook): array
    {
        return $this->request('setWebhook', (array)$setWebhook);
    }

    /**
     * @param DeleteWebhook $deleteWebhook
     * @return mixed
     * @throws TelegramException
     */
    public function deleteWebhook(DeleteWebhook $deleteWebhook): array
    {
        return $this->request('deleteWebhook', (array)$deleteWebhook);
    }

    /**
     * @return WebhookInfo
     * @throws TelegramException
     */
    public function getWebhookInfo(): WebhookInfo
    {
        $out = $this->request('getWebhookInfo');
        return new WebhookInfo($out);
    }

    /**
     * @return Update|null
     */
    public function getWebhookUpdates():? Update
    {
        $data = json_decode(file_get_contents('php://input'), true);
        return $data ? new Update($data) : null;
    }

    public function getMe()
    {
        return $this->request('getMe');
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


    /**
     * @param $method
     * @param array $data
     * @return mixed
     * @throws TelegramException
     */
    private function request($method, $data = [])
    {
        $curlOptions = [
            CURLOPT_URL => self::BOT_API_URL . $this->token .  '/' . $method,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POST        => true,
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_TIMEOUT => 5,
        ];

        $curl = curl_init();
        curl_setopt_array($curl, $curlOptions);

        $response = curl_exec($curl);
        $out = json_decode($response,true);

        if (curl_errno($curl)) {
            throw new TelegramException(curl_error($curl));
        }

        curl_close($curl);

        if (isset($out['ok']) && $out['ok'] === true) {
            return $out;
        }

        throw new TelegramException('Unexpected response: ' . $response );
    }


}