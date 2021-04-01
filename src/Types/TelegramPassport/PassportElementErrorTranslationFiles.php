<?php


namespace Klev\TelegramBotApi\Types\TelegramPassport;


class PassportElementErrorTranslationFiles implements PassportElementError
{
    public string $source = 'translation_files';
    public string $type;
    /**
     * @var string[]
     */
    public array $file_hashes;
    public string $message;
}