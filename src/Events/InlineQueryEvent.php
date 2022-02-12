<?php

namespace Klev\TelegramBotApi\Events;

use Klev\TelegramBotApi\Types\InlineMode\InlineQuery;

class InlineQueryEvent extends Event
{
    public InlineQuery $payload;
}