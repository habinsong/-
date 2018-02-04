<?php
// content : 3일 수요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"3
[중식]
근대된장국5.6.9.13.
깍두기9.13.
사과
해시라이스(고)1.2.5.6.10.12.13.
우리밀흑미찐빵1.2.5.6.13.",
		NULL,
		NULL
	),
	TRUE
);