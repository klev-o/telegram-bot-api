<h1 align="center">
    Telegram Bot API
</h1>

Simple and convenient implementation Telegram bot API with php version ^7.4 support. Based on the [Official Telegram api](https://core.telegram.org/bots/api)

[![License](https://img.shields.io/github/license/klev-o/telegram-bot-api)](https://github.com/klev-o/telegram-bot-api/blob/master/LICENSE)
![Packagist Downloads](https://img.shields.io/packagist/dt/klev-o/telegram-bot-api)
![GitHub release (latest by date including pre-releases)](https://img.shields.io/github/v/release/klev-o/telegram-bot-api?include_prereleases)
![Scrutinizer code quality (GitHub/Bitbucket)](https://img.shields.io/scrutinizer/quality/g/klev-o/telegram-bot-api)
![GitHub last commit](https://img.shields.io/github/last-commit/klev-o/telegram-bot-api)

## Intro

This bot is full support [Official Telegram api](https://core.telegram.org/bots/api). All available types and methods are described using classes with documentation of all fields. You don't even need to refer to the official documentation - all descriptions are present in the bot! But still, for each class, the url to the documentation is indicated, where you can study the nuances, etc.

**Attention!** At the moment, the bot only supports receiving updates through Webhook. Webhook is more efficient than Long-Polling, reduces server load and guarantees almost instant data refresh for your application. But it is worth considering some of the nuances, in more detail [here](https://core.telegram.org/bots/faq#im-having-problems-with-webhooks)

## Installation

Run this command in your command line:
```
composer require klev-o/telegram-bot-api
```

## Usage

### Setting up a webhook

First, you need to install Webhook, to which the telegram will send updates. This can be done using the following code:

```php
<?php

use Klev\TelegramBotApi\Telegram;
use Klev\TelegramBotApi\TelegramException;
use Klev\TelegramBotApi\Methods\SetWebhook;

require 'vendor/autoload.php';

$pageUrl = "https://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];

try {
    $bot = new Telegram('your personal token');

    if(!file_exists("webhook.trigger")){
        $webhook = new SetWebhook($pageUrl);
        $result = $bot->setWebhook($webhook);
        if($result) {
            file_put_contents("webhook.trigger", time());
            echo 'webhook was set';
        }
    }
    
    //...
} catch (TelegramException $e) {
    // log errors
}
```

To prevent the webhook from being installed on every request, we add a simple check. Now open the file in your browser and you should see 'webhook was set'. If any error has occurred, then it can be caught in the corresponding block

### Getting Webhook Updates

To receive updates, you must use the method *getWebhookUpdates()*:
```php
<?php

use Klev\TelegramBotApi\Telegram;
use Klev\TelegramBotApi\TelegramException;
use Klev\TelegramBotApi\Methods\SetWebhook;

require 'vendor/autoload.php';

$pageUrl = "https://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];

try {
    $bot = new Telegram('your personal token');

    if(!file_exists("webhook.trigger")){
        $webhook = new SetWebhook($pageUrl);
        $result = $bot->setWebhook($webhook);
        if($result) {
            file_put_contents("webhook.trigger", time());
            echo 'webhook was set';
        }
    }
    
    /**@var \Klev\TelegramBotApi\Types\Update $update*/
    $update = $bot->getWebhookUpdates();
} catch (TelegramException $e) {
    // log errors
}
```
The $update variable will be an object [Update](https://core.telegram.org/bots/api#update)

In general, by reading the official documentation, you can see the types for the fields of objects, or the return values ​​of methods - all this is completely consistent with the code.

For example, $update->message is of type Message, which corresponds to Klev\TelegramBotApi\Types\Message.

Just look at the documentation and call the methods you want!

### A real example

Let's say we want the bot to reply "Hello, *your username*" to every message to the bot.

Let's write the following code::

```php
<?php

use Klev\TelegramBotApi\Telegram;
use Klev\TelegramBotApi\TelegramException;
use Klev\TelegramBotApi\Methods\SetWebhook;
use Klev\TelegramBotApi\Methods\SendMessage;

require 'vendor/autoload.php';

$pageUrl = "https://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];

try {
    $bot = new Telegram('your personal token');

    if(!file_exists("webhook.trigger")){
        $webhook = new SetWebhook($pageUrl);
        $result = $bot->setWebhook($webhook);
        if($result) {
            file_put_contents("webhook.trigger", time());
            echo 'webhook was set';
        }
    }
    
    /**@var \Klev\TelegramBotApi\Types\Update $update*/
    $update = $bot->getWebhookUpdates();
    
    if ($update->message) {
        $chatId = $update->message->chat->id;
        $username = $update->message->from->first_name;
        $text = "Hello, $username!";
        /**@var \Klev\TelegramBotApi\Types\Message $result*/
        $result = $bot->sendMessage(new SendMessage($chatId, $text));
    }
    
} catch (TelegramException $e) {
    // log errors
}
```

As you can see, everything is very simple and straightforward. Remember, methods have many parameters that you can further customize to your preference. Description of each parameter is present in the code in phpdoc, or on the website of the official API documentation

```php 
$chatId = $update->message->chat->id;
$username = $update->message->from->first_name;
$messageId = $update->message->id;
$text = "Hello, $username!";

$msg = new SendMessage($chatId, $text)
$msg->disable_notification = true;
$msg->reply_to_message_id = $messageId;

$bot->sendMessage($msg);
```

## Troubleshooting

Please, if you find any errors or not exactly - report this [problem page](https://github.com/klev-o/telegram-bot-api/issues)