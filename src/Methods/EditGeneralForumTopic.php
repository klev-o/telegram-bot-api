<?php

namespace Klev\TelegramBotApi\Methods;

/**
 * Use this method to edit the name of the 'General' topic in a forum supergroup chat. The bot must be an administrator
 * in the chat for this to work and must have can_manage_topics administrator rights. Returns True on success.
 *
 * @link https://core.telegram.org/bots/api#editgeneralforumtopic
 *
 * Class EditGeneralForumTopic
 * @package Klev\TelegramBotApi\Methods
 */
class EditGeneralForumTopic extends BaseMethod
{
    /**
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @var string
     */
    public string $chat_id;
    /**
     * New topic name, 1-128 characters
     * @var string
     */
    public string $name;

    public function __construct(string $chat_id, string $name)
    {
        $this->chat_id = $chat_id;
        $this->name = $name;
    }
}