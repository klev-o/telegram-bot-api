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

    public function getProperties(): array
    {
        $reflection = new \ReflectionObject($this);

        return array_map(static function($item) {
            return $item->name;
        }, $reflection->getProperties(\ReflectionProperty::IS_PUBLIC));

    }

    public function removeNullableFields()
    {
        foreach ($this->getProperties() as $property) {
            if ($this->$property === null) {
                unset($this->$property);
            }
        }
    }

    /**
     * @param $key
     * @param $data
     * @return object|array|null
     */
    protected function bindObjects($key, $data)
    {
        return null;
    }
}