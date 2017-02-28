<?php
// content : 3월21일 화요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"3월21일 화요일

점심

흰쌀밥
부대찌개(당)2.5.6.8.9.1.13.
봄동겉절이.13.
취나물무침.5.6.13.
삼치데리야끼.2.5.6.13.
우유(완).2.

저녁

율무현미밥.
바지락미역국.5.6.13.
오삼불고기.5.6.10.13.
쥐어채아몬드볶음.5.6.13.
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