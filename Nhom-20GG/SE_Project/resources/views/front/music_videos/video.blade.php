<!DOCTYPE html>
<html lang="en-IE">
<head>
    <meta charset="utf-8" />
    <title>Video Player with Subtitles - Mozilla</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ca nhạc</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <base href="{{asset('')}}">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="css/videojs-transcript.css" title="Example 1" rel="stylesheet">
    <link href="css/videojs-transcript2.css" title="Example 2" rel="alternate stylesheet">
    <link href="css/videojs-transcript3.css" title="Example 3" rel="alternate stylesheet">
    <link href="css/video-js.css" rel="stylesheet">
    <script src="js/video.js"></script>
    <script src="js/videojs-transcript.js"></script>
    <!--<link rel="stylesheet" href="video-style.css">-->

    <!--<style>-->
    <!--figure {-->
    <!--position:relative;-->
    <!--max-width:1024px;-->
    <!--max-width:64rem;-->
    <!--width:100%;-->
    <!--height:100%;-->
    <!--max-height:494px;-->
    <!--max-height:30.875rem;-->
    <!--margin:20px auto;-->
    <!--margin:1.25rem auto;-->
    <!--padding:20px;-->
    <!--padding:1.051%;-->
    <!--/*background-color:#666;*/-->
    <!--}-->
    <!--figcaption {-->
    <!--display:block;-->
    <!--font-size:12px;-->
    <!--font-size:0.75rem;-->
    <!--color:#fff;-->
    <!--}-->
    <!--video {-->
    <!--width:100%;-->
    <!--}-->
    <!--</style>-->
</head>
<body>
<header id="header">
    <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a href="../content/list_video.php" class="navbar-brand"><i class="glyphicon glyphicon-home"></i>20GG</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!--menu ben phai-->
            <div class="navbar-collapse collapse" id="main-menu">
                <!--                <ul class="nav navbar-nav">-->
                <!--                <li><a href="">Học qua videos</a></li>-->
                <!--                </ul>-->
                <!--                <ul class="nav navbar-nav navbar-right">-->
                <!--                <li>-->
                <!--                <button type="button " class="btn btn-default dropdown-toggle round-button-circle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                <!--                </button> &lt;!&ndash;<span class="caret"></span>&ndash;&gt;-->
                <!--                <ul class="dropdown-menu">-->
                <!--                <li><a href="#">Trịnh Đình Việt</a></li>-->
                <!--                <li><a href="#">250 EXP</a></li>-->
                <!--                <li role="separator" class="divider"></li>-->
                <!--                <li><a href="#">Đăng Xuất</a></li>-->
                <!--                </ul>-->
                <!--                </li>-->
                <!--                </ul>-->
            </div>
        </nav>
    </div>
</header>
<div class="container well">
    <div class="row">
        <div class="col-md-8 well video-content" >
            <!--<figure id="videoContainer" data-fullscreen="false">-->
            <video id="video" controls class="video-js vjs-default-skin" >
                <source src="{{$video->source}}" type="video/mp4">
             <!--    <source src="videos/sintel-short.webm" type="video/webm"> -->
                <track label="English" kind="subtitles" srclang="en" src="{{$video->eng}}" default>
                <track label="Viet Nam" kind="subtitles" srclang="vi" src="{{$video->vi}}">
            </video>
            <!--</figure>-->
        </div>
        <div class="col-md-4 well " style="height: 400px" >
            <div id="transcript"></div>
            <script>
                var video = videojs('video').ready(function(){

                    // fire up the plugin
                    var transcript = this.transcript();

                    // attach the widget to the page
                    var transcriptContainer = document.querySelector('#transcript');
                    transcriptContainer.appendChild(transcript.el());
                });
            </script>
        </div>
        <!-- <div class="col-md-8 intro well">
            <div class="col-md-12 well">
                <div class="col-md-5"><p>Like và share nếu bạn thấy hay nhé</p></div>
                <div class="col-md-1"><button class="btn btn-default" type="submit">Like</button></div>
                <div class="col-md-2"><button class="btn btn-default" type="submit">Share</button></div>
                <div class="col-md-4"><span style="text-align: center"> 100 lượt xem</span></div>
        
            </div>
            <div class="col-md-12">
                <div class="col-md-3">
                    <img src="../images/product_11.png" alt="..." class=" img-responsive img-rounded">
                </div>
                <div class="col-md-9">
                    <h2 style="text-align: center">Thông tin</h2>
                    <h3>Bài hát : hello </h3>
                    <p>Nội dung : xxxxxxx</p>
                </div>
            </div>
        
        </div>
        <div class="col-md-4 well">
            <div class="col-md-12"><h3 style="text-align: center">Xem thêm</h3></div>
            <div class="col-md-4">
                <div class="col-md-12">
                    <img src="http://www.studynhac.vn/system/music/artists/71/avatar/medium/Alexander%20Rybak.jpg" alt="..." class=" img-responsive img-rounded">
                </div>
                <div class="col-md-12">
                    <h6><a href="">We don't talk any more</a></h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12">
                    <img src="http://www.studynhac.vn/system/music/songs/294/thumbnails/thumb/mqdefault.jpg" alt="..." class=" img-responsive img-rounded">
        
                </div>
                <div class="col-md-12">
                    <h6><a href="">We don't talk any more</a></h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12">
                    <img src="http://www.studynhac.vn/system/music/artists/71/avatar/medium/Alexander%20Rybak.jpg" alt="..." class=" img-responsive img-rounded">
                </div>
                <div class="col-md-12">
                    <h6><a href="">We don't talk any more</a></h6>
                </div>
            </div>
         -->

       <!--  </div> view more -->
    </div>

</div>

<!--<h1>Sintel</h1>-->

<!--<video id="video" controls class="video-js vjs-default-skin" >-->
<!--<source src="video/sintel-short.mp4" type="video/mp4">-->
<!--<source src="video/sintel-short.webm" type="video/webm">-->
<!--<track label="English" kind="subtitles" srclang="en" src="subtitles/vtt/sintel-en.vtt" default>-->
<!--<track label="Deutsch" kind="subtitles" srclang="de" src="subtitles/vtt/sintel-de.vtt">-->
<!--<track label="Español" kind="subtitles" srclang="es" src="subtitles/vtt/sintel-es.vtt">-->
<!--</video>-->

<!--<div id="transcript"></div>-->
<!--<script>-->
<!--var video = videojs('video').ready(function(){-->

<!--// fire up the plugin-->
<!--var transcript = this.transcript();-->

<!--// attach the widget to the page-->
<!--var transcriptContainer = document.querySelector('#transcript');-->
<!--transcriptContainer.appendChild(transcript.el());-->
<!--});-->
<!--</script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>




</html>