<?php

namespace Klev\TelegramBotApi\Types;

/**
 * Describes the options used for link preview generation.
 *
 * Class LinkPreviewOptions
 * @package Klev\TelegramBotApi\Types
 *
 * @link https://core.telegram.org/bots/api#linkpreviewoptions
 */
final class LinkPreviewOptions extends BaseType
{
    /**
     * Optional. True, if the link preview is disabled
     * @var bool|null
     */
    public ?bool $is_disabled = false;
    /**
     * Optional. URL to use for the link preview. If empty, then the first URL found in the message text will be used
     * @var string|null
     */
    public ?string $url = '';
    /**
     * Optional. True, if the media in the link preview is supposed to be shrunk; ignored if the URL isn't explicitly
     * specified or media size change isn't supported for the preview
     * @var bool|null
     */
    public ?bool $prefer_small_media = false;
    /**
     * Optional. True, if the media in the link preview is supposed to be enlarged; ignored if the URL isn't explicitly
     * specified or media size change isn't supported for the preview
     * @var bool|null
     */
    public ?bool $prefer_large_media = false;
    /**
     * Optional. True, if the link preview must be shown above the message text; otherwise, the link preview will be
     * shown below the message text
     * @var bool|null
     */
    public ?bool $show_above_text = false;
}