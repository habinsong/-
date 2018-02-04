<?php
// content : 3월8일 수요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"3.8 수요일

점심
스팸김치볶음밥.5.6.9.10.13.
쑥갓어묵국.1.5.6.13.
닭다리(북채)바베큐소스구이.5.10.13
백김치.9.13.
딸기.

저녁

흰쌀밥.
돈육김치찌개.5.6.9.10.13.
견과류멸치조림.4.5.6.13.
수제소시지구이/채소무침.2.5.6.10.13.
배추겉절이.9.13.",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"뒤로가기"
		)
	)
);