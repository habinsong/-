<?php
// content : 12일 금요일
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"12
[중식]
제육김치덮밥5.6.10.13.
물결무늬감자튀김/케찹1.2.5.6.10.13.
귤
깍두기9.13.
부추달걀국1.5.6.13.",
		NULL,
		NULL
	),
	TRUE
);