<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Ca nhạc</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<base href="{{asset('')}}}">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<style>


			*{
				margin: 0;
				padding: 0;
			}

			/*video.fillWidth*/
			/*{*/
				/*position: fixed;*/
				/*top: 50%;*/
				/*left: 50%;*/
				/*min-width: 100%;*/
				/*min-height: 100%;*/
				/*width: auto;*/
				/*height: auto;*/
				/*z-index: -100;*/
				/*-webkit-transform: translateX(-50%) translateY(-50%);*/
				/*transform: translateX(-50%) translateY(-50%);*/
				/*background-size: cover;*/

			/*}*/


		</style>
		<script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-98415714-1', 'auto');
            ga('send', 'pageview');

		</script>
	</head>
	<body>
		<header id="header">
			<div class="container">
				<nav class="navbar navbar-inverse">
					<div class="navbar-header">
						<a href="{{route('listmusic')}}" class="navbar-brand"><i class="glyphicon glyphicon-home"></i>20GG</a>
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
					</div>
					<!--menu ben phai-->
					<div class="navbar-collapse collapse" id="main-menu">
						<ul class="nav navbar-nav">
							<li><a href="{{route('listmusic')}}">Học qua videos</a></li>
						</ul>
						<!-- <ul class="nav navbar-nav navbar-right">
							<li>
								<button type="button " class="btn btn-default dropdown-toggle round-button-circle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								</button> <span class="caret"></span>
								<ul class="dropdown-menu">
									<li><a href="#">Trịnh Đình Việt</a></li>
									<li><a href="#">250 EXP</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Đăng Xuất</a></li>
								</ul>
							</li>
						</ul> -->
					</div>
				</nav>
			</div>
		</header>
		<section>
			@yield('content')
		</section>
<!-- 		<footer id="footer" style="border: solid 1px #D3D3D3 ;background-image: url(http://indonesiaindonesia.com/attachments/download/21934d1414565373-sepeda-magnet-lipat-x-bike-murah-footer-bg.png)">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<div class="companyinfo">
						<h2>Tiếng Anh 20GG</h2>
						<p>Học mà chơi, chơi mà học</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-widget">
						<h2>Dịch vụ</h2>
						<ul class="nav nav-pills nav-stacked">
							<li><a href="#">Hỗ trợ online</a></li>
							<li><a href="#">Liên hệ với chúng tôi</a></li>
							<li><a href="#">Góp ý,phản hồi</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-widget">
						<h2>Nội dung</h2>
						<ul class="nav nav-pills nav-stacked">
							<li><a href="#">Ca nhạc</a></li>
							<li><a href="#">Hoạt hình</a></li>
							<li><a href="#">Truyện kể</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-md-offset-1">
					<div class="single-widget">
						<h2>Nhận thông tin mới nhât</h2>
						<form action="#" class="searchform">
							<input type="text" placeholder="Nhập địa chỉ email của bạn" />
							<button type="submit" class="btn btn-default">Submit<i class="fa fa-arrow-circle-o-right"></i></button>
							<p>Bạn sẽ nhận được thông tin về những nội dung mới,hot nhất <br />Hãy để lại địa chỉ cho chúng tôi</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<p class="pull-left">Copyright © Tiếng Anh 20GG Inc. All rights reserved.</p>
				<p class="pull-right">Designed by <span><a target="_blank" href="https://www.facebook.com/vu.phong.102977">Nhóm phát triển 20GG</a></span></p>
			</div>
		</div>
	</div>
	</div>
</footer> -->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>