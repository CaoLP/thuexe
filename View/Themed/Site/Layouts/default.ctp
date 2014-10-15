<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>metro-bootstrap: Twitter Bootstrap with Metro style</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	echo $this->Html->meta ('icon');
	echo $this->fetch ('meta');

	echo $this->Html->css (
		array (
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
<div class="row m-l-r-zero">
	<img src="http://www.dulichthu-dong.com/images/2014/slogon-top-nd5.jpg" style="width: 100%;">
</div>
<div class="row content-index remove-m-t">
	<div class="container">

		<div class="row tour-list">
			<?php echo $this->fetch('content'); ?>

		</div>
		<?php
			echo $this->element('footer');
		?>
	</div>
</div>
</body>
<?php
echo $this->Html->script (
	array (
		  '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',
		  'bootstrap.min'
	)
);
echo $this->fetch ('script');
?>
</html>