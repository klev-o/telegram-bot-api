<?php


namespace Klev\TelegramBotApi\Types\Payments;


use Klev\TelegramBotApi\Types\BaseType;

/**
 * This object represents a portion of the price for goods or services.
 *
 * @link https://core.telegram.org/bots/api#labeledprice
 *
 * Class LabeledPrice
 * @package Klev\TelegramBotApi\Types\Payments
 */
class LabeledPrice extends BaseType
{
    /**
     * Portion label
     * @var string
     */
    public string $label;
    /**
     * Price of the product in the smallest units of the currency (integer, not float/double). For example, for a price
     * of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the
     * decimal point for each currency (2 for the majority of currencies).
     * @var int
     */
    public int $amount;
}