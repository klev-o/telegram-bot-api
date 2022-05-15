<?php


namespace Klev\TelegramBotApi\Types\InlineMode;


use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;

/**
 * Represents a Game.
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultgame
 *
 * Class InlineQueryResultGame
 * @package Klev\TelegramBotApi\Types\InlineMode
 */
class InlineQueryResultGame implements InlineQueryResult
{
    /**
     * Type of the result, must be game
     * @var string
     */
    public string $type = 'game';
    /**
     * Unique identifier for this result, 1-64 bytes
     * @var string
     */
    public string $id;
    /**
     * Short name of the game
     * @var string
     */
    public string $game_short_name;
    /**
     * Optional. Inline keyboard attached to the message
     * @var InlineKeyboardMarkup|null
     */
    public ?InlineKeyboardMarkup $reply_markup;

    public function __construct(string $id, string $game_short_name)
    {
        $this->id = $id;
        $this->game_short_name = $game_short_name;
    }
}