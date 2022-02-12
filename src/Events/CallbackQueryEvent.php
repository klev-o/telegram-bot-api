<?php

namespace Klev\TelegramBotApi\Events;

use Klev\TelegramBotApi\Types\CallbackQuery;

class CallbackQueryEvent extends Event
{
    public CallbackQuery $payload;
}