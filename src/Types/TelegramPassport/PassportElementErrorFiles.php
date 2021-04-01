<?php


namespace Klev\TelegramBotApi\Types\TelegramPassport;


class PassportElementErrorFiles implements PassportElementError
{
    public string $source = 'files';
    public string $type;
    /**
     * @var string[]
     */
    public array $file_hashes;
    public string $message;
}