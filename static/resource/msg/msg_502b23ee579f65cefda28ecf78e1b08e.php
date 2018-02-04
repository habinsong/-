<?php
// content : 3월6일 월요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"3.6 월요일 

점심

수수기장밥.5.13
팽이미소장국.5.6.13.
치킨커틀렛.1.2.5.6.13.
깍두기.9.13.
양상추샐러드,드레싱.1.5.6.12.13.

저녁

친환경발아칠곡밥.5.
쇠고기감자국.5.6.13.
매콤돼지갈비찜.5.6.10.13.
뱅어포튀김.5.13.
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