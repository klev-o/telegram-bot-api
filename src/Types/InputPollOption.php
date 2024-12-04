<?php

namespace Klev\TelegramBotApi\Types;

/**
 * This object contains information about one answer option in a poll to be sent.
 *
 * @link https://core.telegram.org/bots/api#inputpolloption
 *
 * Class InputPollOption
 * @package Klev\TelegramBotApi\Types
 */
class InputPollOption extends BaseType
{
    /**
     * Option text, 1-100 characters
     * @var string
     */
    public string $text;
    /**
     * Optional. Mode for parsing entities in the text. See formatting options for more details. Currently, only
     * custom emoji entities are allowed
     * @var string|null
     */
    public ?string $text_parse_mode = null;
    /**
     * Optional. A JSON-serialized list of special entities that appear in the poll option text.
     * It can be specified instead of text_parse_mode
     * @var MessageEntity[]|null
     */
    public ?array $text_entities = null;

    protected function bindObjects($key, $data)
    {
        switch ($key) {
            case 'text_entities':
                $result = [];
                foreach ($data as $entity) {
                    $result[] = new MessageEntity($entity);
                }
                return $result;
        }

        return null;
    }
}