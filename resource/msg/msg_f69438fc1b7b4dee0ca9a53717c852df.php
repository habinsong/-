<?php
// content : 박병규
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"바보",
		NULL,
		NULL
	),
	TRUE
);