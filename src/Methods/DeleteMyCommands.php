<?php


namespace Klev\TelegramBotApi\Methods;


use Klev\TelegramBotApi\Types\BotCommandScope;
use Klev\TelegramBotApi\Types\BotCommandScopeDefault;

/**
 * Use this method to delete the list of the bot's commands for the given scope and user language. After deletion,
 * higher level commands will be shown to affected users. Returns True on success.
 *
 * @see https://core.telegram.org/bots/api#deletemycommands
 *
 * Class GetMyCommands
 * @package Klev\TelegramBotApi\Methods
 */
class DeleteMyCommands extends BaseMethod
{
    /**
     * A JSON-serialized object, describing scope of users for which the commands are relevant.
     * Defaults to BotCommandScopeDefault.
     * @var BotCommandScope|null
     */
    public $scope = null;
    /**
     * A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for
     * whose language there are no dedicated commands
     * @var string|null
     */
    public ?string $language_code = '';

    public function preparation(): void
    {
        $this->scope = $this->scope ?? new BotCommandScopeDefault();
        $this->scope = json_encode($this->scope);
    }
}