<?php

require dirname(__DIR__).'/../vendor/autoload.php';

$pageUrl = "https://telegram.bot.api";

$api = new \Klev\TelegramBotApi\Telegram('1376907517:AAFa-pk0_2-33xQpc2RdVs9bDSts9yBNck4');

$a = $api->setWebhook($pageUrl);


$body = file_get_contents('php://input');
$data = json_decode($body, true);

$log = date('Y-m-d H:i:s') . ' Request from bot ' . print_r($data, true);
file_put_contents('app.log', $log, FILE_APPEND);

var_dump($a);