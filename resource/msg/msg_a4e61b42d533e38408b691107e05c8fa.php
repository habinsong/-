<?php
// content : 5일 금요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"5
[중식]
배추김치9.13.
시금치고추장무침5.6.
제육볶음5.6.10.13.
흰밥
감자미역국5.6.9.13.",
		NULL,
		NULL
	),
	TRUE
);