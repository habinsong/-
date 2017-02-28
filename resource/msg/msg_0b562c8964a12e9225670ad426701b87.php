<?php
// content : 급식정보
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"급식 주기를 선택하세요.",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"알레르기정보","1주","2주","3주","4주","5주","처음으로",

		)
	)

);