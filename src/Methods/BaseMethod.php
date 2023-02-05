<?php


namespace Klev\TelegramBotApi\Methods;


use Klev\TelegramBotApi\Methods\Stickers\AddStickerToSet;
use Klev\TelegramBotApi\Methods\Stickers\CreateNewStickerSet;
use Klev\TelegramBotApi\Methods\Stickers\SendSticker;
use Klev\TelegramBotApi\Methods\Stickers\SetStickerSetThumb;
use Klev\TelegramBotApi\Methods\Stickers\UploadStickerFile;
use Klev\TelegramBotApi\Methods\UpdatingMessages\EditMessageMedia;
use Klev\TelegramBotApi\TelegramException;
use Klev\TelegramBotApi\Types\InlineKeyboardButton;
use Klev\TelegramBotApi\Types\InlineKeyboardMarkup;
use Klev\TelegramBotApi\Types\InputMedia;
use Klev\TelegramBotApi\Types\InputMediaAnimation;
use Klev\TelegramBotApi\Types\InputMediaAudio;
use Klev\TelegramBotApi\Types\InputMediaDocument;
use Klev\TelegramBotApi\Types\InputMediaPhoto;
use Klev\TelegramBotApi\Types\InputMediaVideo;
use Klev\TelegramBotApi\Types\KeyboardButton;
use Klev\TelegramBotApi\Types\ReplyKeyboardMarkup;

/**
 * Class BaseMethod
 * @package Klev\TelegramBotApi\Methods
 */
abstract class BaseMethod
{
    private static array $mapClassFileFields = [
        SetWebhook::class => 'certificate',
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
        CreateNewStickerSet::class => ['png_sticker', 'tgs_sticker', 'webm_sticker'],
        AddStickerToSet::class => ['png_sticker', 'tgs_sticker', 'webm_sticker'],
        SetStickerSetThumb::class => 'thumb',
        UploadStickerFile::class => 'png_sticker',
    ];

    public function preparation(): void
    {
        if (!empty($this->reply_markup)) {
            if ($this->reply_markup instanceof ReplyKeyboardMarkup) {
                foreach ($this->reply_markup->keyboard as $item) {
                    /**@var KeyboardButton $btn*/
                    foreach ($item as $btn) {
                        $btn->removeNullableFields();
                        if (isset($btn->request_chat)) {
                            if (!empty($btn->request_chat->user_administrator_rights)) {
                                $btn->request_chat->user_administrator_rights = json_encode(
                                    $btn->request_chat->user_administrator_rights
                                );
                            }
                            if (!empty($btn->request_chat->bot_administrator_rights)) {
                                $btn->request_chat->bot_administrator_rights = json_encode(
                                    $btn->request_chat->bot_administrator_rights
                                );
                            }
                        }
                    }
                }
            }
            if ($this->reply_markup instanceof InlineKeyboardMarkup) {
                foreach ($this->reply_markup->inline_keyboard as $item) {
                    /**@var InlineKeyboardButton $btn*/
                    foreach ($item as $btn) {
                        $btn->removeNullableFields();
                    }
                }
            }
            $this->reply_markup = json_encode($this->reply_markup);
        }

        if (!empty($this->results)) {
            $this->results = json_encode($this->results);
        }

        if (!empty($this->prices)) {
            $this->prices = json_encode($this->prices);
        }

        if (!empty($this->suggested_tip_amounts)) {
            $this->suggested_tip_amounts = json_encode($this->suggested_tip_amounts);
        }

        if (!empty($this->shipping_options)) {
            $this->shipping_options = json_encode($this->shipping_options);
        }

        if (!empty($this->errors)) {
            $this->errors = json_encode($this->errors);
        }
    }

    /**
     * @param $object
     * @return array
     * @throws TelegramException
     */
    public static function getDataForMultipart($object): array
    {
        $data = [];

        $fileField = self::getMappingFields($object);;

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