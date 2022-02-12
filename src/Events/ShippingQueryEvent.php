<?php

namespace Klev\TelegramBotApi\Events;

use Klev\TelegramBotApi\Types\Payments\ShippingQuery;

class ShippingQueryEvent extends Event
{
    public ShippingQuery $payload;
}