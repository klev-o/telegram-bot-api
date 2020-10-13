<?php


namespace Klev\TelegramBotApi\Methods;


use Klev\TelegramBotApi\Types\KeyboardInterface;

class SendPhoto extends BaseMethod
{
    public $chat_id;
    public $photo;
    public $caption;
    public $parse_mode = 'html';
    public $disable_notification = false;
    public $reply_to_message_id;
    public $reply_markup;

    public function __construct(string $chat_id, string $photo)
    {
        $this->chat_id = $chat_id;
        $this->photo = $photo;
    }

    /**
     * @return string
     */
    public function getPhoto(): string
    {
        return $this->photo;
    }

    public function setPhoto($photo): void //todo
    {
        $this->photo = $photo;
    }

    /**
     * @param mixed $caption
     */
    public function setCaption(string $caption): void
    {
        $this->caption = $caption;
    }

    /**
     * @param string $parse_mode
     */
    public function setParseMode(string $parse_mode): void
    {
        $this->parse_mode = $parse_mode;
    }

    /**
     * @param bool $disable_notification
     */
    public function setDisableNotification(bool $disable_notification): void
    {
        $this->disable_notification = $disable_notification;
    }

    /**
     * @param mixed $reply_markup
     */
    public function setReplyMarkup(KeyboardInterface $reply_markup): void
    {
        $this->reply_markup = $reply_markup;
    }
}