<?php
// content : 2월 6일 월요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"5
[중식]
깍두기9.13.
현미찹쌀밥(고)
돼지고기김치찜5.6.9.10.13.
아욱된장국5.6.9.13.
옥수수치즈구이1.2.5.6.10.13.",
		NULL,
		NULL
	),
	TRUE
);