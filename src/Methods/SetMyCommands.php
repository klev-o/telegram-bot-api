<?php


namespace Klev\TelegramBotApi\Methods;


use Klev\TelegramBotApi\Types\BotCommand;
use Klev\TelegramBotApi\Types\BotCommandScope;
use Klev\TelegramBotApi\Types\BotCommandScopeDefault;

/**
 * Use this method to change the list of the bot's commands. Returns True on success.
 *
 * @link https://core.telegram.org/bots/api#setmycommands
 *
 * Class SetMyCommands
 * @package Klev\TelegramBotApi\Methods
 */
class SetMyCommands extends BaseMethod
{
    /**
     * A JSON-serialized list of bot commands to be set as the list of the bot's commands. At most 100 commands
     * can be specified.
     * @var BotCommand[]
     */
    public $commands = '';
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

    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }

    public function preparation(): void
    {
        if ($this->isPrepared()) {
            return;
        }

        $this->commands = json_encode($this->commands);
        $this->scope = $this->scope ?? new BotCommandScopeDefault();
        $this->scope = json_encode($this->scope);

        $this->setIsPrepared(true);
    }
}