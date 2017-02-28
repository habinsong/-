<?php
// content : 테스트버튼
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"Ymd",
		NULL,
		NULL
	),
	TRUE
);