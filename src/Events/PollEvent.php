<?php

namespace Klev\TelegramBotApi\Events;

use Klev\TelegramBotApi\Types\Poll;

class PollEvent extends Event
{
    public Poll $payload;
}