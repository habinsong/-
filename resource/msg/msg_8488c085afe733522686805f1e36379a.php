<?php
// content : 알레르기정보
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"* 알레르기 정보 
1.난류 2.우유 3.메밀 4.땅콩 5.대두 6.밀 7.고등어 8.게 9.새우 10.돼지고기 11.복숭아 12.토마토 13.아황산류 14.호두 15.닭고기16.쇠고기 17.오징어 18.조개류(굴,전복,홍합 포함) ",
		NULL,
		NULL
	),
	TRUE
);