<?php

namespace Klev\TelegramBotApi\Types;

/**
 * Class BaseType
 * @package Klev\TelegramBotApi\Types
 */
abstract class BaseType
{
    public function __construct(array $data = [])
    {
        foreach($data as $key => $val) {
            if(property_exists(get_called_class(), $key)) {
                if (is_array($val)){
                    $this->$key = $this->bindObjects($key, $val);
                } else {
                    $this->$key = $val;
                }
            }
        }
    }

    /**
     * @param $key
     * @param $data
     * @return object|null
     */
    protected function bindObjects($key, $data): ?object
    {
        return null;
    }
}