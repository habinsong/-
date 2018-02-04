<?php
// content : 임시시간표
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"임시시간표 안내
-학년을 선택해주세요.",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"1학년", "2학년", "3학년",
		)
	)
);