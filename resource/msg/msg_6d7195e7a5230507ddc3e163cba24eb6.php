<?php
// content : 3월2일 목요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"3.2 목요일
점심
오므라이스 1.2.5.6.10.12.13
팽이된장국5.6.13.
깍두기.9.13
감귤주스.5.13.
도깨비핫도그1.2.5.6.10.13

저녁
저녁이 없습니다.
",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"뒤로가기"
		)
	)
);