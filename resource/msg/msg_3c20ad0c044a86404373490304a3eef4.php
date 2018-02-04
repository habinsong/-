<?php
// content : 11일 목요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"11
[중식]
찰보리밥
순두부찌개1.5.9.13.
청포묵김무침5.6.13.
사태떡볶음5.6.10.13.
배추김치9.13.",
		NULL,
		NULL
	),
	TRUE
);