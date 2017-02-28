<?php
// content : 3주
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"3주",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"3월13일 월요일","3월14일 화요일","3월15일 수요일","3월16일 목요일","3월17일 금요일","뒤로가기",
		)
	)
);