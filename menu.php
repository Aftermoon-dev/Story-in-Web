<link rel="shortcut icon" href="img/favicon.ico">
<!DOCTYPE html>
<?	 
	include_once($cl_path."/domcheck.php");
	include_once($cl_path."/sess.php");
?>
<html lang="ko">
<head>
<meta charset="UTF-8">
<title>KakaoStory In Web</title>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<style type="text/css">
	.bs-example{
    	margin: 20px;
	font-family: "나눔고딕";
	
}
body {
	background-color: #e5e5e5;
    }
</style>
</head>
<body>
<div class="bs-example">
    <nav id="myNavbar" class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://webstory.sevens.pe.kr/">KakaoStory In Web</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="http://webstory.sevens.pe.kr/index.php">홈</a></li>
                    <li><a href="http://webstory.sevens.pe.kr/introduce/">소개</a>
					<li><a href="http://webstory.sevens.pe.kr/support/">지원</a>
					<li><a href="http://webstory.sevens.pe.kr/update/">업데이트 로그</a>
	       	</li> </ul>

                
		    <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">카카오계정<b class="caret"></b></a>
                    <ul class="dropdown-menu">
					<? if (isset($_SESSION['token'])) {?>
					<li><a href="http://webstory.sevens.pe.kr/profile/"><img src=<?=$_SESSION['profile'] ?> width="100" height="100"></a></li>
					<li><a href="http://webstory.sevens.pe.kr/profile/">닉네임 : <?=$_SESSION['nickname']?></a></li>
					<? if (isset($_SESSION['birth'])) {?>
						<li><a href="http://webstory.sevens.pe.kr/profile/">생일 : <?=$_SESSION['birth']?></a></li>
					<?}?>
					<li><a href="http://webstory.sevens.pe.kr/profile">마이페이지</a></li>
					<li><a href="http://webstory.sevens.pe.kr/logout.php">로그아웃</a></li>
					</ul>
					</li>





		    <? } else { ?>
			<li><a href="https://kauth.kakao.com/oauth/authorize?client_id=yourclientid&redirect_uri=http://yourdomain.com/oauth/oauth.php&response_type=code">로그인</a></li>
                        </ul>
                    </li>
		<? } ?>
                </ul>           
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</div>
</body>
</html>                                		
