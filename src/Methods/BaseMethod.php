<?php


namespace Klev\TelegramBotApi\Methods;


use Klev\TelegramBotApi\Methods\Stickers\AddStickerToSet;
use Klev\TelegramBotApi\Methods\Stickers\CreateNewStickerSet;
use Klev\TelegramBotApi\Methods\Stickers\SendSticker;
use Klev\TelegramBotApi\Methods\Stickers\SetStickerSetThumb;
use Klev\TelegramBotApi\Methods\Stickers\UploadStickerFile;
use Klev\TelegramBotApi\Methods\UpdatingMessages\EditMessageMedia;
use Klev\TelegramBotApi\TelegramException;
use Klev\TelegramBotApi\Types\InputMedia;
use Klev\TelegramBotApi\Types\InputMediaAnimation;
use Klev\TelegramBotApi\Types\InputMediaAudio;
use Klev\TelegramBotApi\Types\InputMediaDocument;
use Klev\TelegramBotApi\Types\InputMediaPhoto;
use Klev\TelegramBotApi\Types\InputMediaVideo;

/**
 * Class BaseMethod
 * @package Klev\TelegramBotApi\Methods
 */
abstract class BaseMethod
{
    private static array $mapClassFileFields = [
        SendPhoto::class => 'photo',
        SendAudio::class => ['audio', 'thumb'],
        SendDocument::class => ['document', 'thumb'],
        SendVideo::class => ['video', 'thumb'],
        SendAnimation::class => ['animation', 'thumb'],
        SendVoice::class => 'voice',
        SendVideoNote::class => ['video_note', 'thumb'],
        InputMediaAudio::class => ['media', 'thumb'],
        InputMediaPhoto::class => 'media',
        InputMediaDocument::class => 'media',
        InputMediaVideo::class => ['media', 'thumb'],
        InputMediaAnimation::class => ['media', 'thumb'],
        SetChatPhoto::class =>'photo',
        EditMessageMedia::class =>'media',
        SendSticker::class => 'sticker',
        CreateNewStickerSet::class => ['png_sticker', 'tgs_sticker'],
        AddStickerToSet::class => ['png_sticker', 'tgs_sticker'],
        SetStickerSetThumb::class => 'thumb',
        UploadStickerFile::class => 'png_sticker',
    ];

    /**
     * @return $this
     */
    public function preparation(): self
    {
        if (!empty($this->reply_markup)) {
            $this->reply_markup = json_encode($this->reply_markup);
        }

        //todo при строгой типизации нельзя потом массив в строку, надо придумать что-то
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

        $fileField = $fileField = self::getMappingFields($object);;

        $isIssetLocalFiles = false;

        foreach ($fileField as $field) {
            if (self::isLocalFile($object->$field)) {
                $isIssetLocalFiles = true;
            }
        }

        if ($isIssetLocalFiles) {
            $fields = get_object_vars($object);

            foreach ($fileField as $field) {
                $fields[$field] = !is_null($object->$field) ? fopen($object->$field, 'r') : $object->$field;
            }

            foreach ($fields as $name => $value) {
                $data[] = [
                    'name' => $name,
                    'contents' => $value
                ];
            }
        }

        return $data;
    }

    /**
     * @param SendMedia $object
     * @return array
     * @throws TelegramException
     */
    public static function getDataForMediaGroup(SendMedia $object): array
    {
        $medias = $object->media;

        $data = [];

        if (!is_array($medias)) {
            $medias = [$medias];
        }

        /**@var InputMedia $media*/
        foreach ($medias as $media) {
            $fileField = self::getMappingFields($media);

            foreach ($fileField as $field) {
                if (self::isLocalFile($media->$field)) {
                    $name = basename($media->$field);
                    $data[] = [
                        'name' => $name,
                        'contents' => fopen($media->$field, 'r'),
                    ];
                    $media->$field = "attach://" . $name;
                }
            }

        }

        if (!empty($data)) {
            $fields = get_object_vars($object);

            foreach ($fields as $name => $value) {
                $data[] = [
                    'name' => $name,
                    'contents' => $name === 'media' ? json_encode($value) : $value
                ];
            }
        }

        return $data;

    }

    /**
     * @param object $object
     * @return string[]
     * @throws TelegramException
     */
    private static function getMappingFields(object $object): array
    {
        $fileField = self::$mapClassFileFields[get_class($object)] ?? null;

        if(is_null($fileField)) throw new TelegramException("No find mapping for "  . get_class($object));
        if(is_string($fileField)) $fileField = [$fileField];

        return $fileField;
    }

    /**
     * @param string|null $file
     * @return bool
     * @throws TelegramException
     */
    private static function isLocalFile(?string $file): bool
    {
        if ($file && !filter_var($file, FILTER_VALIDATE_URL)) {
            if (file_exists($file)) {
                if (is_readable($file)) {
                    return true;
                } else {
                    throw new TelegramException("File " . $file. " is not readable.");
                }
            }
        }
        return false;
    }
}