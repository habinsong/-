<?php
// content : 개발정보
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(
	new Message(
		"server: Amazon AWS EC2 AMI 
software: Apache2 + PHP7.0 + mysql
개발:송하빈",
		NULL,
		array(
			"프로필 보기",
			"https://www.facebook.com/habin959"
		)
	),
	TRUE
);