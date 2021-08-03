<?php


namespace Klev\TelegramBotApi;


use Klev\TelegramBotApi\Types\ChatMember;
use Klev\TelegramBotApi\Types\ChatMemberAdministrator;
use Klev\TelegramBotApi\Types\ChatMemberBanned;
use Klev\TelegramBotApi\Types\ChatMemberLeft;
use Klev\TelegramBotApi\Types\ChatMemberMember;
use Klev\TelegramBotApi\Types\ChatMemberOwner;
use Klev\TelegramBotApi\Types\ChatMemberRestricted;

/**
 * Class TelegramHelper
 * @package Klev\TelegramBotApi
 */
class TelegramHelper
{
    /**
     * @param array $member
     * @return ChatMember|null
     * @throws TelegramException
     */
    public static function getChatMember(array $member): ?ChatMember
    {
        if (!empty($member) && isset($member['status'])) {
            switch ($member['status']) {
                case ChatMember::TYPE_CREATOR:
                    return new ChatMemberOwner($member);
                case ChatMember::TYPE_ADMINISTRATOR:
                    return new ChatMemberAdministrator($member);
                case ChatMember::TYPE_MEMBER:
                    return new ChatMemberMember($member);
                case ChatMember::TYPE_RESTRICTED:
                    return new ChatMemberRestricted($member);
                case ChatMember::TYPE_LEFT:
                    return new ChatMemberLeft($member);
                case ChatMember::TYPE_KICKED:
                    return new ChatMemberBanned($member);
                default:
                    throw new TelegramException('Unknown chat member status');
            }
        }
        return null;
    }
}