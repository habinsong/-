
#  쌍용고급식 카카오톡 봇

카카오톡 자동응답 API 란?

플러스친구/옐로아이디 에서 자동응답 서비스를 사용하는 API 이다.
( https://github.com/plusfriend/auto_reply )
-------------------------------------------------------------------------
프로젝트개발에서 서버는 Amazon AWS EC2 AMI, 
Apache2 + PHP7.0 + MySQL 기반으로 사용했으며


앞으로 여러(?) 기능을 추가할예정이다.
예를 들면 파싱한걸 불러온다던지(오류때문에 현재는 진행중)
DB 에서 값을 가져온다던지
기타등등....



(https://github.com/humit0/kakao_auto_reply) 
<- keyboard 버그 등을 수정하여 이분의 API를 사용했으며,
추가적으로 Button,Message 을 추가해서 사용했다.
자세한건(http://humit.tistory.com/248)
php5.3/ 5.5/ 7.0 구동확인

nginx 에서는 .htaccess 파일을 수정해주어야 정상적으로 실행가능하다.
그밖의 자잘한 PHP 환경에서의 오류 수정했다.

로그인 ID 와 PW 는 admin.config.php 에 저장된다.
 
 
(관련 오류는 하단 참조)

### 관련오류 ###

# install.php 오류
 
 install.php 에서 아무런 반응이 없거나 또는 오류가 난다면 
 var/www/html/ 에 있는 파일의 권한 설정의 문제이므로 
 권한을 읽기/쓰기/실행 모두 허용해주면 된다(777)  
 
 또는 config.php 파일의 define("BASE_URL", "주소"); 에서 
 "주소" 사이가 아닌 BASE_URL에 자신의 주소를 입력했을수도 있다.
 
 혹은, "주소/"에서 "/" 를 빼먹었을수도 있다.
 또, 하위 폴더에 API 파일을 넣었다면
  주소/하위폴더/ 이렇게 입력해야한다
 
# .htaccess 오류
 
 대부분 설명된 오류들이 서로 호환(?)되는데
 
 만약 안된다면 .htaccess 파일의 
 RewriteRule ^(.*)$ /index.php/?id=$1 [L] 를 유심히 봐라.
 /var/www/html/ 이 아닌 /var/www/html/하위 폴더/ 라면,
 
 .htaccess 파일의 
 RewriteRule ^(.*)$ /index.php/?id=$1 [L] 를
 RewriteRule ^(.*)$ /하위폴더/index.php/?id=$1 [L] 로 수정하면 된다.


$
# Default Keyboard:[] 오류

 처음 로그인과정에서 Default Keyboard:[] 이렇게 표시된다면, 
 httpd.conf 또는 apache2.conf 파일의

 <Directory> 경로(모든<Directory>)의 AllowOverride 설정을 
 All 로 변경하면 된다.
 
 예: AllowOverride None -> AllowOverride All

# mod_rewirte 설치
 
 위에 오류를 해결하지 못했다면 mod_rewirte 모듈이 
 설치가 안되있을수도 있다.(거의 기본적으로 설치됨)
 
# Failed to load home Keyboard
  
  위에있는 파일권한 또는 <Directory> 경로를 수정하면 된다.
  
  
# 버튼안에 버튼 오류(?)
 관리자 로그인후, 버튼추가하기 탭에서 Keyboard 옵션에서 
 Default Keyboard를 사용하지 않고, 
 텍스트를 입력하면 버튼안에 버튼이 추가되는데
 여러 버튼을 추가할수 있게 만들어졌지만 
 실제로는 버튼을 1개밖에 만들지 못하거나,
 오류를 뿜뿜거린다.
 
 버튼안의 버튼에 예를들어 "버튼1","버튼2","버튼3", 이라면 
 코드(resourec 폴더 안의, msg 폴더에 생성한 파일)를
 보면 "버튼1버튼2버튼3", 이렇게 되있다.
 API 상의 버그라고 생각0
 
 해결방법은,
 resourec 폴더 안의, msg 폴더에 생성한 파일에서의
 
 echo new Msg(
	new Message(
		"텍스트",
		NULL,
		NULL
	),
	new Keyboard(
		array(
			"버튼1버튼2버튼3",))



 여기서 "버튼1버튼2버튼3" 이것을 
 "버튼1","버튼2","버튼3", 로 
 수정해주면 된다.
 
 
 
# 2018년 2월 4일

거의 1년만에 업데이트
 
 
 
 
 
 
