<?php
	$cl_path="..";
	include_once($cl_path."/menu.php");
?>
<html>
<head>
<title>KakaoStory In Web</title>
</head>
<center>
<!-- Nanum Godic -->
<font class="nanum">
<br>
<a href="../index.php"><img src=<?=$cl_path?>/img/kslogo.png></a>
<!-- Body -->
<br>
<br>
<br>
<br>
현재 문의는 이메일만 받고있습니다.
<br>
버그 및 개발 관련 문의 : RainC (김동규) - rainc@crplab.kr
<br>
디자인 관련 문의 : Seven (선민재) - seven@crplab.kr
<br>
소스코드 관련 문의 받지 않습니다.
<br>
<br>
아래는 에러 코드 설명입니다.
<br>
-10      내부 API 서버 오류입니다. (요청 초과, 이 경우에는 글이 올라갈경우는 상관 없지만 글이 안올라간다면 이메일 부탁드립니다.)
<br>
-101     해당 앱에 연결이 되지 않은 사용자의 요청 오류입니다. (다시 로그인 해보세요)
<br>
-102     이미 해당 앱에 연결된(가입/등록) 사용자가 재연결을 시도할 경우 (이 경우는 별로 없습니다)
<br>
-103     존재하지 않는 카카오 계정에 대한 호출 (이 경우는 별로 없습니다)
<br>
-602     카카오스토리 이미지 업로드시 타임아웃 발생 (다시 시도해보세요)
<br>
-201     해당 내용은 API 파라미터 오류입니다. 이 오류가 뜨면 위의 이메일로 문의 주세요.
<br>
<br>
<br>
그 외에 오류 코드가 나온다면 문의 부탁 드립니다.
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<? require_once("../footer.php"); ?>
</font>
</body>
</center>
</html>
