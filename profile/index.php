<?php
	$cl_path="..";	
	include_once($cl_path."/sess.php");
	include_once($cl_path."/menu.php");
	
	if (isset($_SESSION['token'])) {
        } else {
		?> <script>location.href="../login.php"</script><?
                echo $_SESSION['token'];
                session_destroy();
        }
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
<h2>My Page</h2>
<br>
<img src=<?=$_SESSION['profile'] ?> width="200" height="200"> 
<br>
<br>
닉네임 : <?=$_SESSION['nickname']?>
<br>
<?
if(!$_SESSION['birthday'] == "")
{
	echo "생일 : ".$_SESSION['birth']; 
}
?>
<br>
<br>
<input type="button" value="앱 연결 해제" onclick="Unlink()">
<SCRIPT>
function Unlink() 
{
	if(confirm("정말 앱 연결을 해제 하시겠습니까?")) 
	{
		location.href="http://webstory.sevens.pe.kr/unreg.php/";
	}
}

</SCRIPT>
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
