<?php
// content : 3월16일 목요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"3.16 목요일

점심 

흑미수수밥
오징어무국.5.6.13.
우엉강정.2.5.6.13.
오리훈제채소무침.13.
총각김치.9.13.
우유(완).2.

저녁

카레라이스(바/돈).2.5.6.10.13.
유부국.1.5.6.13
깍두기.9.13.
케이준치킨샐러드(완).1.2.5.6.11.12.13.
자몽에이드.",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"뒤로가기"
		)
	)
);