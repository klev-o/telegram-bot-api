<?php

namespace Klev\TelegramBotApi\Events;

use Klev\TelegramBotApi\Types\Message;

class EditedChannelPostEvent extends Event
{
    public Message $payload;
}