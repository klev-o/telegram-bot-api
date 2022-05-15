<?php


namespace Klev\TelegramBotApi\Methods;


use Klev\TelegramBotApi\Types\BotCommandScope;
use Klev\TelegramBotApi\Types\BotCommandScopeDefault;

/**
 * Use this method to get the current list of the bot's commands for the given scope and user language. Returns Array of
 * BotCommand on success. If commands aren't set, an empty list is returned.
 *
 * @link https://core.telegram.org/bots/api#getmycommands
 *
 * Class GetMyCommands
 * @package Klev\TelegramBotApi\Methods
 */
class GetMyCommands extends BaseMethod
{
    /**
     * A JSON-serialized object, describing scope of users. Defaults to BotCommandScopeDefault.
     * @var BotCommandScope|null
     */
    public $scope = null;
    /**
     * A two-letter ISO 639-1 language code or an empty string
     * @var string|null
     */
    public ?string $language_code = '';

    public function preparation(): void
    {
        $this->scope = $this->scope ?? new BotCommandScopeDefault();
        $this->scope = json_encode($this->scope);
    }
}