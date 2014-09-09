<?
	require_once("../sess.php");
	
	$content=$_POST['cont'];
	$friend=$_POST['friend'];
	$token=$_SESSION['access_token'];	
	header("Content-Type: text/html; charset= UTF-8 ");
        ob_start();
	function ImageCheck($token, $ImagePath) { // to upload kakaostory server and get url
		$ch2 = curl_init('https://kapi.kakao.com/v1/api/story/upload?');
		$postData = array(
  		  'file' => '@'.$ImagePath,
		);
	        curl_setopt($ch2, CURLOPT_CUSTOMREQUEST, "POST");
	        curl_setopt($ch2, CURLOPT_HTTPHEADER,array("Authorization: Bearer $token"));
	        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch2, CURLOPT_POSTFIELDS,$postData);	
	        $server_output2 = curl_exec($ch2);
		$json=json_decode($server_output2)->url;
		return $json;
	}
	function APIRequestLogging($token) {
		$propertykeys="propertyKeys=[api_request]";
		$ch2 = curl_init('https://kapi.kakao.com/v1/user/me');
		curl_setopt($ch2, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch2, CURLOPT_HTTPHEADER,array("Authorization: Bearer $token"));
		curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch2, CURLOPT_POSTFIELDS,$propertykeys);
		$server_output2 = curl_exec($ch2);
		$json=json_decode($server_output2)->properties->api_request; //get api requests
		if ($json=="") {
			$json = 1;
		} else {
			$json = $json + 1;
		}
		$postdata="properties={api_request:$json}";
		$postdata=urlencode($postdata);
		$ch2 = curl_init('https://kapi.kakao.com/v1/user/update_profile?'.$postdata);
		curl_setopt($ch2, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch2, CURLOPT_HTTPHEADER,array("Authorization: Bearer $token"));
		curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
                $server_output2 = curl_exec($ch2);
		$json_output=json_decode($server_output2);
		echo $server_output2;
		return $server_output2;
	}
	if (is_uploaded_file($_FILES['userfile']['tmp_name'])) { 
		//echo "업로드 여부 : " . $_FILES['myfile']['tmp_name'];
	
		if (isset($_POST['upload_check'])) {
        	        ?><script>alert("업로드에 실패했습니다.");location.href="../index.php";</script><?
        	}


       		 if($_FILES['upload']['size'] > 5242880) {
                	?><script>alert("업로드 최대 용량 (5MB)가 초과되었습니다.");location.href="../index.php";</script><?
       		 }

//      	echo "result" .$_FILES['userfile']['name'];
        	$ableExt = array('jpg','jpeg','gif','png','bmp');
        	$path = pathinfo($_FILES['userfile']['name']);
	        $ext = strtolower($path['extension']);
//		echo $_FILES['userfile']['name'];
	        if(!in_array($ext, $ableExt)) {
	                ?><script>alert("사진 파일만 업로드 가능합니다.");location.href="../index.php";</script><?

	        }//if
		
		 $filepath="../upload/";
	         $original_filename=basename($_FILES['userfile']['name']);
	         $sha1_filename=sha1($original_filename);
		 $original_path="../upload/".$sha1_filename.".".$ext;
                //중요 이미지의 경우 웹루트(www) 밖에 위치할 것을 권장(예제 편의>상 아래와 같이 설정)
        	$url="http://webstory.sevens.pe.kr/upload/$sha1_filename.".$ext;
		$origin_url=$url;
	        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $filepath.$sha1_filename.".".$ext)) {
        		$pictureUpload=true;	        
	        } else {
        	        ?><script>alert("업로드에 에러가 발생했습니다.");location.href="../index.php";</script><?
			print_r($_FILES);
        	}
		
	} else { //이미지가 없을때
	
		$pictureUpload=false;
	}

	if($friend=="on") { //권한 설정
		$perm="F";
	} else {
		$perm="A";
	}
	
	if($pictureUpload) { //사진 업로드 여부 확인
		//$param="content=$data&image_url=$url&permission=$perm";
		$data=urlencode($content);
		$url=urlencode($url);
	} else {
		$data=urlencode($content);
		//$param="content=$data&permission=$perm";
	}
//	echo "내용 : $content";
//	echo "URL : $url";
//	echo "Perm : $perm";
//	echo "token : $token";
//	echo "path : $original_path";
//	echo "Kakao ImageURL : " . ImageCheck($token,$original_path);
	
	$kakao_image=ImageCheck($token,$original_path);	
//	$data=urlencode($param);
	$ch2 = curl_init('https://kapi.kakao.com/v1/api/story/post?'."image_url=$kakao_image"."&content=$data"."&permission=$perm");
	curl_setopt($ch2, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch2, CURLOPT_HTTPHEADER,array("Authorization: Bearer $token"));
		
	curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);

	$server_output2 = curl_exec($ch2);
	$json=json_decode($server_output2)->code;
	
	unlink($original_path); // Privacy Remove

	if ($server_output2=="") {
		//API 요청수 기록하기
		$api=APIRequestLogging($token);
		?><script>alert("업로드가 성공적으로 완료되었습니다.");location.href="../index.php";</script><?
	} else {
		?><script>alert("내부 오류가 발생하였습니다. 오류 코드는<?=$json?> 입니다.");</script><?
	}
	//curl post 기능임.
?>
