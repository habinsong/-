<?php
// content : 알레르기정보
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"* 알레르기 정보
①난류 ②우유 ③메밀 ④땅콩 ⑤대두 ⑥밀 ⑦고등어 ⑧게 ⑨새우 ⑩돼지고기 ⑪복숭아 ⑫토마토 ⑬아황산염",
		NULL,
		NULL
	),
	TRUE
);