<?php
// content : 5주
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"5주",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"3월27일 월요일","3월28일 화요일","3월29일 수요일","3월30일 목요일","3월31일 금요일","뒤로가기",
		)
	)
);