<?php

namespace Klev\TelegramBotApi\Events;

use Klev\TelegramBotApi\Types\PollAnswer;

class PollAnswerEvent
{
    public PollAnswer $payload;
}