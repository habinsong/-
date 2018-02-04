<?php
// content : 급식정보
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"급식 주기를 선택하세요.
		-쌍용고 급식은 맛이없습니다.",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"27일~31일" ,

		)
	)

);