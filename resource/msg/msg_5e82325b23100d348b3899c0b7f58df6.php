<?php
// content : 3월7일 화요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"3.7 화요일

점심

현미밥.
쇠고기무국.5.6.13.
돈육쭈꾸미볶음.5.6.10.13
애호박전/양념간장.1.5.6
배추겉절이.9.13.

저녁

차조밥.
아욱건새우된장국.5.6.9.13.
숙주미나리무침
뼈없는치즈닭갈비.2.5.6.13.
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