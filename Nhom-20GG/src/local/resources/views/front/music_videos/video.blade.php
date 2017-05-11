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
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-98415714-1', 'auto');
        ga('send', 'pageview');

    </script>
    <!--<link rel="stylesheet" href="video-style.css">-->

 {{--   <!--<style>-->
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
    <!--</style>-->--}}
    <style>
        row-eq-height {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display:         flex;
        }
    </style>
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
            </div>
        </nav>
    </div>
</header>
<div class="container well">
    <div class="row">
        <div class="col-md-8 well video-content row-eq-heigh" id="divVideo">
            <!--<figure id="videoContainer" data-fullscreen="false">-->
            <video id="video1" controls class="video-js vjs-default-skin vjs-big-play-centered" width="100%" height="100%" data-setup='{"fluid": true}'>
                <source src="{{$video->source}}" type="video/mp4" >
             <!--    <source src="videos/sintel-short.webm" type="video/webm"> -->
                <track label="English" kind="subtitles" srclang="en" src="{{$video->eng}}" default>
                <track label="Viet Nam" kind="subtitles" srclang="vi" src="{{$video->vi}}">
            </video>
            <!--</figure>-->
        </div>
        <div class="col-md-4 well row-eq-heigh" style="height: 400px" >
            <div id="transcript"></div>
            <script>

                var video = videojs('video1',{ responsive: true }).ready(function(){

                    // fire up the plugin
                    var transcript = this.transcript();

                    // attach the widget to the page
                    var transcriptContainer = document.querySelector('#transcript');
                    transcriptContainer.appendChild(transcript.el());
                });
            </script>
        </div>


    </div>
    <div class="row">
        <div class="row">
            <div class="col-md-4 col-md-offset-2 well">
                <p>Nếu thấy hay bạn hãy like và share để bạn bè mình cùng xem nhé !!!</p>
                <div class="fb-like" data-href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" data-width="2" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
            </div>
            <div class="col-md-4 well">
                <div class="fb-comments" data-href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" data-width="5" data-numposts="5"></div>

            </div>
        </div>

    </div>

</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    window.fbAsyncInit = function() {
        FB.init({
            appId      : '117500878748044',
            xfbml      : true,
            version    : 'v2.9'
        });
        FB.AppEvents.logPageView();
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));


</script>
</body>




</html>