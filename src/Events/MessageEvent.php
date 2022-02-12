<?php

namespace Klev\TelegramBotApi\Events;

use Klev\TelegramBotApi\Types\Message;

class MessageEvent extends Event
{
    public Message $payload;
}