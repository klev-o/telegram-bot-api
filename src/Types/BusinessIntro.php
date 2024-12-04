<?php

namespace Klev\TelegramBotApi\Types;

use Klev\TelegramBotApi\Types\Stickers\Sticker;

/**
 * Contains information about the start page settings of a Telegram Business account.
 *
 * Class BusinessIntro
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#businessintro
 */
class BusinessIntro extends BaseType
{
    /**
     * Optional. Title text of the business intro
     * @var string|null
     */
    public ?string $title = null;
    /**
     * Optional. Message text of the business intro
     * @var string|null
     */
    public ?string $message = null;
    /**
     * Optional. Sticker of the business intro
     * @var Sticker|null
     */
    public ?Sticker $sticker = null;
}