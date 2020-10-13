<?php

namespace Klev\TelegramBotApi;

use Klev\TelegramBotApi\Types\Update;

class Telegram
{
    const BOT_API_URL = 'https://api.telegram.org/bot';

    private string $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function setWebhook($url)
    {
        $out = $this->request('setWebhook', ['url' => $url]);
        return $out;
    }

    public function getUpdates():? Update
    {
        $data = json_decode(file_get_contents('php://input'), true);
        return $data ?: null;
    }

    public function getToken()
    {
        return $this->token;
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

    /**\
     * @param $method
     * @param array $data
     * @return mixed
     * @throws \Exception
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

        //$curlOptions += $options;

        $curl = curl_init();
        curl_setopt_array($curl, $curlOptions);

        $response = curl_exec($curl);
        $out = json_decode($response,true);

        if (curl_errno($curl)) {
            throw new \Exception(curl_error($curl));
        }

        curl_close($curl);

        if (isset($out['ok']) && $out['ok'] === true) {
            return $out; //todo обработка в объект (возможно, не здесь)
        }

        throw new \Exception('Unexpected response: ' . $response );
    }


}