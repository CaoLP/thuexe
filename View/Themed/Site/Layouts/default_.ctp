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
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators top-carousel">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="http://cdn.dulichhe.com/data/gallery/fullsize/resize_1_1400x490_1413191266_3025.jpg" alt="...">
            <div class="carousel-caption">
                ...
            </div>
        </div>
        <div class="item">
            <img src="http://cdn.dulichhe.com/data/gallery/fullsize/resize_1_1400x490_1413191266_3025.jpg" alt="...">
            <div class="carousel-caption">
                ...
            </div>
        </div>
        <div class="item">
            <img src="http://cdn.dulichhe.com/data/gallery/fullsize/resize_1_1400x490_1413191266_3025.jpg" alt="...">
            <div class="carousel-caption">
                ...
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
<div class="row content-index">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 feature">
                <div class="row">
                    <div class="well-sm div-text-run">
                        <i class="glyphicon glyphicon-arrow-left f-left"></i>
                        <span class="top-text-run">Chiêm ngưỡng mùa thu trong nước. Khởi hành từ TP.HCM và Hà Nội.</span>
                        <i class="glyphicon glyphicon-arrow-right f-right"></i>
                    </div>
                </div>
                <div class="row">
                    <h2 class="feature-title">TIÊU ĐIỂM</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="http://cdn.dulichhe.com/data/gallery/fullsize/resize_1_235x150_1410936347_6784.jpg" alt="...">
                            <div class="caption">
                                <h3>Thumbnail label</h3>
                                <p>...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="http://cdn.dulichhe.com/data/gallery/fullsize/resize_1_235x150_1407142214_5921.jpg" alt="...">
                            <div class="caption">
                                <h3>Thumbnail label</h3>
                                <p>...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="http://cdn.dulichhe.com/data/gallery/fullsize/resize_1_235x150_1407215215_6524.jpg" alt="...">
                            <div class="caption">
                                <h3>Thumbnail label</h3>
                                <p>...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="http://cdn.dulichhe.com/data/gallery/fullsize/resize_1_235x150_1407212357_5649.jpg" alt="...">
                            <div class="caption">
                                <h3>Thumbnail label</h3>
                                <p>...</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <h2 class="feature-title-ct">DỊCH VỤ THUÊ XE</h2>
        </div>
        <div class="row">
            <div class="col-md-9 p-zero">
                <div class="col-sm-6 col-md-4 p-zero">
                    <div class="thumbnail">
                        <img src="http://cdn.dulichhe.com/data/gallery/fullsize/resize_1_235x150_1407212357_5649.jpg" alt="...">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>...</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 p-zero">
                    <div class="thumbnail">
                        <img src="http://cdn.dulichhe.com/data/gallery/fullsize/resize_1_235x150_1407212357_5649.jpg" alt="...">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>...</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 p-zero">
                    <div class="thumbnail">
                        <img src="http://cdn.dulichhe.com/data/gallery/fullsize/resize_1_235x150_1407212357_5649.jpg" alt="...">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>...</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 p-zero">
                    <div class="thumbnail">
                        <img src="http://cdn.dulichhe.com/data/gallery/fullsize/resize_1_235x150_1407212357_5649.jpg" alt="...">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>...</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 p-zero">
                    <div class="thumbnail">
                        <img src="http://cdn.dulichhe.com/data/gallery/fullsize/resize_1_235x150_1407212357_5649.jpg" alt="...">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>...</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 p-zero">
                    <div class="thumbnail">
                        <img src="http://cdn.dulichhe.com/data/gallery/fullsize/resize_1_235x150_1407212357_5649.jpg" alt="...">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>...</p>
                        </div>
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
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 p-zero">
                <div class="col-lg-6 p-zero">
                    <h2 class="feature-title-ct">TOUR HẰNG NGÀY</h2>
                    <hr>
                    <ul>
                        <li><a href="tinsaigontourist_chitiet.php?newsID=11105" class="link-level4">Saigontourist đón 4.500 khách tàu Voyager of the Seas</a></li>
                        <li><a href="tinsaigontourist_chitiet.php?newsID=11104" class="link-level4">Saigontourist - thương hiệu LỮ HÀNH HÀNG ĐẦU</a></li>
                        <li><a href="tinsaigontourist_chitiet.php?newsID=11103" class="link-level4">Saigontourist tiên phong triển khai chùm tour Thanh Hóa</a></li>
                        <li><a href="tinsaigontourist_chitiet.php?newsID=11102" class="link-level4">Saigontourist mang “chăn ấm mùa đông” đến vùng cao</a></li>
                        <li><a href="tinsaigontourist_chitiet.php?newsID=11100" class="link-level4">Mở tour khai thác đường bay mới Phú Quốc - Singapore</a></li>
                        <li><a href="tinsaigontourist_chitiet.php?newsID=11099" class="link-level4">Khám phá Angkor huyền bí, tiết kiệm gần 2,2 triệu đồng</a></li>
                    </ul>
                    <a class="link-level4" href="tinsaigontourist.php">Xem thêm</a>
                </div>
                <div class="col-lg-6 p-zero">
                    <h2 class="feature-title-ct">TOUR HẰNG TUẦN</h2>
                    <hr>
                    <ul>
                        <li><a href="tinsaigontourist_chitiet.php?newsID=11105" class="link-level4">Saigontourist đón 4.500 khách tàu Voyager of the Seas</a></li>
                        <li><a href="tinsaigontourist_chitiet.php?newsID=11104" class="link-level4">Saigontourist - thương hiệu LỮ HÀNH HÀNG ĐẦU</a></li>
                        <li><a href="tinsaigontourist_chitiet.php?newsID=11103" class="link-level4">Saigontourist tiên phong triển khai chùm tour Thanh Hóa</a></li>
                        <li><a href="tinsaigontourist_chitiet.php?newsID=11102" class="link-level4">Saigontourist mang “chăn ấm mùa đông” đến vùng cao</a></li>
                        <li><a href="tinsaigontourist_chitiet.php?newsID=11100" class="link-level4">Mở tour khai thác đường bay mới Phú Quốc - Singapore</a></li>
                        <li><a href="tinsaigontourist_chitiet.php?newsID=11099" class="link-level4">Khám phá Angkor huyền bí, tiết kiệm gần 2,2 triệu đồng</a></li>
                    </ul>
                    <a class="link-level4" href="tinsaigontourist.php">Xem thêm</a>
                </div>
            </div>
            <div class="col-md-3 p-zero">
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
                <li><img src="http://cdn.dulichhe.com/images/2014/social-fa.gif" alt="Saigontourist" width="50" height="50"></li>
                <li><img src="http://cdn.dulichhe.com/images/2014/social-google-plus3.gif" alt="Google+ Saigontourist" width="50" height="50"></li>
                <li><img src="http://cdn.dulichhe.com/images/2014/social-twitter.gif" alt="Twitter Saigontourist" width="50" height="50"></li>
                <li><img src="http://cdn.dulichhe.com/images/2014/social-youtube.gif" width="50" height="50" alt="Youtube"></li>
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