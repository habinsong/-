<?php
// content : 2일 화요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"2
[중식]
찰보리밥
된장찌개5.6.9.13.
배추김치9.13.
달걀찜1.2.
콩나물돼지불고기5.6.10.13",
		NULL,
		NULL
	),
	TRUE
);