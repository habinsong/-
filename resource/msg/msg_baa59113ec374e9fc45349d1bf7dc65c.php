<?php
// content : 9일 화요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"9
[중식]
찰보리밥(고)
깍두기9.13.
버섯된장국5.6.9.13.
김치전1.5.6.9.13.
매운닭볶음5.6.13.15.",
		NULL,
		NULL
	),
	TRUE
);