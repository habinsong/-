<?php
// content : 정보
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"개발정보",
		NULL,
		array(
			"개발:송하빈",
			"https://www.facebook.com/habin959"
		)
	),
	TRUE
);