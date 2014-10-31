<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo Configure::read ('W.Site.name'); ?> | <?php echo $title_for_layout ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	echo $this->Html->meta ('icon');
	echo $this->fetch ('meta');
	echo $this->element ('meta');
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
<div id="fb-root"></div>
<script>(function (d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s);
		js.id = id;
		js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
<div class="top-panel">
	<div class="container">
		<div class="row">
			<img class="pull-left" src="/img/logo.png">

			<div class="pull-right">
				<div class="row site-title text-right">TRUNG TÂM ĐIỀU HÀNH XE NGỌC TUẤN</div>
				<div class="row">
					<table class="table-top">
						<tr>
							<td class="text-right">
								<i class="glyphicon glyphicon-phone-alt phone-type"></i>
							</td>
							<td class="text-left">
								<span class="top-name">Alex</span><br><span class="top-phone">0913645958 <span
											class="or">hoặc</span> 0969751504</span>
							</td>
							<td class="text-right">
								<i class="glyphicon glyphicon-phone-alt phone-type"></i>
							</td>
							<td class="text-left">
								<span class="top-name">Mr.Dinh</span><br><span class="top-phone">0918703131</span>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="navbar navbar-default navbar-static-top bsnavbar top-nav">
	<div class="container">
		<?php
		echo $this->element ('menu');
		?>
	</div>
</div>
<div class="row m-l-r-zero">
	<img src="/img/pan.jpg" style="width: 100%;">
</div>
<div class="row content-index remove-m-t">
	<div class="container">

		<div class="row tour-list">
			<?php echo $this->fetch ('content'); ?>

		</div>

	</div>
</div>
<?php
echo $this->element ('footer');
?>
<?php
echo $this->element ('contact_modal');
?>
</body>
<?php
echo $this->Html->script (
	array (
		  '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',
		  'bootstrap.min',
		  'custom'
	)
);
echo $this->fetch ('script');
?>
</html>