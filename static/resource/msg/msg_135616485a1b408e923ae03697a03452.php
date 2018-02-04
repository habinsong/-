<?php
// content : 뒤로가기
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"뒤로가기",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"급식정보"
		)
	)
);