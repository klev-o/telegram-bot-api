<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents an inline keyboard button that copies specified text to the clipboard.
 *
 * Class CopyTextButton
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#contact
 */
class CopyTextButton extends BaseType
{
    /**
     * The text to be copied to the clipboard; 1-256 characters
     * @var string
     */
    public string $text;
}