<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\TelegramException;

/**
 * Class BaseMethod
 * @package Klev\TelegramBotApi\Methods
 */
abstract class BaseMethod
{
    private static array $mapClassFileFields = [
        SendPhoto::class => 'photo'
    ];

    public function preparation()
    {
        if (!empty($this->reply_markup)) {
            $this->reply_markup = json_encode($this->reply_markup);
        }

        //todo при строгой типизации нельзя потом масси в строку, надо придумать что-то
        if (!empty($this->prices)) {
            $this->prices = json_encode($this->prices);
        }

        return $this;
    }

    /**
     * @param $object
     * @return array
     * @throws TelegramException
     */
    public static function getDataForMultipart($object): array
    {
        $data = [];

        $fileField = self::$mapClassFileFields[get_class($object)] ?? null;
        if(is_null($fileField)) throw new TelegramException("No find mapping for "  . get_class($object));

        if (!filter_var($object->$fileField, FILTER_VALIDATE_URL)) {
            if (file_exists($object->$fileField)) {
                if (!is_readable($object->$fileField)) {
                    throw new TelegramException("File " . $object->$fileField . " is not readable.");
                }
                $fields = get_object_vars($object);
                $fields[$fileField] = fopen($object->$fileField, 'r');

                foreach ($fields as $name => $value) {
                    $data[] = [
                        'name' => $name,
                        'contents' => $value
                    ];
                }
            }
        }

        return $data;
    }
}