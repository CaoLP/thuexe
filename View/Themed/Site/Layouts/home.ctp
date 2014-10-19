<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title><?php echo Configure::read('W.Site.name');?> | <?php echo $title_for_layout?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    echo $this->Html->meta('icon');
    echo $this->fetch('meta');
	echo $this->element('meta');
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
<?php
$slides = Configure::read('W.slide');
?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators top-carousel">
		<?php
		$count = 0;
		foreach($slides as $slide){
			?>
			<li data-target="#carousel-example-generic" data-slide-to="<?php echo $count;?>" class="<?php if($count==0) echo 'active';?>"></li>
		<?php
			$count++;
		}
		?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
		<?php
		$count = 0;
		foreach($slides as $slide){
			$d = json_decode($slide,true);
		?>
        <div class="item <?php if($count==0) echo 'active';?>">
            <img src="<?php echo '/'. $this->Image->resizedUrl($d['picInput'],1400,490,100,WWW_ROOT);?>" alt="<?php echo $d['title']; ?>">
            <div class="carousel-caption">
                <a href="<?php echo $d['link']; ?>"><?php echo $d['title']; ?></a>
            </div>
        </div>
		<?php
			$count++;
		}
		?>
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