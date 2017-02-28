<?php
// content : 3월31일 금요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"3월31일 금요일

점심

현미보리밥.
두부된장찌개.5.6.13.
삼겹오븐구이.10.
배추김치.9.13.
우유(완).2.
양배추쌈/쌈장.5.6.13.

저녁

차수수밥.5.13.
김치콩나물국.5.9.13.
감자베이컨볶음5.6.10.13.
양념치킨.4.5.6.12.13.
배추겉절이.9.13",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"뒤로가기"
		)
	)
);