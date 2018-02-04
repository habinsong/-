<?php
// content : 3월23일 목요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"3월23일 목요일

점심

흑미밥.
참치김치찌개.5.9.13.
떡갈비/소스.1.2.5.6.10.12.13.
깍두기.9.13.
양상추샐러드,드레싱.1.5.6.12.13.
우유(완).2.

저녁

흰쌀밥
닭다리삼계탕.13.
왕새우또띠아.1.2.5.6.9.12.13.
석박지.29.13.
방울토마토.12.
피크틱.5.13.",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"뒤로가기"
		)
	)
);