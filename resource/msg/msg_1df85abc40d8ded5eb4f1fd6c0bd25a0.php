<?php
// content : 8일 월요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"8
[중식]
부대찌개2.5.6.10.13.
깍두기9.13.
돈육메추리알장조림1.5.6.10.13.
도시락김13.
현미찹쌀밥(고)",
		NULL,
		NULL
	),
	TRUE
);