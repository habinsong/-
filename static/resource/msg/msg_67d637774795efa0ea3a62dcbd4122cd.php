<?php
// content : 3월24일 금요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"3월24일 금요일

점심 

현미보리밥.
등뼈감자탕.5.6.9.10.13.
시금치무침.5.6.
깐풍기.1.5.6.12.13.
총각김치.9.13.
우유(완).2.

저녁

차수수밥.5.13.
유채된장국.5.6.13.
돼지고기김치찜.5.6.9.10.13.
건파래볶음.13.
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