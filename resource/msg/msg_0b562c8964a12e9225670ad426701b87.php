<?php
// content : 급식정보
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"급식정보를 불러옵니다.",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"1주","2주",
		)
	)
);