<?php
// content : 27일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"[중식]
흑미밥.
조랭이떡만둣국.1.5.6.10.13.
골뱅이무침/소면.5.6.13.
달걀말이.1.5.
깍두기.9.13.
우유(완)2.
[석식]
흰쌀밥.
쇠고기무국.5.6.13.
연두부,양념간장5.6.
비엔나칠리소스볶음.1.2.5.6.10.12.13.
배추김치.9.13.",
		NULL,
		NULL
	),
	TRUE
);