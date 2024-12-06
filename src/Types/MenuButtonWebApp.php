<?php

namespace Klev\TelegramBotApi\Types;

/**
 * Represents a menu button, which launches a Web App.
 *
 * @link https://core.telegram.org/bots/api#menubuttonwebapp
 *
 * Class MenuButtonWebApp
 * @package Klev\TelegramBotApi\Types
 */
class MenuButtonWebApp extends MenuButton
{
    /**
     * Type of the button, must be web_app
     * @var string
     */
    public string $type = MenuButton::TYPE_WEB_APP;
    /**
     * Text on the button
     * @var string
     */
    public string $text;
    /**
     * Description of the Web App that will be launched when the user presses the button. The Web App will be able to
     * send an arbitrary message on behalf of the user using the method answerWebAppQuery. Alternatively, a t.me link
     * to a Web App of the bot can be specified in the object instead of the Web App's URL, in which case the Web App
     * will be opened as if the user pressed the link.
     * @var WebAppInfo
     */
    public WebAppInfo $web_app;

    protected function bindObjects($key, $data)
    {
        if ($key == 'web_app') {
            return new WebAppInfo($data);
        }

        return parent::bindObjects($key, $data);
    }
}