<?php
// content : 4일 목요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"4
[중식]
배추김치9.13.
닭살무국13.15.
현미찹쌀밥(고)
야채떡볶이/김말이1.5.6.13.
오이지무침13.",
		NULL,
		NULL
	),
	TRUE
);