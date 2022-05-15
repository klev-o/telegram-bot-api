<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\Types\ChatAdministratorRights;

/**
 * Use this method to change the default administrator rights requested by the bot when it's added as an administrator
 * to groups or channels. These rights will be suggested to users, but they are are free to modify the list before
 * adding the bot. Returns True on success.
 *
 * @link https://core.telegram.org/bots/api#setmydefaultadministratorrights
 *
 * Class SetMyDefaultAdministratorRights
 * @package Klev\TelegramBotApi\Methods
 */
class SetMyDefaultAdministratorRights extends BaseMethod
{
    /**
     * A JSON-serialized object describing new default administrator rights. If not specified, the default administrator rights will be cleared.
     * @var ChatAdministratorRights|string
     */
    public $rights = null;
    /**
     * Pass True to change the default administrator rights of the bot in channels. Otherwise, the default
     * administrator rights of the bot for groups and supergroups will be changed.
     * @var bool|null
     */
    public ?bool $for_channels = null;

    public function preparation(): void
    {
        $this->rights = $this->rights ?? json_encode($this->rights);
    }
}