<?php


namespace Klev\TelegramBotApi\Types;

/**
 * Represents a general file to be sent.
 *
 * Class InputMediaDocument
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#inputmediadocument
 */
class InputMediaDocument implements InputMedia
{
    /**
     * Type of the result, must be document
     * @var string
     */
    public string $type = 'document';
    /**
     * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL
     * for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using
     * multipart/form-data under <file_attach_name> name. More info on Sending Files »
     * @var string
     */
    public string $media;
    /**
     * 	Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported
     * server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and
     * height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be
     * reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail
     * was uploaded using multipart/form-data under <file_attach_name>. More info on Sending Files »
     * @var string|null
     */
    public ?string $thumb = '';
    /**
     * Optional. Caption of the animation to be sent, 0-1024 characters after entities parsing
     * @var string|null
     */
    public ?string $caption = '';
    /**
     * Optional. Mode for parsing entities in the animation caption. See formatting options for more details.
     * @var string|null
     */
    public ?string $parse_mode = 'html';
    /**
     * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @var MessageEntity[]|null
     */
    public ?array $caption_entities = null;
    /**
     * Optional. Disables automatic server-side content type detection for files uploaded using multipart/form-data.
     * Always true, if the document is sent as part of an album.
     * @var bool|null
     */
    public ?bool $disable_content_type_detection;

    public function __construct(string $media)
    {
        $this->media = $media;
    }

//    protected function bindObjects($key, $data)
//    {
//        switch ($key) {
//            case 'caption_entities':
//                $result = [];
//                foreach ($data as $entity) {
//                    $result[] = new MessageEntity($entity);
//                }
//                return $result;
//        }
//
//        return null;
//    }
}