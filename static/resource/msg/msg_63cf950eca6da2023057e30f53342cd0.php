<?php
// content : 3월22일 수요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"3월22일 수요일

점심

봄나물비빔밥.5.
황태맑은국5.6.13.
도토리묵무침.5.6.13.
배추김치.9.13.
유과.5.13.
우유(완).2.
우리쌀식혜(유).

저녁

차조기장밥.
버섯매운탕.5.6.13.
사태떡찜.5.6.10.13.
콩나물무침.5.
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