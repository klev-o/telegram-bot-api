<?php

namespace Klev\TelegramBotApi\Types\Stickers;

use Klev\TelegramBotApi\Types\BaseType;


/**
 * This object represents a gift that can be sent by the bot.
 *
 * @link https://core.telegram.org/bots/api#gift
 *
 * Class Gift
 * @package Klev\TelegramBotApi\Types\Stickers
 */
class Gift extends BaseType
{
    /**
     * Unique identifier of the gift
     * @var string
     */
    public string $id;
    /**
     * The sticker that represents the gift
     * @var Sticker
     */
    public Sticker $sticker;
    /**
     * The number of Telegram Stars that must be paid to send the sticker
     * @var int
     */
    public int $star_count;
    /**
     * Optional. The number of Telegram Stars that must be paid to upgrade the gift to a unique one
     * @var int|null
     */
    public ?int $upgrade_star_count;
    /**
     * Optional. The total number of the gifts of this type that can be sent; for limited gifts only
     * @var int|null
     */
    public ?int $total_count;
    /**
     * Optional. The number of remaining gifts of this type that can be sent; for limited gifts only
     * @var int|null
     */
    public ?int $remaining_count;

    protected function bindObjects($key, $data): ?object
    {
        switch ($key) {
            case 'sticker':
                return new Sticker($data);
        }

        return null;
    }
}