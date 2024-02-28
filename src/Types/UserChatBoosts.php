<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a list of boosts added to a chat by a user.
 *
 * Class UserChatBoosts
 * @package Klev\TelegramBotApi\Methods
 *
 * @link https://core.telegram.org/bots/api#userchatboosts
 */
final class UserChatBoosts extends BaseType
{
    /**
     * The list of boosts added to the chat by the user
     * @var ChatBoost[]
     */
    public array $boosts;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'boosts':
                $result = [];
                foreach ($data as $boost) {
                    $result[] = new ChatBoost($boost);
                }
                return $result;
        }

        return parent::bindObjects($key, $data);
    }
}