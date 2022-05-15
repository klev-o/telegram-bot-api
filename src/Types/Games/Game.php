<?php


namespace Klev\TelegramBotApi\Types\Games;


use Klev\TelegramBotApi\Types\Animation;
use Klev\TelegramBotApi\Types\BaseType;
use Klev\TelegramBotApi\Types\MessageEntity;
use Klev\TelegramBotApi\Types\PhotoSize;

/**
 * This object represents a game. Use BotFather to create and edit games, their short names will act as unique
 * identifiers.
 *
 * @link https://core.telegram.org/bots/api#game
 *
 * Class Game
 * @package Klev\TelegramBotApi\Types\Games
 */
class Game extends BaseType
{
    /**
     * Title of the game
     * @var string
     */
    public string $title;
    /**
     * Description of the game
     * @var string
     */
    public string $description;
    /**
     * Photo that will be displayed in the game message in chats.
     * @var PhotoSize[] $photo
     */
    public array $photo;
    /**
     * Optional. Brief description of the game or high scores included in the game message. Can be automatically
     * edited to include current high scores for the game when the bot calls setGameScore, or manually edited using
     * editMessageText. 0-4096 characters.
     * @var string|null
     */
    public ?string $text;
    /**
     * Optional. Special entities that appear in text, such as usernames, URLs, bot commands, etc.
     * @var MessageEntity[]|null
     */
    public ?array $text_entities;
    /**
     * Optional. Animation that will be displayed in the game message in chats. Upload via BotFather
     * @var Animation|null
     */
    public ?Animation $animation;

    /**
     * @param $key
     * @param $data
     * @return array|Animation|object|null
     */
    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'photo':
                $result = [];
                foreach ($data as $entity) {
                    $result[] = new PhotoSize($entity);
                }
                return $result;
            case 'text_entities':
                $result = [];
                foreach ($data as $entity) {
                    $result[] = new MessageEntity($entity);
                }
                return $result;
            case 'animation':
                return new Animation($data);
        }

        return null;
    }
}