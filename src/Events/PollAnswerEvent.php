<?php

namespace Klev\TelegramBotApi\Events;

use Klev\TelegramBotApi\Types\PollAnswer;

class PollAnswerEvent extends Event
{
    public PollAnswer $payload;
}