<?php
// content : 3월2일 목요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"3.3 금요일

점심

현미차조밥
닭곰탕1.5.8.13
더덕사과무침5.6.13.
돼지고기바베큐구이.5.6.10.12.13.
석박지.2.9.13.

저녁 

해물볶음밥.1.2.5.6.9.10.13.
쇠고기매운국5.6.13.
깍두기.9.13.
메이플피칸파이1.2.5.6.13.
레몬에이드",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"뒤로가기",
		)
	)
);