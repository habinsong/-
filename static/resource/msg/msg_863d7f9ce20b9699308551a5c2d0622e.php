<?php
// content : 3월14일 화요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"3.14 화요일

점심 

기장밥
맑은콩나물국.5.6.13.
비름나물무침.5.6.13.
치즈불닭.2.5.6.13.
배추김치.9.13.
우유(완)2.

저녁

잡곡밥
근대감자된장국.5.6.13.
목살구이&파채무침5.6.10.13.
새송이양념구이.5.6.13.
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