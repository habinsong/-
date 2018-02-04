<?php
// content : 3월15일 수요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"3.15 수요일

점심

참치살김주먹밥.1.5.6.13.
잔치국수.1.5.6.13.
배추김치.9.13.
바나나
마시는요거트2.
우유(완)2.

저녁

현미밥
해물탕.5.6.8.9.13.
닭단호박조림.5.6.12.13
밥더덕무침.13.
배추김치.9.13",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"뒤로가기"
		)
	)
);