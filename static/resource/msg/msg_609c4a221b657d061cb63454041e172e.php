<?php
// content : 27일~31일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"3월 마지막주",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"27일"
		)
	)
);