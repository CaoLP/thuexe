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
		<?php
		echo $this->element('menu');
		?>
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
	<?php echo $this->fetch('content'); ?>
    <?php echo $this->element('footer')?>
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