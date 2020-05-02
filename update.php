<?php
/**
 * Telegram Bot example.
 */
include "config.php";

include 'libs/Telegram.php';
$telegram = new Telegram(TELEGRAM_BOT_TOKEN);

$text = $telegram->Text();
$chat_id = $telegram->ChatID();

// Check if the text is a command
if (!is_null($text) && !is_null($chat_id)) {
	$reply = 'Привет ;-)';
	$telegram->sendMessage($content);
}
