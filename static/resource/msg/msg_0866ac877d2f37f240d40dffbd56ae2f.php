<?php
// content : 1주
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"1주",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"3월2일 목요일","3월3일 금요일","뒤로가기"
		)
	)
);