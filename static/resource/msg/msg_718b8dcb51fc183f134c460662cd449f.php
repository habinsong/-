<?php
// content : 3월17일 금요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"3월17일 금요일

점심

친환경발아칠곡밥.5.
두부된장찌개.5.6.13.
올방개묵/김치볶음.9.13.
삼겹살깻잎초회.5.10.13.
총각김치.9.13
우유(완).2.

저녁

찰보리밥.
순두부찌개(조).5.9.10.13.
된장깻잎장아찌.13.
수제탕수육/소스 1.2.5.6.10.11.12.13.
총각김치.9.13.",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"뒤로가기"
		)
	)
);