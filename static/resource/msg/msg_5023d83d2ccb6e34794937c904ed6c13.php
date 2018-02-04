<?php
// content : 테스트
use \kakao\Msg;
use \kakao\Msg\Message;
use \kakao\Keyboard;

echo new Msg(

	$ymd = date('Y.m.d');

	new Message(


		if ($ymd = date("Y-m-d",strtotime ("+0 days")) {
			"급식 없음"
			# code...
		} elseif ($ymd = date("Y-m-d",strtotime ("+1 days"));

			"[중식]
오므라이스.1.2.5.6.10.12.13.
팽이된장국.5.6.13.
깍두기.9.13.
감귤주스.5.13.
도깨비핫도그.1.2.5.6.10.13.",
			# code...
		} elseif ($ymd = date("Y-m-d",strtotime ("+2 days")) {
			"[중식]
현미차조밥.
닭곰탕.1.5.8.13.
더덕사과무침5.6.13.
돼지고기바베큐구이.5.6.10.12.13.
석박지.2.9.13.",
			# code...
		} elseif ($ymd = date("Y-m-d",strtotime ("+3 days")) {
			"[중식]
수수기장밥.5.13.
팽이미소장국5.6.13.
치킨커틀렛.1.2.5.6.13.
깍두기.9.13.
양상추샐러드,드레싱1.5.6.12.13.
[석식]
친환경발아칠곡밥.5.
쇠고기감자국.5.6.13.
매콤돼지갈비찜.5.6.10.13.
뱅어포튀김.5.13.
배추김치.9.13."
			# code...
		} elseif ($ymd = date("Y-m-d",strtotime ("+4 days")) {
			"[중식]
현미밥.
쇠고기무국.5.6.13.
돈육쭈꾸미볶음.5.6.10.13.
애호박전/양념간장.1.5.6.
배추겉절이.9.13.
[석식]
차조밥.
아욱건새우된장국.5.6.9.13.
숙주미나리무침.
뼈없는치즈닭갈비.2.5.6.13.
배추김치.9.13."
			
		}else{
			"급식이 없습니다.",
			# code...
		}
		NULL,
		NULL
	),
	TRUE
);

