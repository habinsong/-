<?php
// content : 3월9일 목요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"3.9 목요일

점심

녹두기장밥.
설렁탕.5.8.13.
도라지오이무침.5.6.13.
해물파전.1.6.9.13.
석박지.2.9.13.

저녁

저녁이 없습니다.",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"뒤로가기"
		)
	)
);