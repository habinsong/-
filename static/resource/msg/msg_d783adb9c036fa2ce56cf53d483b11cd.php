<?php
// content : 3월28일 화요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"3월28일 화요일

점심

녹두차조밥.
애배추육개장.13.
참나물고추장무침.5.13.
오징어불고기철판구이(떡).5.6.10.13.

저녁

기장밥.
동태찌개.5.13.
안동찜닭.5.6.8.12.13.
진미채도라지무침.5.6.13.
배추김치.9.13.",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"뒤로가기"
		)
	)
);