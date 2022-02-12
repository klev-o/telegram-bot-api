<?php

namespace Klev\TelegramBotApi\Events;

use Klev\TelegramBotApi\Types\CallbackQuery;
use Klev\TelegramBotApi\Types\ChatJoinRequest;
use Klev\TelegramBotApi\Types\ChatMemberUpdated;
use Klev\TelegramBotApi\Types\InlineMode\ChosenInlineResult;
use Klev\TelegramBotApi\Types\InlineMode\InlineQuery;
use Klev\TelegramBotApi\Types\Message;
use Klev\TelegramBotApi\Types\Payments\PreCheckoutQuery;
use Klev\TelegramBotApi\Types\Payments\ShippingQuery;
use Klev\TelegramBotApi\Types\Poll;
use Klev\TelegramBotApi\Types\PollAnswer;
use ReflectionClass;

/**
 * @property Message|InlineQuery|ChosenInlineResult|CallbackQuery|ShippingQuery|PreCheckoutQuery|Poll|PollAnswer|ChatMemberUpdated|ChatJoinRequest $payload
 */
abstract class Event
{
    public int $update_id;

    public function __construct(int $update_id, $sender)
    {
        $this->update_id = $update_id;
        $this->payload = $sender;
    }

    public static function getNamespace(): string
    {
        $cl = new ReflectionClass(self::class);
        return $cl->getNamespaceName();
    }
}