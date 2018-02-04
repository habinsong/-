<?php
// content : 10일 수요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"10
[중식]
깍두기9.13.
누룽지9.13.
자장밥(고)2.5.6.10.13.
야쿠르트2.
프렌치토스트1.2.5.6.13.",
		NULL,
		NULL
	),
	TRUE
);