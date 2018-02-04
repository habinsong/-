<?php
// content : 4주
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"4주",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"3월20일 월요일","3월21일 화요일","3월22일 수요일","3월23일 목요일","3월24일 금요일","뒤로가기",
		)
	)
);