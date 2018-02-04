<?php
// content : 3월20일 월요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"3.20 월요일

점심 

차조기장밥.
냉이된장국.5.6.13.18.
등갈비김치찜.5.9.10.13
파프리카새송이볶음
총각김치.9.13
골드파인애플.
우유(완).2.

저녁

흰쌀밥.
팽이된장국.5.6.13.
미트소스스파게티.1.2.5.6.12.13.
피망치즈돈까스.1.2.5.6.10.12.13.
깍두기.9.13",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"뒤로가기"
		)
	)
);