<?php

namespace Klev\TelegramBotApi\Events;

use Klev\TelegramBotApi\Types\Payments\PreCheckoutQuery;

class PreCheckoutQueryEvent extends Event
{
    public PreCheckoutQuery $payload;
}