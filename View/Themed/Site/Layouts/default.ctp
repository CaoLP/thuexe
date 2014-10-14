<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>metro-bootstrap: Twitter Bootstrap with Metro style</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    echo $this->Html->meta('icon');
    echo $this->fetch('meta');

    echo $this->Html->css(
        array(
            'metro-bootstrap.min',
            'font-awesome.min',
            '//fonts.googleapis.com/css?family=Roboto+Condensed:700&subset=vietnamese,latin',
            'style',
        )
    );
    ?>
</head>
<body>
<div class="top-panel">
    <div class="container"></div>
</div>
<div class="navbar navbar-default navbar-static-top bsnavbar top-nav">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand p-top-20 home-icon" href="index.html"><i class="glyphicon glyphicon-home"></i></a>
        </div>
        <div class="navbar-collapse  collapse">
            <ul class="nav navbar-nav">
                <li class="active w-t"><a href="#">THÔNG TIN XE</a></li>
                <li><a href="#" class="w-t">BÁO GIÁ XE</a></li>
                <li><a href="#" class="w-t">TOUR HẰNG NGÀY</a></li>
                <li><a href="#" class="w-t">TOUR HẰNG TUẦN</a></li>
                <li><a href="#" class="">LIÊN HỆ</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-envelope"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-phone"></i>
                    </a>
                </li>
                <li>
                    <a>
                        <i class="glyphicon glyphicon-search"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <img src="http://www.dulichthu-dong.com/images/2014/slogon-top-nd5.jpg" style="width: 100%;">
</div>
<div class="row content-index remove-m-t">
    <div class="container">

        <div class="row">
            <div class="col-md-9 p-zero">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="feature-title-ct f-left">TOUR HẰNG NGÀY</h2>

                        <img class="f-right" src="http://cdn.dulichhe.com/images/2014/goi-tu-van.gif" width="239" height="50" alt="Goi tu van">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="feature-title-ct">TÊN TOUR</h2>
                        <hr>
                    </div>
                    <div class="col-md-7">
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-zero">
                <div class="list-group">
                    <a href="#" class="list-group-item">
                        Cras justo odio
                    </a>
                    <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                    <a href="#" class="list-group-item">Morbi leo risus</a>
                    <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item">Vestibulum at eros</a>
                </div>
                <img src="http://cdn.dulichhe.com/images/2014/banner-tour-rieng.gif">
            </div>
        </div>
        <footer>
            <div class="row" style="text-align: center">
                <img src="http://cdn.dulichhe.com/images/2014/thequocte.gif" width="766" height="61">
            </div>
            <div class="row" style="text-align: center">
                <img src="http://cdn.dulichhe.com/images/2014/logo-danhhieu.gif" width="950" height="87">
            </div>
            <div class="row" style="text-align: center">
                <ul class="connect">
                    <li>Kết nối với Saigontourist</li>
                    <li><img src="http://cdn.dulichhe.com/images/2014/social-fa.gif" alt="Saigontourist" width="50"
                             height="50"></li>
                    <li><img src="http://cdn.dulichhe.com/images/2014/social-google-plus3.gif"
                             alt="Google+ Saigontourist" width="50" height="50"></li>
                    <li><img src="http://cdn.dulichhe.com/images/2014/social-twitter.gif" alt="Twitter Saigontourist"
                             width="50" height="50"></li>
                    <li><img src="http://cdn.dulichhe.com/images/2014/social-youtube.gif" width="50" height="50"
                             alt="Youtube"></li>
                </ul>
            </div>
        </footer>
    </div>
</div>
</body>
<?php
echo $this->Html->script(
    array(
        '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',
        'bootstrap.min'
    )
);
echo $this->fetch('script');
?>
</html>