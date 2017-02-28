<?php
// content : 3월10일 금요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"3.10 금요일

점심

율무현미밥.
표고계란국.1.13.
마늘쫑멸치볶음.5.6.13.
고추장불고기/상추쌈.5.6.10.13.
총각김치.9.13

저녁

저녁이 없습니다.",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"뒤로가기"
		)
	)
);