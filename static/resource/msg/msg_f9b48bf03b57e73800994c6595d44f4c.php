<?php
// content : 3월13일 월요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"3.13 월요일 

점심 

현미차조밥.
쇠고기미역국.5.6.13.
돼지갈비찜.5.6.10.13.
잡채.5.6.8.13.
배추김치.9.13.
우유(완).2.

저녁

흰쌀밥.
호박수제비국.1.5.6.13.
오이도라지생채.13.
김치 함박스테이크.1.2.5.6.9.10.12.13.
석박지.2.9.13.",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"뒤로가기"
		)
	)
);