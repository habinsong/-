<?php
// content : 2월 6일 화요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"6
[중식]
흰밥
배추김치9.13.
닭갈비2.5.6.13.15.
메추리알꽈리고추조림1.5.6.13.
들깨무채국(고)13.",
		NULL,
		NULL
	),
	TRUE
);