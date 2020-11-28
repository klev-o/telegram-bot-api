<?php

namespace Klev\TelegramBotApi\Types\InlineMode;

use Klev\TelegramBotApi\Types\BaseType;
use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;

class InlineQueryResultArticle extends BaseType implements InlineQueryResult
{
    public string $type = 'article';
    public string $id;
    public string $title;
    /**
     * @var InputMessageContent
     */
    public InputMessageContent $input_message_content;
    public ?InlineKeyboardMarkup $reply_markup;
    public ?string $url;
    public ?bool $hide_url;
    public ?string $description;
    public ?string $thumb_url;
    public ?int $thumb_width;
    public ?int $thumb_height;
}