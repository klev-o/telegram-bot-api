<?php

namespace Klev\TelegramBotApi\Methods;

/**
 * Class BaseMethod
 * @package Klev\TelegramBotApi\Methods
 */
abstract class BaseMethod
{
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
}