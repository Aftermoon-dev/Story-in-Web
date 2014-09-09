<?
	include_once("sess.php");
	$token=$_SESSION['access_token'];
	$ch = curl_init('https://kapi.kakao.com/v1/user/unlink');
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch,CURLOPT_HTTPHEADER,array("Authorization: Bearer $token"));
	
	$result=curl_exec($ch);
	session_destroy();
	?><script>alert("<?=$result?>");</script><?
	
?>
<script>alert("앱 연결이 해제되었습니다.");</script>
<script>location.href="../login.php"</script>