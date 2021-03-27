<?php


namespace Klev\TelegramBotApi\Types\TelegramPassport;


class PassportElementErrorTranslationFile implements PassportElementError
{
    public string $source = 'translation_file';
    public string $type;
    public string $file_hash;
    public string $message;
}