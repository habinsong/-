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
			"3월6일 월요일","3월7일 화요일","3월8일 수요일","3월9일 목요일","3월10일 금요일","뒤로가기",
		)
	)
);