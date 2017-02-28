<?php
// content : 처음으로
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"홈",
		NULL,
		NULL
	),
	TRUE
);