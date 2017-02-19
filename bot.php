<?php
$bot_id = "301178619:AAGXeirbohMzKfn9mg2FgatgLgGDJgtI6t4";
echo $bot_id;
include("Telegram.php");
$telegram = new Telegram($bot_id);
$chat_id = $telegram->ChatID();
$content = array('chat_id' => $chat_id, 'text' => "Test");
$telegram->sendMessage($content);
