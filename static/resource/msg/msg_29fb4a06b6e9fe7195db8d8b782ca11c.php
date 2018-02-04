<?php
// content : 3월29일 수요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"3월29일 수요일

점심

돈육김치덮밥.5.6.9.10.13.
표고부추달걀국.1.5.6.9.13.
왕새우튀김&핫칠리소스.1.5.6.9.13.
콘치즈구이.1.2.5.6.10.13.
깍두기.9.13.
우유(완).2.

저녁

현미밥.
어묵매운탕.1.5.6.13.
고구마미트번.1.2.5.6.10.12.13.
반달감자,케찹.5.12.
깍두기.9.13.",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"뒤로가기"
		)
	)
);