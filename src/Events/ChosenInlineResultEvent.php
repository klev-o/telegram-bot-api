<?php

namespace Klev\TelegramBotApi\Events;

use Klev\TelegramBotApi\Types\InlineMode\ChosenInlineResult;

class ChosenInlineResultEvent extends Event
{
    public ChosenInlineResult $payload;
}