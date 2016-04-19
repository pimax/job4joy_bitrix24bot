<?php

require_once(dirname(__FILE__) . '/vendor/autoload.php');
require_once (dirname(__FILE__) .'/GooglShortener.php');

$config = require 'config.php';

use PicoFeed\Reader\Reader;
use pimax\bitrix24\BotApp;
use pimax\bitrix24\Bot;
use pimax\bitrix24\Message;

$bot = new BotApp($_REQUEST["auth"]);

switch($_REQUEST['event'])
{
    // Receive message from user
    case 'ONIMBOTMESSAGEADD':

        $command = $_REQUEST['data']['PARAMS']['MESSAGE'];

        if (!empty($config['feeds'][$command]))
        {
            getFeed($config['feeds'][$command], $bot);
        } else {
            sendHelpMessage($bot);
        }

    break;

    // Bot join to chat
    case 'ONIMBOTJOINCHAT':
        sendHelpMessage($bot);
    break;

    // Bot deleted
    case 'ONIMBOTDELETE':
        $bot->uninstall();
    break;

    // Bot installed
    case 'ONAPPINSTALL':
        $bot->install(new Bot(
            $config['alias'],
            $config['type'],
            $config['url_message_add'],
            $config['url_welcome_message'],
            $config['url_bot_delete'],
            $config['data']
        ));
    break;
}


/**
 * Send Help Message
 *
 * @param $bot Bot instance
 * @return bool
 */
function sendHelpMessage($bot)
{
    global $config;

    $attach = [];

    foreach ($config['feeds'] as $com => $feed)
    {
        $attach[] = new Message('[send='.$com.']'.$bot->t($feed['Title']).'[/send]');
    }

    $bot->send(new Message($bot->t('Hello! I can help you with IT projects.'), $_REQUEST['data']['PARAMS']['DIALOG_ID'], $attach));

    return true;
}
/**
 * Get Feed Data
 *
 * @param $feed Feed data
 * @param $bot Bot instance
 * @return bool
 */
function getFeed($feed, $bot)
{
    global $googl;

    try {
        $reader = new Reader;
        $resource = $reader->download($feed['Feed']);
        $parser = $reader->getParser(
            $resource->getUrl(),
            $resource->getContent(),
            $resource->getEncoding()
        );
        $feed = $parser->execute();
        $items = array_reverse($feed->getItems());
        if (count($items)) {
            foreach ($items as $itm)
            {
                $url = $googl->shorten($itm->getUrl());

                $message = substr(strip_tags($itm->getContent()), 0, 150);


                $bot->send(new Message("[B]".$itm->getTitle() . "[/B]\n" . $message . "\n", $_REQUEST['data']['PARAMS']['DIALOG_ID']), [
                    new Link($url->id, $url->id)
                ]);
            }
        } else {
            $bot->send(new Message($bot->t('New projects not a found!'), $_REQUEST['data']['PARAMS']['DIALOG_ID']));
        }
    }
    catch (Exception $e) {}

    return true;
}