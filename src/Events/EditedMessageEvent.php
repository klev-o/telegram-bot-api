<?php

namespace Klev\TelegramBotApi\Events;

use Klev\TelegramBotApi\Types\Message;

class EditedMessageEvent extends Event
{
    public Message $payload;
}