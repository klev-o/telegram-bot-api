<?php


namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a service message about new members invited to a voice chat.
 *
 * @see https://core.telegram.org/bots/api#voicechatparticipantsinvited
 *
 * Class VoiceChatParticipantsInvited
 * @package Klev\TelegramBotApi\Types
 */
class VoiceChatParticipantsInvited extends BaseType
{
    /**
     * Optional. New members that were invited to the voice chat
     * @var User[]|null
     */
    public ?array $users;

    protected function bindObjects($key, $data): ?array
    {
        switch ($key) {
            case 'users':
                $result = [];
                foreach ($data as $entity) {
                    $result[] = new User($entity);
                }
                return $result;
        }

        return null;
    }
}