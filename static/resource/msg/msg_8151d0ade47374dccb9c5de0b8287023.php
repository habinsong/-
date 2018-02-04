<?php
// content : 30일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"[중식]
흰쌀밥.
감자고추장찌개5.6.13.
과일샐러드
과일샐러드.1.2.5.12.
수제돈까스1.2.5.6.10.12.
깍두기.9.13.
우유(완)2.
[석식]
밥자율배식*
자장면.1.2.5.6.10.13.
군만두/채소무침.1.2.5.6.10.13.
배추김치.9.13.
엔요요구르트.2.
단무지.",
		NULL,
		NULL
	),
	TRUE
);