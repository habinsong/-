<?php
// content : 2주
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"2주",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"8일 월요일","9일 화요일","10일 수요일","11일 목요일","12일 금요일",
		)
	)
);