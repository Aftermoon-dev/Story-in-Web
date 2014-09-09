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
이젠 일반 사용자도 카카오스토리를 웹에서 이용하실 수 있습니다.
<br>
아직 피드를 불러오는 기능까지는 지원되지 않지만,
<br>
글과 사진 업로드가 가능해졌습니다.
<br>
아직은 BETA 버전입니다. 문제가 있을 수 있으며, 앞으로도 많은 관심 부탁드립니다.
<br>
<br>
저희는 여러분의 개인정보 보호를 위해,  사용자의 유저 토큰이라던지, 엑세스 토큰을 절대로 수집하지 않습니다.
<br>
또한, 사진 업로드시 올라가는 사진들도, 카카오스토리 업로드 과정을 거치게 되면 자동으로 서버에서  삭제되는
<br>
구조로 만들어져 있습니다.
<br>
<br>
카카오스토리 사진 올리는 과정은 이러합니다.
<br>
<br>
사진 업로드-> 이미지 파일을 임시경로에 저장 -> 웹카스 서버에서 카카오 서버로 이미지 업로드 (URL 요청) ->
<br>
카카오 서버에서 이미지 검증이 끝나면 카카오 이미지 URL를 웹카스 서버로 URL 반환 ->
<br>
카카오 스토리 포스팅시 image_url 이라는 파라미터 안에 반환받은 카카오 URL 이미지로 포스팅->
<br>
서버에 임시경로에 저장된  이미지 파일 삭제
<br>
<br>
<br>
개발 : Rain Studio
<br>
코딩 : RainC (김동규)
<br>
디자인 : Seven (선민재), RainC (김동규)
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
