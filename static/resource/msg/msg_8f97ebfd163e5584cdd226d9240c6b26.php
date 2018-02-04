<?php
// content : 3월30일 목요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"3월30일 목요일

점심 

흰쌀밥.
감자고추장찌개.5.6.13.
과일샐러드.1.2.5.12.
수제돈까스.1.2.5.6.10.12.
깍두기.9.13.
우유(완).2.

저녁

밥자율배식*
자장면.1.2.5.6.10.13.
군만두/채소무침.1.2.5.6.10.13.
배추김치.9.13.
엔요요구르트.2.
단무지.",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"뒤로가기"
		)
	)
);